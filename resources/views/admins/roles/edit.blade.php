@extends('layouts.theme')

@section('title','Edit Role')

@section('page-name-class', 'role')

@section('breadcrumbs',Breadcrumbs::render('role-edit',$role))
@section('content')
    <div class="ecam-crud" id="roles">
        {!! Form::open(['route' => ['roles.update',encrypt($role->id)], 'method' => 'PUT', 'class'=>'needs-validation','id'=>'fm-update-role','novalidate']) !!}
        <div class="row">
            <div class="col-5">
                <div class="card card-crud crud-list">
                    <div class="card-header bg-white crud-header">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-title crud-tittle">Role's Information</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body padding-12 crud-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label><span class="text-danger pl-1">*</span>
                                    <input class="form-control {{ $errors->has('name')?'is-invalid':'' }}" value="{{ $role->name }}"
                                           type="text" id="name" name="name" placeholder="Enter new role name" maxlength="100" required/>
                                    {!!  $errors->has('name') ? showError($errors->first('name')) : ''  !!}
                                </div>
                                <div class="form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control {{ $errors->has('description')?'is-invalid':'' }}"
                                              rows="3" id="description" name="description" placeholder="Enter description">{{ $role->description }}</textarea>
                                    {!!  $errors->has('description') ? showError($errors->first('description')) : ''  !!}
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input class="form-check-input" type="hidden" name="status" value="0">
                                        <input type="checkbox" class="custom-control-input" id="switch-status" name="status" {{ $role->active===1?'checked':'' }}>
                                        <label class="custom-control-label" for="switch-status">Status(Inactive/Active)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card card-crud crud-list">
                    <div class="card-header bg-white crud-header">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-title crud-tittle">Assign Permission to Roles.</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body padding-12 crud-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive table-scrollbar" style="max-height: 420px;">
                                    <table class="table table-sm table-bordered table-fixed">
                                        <thead>
                                        <tr>
                                            <th scope="col">Permission</th>
                                            <th scope="col" class="text-center">Access</th>
                                            <th scope="col" class="text-center">Create</th>
                                            <th scope="col" class="text-center">Read</th>
                                            <th scope="col" class="text-center">Update</th>
                                            <th scope="col" class="text-center">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($permissions as $permission)
                                            @php
                                                $role_permission = $role->permissions()->whereSlug($permission->slug)->first();
                                            @endphp
                                            <tr>
                                                <th><span>{{ $permission->name }}</span></th>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="{{ encrypt($permission->id) }}" name="permissions_access[]"
                                                               id="check-create-{{ $permission->id }}" {{ $role_permission?'checked':'' }}>
                                                        <label class="form-check-label" for="check-read-{{ $permission->id }}"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="{{ encrypt($permission->id) }}" name="permissions_create[]"
                                                               id="check-create-{{ $permission->id }}" {{ $role_permission && $role_permission->pivot->create==1?'checked':'' }}>
                                                        <label class="form-check-label" for="check-read-{{ $permission->id }}"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="{{ encrypt($permission->id) }}" name="permissions_read[]"
                                                               id="check-read-{{ $permission->id }}" {{ $role_permission && $role_permission->pivot->read==1?'checked':'' }}>
                                                        <label class="form-check-label" for="check-read-{{ $permission->id }}"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="{{ encrypt($permission->id) }}" name="permissions_update[]"
                                                               id="check-update-{{ $permission->id }}" {{ $role_permission && $role_permission->pivot->update==1?'checked':'' }}>
                                                        <label class="form-check-label" for="check-read-{{ $permission->id }}"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="{{ encrypt($permission->id) }}" name="permissions_delete[]"
                                                               id="check-delete-{{ $permission->id }}" {{ $role_permission && $role_permission->pivot->delete===1?'checked':'' }}>
                                                        <label class="form-check-label" for="check-read-{{ $permission->id }}"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="text-right fixed-bottom footer-fixed-bottom">
                    <div class="btn-action btn-group-sm">
                        <a class="btn btn-md btn-cancel" type="button" href="{{ url()->previous() }}">
                            <i class="far fa-undo"></i> Cancel
                        </a>
                        <button class="btn btn-md btn-save text-white" type="submit">
                            <i class="far fa-edit"></i> Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection
@push('admin-js')
    <script src="{{ mix('js/admins/pages/role.js') }}"></script>
    <script>
        $(document).ready(function (){
            Scrollbar.init(document.querySelector('.table-scrollbar'));
        });
    </script>
@endpush
