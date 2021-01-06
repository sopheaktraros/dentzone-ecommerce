@extends('layouts.theme')

@section('title','New Navigation')

@section('page-name-class', 'navigations')

@section('breadcrumbs',Breadcrumbs::render('navigation-create'))
@section('content')
    <div class="ecam-crud" id="navigations">
        {!! Form::open(['route' => 'navigations.store', 'method' => 'post', 'class'=>'needs-validation','id'=>'fm-create-navigations','novalidate']) !!}
        <div class="row">
            <div class="col-12">
                <div class="card card-crud crud-list">
                    <div class="card-header bg-white crud-header">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-title crud-tittle">Create New Navigation</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body padding-12 crud-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="name" class="form-label">Name</label><span class="text-danger pl-1">*</span>
                                        <input class="form-control {{ $errors->has('name')?'is-invalid':'' }}" type="text" value="{{ old('name') }}"
                                               id="name" name="name" placeholder="Enter user's name" maxlength="100" required/>
                                        {!!  $errors->has('name') ? showError($errors->first('name')) : ''  !!}
                                    </div>
{{--                                    <div class="form-group col-6">--}}
{{--                                        <label for="slug" class="form-label">Slug</label><span class="text-danger pl-1">*</span>--}}
{{--                                        <input class="form-control {{ $errors->has('slug')?'is-invalid':'' }}" type="text" value="{{ old('slug') }}"--}}
{{--                                               id="slug" name="slug" placeholder="Enter name to get slug" maxlength="100" readonly required/>--}}
{{--                                        {!!  $errors->has('slug') ? showError($errors->first('slug')) : ''  !!}--}}
{{--                                    </div>--}}
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label for="link" class="form-label">Link</label>
                                        <input class="form-control {{ $errors->has('link')?'is-invalid':'' }}" type="text" value="{{ old('link') }}"
                                               id="link" name="link" placeholder="Enter name to get slug" maxlength="100"/>
                                        {!!  $errors->has('link') ? showError($errors->first('link')) : ''  !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="icon" class="form-label">Icon Name</label>
                                        <input class="form-control {{ $errors->has('icon')?'is-invalid':'' }}" type="text" value="{{ old('icon') }}"
                                               id="icon" name="icon" placeholder="Enter name of fontawesome for icon" maxlength="100" />
                                        {!!  $errors->has('icon') ? showError($errors->first('icon')) : ''  !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="parent" class="form-label">Parent</label>
                                    <select class="custom-select form-control {{ $errors->has('parent')?'is-invalid':'' }}" name="parent" id="parent">
                                        <option value="0" selected disabled>Choose parent</option>
                                        @foreach($navigation_parents as $parent)
                                            <option value="{{ encrypt($parent->id) }}" {{ $parent->id===old('parent')?'selected':'' }}>{{ $parent->name }}</option>
                                        @endforeach
                                    </select>
                                    {!!  $errors->has('parent') ? showError($errors->first('parent')) : ''  !!}
                                </div>
                                <div class="form-group">
                                    <label for="type" class="form-label">Type</label><span class="text-danger pl-1">*</span>
                                    <select class="custom-select form-control {{ $errors->has('type')?'is-invalid':'' }}" name="type" id="type">
                                        <option value="0" disabled>Choose type</option>
                                        <option value="1" selected>Label Group (Main,Ecommerce,..)</option>
                                        <option value="2">Main Navigations (Dashboard,Shops,..)</option>
                                        <option value="3">Child of Main Navigations (Products,Shops,..)</option>
                                    </select>
                                    {!!  $errors->has('type') ? showError($errors->first('type')) : ''  !!}
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
