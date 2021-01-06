@extends('layouts.theme')

@section('content')
    @include('admins.partials.breadcrumb', [$breadcrumbs,'tittle'=>'Profile'])
    <div id="trainers">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <strong class="text-primary">Reset password</strong>
                        </div>

                        <div class="form-group">
                            <label for="old_password">Current Password</label> <span class="text-danger">*</span>
                            <input type="password" class="form-control" name="current_password" placeholder="Current Password" id="old_password">
                            {!!  $errors->has('current_password') ? showError($errors->first('current_password')) : ''  !!}
                        </div>

                        <div class="form-group">
                            <label for="password">New Password</label> <span class="text-danger">*</span>
                            <input name="password" type="password" placeholder="Enter new Password" class="form-control" id="password">
                            {!!  $errors->has('password') ? showError($errors->first('password')) : ''  !!}
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label> <span class="text-danger">*</span>
                            <input name="confirm_password" type="password" placeholder="Confirm Password" class="form-control" id="confirm_password">
                            {!!  $errors->has('conform_password') ? showError($errors->first('conform_password')) : ''  !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{Form::close()}}
    </div>

@endsection
