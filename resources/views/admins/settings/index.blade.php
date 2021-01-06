@extends('layouts.theme')

@section('title','General')

@section('page-name-class','general')

@section('content')
    {{ Form::open(['url' => route('settings.update'),'files' => 'true', 'autocomplete' => 'off', 'class' => 'form', 'method' => 'patch']) }}

    <div id="term">
        <div class="row">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header">
                        <header>General Setting</header>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                Name<span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input name="app_name" type="text" class="form-control"
                                       value="{{ old('app_name') ? old('app_name') : $setting['app_name'] }}">
                                {!!  $errors->has('app_name') ? showError($errors->first('app_name')) : ''  !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                Phone<span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input name="phone" type="text" class="form-control"
                                       value="{{ old('phone') ? old('phone') : $setting['phone'] }}">
                                {!!  $errors->has('phone') ? showError($errors->first('phone')) : ''  !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                Address<span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input name="address" type="text" class="form-control"
                                       value="{{ old('address') ? old('address') : $setting['address'] }}">
                                {!!  $errors->has('address') ? showError($errors->first('address')) : ''  !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label>
                                    Description<span class="text-danger">*</span>
                                </label>
                            </div>

                            <div class="col-md-9">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab"
                                        href="#footer-description-en" role="tab">Footer Description (English)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                        data-toggle="tab"
                                        href="#footer-description-kh" role="tab">Footer Description (Khmer)</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active"
                                        id="footer-description-en" role="tabpanel">
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" id="footer-description-en" cols="30" rows="3" name="footer_description_en">
                                                {{ old('footer_description_en') ? old('footer_description_en') : $setting['footer_description_en'] }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane"
                                        id="footer-description-kh" role="tabpanel">
                                        <div class="form-group">
                                        <textarea type="text" class="form-control" id="footer-description-kh" cols="30" rows="3" name="footer_description_kh">
                                            {{ old('footer_description_kh') ? old('footer_description_kh') : $setting['footer_description_kh'] }}
                                        </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label>
                                    Social Media Links<span class="text-danger">*</span>
                                </label>
                            </div>

                            <div class="col-md-9">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab"
                                        href="#facebook-link" role="tab">Facebook</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                        data-toggle="tab"
                                        href="#instagram-link" role="tab">Instagram</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                        data-toggle="tab"
                                        href="#twitter-link" role="tab">Twitter</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active"
                                        id="facebook-link" role="tabpanel">
                                        <div class="form-group">
                                        <textarea type="text" class="form-control" id="facebook-link" cols="30"
                                                rows="3" name="facebook_link">{{ old('facebook_link') ? old('facebook_link') : $setting['facebook_link'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane"
                                        id="instagram-link" role="tabpanel">
                                        <div class="form-group">
                                        <textarea type="text" class="form-control" id="instagram-link" cols="30"
                                                rows="3" name="instagram_link">{{ old('instagram_link') ? old('instagram_link') : $setting['instagram_link'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane"
                                        id="twitter-link" role="tabpanel">
                                        <div class="form-group">
                                        <textarea type="text" class="form-control" id="twitter-link" cols="30"
                                                rows="3" name="twitter_link">{{ old('twitter_link') ? old('twitter_link') : $setting['twitter_link'] }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                Email<span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control"
                                       value="{{ old('email') ? old('email') : $setting['email'] }}">
                                {!!  $errors->has('email') ? showError($errors->first('email')) : ''  !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">
                                Website<span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input name="website" type="text" class="form-control"
                                       value="{{ old('website') ? old('website') : $setting['website'] }}">
                                {!!  $errors->has('website') ? showError($errors->first('website')) : ''  !!}
                            </div>
                        </div>
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-sm-3 col-form-label">--}}
{{--                                Exchange Rate<span class="text-danger">*</span>--}}
{{--                            </label>--}}
{{--                            <div class="col-sm-9">--}}
{{--                                <input type="number" name="exchange_rate" min="0" step=".01" type="number" class="form-control"--}}
{{--                                       value="{{ old('exchange_rate') ? old('exchange_rate') : $setting['exchange_rate'] }}">--}}
{{--                                {!!  $errors->has('exchange_rate') ? showError($errors->first('exchange_rate')) : ''  !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-sm-3 col-form-label">--}}
{{--                                Service Fee<span class="text-danger">*</span>--}}
{{--                            </label>--}}
{{--                            <div class="col-sm-9">--}}
{{--                                <input type="number" name="service_fee" class="form-control"--}}
{{--                                       value="{{ old('service_fee') ? old('service_fee') : $setting['service_fee'] }}">--}}
{{--                                {!!  $errors->has('service_fee') ? showError($errors->first('service_fee')) : ''  !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-sm-3 col-form-label">--}}
{{--                                ABA Account Number<span class="text-danger">*</span>--}}
{{--                            </label>--}}
{{--                            <div class="col-sm-9">--}}
{{--                                <input type="text" name="aba_account_number" class="form-control"--}}
{{--                                       value="{{ old('aba_account_number') ? old('aba_account_number') : $setting['aba_account_number'] }}">--}}
{{--                                {!!  $errors->has('aba_account_number') ? showError($errors->first('aba_account_number')) : ''  !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-sm-3 col-form-label">--}}
{{--                                ABA Account Name<span class="text-danger">*</span>--}}
{{--                            </label>--}}
{{--                            <div class="col-sm-9">--}}
{{--                                <input name="aba_account_name" class="form-control"--}}
{{--                                       value="{{ old('aba_account_name') ? old('aba_account_name') : $setting['aba_account_name'] }}">--}}
{{--                                {!!  $errors->has('aba_account_name') ? showError($errors->first('aba_account_name')) : ''  !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-sm-3 col-form-label">--}}
{{--                                Wing Account Number<span class="text-danger">*</span>--}}
{{--                            </label>--}}
{{--                            <div class="col-sm-9">--}}
{{--                                <input type="text" name="wing_account_number" class="form-control"--}}
{{--                                       value="{{ old('wing_account_number') ? old('wing_account_number') : $setting['wing_account_number'] }}">--}}
{{--                                {!!  $errors->has('wing_account_number') ? showError($errors->first('wing_account_number')) : ''  !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-sm-3 col-form-label">--}}
{{--                                Wing Account Name<span class="text-danger">*</span>--}}
{{--                            </label>--}}
{{--                            <div class="col-sm-9">--}}
{{--                                <input name="wing_account_name" class="form-control"--}}
{{--                                       value="{{ old('wing_account_name') ? old('wing_account_name') : $setting['wing_account_name'] }}">--}}
{{--                                {!!  $errors->has('wing_account_name') ? showError($errors->first('wing_account_name')) : ''  !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        {{-- <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                                Backup Database
                            </label>
                            <div class="col-sm-10">
                                @if(hasPermission('general', 'write'))
                                    <a href="#" class="btn btn-info"><i class="fas fa-cloud-download-alt"></i> Backup</a>
                                @endif
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">
                        <header>Logo</header>
                    </div>
                    <div class="card-body m-auto">
                        <div class="profile-img" data-id="custom-file-preview-container">
                            <img src="{{ setting('logo') ? url($setting['logo']) : url('/images/profile/avatar.png')}}" data-id="custom-file-preview" class="img-fluid" id="blah" alt="Preview">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="button">
                            <input type="file" placeholder="Change Profile" onchange="readURL(this)">
                        </div>
                    </div>
{{--                    <div class="card-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-12">--}}
{{--                                <div class="form-group text-center">--}}
{{--                                    <img class="border w-100"--}}
{{--                                         src="{{ setting('logo') ? url($setting['logo']) : url('/images/profile/avatar.png') }}"--}}
{{--                                         alt="Image">--}}
{{--                                    <label for="#logo" class="btn btn-primary mt-2">Browse</label>--}}
{{--                                    <input type="file" name="logo" accept="image/*" class="file-hidden preview-image"--}}
{{--                                           value="submit" id="logo">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

{{--    @component('components.footer')--}}
{{--        @if(hasPermission('general', 'write'))--}}
{{--            <button type="submit" class="btn btn-primary btn-submit"><i class="fas fa-pen"></i> Update</button>--}}
{{--        @endif--}}
{{--    @endcomponent--}}

    {{ Form::close() }}
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
