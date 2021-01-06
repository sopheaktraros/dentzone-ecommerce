@extends('layouts.theme')

@section('title','Edit Permission')

@section('page-name-class', 'permission')

@section('breadcrumbs',Breadcrumbs::render('permission-edit',$permission))
@section('content')
    <div class="ecam-crud" id="permissions">
        {!! Form::open(['route' => ['permissions.update',encrypt($permission->id)], 'method' => 'PUT', 'class'=>'needs-validation','id'=>'fm-update-role','novalidate']) !!}
        <div class="row">
            <div class="col-12">
                <div class="card card-crud crud-list">
                    <div class="card-header bg-white crud-header">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-title crud-tittle">Update Permission</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body padding-12 crud-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label><span class="text-danger pl-1">*</span>
                                    <input class="form-control {{ $errors->has('name')?'is-invalid':'' }}" value="{{ $permission->name }}"
                                           type="text" id="name" name="name" placeholder="Enter new permission name" maxlength="100" required/>
                                    {!!  $errors->has('name') ? showError($errors->first('name')) : ''  !!}
                                </div>
                                <div class="form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control {{ $errors->has('description')?'is-invalid':'' }}"
                                              rows="3" id="description" name="description" placeholder="Enter description">{{ $permission->description }}</textarea>
                                    {!!  $errors->has('description') ? showError($errors->first('description')) : ''  !!}
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input class="form-check-input" type="hidden" name="status" value="0">
                                        <input type="checkbox" class="custom-control-input" id="switch-status" name="status" {{ $permission->active===1?'checked':'' }}>
                                        <label class="custom-control-label" for="switch-status">Status(Inactive/Active)</label>
                                    </div>
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
    <script src="{{ mix('js/admins/pages/permission.js') }}"></script>
@endpush
