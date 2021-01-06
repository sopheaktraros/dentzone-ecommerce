<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $profile = User::find(auth()->user()->id);
        return view('admins.profile.index')
            ->with('profile',$profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        if ($id!=auth()->user()->id) {
            return redirect()->back();
        }
        $validate = [
            'name' => 'required',
            'username' => 'required',
        ];

        if ($request->email) {
            $validate['email'] = ['email'];
        }
        $data= $request->except('password');
        $data['name'] = $request->name;
        $data['username'] = $request->username;
		if ($request->password) {
            $validate['current_password'] = ['required', new MatchOldPassword];
			$validate['password'] = 'required|min:6';
			$validate['confirm_password'] = 'required|same:password|min:6';
        }

        $this->validate($request, $validate,[
            'name'=>'The field name are required.',
            'username' => 'The field username are required.',
        ]);

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
            $data['remember_token'] = str_random(40) . time();
		}

        $user = User::findOrFail(auth()->user()->id);
        if ($request->email && $user->email!=$request->email) {
            $this->validate($request,[
                'email'=>'unique:users'
            ]);
        }

        $user->update($data);

        toast('success', 'Profile has been updated.');
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
