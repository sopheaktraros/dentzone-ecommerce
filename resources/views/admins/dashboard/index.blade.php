@extends('layouts.theme')

@section('title','Dashboard')

@section('page-name-class', 'dashboard')

@section('breadcrumbs',Breadcrumbs::render('dashboard'))

@section('content')
    <div class="row analysis">
        <div class="col-xl-3 col-lg-3 col-md-6 view-audience">
            <div class="card bg-gradient bg-stat-img animated--effect">
                <div class="card-body bg-stat-icon">
                    <div class="row">
                        <div class="col-lg-7 com-md-8 col-sm-12 label-icon pt-1">
                            <span class="bg-rounded rounded-circle">
                                <i class="far fa-chart-line"></i></span>
                            <span class="mt-3 mb-3 text-default">Audiences</span>
                        </div>
                        <div class="col-lg-5 com-md-4 col-sm-12 info pt-1">
                            <div class="last">
                                <strong class="count-period text-default">10%</strong>
                                <span class="label text-default">Growth</span>
                            </div>
                            <strong class="total-count mt-3 mb-3 text-default">1000</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 view-audience">
            <div class="card bg-gradient bg-stat-img animated--effect">
                <div class="card-body bg-stat-icon">
                    <div class="row">
                        <div class="col-lg-7 com-md-8 col-sm-12 label-icon pt-1">
                            <span class="bg-rounded rounded-circle">
                                <i class="far fa-tags"></i></span>
                            <span class="mt-3 mb-3 text-default">Products</span>
                        </div>
                        <div class="col-lg-5 com-md-4 col-sm-12 info pt-1">
                            <div class="last">
                                <strong class="count-period text-default">100</strong>
                                <span class="label text-default">View</span>
                            </div>
                            <strong class="total-count mt-3 mb-3 text-default">1000</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 view-audience">
            <div class="card bg-gradient bg-stat-img animated--effect">
                <div class="card-body bg-stat-icon">
                    <div class="row">
                        <div class="col-lg-7 com-md-8 col-sm-12 label-icon pt-1">
                            <span class="bg-rounded rounded-circle">
                                <i class="far fa-chart-line"></i></span>
                            <span class="mt-3 mb-3 text-default">Customers</span>
                        </div>
                        <div class="col-lg-5 com-md-4 col-sm-12 info pt-1">
                            <div class="last">
                                <strong class="count-period text-default">1000</strong>
                                <span class="label text-default">New</span>
                            </div>
                            <strong class="total-count mt-3 mb-3 text-default">10000</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 view-audience">
            <div class="card bg-gradient bg-stat-img animated--effect">
                <div class="card-body bg-stat-icon">
                    <div class="row">
                        <div class="col-lg-7 com-md-8 col-sm-12 label-icon pt-1">
                            <span class="bg-rounded rounded-circle">
                                <i class="far fa-first-aid"></i></span>
                            <span class="mt-3 mb-3 text-default">Services</span>
                        </div>
                        <div class="col-lg-5 com-md-4 col-sm-12 info pt-1">
                            <div class="last">
                                <strong class="count-period text-default">10</strong>
                                <span class="label text-default">New</span>
                            </div>
                            <strong class="total-count mt-3 mb-3 text-default">1000</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row analysis">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-body">
                    <div id="chartArea-Audiences">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('admin-js')
    <script src="{{ mix('js/admins/pages/dashboard.js') }}"></script>
@endpush
