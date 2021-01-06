<?php

namespace App\Http\Controllers\Admins\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserDataTableResource;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:admin','permission:users','role:admin,root']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function index(Request $request)
    {
        $users = User::where(function ($q) use ($request){
            if ($request->name) {
                $q->where('name','LIKE', '%' . $request->name . '%');
            }
            if ($request->username) {
                $q->where('username','LIKE', '%' . $request->username . '%');
            }
            if ($request->status) {
                $q->whereActive(($request->status==1?:0));
            }
            if ($request->role) {
                $q->whereHas('roles',function ($q) use ($request) {
                    $q->whereId(decrypt($request->role));
                });
            }
            $q->orderBy('id', 'desc');
        })->get();

        $users = UserDataTableResource::collection($users);

        return DataTables::of($users)
            ->addIndexColumn()
            ->addColumn('role', function($users){
                return $users['role'];
            })
            ->addColumn('status', function($users){
                return $users['status'];
            })
            ->addColumn('action', function($users){
                return $users['action'];
            })
            ->rawColumns(['role','status', 'action'])->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
