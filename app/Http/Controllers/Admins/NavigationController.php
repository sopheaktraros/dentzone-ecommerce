<?php

namespace App\Http\Controllers\Admins;

use App\AdminNavigation;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NavigationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin','permission:navigations','role:admin,root']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('admins.navigations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->can('navigations','create')) {
            abort(403);
        }
        return view('admins.navigations.create')->with([
            'navigation_parents'=>AdminNavigation::whereActive('1')->OnlyParent()->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if (!$request->user()->can('navigations','create')) {
            abort(403);
        }
        $this->validate($request, [
            'name' => 'required|max:100',
            'link' => 'unique:navigations',
            'type' => 'required|',
            'status' => 'required',
        ]);
        $status = $request->status==1 || $request->status==='on' ?1:0;
        $data = [
            'name'=>$request->name,
            'slug' => Str::slug($request->name),
            'icon' => $request->icon?:null,
            'link' =>  $request->link?:null,
            'parent_id' => ($request->parent && $request->parent>0)?decrypt($request->parent):null,
            'type' => $request->type,
            'active' =>$status
        ];

        $newNavigations = AdminNavigation::create($data);

        if (!$newNavigations) {
            toast('success','Navigations was not created successfully.');
            return redirect()->back()->withInput();
        }
        toast('success','Navigations was created successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (!auth()->user()->can('navigations','update')) {
            abort(403);
        }
        return view('admins.navigations.edit')->with([
            'navigation'=>AdminNavigation::findOrFail(decrypt($id)),
            'navigation_parents'=>AdminNavigation::whereActive('1')->OnlyParent()->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!$request->user()->can('navigations','update')) {
            abort(403);
        }
        $this->validate($request, [
            'name' => 'required|max:100',
            'link' => 'unique:navigations',
            'type' => 'required|',
            'status' => 'required',
        ]);
        $status = $request->status==1 || $request->status==='on' ?1:0;
        $data = [
            'name'=>$request->name,
            'slug' => Str::slug($request->name),
            'icon' => $request->icon?:null,
            'link' =>  $request->link?:null,
            'parent_id' => ($request->parent && $request->parent>0)?decrypt($request->parent):null,
            'type' => $request->type,
            'active' =>$status
        ];

        $updateNavigations = AdminNavigation::update($data);

        if (!$updateNavigations) {
            toast('success','Navigations was not created successfully.');
            return redirect()->back()->withInput();
        }
        toast('success','Navigations was created successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('users','delete')) {
            abort(403,'Sorry you don\'t have a permission to delete.');
        }
        $user = User::findOrFail(decrypt($id));
        if ($user) {
            $user->roles()->detach();
            $user->delete();
        }
        toast('success','User was deleted successfully.');
        return redirect()->back();
    }
}
