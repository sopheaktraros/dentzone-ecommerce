<?php

namespace App\Http\Controllers\Admins\Api;


use App\Http\Controllers\Controller;
use App\Http\Resources\RoleDataTableResource;
use App\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:admin','permission:roles','role:admin,root']);
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
        $roles = Role::where(function ($q) use ($request){
            if ($request->name) {
                $q->where('name','LIKE', '%' . $request->name . '%');
            }
            if ($request->slug) {
                $q->where('slug','LIKE', '%' . $request->slug . '%');
            }
            if ($request->status) {
                $q->whereActive(($request->status==1?:0));
            }
            $q->orderBy('id', 'desc');
        })->get();

        $roles = RoleDataTableResource::collection($roles);

        return DataTables::of($roles)
            ->addIndexColumn()
            ->addColumn('status', function($roles){
                return $roles['status'];
            })
            ->addColumn('action', function($roles){
                return $roles['action'];
            })
            ->rawColumns(['status', 'action'])->make(true);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

