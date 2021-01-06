@extends('layouts.theme')

@section('breadcrumbs',Breadcrumbs::render('slider.create'))

@section('content')

<div id="brands">
    {{ Form::open(['url' => url('sliders'), 'files' => 'true' , 'id' => 'form-validation','autocomplete'=> 'off', 'method' => 'post']) }}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">
                    <header>New Slide</header>
                </div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-6">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @endif
                            <div class="card">
                                {{-- <div class="card-header">
                                    <label class="image-size">1400px * 470px</label>
                                </div>
                                <div class="form-group text-center">
                                    <img class="border"
                                        src="{{ old('image') ? old('image') : url('images/default-image.png') }}" alt="Image">

                                    <div class="mt-3">
                                        <span class="btn btn-primary btn-browse">Browse</span>
                                        <input type="file" name="image" id="image" accept="image/*" class="file-hidden-slide preview-image"
                                            value="{{ old('image') }}">
                                    </div>
                                </div> --}}

                                <div class="card-body">
                                    <div class="card-head">1400px * 470px</div>
                                    <div class="form-group text-center mt-1">
                                        <img class="preview-img" style="border-style: dashed; border-color:#ccc; border-width:2px"
                                            src="{{ old('image') ? old('image') : url('images/default-image.png') }}" alt="Image">
                                        <div class="mt-3">
                                            <span class="btn btn-primary btn-browse">Browse</span>
                                            <input type="file" name="image" id="image" accept="image/*" class="file-hidden-slide preview-image"
                                                value="{{ old('image') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    @component('components.footer')--}}
{{--        <a href="{{ url('sliders') }}" class="btn btn-light"><i class="fas fa-chevron-left"></i> Back</a>--}}
{{--        <button type="submit" class="btn btn-primary" id="create"><i class="fas fa-save"></i> Create</button>--}}
{{--    @endcomponent--}}
    {{Form::close()}}
</div>

@endsection

@push('css')
    <style>
        .file-hidden-slide {
            position: absolute;
            width: 80px;
            height: 40px;
            overflow: hidden;
            bottom: 10px;
            left: 41%;
            opacity: 0;
        }

        .image-size{
            font-size: 12px;
            color:red;
        }

        .preview-img {
            width: 100%;
            height: 287px;
            object-fit: contain;
        }
    </style>
@endpush
