<?php

namespace App\Http\Controllers\Admins\Api;

use App\AdminNavigation;
use App\Http\Controllers\Controller;
use App\Http\Resources\AdminNavigationDataTableResource;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class NavigationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin','permission:navigations','role:admin,root']);
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
        $navigations = AdminNavigation::with(['parent'=>function($q){
            $q->whereActive(1);
        }])->where(function ($q) use ($request){
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

        $navigations = AdminNavigationDataTableResource::collection($navigations);

        return DataTables::of($navigations)
            ->addIndexColumn()
            ->addColumn('parent', function($navigations){
                return $navigations['parent'];
            })
            ->addColumn('type', function($navigations){
                return $navigations['type'];
            })
            ->addColumn('status', function($navigations){
                return $navigations['status'];
            })
            ->addColumn('action', function($navigations){
                return $navigations['action'];
            })
            ->rawColumns(['status', 'action'])->make(true);
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
