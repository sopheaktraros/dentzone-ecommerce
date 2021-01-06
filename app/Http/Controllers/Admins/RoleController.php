<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:admin','permission:roles','role:admin,root']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->can('roles','create')) {
            abort(403);
        }
        return view('admins.roles.create')->with([
            'permissions'=>Permission::with('roles')->whereActive('1')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if (!$request->user()->can('roles','create')) {
            abort(403);
        }
        $this->validate($request, [
            'name' => 'required|unique:roles|max:100',
            'status' => 'required',
        ]);

        $status = $request->status==1?:0;
        $newRole = Role::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name,'_'),
            'description' => $request->description,
            'active'=>$status
        ]);

        if ($newRole) {
            if ($request->permissions_access) {
                $newRole->permissions()->detach();
                foreach($request->permissions_access as $permissions_access){
                    if (!$newRole->permissions()->whereSlug(Permission::find(decrypt($permissions_access))->slug)->first()) {
                        $newRole->permissions()->attach(decrypt($permissions_access));
                    }
                }
            }

            foreach ($newRole->permissions as $permission ){
                if ($request->permissions_create) {
                    $permission->pivot->create=0;
                    foreach($request->permissions_create as $permission_create){
                        if ($permission->id==decrypt($permission_create)) {
                            $permission->pivot->create=1;
                        }
                    }
                    $permission->pivot->save();
                }
                if ($request->permissions_read) {
                    $permission->pivot->read=0;
                    foreach($request->permissions_read as $permission_read){
                        if ($permission->id==decrypt($permission_read)) {
                            $permission->pivot->read=1;
                        }
                    }
                    $permission->pivot->save();
                }

                if ($request->permissions_update) {
                    $permission->pivot->update=0;
                    foreach($request->permissions_update as $permission_update){
                        if ($permission->id==decrypt($permission_update)) {
                            $permission->pivot->update=1;
                        }
                    }
                    $permission->pivot->save();
                }

                if ($request->permissions_delete) {
                    $permission->pivot->delete=0;
                    foreach($request->permissions_delete as $permission_delete){
                        if ($permission->id==decrypt($permission_delete)) {
                            $permission->pivot->delete=1;
                        }else{

                        }
                    }
                    $permission->pivot->save();
                }
            }
        }

        toast('success','Role was created successfully.');
        return redirect()->route('roles.create');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->can('roles','read')) {
            abort(403);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (!auth()->user()->can('roles','update')) {
            abort(403);
        }
        return view('admins.roles.edit')->with([
            'role'=>Role::find(decrypt($id)),
            'permissions'=>Permission::with('roles')->whereActive('1')->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  $id
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        if (!auth()->user()->can('roles','update')) {
            abort(403);
        }
        $this->validate($request, [
            'name' => 'required|max:100',
            'status' => 'required',
        ]);

        if (!Role::whereName($request->name)->find(decrypt($id))) {
            $this->validate($request, [
                'name' => 'unique:roles'
            ]);
        }

        $roleUpdate=Role::find(decrypt($id));
        $roleUpdate->name=$request->name;
        $roleUpdate->slug=Str::slug($request->name,'_');
        $roleUpdate->description = $request->description;
        if ($request->status=='0') {
            $roleUpdate->active=0;
        }
        else{
            $roleUpdate->active=1;
        }
        $roleUpdate->save();

        if ($request->permissions_access) {
            $roleUpdate->permissions()->detach();
            foreach($request->permissions_access as $permissions_access){
                if (!$roleUpdate->permissions()->whereSlug(Permission::find(decrypt($permissions_access))->slug)->first()) {
                    $roleUpdate->permissions()->attach(decrypt($permissions_access));
                }
            }
        }

        foreach ($roleUpdate->permissions as $permission ){
            if ($request->permissions_create) {
                $permission->pivot->create=0;
                foreach($request->permissions_create as $permission_create){
                    if ($permission->id==decrypt($permission_create)) {
                        $permission->pivot->create=1;
                    }
                }
                $permission->pivot->save();
            }
            if ($request->permissions_read) {
                $permission->pivot->read=0;
                foreach($request->permissions_read as $permission_read){
                    if ($permission->id==decrypt($permission_read)) {
                        $permission->pivot->read=1;
                    }
                }
                $permission->pivot->save();
            }

            if ($request->permissions_update) {
                $permission->pivot->update=0;
                foreach($request->permissions_update as $permission_update){
                    if ($permission->id==decrypt($permission_update)) {
                        $permission->pivot->update=1;
                    }
                }
                $permission->pivot->save();
            }

            if ($request->permissions_delete) {
                $permission->pivot->delete=0;
                foreach($request->permissions_delete as $permission_delete){
                    if ($permission->id==decrypt($permission_delete)) {
                        $permission->pivot->delete=1;
                    }else{

                    }
                }
                $permission->pivot->save();
            }
        }

        if ($roleUpdate) {
            toast('success','Role was updated successfully.');
            return redirect()->back();
        }else{
            toast('error','Role was not updated successfully.');
            return redirect()->back()->withErrors();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('roles','delete')) {
            abort(403,'Sorry you don\'t have a permission to delete.');
        }
        $role = Role::findOrFail(decrypt($id));
        if ($role) {
            $role->permissions()->detach();
            $role->delete();
        }
        toast('success','Role was deleted successfully.');
        return redirect()->back();
    }


}
