@extends('layouts.theme')

@section('title','All Users')

@section('page-name-class', 'users')

@section('breadcrumbs',Breadcrumbs::render('users'))
@section('content')
    <div class="row ecam-crud list" id="users">
        <div class="col-12">
            <div class="card card-crud crud-list">
                <div class="card-header bg-white crud-header">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-title crud-tittle">List Users</div>
                        </div>
                        <div class="col-6">
                            <div class="btn-group btn-group-sm pull-right crud-btn-group">
                                @can('users','create')
                                    <a class="btn btn-sm btn-info btn-add m-1" href="{{ route('users.create') }}">
                                        <i class="far fa-plus"></i>
                                        <span class="btn-text pl-1">New</span>
                                    </a>
                                @endcan
                                <button class="btn btn-sm btn-info btn-filter m-1" id="filter"
                                        data-toggle="collapse" data-target="#sidebar-filter"
                                        aria-expanded="true" aria-controls="sidebar-filter">
                                    <i class="far fa-filter"></i>
                                    <span class="btn-text pl-1">Filter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body padding-12 crud-body">
                    <div class="table-responsive table-responsive-md table-responsive-sm text-nowrap">
                        <table id="user-table"
                               class="table table-striped table-bordered table-sm  compact cell-border row-border nowrap w-100"
                               data-route="{{ route('admin.users.index') }}">
                            <thead>
                            <tr>
                                <th class="th-sm">#</th>
                                <th class="th-sm">Name</th>
                                <th class="th-sm">Username</th>
                                <th class="th-sm">Email</th>
                                <th class="th-sm">Role</th>
                                <th class="th-sm">Create By</th>
                                <th class="th-sm">Create At</th>
                                <th class="th-sm">Status</th>
                                <th class="th-sm">Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="sidebar-filter collapse " id="sidebar-filter" data-parent="#ecam">
                <div class="wrapper">
                    <div class="filter-header">
                        <div class="row">
                            <div class="filter-title col-6">Filter</div>
                            <div class="filter-button text-right col-6">
                                <button class="btn btn-close text-white" type="button">
                                    <i class="far fa-close"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="filter-body p-3">
                        <div class="row">
                            <div class="col-12">
                                {!! Form::open(['id' => 'form-user-filter','autocomplete'=>'off']) !!}
                                <div class="form-group ">
                                    <label for="name-user">Name</label>
                                    <input type="text" class="form-control" name="name" id="name-user" placeholder="Enter name"/>
                                </div>
                                <div class="form-group ">
                                    <label for="username-user">Username</label>
                                    <input type="text" class="form-control" name="username" id="username-user" placeholder="Enter username"/>
                                </div>
                                <div class="form-group ">
                                    <label for="role" class="form-label">Role</label><span class="text-danger pl-1">*</span>
                                    <select class="custom-select form-control" name="role" id="role">
                                        <option value="0" selected disabled>Choose user role</option>
                                        @foreach($roles as $role)
                                            <option value="{{ encrypt($role->id) }}" {{ $role->id===old('role')?'selected':'' }}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label for="status-user">Status</label>
                                    <select class="form-control" name="status" id="status-user">
                                        <option value="0" selected disabled>--Select Status--</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group d-flex">
                                    <div class="btn-group btn-group-sm m-auto pt-2">
                                        <button type="button" class=" btn bg-ecam-orange-light btn-close m-1 border rounded">
                                            <i class="far fa-long-arrow-alt-right"></i>
                                            <span class="pr-1">Cancel</span>
                                        </button>
                                        <button type="button" class="btn bg-ecam-secondary btn-clear m-1 border rounded">
                                            <i class="far fa-sync-alt"></i>
                                            <span class="pr-1">Clear</span>
                                        </button>
                                        <button type="button" class=" btn bg-ecam-primary btn-filter m-1 border rounded">
                                            <i class="far fa-filter"></i>
                                            <span class="pr-1">Filter</span>
                                        </button>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('admin-js')
    <script src="{{ mix('js/admins/pages/user.js') }}"></script>
@endpush
