<?php

namespace App\Http\Controllers\Admins\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PermissionDataTableResource;
use App\Permission;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:admin','permission:permissions','role:admin,root']);
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
        $permissions = Permission::with(['roles'=>function($q){
           $q->select('name','slug');
        }])->where(function ($q) use ($request){
            if ($request->name) {
                $q->where('name','Like','%'.$request->name.'%');
            }
            if ($request->slug) {
                $q->where('slug','Like','%'.$request->name.'%');
            }
            if ($request->status) {
                $q->whereActive($request->status==1?:0);
            }
            $q->orderBy('id', 'desc');
        })->get();

        $permissions = PermissionDataTableResource::collection($permissions);

        return DataTables::of($permissions)
            ->addIndexColumn()
            ->addColumn('roles', function($permissions){
                return $permissions['roles'];
            })
            ->addColumn('status', function($permissions){
                return $permissions['status'];
            })
            ->addColumn('action', function($permissions){
                return $permissions['action'];
            })
            ->rawColumns(['roles','status', 'action'])->make(true);
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
