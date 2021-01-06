<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:admin','permission:users','role:admin,root']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('admins.users.index')->with([
            'roles'=>Role::whereActive('1')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->can('users','create')) {
            abort(403);
        }
        return view('admins.users.create')->with([
            'roles'=>Role::whereActive('1')->get()]);
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
        if (!$request->user()->can('users','create')) {
            abort(403);
        }
        $this->validate($request, [
            'name' => 'required|max:100',
            'username' => 'required|unique:users|min:6|max:15',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'status' => 'required',
        ]);

        $status = $request->status==1?1:0;
        $newUser = User::create([
            'uuid'=> Uuid::uuid(),
            'name'=>$request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password'=>bcrypt($request->password),
            'active'=>$status
        ]);

        if ($request->role && decrypt($request->role)>0 && $newUser) {
            $newUser->roles()->attach(decrypt($request->role));
        }

        toast('success','User was created successfully.');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (!auth()->user()->can('users','update')) {
            abort(403);
        }
        return view('admins.users.edit')->with([
            'user'=>User::find(decrypt($id)),
            'roles'=>Role::whereActive('1')->get()]);
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
        if (!$request->user()->can('users','update')) {
            abort(403);
        }
        $this->validate($request, [
            'name' => 'required|max:100',
            'username' => 'required|unique:users,id|min:6|max:15',
            'email' => 'required|email|unique:users,id',
            'status' => 'required',
        ]);

        $status = $request->status==1?:0;
        $hasUser = User::find(decrypt($id));
        if ($hasUser) {
            $hasUser->name = $request->name;
            $hasUser->username = $request->username;
            $hasUser->email = $request->email;
            $hasUser->active= $status;
        }
        if ($request->password) {
            $this->validate($request, [
                'password' => 'required|min:6|confirmed',
            ]);
            $hasUser->password=bcrypt($request->password);
        }

        $hasUser->save();

        if ($request->role && decrypt($request->role)>0 && $hasUser) {
            $hasUser->roles()->detach();
            $hasUser->roles()->attach(decrypt($request->role));
        }
        toast('success','User was updated successfully.');
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
