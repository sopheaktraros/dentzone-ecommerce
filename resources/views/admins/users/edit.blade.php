@extends('layouts.theme')

@section('title','Edit User')

@section('page-name-class', 'user')

@section('breadcrumbs',Breadcrumbs::render('user-edit',$user))
@section('content')
    <div class="ecam-crud" id="users">
        {!! Form::open(['route' => ['users.update',encrypt($user->id)], 'method' => 'PUT', 'class'=>'needs-validation','id'=>'fm-create-users','novalidate']) !!}
        <div class="row">
            <div class="col-12">
                <div class="card card-crud crud-list">
                    <div class="card-header bg-white crud-header">
                        <div class="row">
                            <div class="col-6">
                                <div class="card-title crud-tittle">Update User</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body padding-12 crud-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label><span class="text-danger pl-1">*</span>
                                    <input class="form-control {{ $errors->has('name')?'is-invalid':'' }}" type="text" value="{{ $user->name }}"
                                           id="name" name="name" placeholder="Enter user's name" maxlength="100" required/>
                                    {!!  $errors->has('name') ? showError($errors->first('name')) : ''  !!}
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label><span class="text-danger pl-1">*</span>
                                    <input class="form-control {{ $errors->has('email')?'is-invalid':'' }}" type="email" value="{{ $user->email }}"
                                           id="email" name="email" placeholder="Enter email" maxlength="100" required/>
                                    {!!  $errors->has('email') ? showError($errors->first('email')) : ''  !!}
                                </div>
                                <div class="form-group">
                                    <label for="username" class="form-label">Username</label><span class="text-danger pl-1">*</span>
                                    <input class="form-control {{ $errors->has('username')?'is-invalid':'' }}" type="text" value="{{ $user->username }}"
                                           id="username" name="username" placeholder="Enter username" maxlength="100" required/>
                                    {!!  $errors->has('username') ? showError($errors->first('username')) : ''  !!}
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control {{ $errors->has('password')?'is-invalid':'' }}" type="password"
                                           id="password" name="password" placeholder="Enter password" maxlength="100"/>
                                    {!!  $errors->has('password') ? showError($errors->first('password')) : ''  !!}
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation" class="form-label">Re-Password</label>
                                    <input class="form-control {{ $errors->has('password_confirmation')?'is-invalid':'' }}" type="password"
                                           id="password_confirmation" name="password_confirmation" placeholder="Enter password confirmation" maxlength="100"/>
                                    {!!  $errors->has('password_confirmation') ? showError($errors->first('password_confirmation')) : ''  !!}
                                </div>
                                <div class="form-group">
                                    <label for="role" class="form-label">Role</label><span class="text-danger pl-1">*</span>
                                    <select class="custom-select form-control" name="role" id="role">
                                        <option value="0" selected disabled>Choose user role</option>
                                        @foreach($roles as $role)
                                            <option value="{{ encrypt($role->id) }}" {{ $user->roles()->whereSlug($role->slug)->first()?'selected':'' }}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    {!!  $errors->has('password') ? showError($errors->first('password')) : ''  !!}
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
                            <i class="far fa-save"></i> Update
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
