@extends('layouts.web')

@section('content')
    <div class="container-fluid">
        <section class="breadcrumb">
            <div class="container">
                <div class="title-path">
                    <span><a href="#">Home </a>/</span>
                    <span><a href="#"> Brand </a></span>
                </div>
                <div class="title-breadcrumb text-center">
                    <H2 class="one-line">Brand Name</H2>
                </div>

            </div>
        </section>
        <section class="product-cat">
            <div class="container">
                <div class="row has-sidebar">
                    <div class="col-3">
                        @include('websites.partials.sidebar')
                    </div>
                    <div class="col-9">
                        <div class="row header-grid py-2">
                            <div class="col-6">
                                <div class="count-pro">
                                    <p>We Found 52 product available for you</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="short-pro text-right">
                                    <span><i class="far fa-sort-amount-up"></i></span>
                                    <div class="short">
                                        <button class=" dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Short By: Default
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <button class="dropdown-item" >Action</button>
                                            <button class="dropdown-item">Another action</button>
                                            <button class="dropdown-item" >Something else here</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row grid cus-p">
                            <div class="col-lg-3 mb-3">
                                <div class="product">
                                    <div class="img">
                                        <a href="#">
                                            <img src="{{url('images/products/20.jpg')}}" alt="product-name"
                                                 class="img-fluid front">
                                            <img src="{{url('images/products/22.jpg')}}" alt="product-name"
                                                 class="img-fluid back">
                                        </a>
                                        <div class="dis-per"><span class="style-flex">10%</span></div>
                                        <div class="save-item">
                                            <a href="#"><span class="style-flex"><img src="{{url('images/save-icon.png')}}"
                                                                                      alt=""></span></a>
                                        </div>
                                        <div class="compare-item">
                                            <a href="#"><span class="style-flex"><img src="{{url('images/compare-icon.png')}}"
                                                                                      alt=""></span></a>
                                        </div>
                                    </div>
                                    <div class="shop">
                                        <a href="#">
                                            <img src="{{url('images/suppliers/axshealth.png')}}" alt="shop-name"
                                                 class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="title one-line">
                                        <a href="#">
                                            <h4>Pressure Monitor</h4>
                                        </a></div>
                                    <div class="price"><span>$25.00</span> <span class="price-dis">$30.00</span></div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <div class="product">
                                    <div class="img">
                                        <a href="#">
                                            <img src="{{url('images/products/test-1.jpg')}}" alt="product-name"
                                                 class="img-fluid front">
                                            <img src="{{url('images/products/test.jpg')}}" alt="product-name"
                                                 class="img-fluid back">
                                        </a>
                                        <div class="save-item">
                                            <a href="#"><span class="style-flex"><img
                                                            src="{{url('images/save-icon.png')}}" alt=""></span></a>
                                        </div>
                                        <div class="compare-item">
                                            <a href="#"><span class="style-flex"><img
                                                            src="{{url('images/compare-icon.png')}}"
                                                            alt=""></span></a>
                                        </div>
                                    </div>
                                    <div class="shop">
                                        <a href="#">
                                            <img src="{{url('images/suppliers/axshealth.png')}}" alt="shop-name"
                                                 class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="title one-line">
                                        <a href="#">
                                            <h4>Pressure Monitor</h4>
                                        </a></div>
                                    <div class="price"><span>$25.00</span></div>

                                </div>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <div class="product">
                                    <div class="img">
                                        <a href="#">
                                            <img src="{{url('images/products/20.jpg')}}" alt="product-name"
                                                 class="img-fluid front">
                                            <img src="{{url('images/products/22.jpg')}}" alt="product-name"
                                                 class="img-fluid back">
                                        </a>
                                        <div class="dis-per"><span class="style-flex">10%</span></div>
                                        <div class="save-item">
                                            <a href="#"><span class="style-flex"><img src="{{url('images/save-icon.png')}}"
                                                                                      alt=""></span></a>
                                        </div>
                                        <div class="compare-item">
                                            <a href="#"><span class="style-flex"><img src="{{url('images/compare-icon.png')}}"
                                                                                      alt=""></span></a>
                                        </div>
                                    </div>
                                    <div class="shop">
                                        <a href="#">
                                            <img src="{{url('images/suppliers/axshealth.png')}}" alt="shop-name"
                                                 class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="title one-line">
                                        <a href="#">
                                            <h4>Pressure Monitor</h4>
                                        </a></div>
                                    <div class="price"><span>$25.00</span> <span class="price-dis">$30.00</span></div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <div class="product">
                                    <div class="img">
                                        <a href="#">
                                            <img src="{{url('images/products/20.jpg')}}" alt="product-name"
                                                 class="img-fluid front">
                                            <img src="{{url('images/products/22.jpg')}}" alt="product-name"
                                                 class="img-fluid back">
                                        </a>
                                        <div class="dis-per"><span class="style-flex">10%</span></div>
                                        <div class="save-item">
                                            <a href="#"><span class="style-flex"><img src="{{url('images/save-icon.png')}}"
                                                                                      alt=""></span></a>
                                        </div>
                                        <div class="compare-item">
                                            <a href="#"><span class="style-flex"><img src="{{url('images/compare-icon.png')}}"
                                                                                      alt=""></span></a>
                                        </div>
                                    </div>
                                    <div class="shop">
                                        <a href="#">
                                            <img src="{{url('images/suppliers/axshealth.png')}}" alt="shop-name"
                                                 class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="title one-line">
                                        <a href="#">
                                            <h4>Pressure Monitor</h4>
                                        </a></div>
                                    <div class="price"><span>$25.00</span> <span class="price-dis">$30.00</span></div>
                                </div>

                            </div>
                            <div class="col-lg-3 mb-3">
                                <div class="product">
                                    <div class="img">
                                        <a href="#">
                                            <img src="{{url('images/products/1.jpg')}}" alt="product-name"
                                                 class="img-fluid front">
                                            <img src="{{url('images/products/2.jpg')}}" alt="product-name"
                                                 class="img-fluid back">
                                        </a>
                                        <div class="save-item">
                                            <a href="#"><span class="style-flex"><img
                                                            src="{{url('images/save-icon.png')}}" alt=""></span></a>
                                        </div>
                                        <div class="compare-item">
                                            <a href="#"><span class="style-flex"><img
                                                            src="{{url('images/compare-icon.png')}}" alt=""></span></a>
                                        </div>
                                    </div>
                                    <div class="shop">
                                        <a href="#">
                                            <img src="{{url('images/suppliers/axshealth.png')}}" alt="shop-name"
                                                 class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="title one-line">
                                        <a href="#">
                                            <h4>Pressure Monitor</h4>
                                        </a></div>
                                    <div class="price"><span>$25.00</span></div>

                                </div>
                            </div>
                            @for($i=0; $i<3 ; $i++)
                                <div class="col-lg-3 mb-3">
                                    <div class="product">
                                        <div class="img">
                                            <a href="#">
                                                <img src="{{url('images/products/55.jpg')}}" alt="product-name"
                                                     class="img-fluid front">
                                                <img src="{{url('images/products/5.jpg')}}" alt="product-name"
                                                     class="img-fluid back">
                                            </a>
                                            <div class="save-item">
                                                <a href="#"><span class="style-flex"><img
                                                                src="{{url('images/save-icon.png')}}" alt=""></span></a>
                                            </div>
                                            <div class="compare-item">
                                                <a href="#"><span class="style-flex"><img
                                                                src="{{url('images/compare-icon.png')}}" alt=""></span></a>
                                            </div>
                                        </div>
                                        <div class="shop">
                                            <a href="#">
                                                <img src="{{url('images/suppliers/axshealth.png')}}" alt="shop-name"
                                                     class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="title one-line">
                                            <a href="#">
                                                <h4>Pressure Monitor</h4>
                                            </a></div>
                                        <div class="price"><span>$25.00</span></div>

                                    </div>
                                </div>
                            @endfor
                            @for($i=0; $i<4 ; $i++)
                                <div class="col-lg-3 mb-3">
                                    <div class="product">
                                        <div class="img">
                                            <a href="#">
                                                <img src="{{url('images/products/test-1.jpg')}}" alt="product-name"
                                                     class="img-fluid front">
                                                <img src="{{url('images/products/test.jpg')}}" alt="product-name"
                                                     class="img-fluid back">
                                            </a>
                                            <div class="save-item">
                                                <a href="#"><span class="style-flex"><img
                                                                src="{{url('images/save-icon.png')}}" alt=""></span></a>
                                            </div>
                                            <div class="compare-item">
                                                <a href="#"><span class="style-flex"><img
                                                                src="{{url('images/compare-icon.png')}}" alt=""></span></a>
                                            </div>
                                        </div>
                                        <div class="shop">
                                            <a href="#">
                                                <img src="{{url('images/suppliers/axshealth.png')}}" alt="shop-name"
                                                     class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="title one-line">
                                            <a href="#">
                                                <h4>Pressure Monitor</h4>
                                            </a></div>
                                        <div class="price"><span>$25.00</span></div>

                                    </div>
                                </div>
                            @endfor

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

