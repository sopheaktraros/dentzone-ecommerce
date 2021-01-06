@extends('layouts.theme')

@section('title','Slider')
@section('slider',Breadcrumbs::render('slider'))

@section('content')

<div id="sliders">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="tools text-right">
                        <a href="{{ route('sliders.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> New</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Show</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $i => $slider)
                            <tr>
                                <td>{{$slider -> id}}</td>
                                <td>{{$slider -> name}}</td>
                                <td><img src="{{url($slider->image)}}" alt="" class="img-fluid"></td>
                                <td>{{$slider -> description}}</td>
                                <td></td>
                                <td>$320,800</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                           @if(count($sliders) > 0)--}}
{{--                                @foreach($sliders as $i => $slider)--}}
{{--                                <div class="col-lg-2 col-md-6 col-sm-12 mb-3">--}}

{{--                                    <div class="slider-container">--}}
{{--                                        <img src="{{ $slider->image ? url($slider->image) : url('images/default-image.png') }}" alt="" class="img-fluid">--}}
{{--                                        <div class="overlay"></div>--}}

{{--                                        <div class="button-container">--}}
{{--                                            --}}{{-- <a class='btn btn-primary btn-sm btn-edit-image' href="#"><i class='far fa-edit text-primary'></i></a> --}}
{{--                                            <form method="POST" action="{{ route('sliders.destroy', [$slider->id]) }}">--}}
{{--                                                {{ csrf_field() }}--}}
{{--                                                {{ method_field('DELETE') }}--}}
{{--                                                <button type="submit" class="btn btn-danger delete btn-delete-image">--}}
{{--                                                    <i class="fas fa-trash-alt"></i>--}}
{{--                                                </button>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @endforeach--}}
{{--                            @else--}}
{{--                                <div class="col-md-12 text-center">--}}
{{--                                    <h3>No data available!</h3>--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                    </div>--}}

{{--                    {!! $sliders->render() !!}--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>

@endsection

