@extends('layouts.web')

@section('content')
    <div class="container-fluid">
        <section class="breadcrumb">
            <div class="container">
                <div class="title-path">
                    <span><a href="#">Home </a>/</span>
                    <span><a href="#"> product-detail </a></span>
                </div>
                <div class="title-breadcrumb text-center">
                    <H2 class="one-line">Product Name</H2>
                </div>

            </div>
        </section>

    </div>

@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/category.css')}}">
@endpush
