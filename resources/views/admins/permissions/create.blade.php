@extends('layouts.theme')

@section('title','New Permission')

@section('page-name-class', 'permission')

@section('breadcrumbs',Breadcrumbs::render('permission-create'))
@section('content')
    <div class="ecam-crud" id="permissions">
        {!! Form::open(['route' => 'permissions.store', 'method' => 'post', 'class'=>'needs-validation','id'=>'fm-create-permission','novalidate']) !!}
        <div class="row">
            <div class="col-12">
                <div class="card card-crud crud-list">
                    <div class="card-header bg-white crud-header">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-title crud-tittle">Create New Permission</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body padding-12 crud-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label><span class="text-danger pl-1">*</span>
                                    <input class="form-control {{ $errors->has('name')?'is-invalid':'' }}" type="text" id="name" name="name" placeholder="Enter new permission name" maxlength="100" required/>
                                    {!!  $errors->has('name') ? showError($errors->first('name')) : ''  !!}
                                </div>
                                <div class="form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control {{ $errors->has('description')?'is-invalid':'' }}" rows="3" id="description" name="description" placeholder="Enter description"></textarea>
                                    {!!  $errors->has('description') ? showError($errors->first('description')) : ''  !!}
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="hidden" class="custom-control-input" name="status" value="0">
                                        <input type="checkbox" class="custom-control-input" id="switch-status"  name="status" checked>
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
                            <i class="far fa-save"></i> Save
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
