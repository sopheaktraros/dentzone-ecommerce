@extends('layouts.app')

@section('content')
    <main class="container-fluid" id="login">
        <div class="container justify-content-center text-center">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-6 col-xl-8 mx-auto pt-3">
                    <div class="branding  mx-auto">
                        <img src="{{ url('images/logos/dentzone.png') }}" alt="logo" class="logo img-fluid rounded-circle">
                    </div>
                </div>
                <div class="col-sm-9 col-md-7 col-lg-6 col-xl-8  mx-auto">
                    <div class="card card-signin my-4  mx-auto">
                        <div class="card-body">
                            <h5 class="card-title text-center">Welcome to <strong class="text-danger">{{ config('app.name') }}</strong></h5>
                            {!! Form::open(['route' => 'login', 'method' => 'post', 'class'=>'form-signin', 'autocomplete'=>'off', 'id'=>'fm-login']) !!}
                                <div class="form-label-group">
                                    <input type="text" id="inputUsername" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Enter Username"
                                           name="username" value="{{ old('username')?:env('APP_ENV')==='local'?'admin':'' }}"  required autofocus>
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback pt-2" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                    <label for="inputUsername">Username</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password"
                                           value="{{ old('password')?:env('APP_ENV')==='local'?'admin@admin.com':'' }}" name="password" required>
                                    <label for="inputPassword">Password</label>
                                </div>
{{--                                <div class="custom-control custom-checkbox mb-3">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="rememberCheck" name="remember">--}}
{{--                                    <label class="custom-control-label" for="rememberCheck">Remember password</label>--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <button class="btn btn-sm btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <span>Copyright © {{ date('yy') }} <span class="text-muted">{{ config('app.name') }}</span></span>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('admin-js')
    <script src="{{ mix('js/admins/pages/login.js') }}">
        $(document).ready(function (){
            containerLogin.init();
        });
    </script>
@endpush
