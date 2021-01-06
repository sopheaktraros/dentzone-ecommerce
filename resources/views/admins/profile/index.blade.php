@extends('layouts.theme')

@section('title','My Profile')

@section('page-name-class', 'profile')

@section('breadcrumbs',Breadcrumbs::render('profile'))
@section('content')

    <div class="row">
        <div class="col-12">
            {!! Form::open(['url' => route('profile.update',auth()->user()->id), 'method' => 'post',
                        'files' => 'true', 'id' => 'form-validation','autocomplete' => 'off']) !!}
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Full Name</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" minlength="3" value="{{ $profile['name'] }}" placeholder="Enter your name" name="name" id="name" required>
                                {!!  $errors->has('name') ? showError($errors->first('name')) : ''  !!}
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" value="{{ $profile->username }}" name="username" id="username" placeholder="Enter username" required>
                                {!!  $errors->has('username') ? showError($errors->first('username')) : ''  !!}
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="{{ $profile->email }}" minlength="" name="email" id="email" placeholder="Enter your email or company email">
                                {!!  $errors->has('email') ? showError($errors->first('email')) : ''  !!}
                            </div>
                            <div class="form-group">
                                <label for="email">Role</label>
                                <select class="form-control custom-select" readonly>
                                    <option selected>{{ $profile->role->name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="old_password">Current Password</label> <span class="text-danger">*</span>
                                <input type="password" class="form-control" name="current_password" placeholder="Current Password" id="old_password" autocomplete="off">
                                {!!  $errors->has('current_password') ? showError($errors->first('current_password')) : ''  !!}
                            </div>

                            <div class="form-group">
                                <label for="password">New Password</label> <span class="text-danger">*</span>
                                <input name="password" type="password" placeholder="Enter new Password" class="form-control" id="password" autocomplete="off">
                                {!!  $errors->has('password') ? showError($errors->first('password')) : ''  !!}
                            </div>

                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label> <span class="text-danger">*</span>
                                <input name="confirm_password" type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" autocomplete="off">
                                {!!  $errors->has('conform_password') ? showError($errors->first('conform_password')) : ''  !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <label>150px x 150px</label>
                            <div class="card-body m-auto">
                                <div class="profile-img" data-id="custom-file-preview-container">
                                    <img src="{{url('/images/profile/avatar.png')}}" data-id="custom-file-preview" class="img-fluid" id="blah" alt="Preview">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="button">
                                    <input type="file" placeholder="Change Profile" onchange="readURL(this)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-right fixed-bottom footer-fixed-bottom">
                        <div class="btn-action">
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
    </div>
@endsection
@push('admin-js')
    <script>
        function readURL(input) {
            var a=input.files[0];
            console.log(a);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var image = new Image();
                    image.src = e.target.result;
                    image.onload = function () {
                        $('#blah').attr('src', e.target.result);
                    };

                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
