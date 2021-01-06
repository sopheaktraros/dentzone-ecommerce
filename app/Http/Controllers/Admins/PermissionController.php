<?php

namespace App\Http\Controllers\Admins;

use App\AdminNavigation;
use App\Http\Controllers\Controller;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:admin','permission:permissions','role:admin,root']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins.permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->can('permissions','create')) {
            abort(403);
        }
        return view('admins.permissions.create')->with(['roles'=>Role::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if (!$request->user()->can('permissions','create')) {
            abort(403);
        }
        $this->validate($request, [
            'name' => 'required|unique:permissions|max:100',
            'status' => 'required',
        ]);

        $status = $request->status=='on'?1:0;
        Permission::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name,'_'),
            'description' => $request->description,
            'active'=>$status
        ]);

        toast('success','Permissions was created successfully.');
        return redirect()->route('permissions.create');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->can('permissions','read')) {
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
        if (!auth()->user()->can('permissions','update')) {
            abort(403);
        }
        return view('admins.permissions.edit')->with(['permission'=>Permission::find(decrypt($id)),'roles'=>Role::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        if (!auth()->user()->can('permissions','update')) {
            abort(403);
        }
        $this->validate($request, [
            'name' => 'required|max:100',
            'status' => 'required',
        ]);

        if (!Permission::whereName($request->name)->find(decrypt($id))) {
            $this->validate($request, [
                'name' => 'unique:permissions'
            ]);
        }

        $permissionUpdate=Permission::find(decrypt($id));
        $permissionUpdate->name=$request->name;
        $permissionUpdate->slug=Str::slug($request->name,'_');
        $permissionUpdate->description = $request->description;
        if ($request->status=='0') {
            $permissionUpdate->active=0;
        }
        else{
            $permissionUpdate->active=1;
        }
        $permissionUpdate->save();
        if ($permissionUpdate) {
            toast('success','Permission was updated successfully.');
            return redirect()->back();
        }else{
            toast('error','Permission was not updated successfully.');
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
        if (!auth()->user()->can('permissions','delete')) {
            abort(403,'Sorry you don\'t have a permission to delete.');
        }
        Permission::where('id',decrypt($id))->delete();
        toast('success','Permission was deleted successfully.');
        return redirect()->back();
    }
}
