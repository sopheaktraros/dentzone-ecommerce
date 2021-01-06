@extends('layouts.web')

@section('content')
    <div class="container-fluid">
        <section class="slide">
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                            <img class="d-block w-100" src="{{url('images/slide/slide-1920-900.jpg')}}"
                                 alt="First slide">
                            <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="caption">
                            <h3 class="title">Look after your health Don't be Careless</h3>
                            <p class="text-body">Local High Quality Dental Care Shop in Cambodia.
                                Providing complete product and oral care in friendly environment.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img class="d-block w-100" src="{{ url('images/slide/1.jpg') }}"
                                 alt="Second slide">
                            <div class="mask rgba-black-strong"></div>
                        </div>
                        <div class="caption">
                            <h3 class="title">Find quality dental product here</h3>
                            <p class="text-body">Local High Quality Dental Care Shop in Cambodia.
                                Providing complete dental and oral care in friendly environment.</p>
                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
        </section>
        <section class="news">
            <div class="row px-4 py-4">
                <div class="col-6">
                       <span class="icon">
                           <i class="fas fa-exclamation-circle"></i>
                       </span>
                    <span class="text-body">
                           <strong>COVID-19 INFORMATION</strong>
                           <br/> What you need to know about the 2019-2020 fly season.
                       </span>
                </div>
                <div class="col-6">
                    <div class="btn flex-end">
                        <a href="#" class="">COVID-19 Resources</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="procedures">
            <div class="container">
                <div class="row header-title py-4">
                    <div class="col-6">
                        <div class="title"><h3>Procedures</h3></div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="see-more">
                            <a href="#" class="flex-end"><span>See More</span> <i
                                        class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row cus-p">
                    <div class="col-lg-2 box-item mb-3">
                        <div class="procedure">
                            <div class="img">
                                <a href="{{route('category')}}"><img src="{{url('images/procedure/2.jpg')}}"
                                                                     alt="image-name" class="img-fluid"></a>
                            </div>
                            <div class="name text-center"><a href="{{route('category')}}"><h4>Endodontic</h4></a></div>
                        </div>
                    </div>
                    <div class="col-lg-2 box-item mb-3">
                        <div class="procedure">
                            <div class="img">
                                <a href="{{route('category')}}"> <img src="{{url('images/procedure/4.jpg')}}"
                                                                      alt="image-name" class="img-fluid"></a>
                            </div>
                            <div class="name text-center"><a href="{{route('category')}}"><h4>Operative</h4></a></div>
                        </div>
                    </div>
                    <div class="col-lg-2 box-item mb-3">
                        <div class="procedure">
                            <div class="img">
                                <a href="{{route('category')}}"><img src="{{url('images/procedure/5.jpg')}}"
                                                                     alt="image-name" class="img-fluid"></a>
                            </div>
                            <div class="name text-center"><a href="{{route('category')}}"><h4>Oral-Surgery</h4></a>
                            </div>
                        </div>
                    </div>
                    @for($i=0; $i<2 ; $i++)
                        <div class="col-lg-2 box-item mb-3">
                            <div class="procedure">
                                <a href="{{route('category')}}">
                                    <div class="img">
                                        <img src="{{url('images/procedure/3.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="name text-center"><a href="{{route('category')}}"><h4>Implantology</h4>
                                        </a></div>
                                </a>
                            </div>
                        </div>
                    @endfor
                    <div class="col-lg-2 box-item mb-3">
                        <div class="procedure">
                            <div class="img">
                                <a href="{{route('category')}}"><img src="{{url('images/procedure/6.jpg')}}"
                                                                     alt="image-name" class="img-fluid"></a>
                            </div>
                            <div class="name text-center"><a href="{{route('category')}}"><h4>Medical Drug</h4></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flash-deal">
            <div class="container">
                <div class="row header-title py-4">
                    <div class="col-6">
                        <div class="title"><h3>Flash Deals</h3></div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="see-more">
                            <a href="#" class="flex-end"><span>See More</span> <i
                                        class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row cus-p">
                    <div class="col-3 box-5 mb-3">
                        <div class="product">
                            <div class="img">
                                <a href="#">
                                    <img src="{{url('images/products/20.jpg')}}" alt="product-name"
                                         class="img-fluid front">
                                    <img src="{{url('images/products/22.jpg')}}" alt="product-name"
                                         class="img-fluid back">
                                </a>
                                <div class="dis-per"><span class="style-flex">10%</span></div>
                                <div class="icon-pro">
                                    <div class="icon">
                                        <div class="save-item">
                                            <a href="#"><span class="style-flex"><img
                                                            src="{{url('images/save-icon.png')}}"
                                                            alt=""></span></a>
                                        </div>
                                        <div class="compare-item">
                                            <a href="#"><span class="style-flex"><img
                                                            src="{{url('images/compare-icon.png')}}"
                                                            alt=""></span></a>
                                        </div>
                                    </div>
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

                    @for($i=0; $i<3 ; $i++)
                        <div class="col-3 box-5 mb-3">
                            <div class="product">
                                <div class="img">
                                    <a href="#">
                                        <img src="{{url('images/products/1.jpg')}}" alt="product-name"
                                             class="img-fluid front">
                                        <img src="{{url('images/products/2.jpg')}}" alt="product-name"
                                             class="img-fluid back">
                                    </a>
                                    <div class="dis-per"><span class="style-flex">10%</span></div>
                                    <div class="icon-pro">
                                        <div class="icon">
                                            <div class="save-item">
                                                <a href="#"><span class="style-flex"><img
                                                                src="{{url('images/save-icon.png')}}"
                                                                alt=""></span></a>
                                            </div>
                                            <div class="compare-item">
                                                <a href="#"><span class="style-flex"><img
                                                                src="{{url('images/compare-icon.png')}}"
                                                                alt=""></span></a>
                                            </div>
                                        </div>
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
                                        <h4>Hand Sanitizer</h4>
                                    </a></div>
                                <div class="price"><span>$35.00</span> <span class="price-dis">$35.00</span></div>

                            </div>
                        </div>
                    @endfor
                    <div class="col-3 box-5 mb-3">
                        <div class="product">
                            <div class="img">
                                <a href="#">
                                    <img src="{{url('images/products/test-1.jpg')}}" alt="product-name"
                                         class="img-fluid front">
                                    <img src="{{url('images/products/test.jpg')}}" alt="product-name"
                                         class="img-fluid back">
                                </a>
                                <div class="dis-per"><span class="style-flex">10%</span></div>
                                <div class="icon-pro">
                                    <div class="icon">
                                        <div class="save-item">
                                            <a href="#"><span class="style-flex"><img
                                                            src="{{url('images/save-icon.png')}}"
                                                            alt=""></span></a>
                                        </div>
                                        <div class="compare-item">
                                            <a href="#"><span class="style-flex"><img
                                                            src="{{url('images/compare-icon.png')}}"
                                                            alt=""></span></a>
                                        </div>
                                    </div>
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
                </div>
            </div>
        </section>
        <section class="banner py-4">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="img-banner">
                            <a href="#">
                                <img src="{{url('images/banner/Banner-1700px-X-525.jpg')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-4 pl-0">
                        <div class="img-banner">
                            <a href="#"><img src="{{url('images/banner/22.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-list">
            <div class="container">
                <div class="row header-title py-4">
                    <div class="col-6">
                        <div class="title"><h3>All Products</h3></div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="see-more">
                            <a href="#" class="flex-end"><span>See More</span> <i
                                        class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="header-list">
                        <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-materials-tab" data-toggle="pill"
                                   href="#pills-materials" role="tab" aria-controls="pills-materials"
                                   aria-selected="true">Materials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-instruments-tab" data-toggle="pill"
                                   href="#pills-instruments" role="tab" aria-controls="pills-instruments"
                                   aria-selected="false">Instruments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-endodontic-tab" data-toggle="pill"
                                   href="#pills-endodontic" role="tab" aria-controls="pills-endodontic"
                                   aria-selected="false">Endodontic</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-stethoscopes-tab" data-toggle="pill"
                                   href="#pills-stethoscopes" role="tab" aria-controls="pills-stethoscopes"
                                   aria-selected="false">Stethoscopes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-diagnostic-tab" data-toggle="pill"
                                   href="#pills-diagnostic" role="tab" aria-controls="pills-diagnostic"
                                   aria-selected="false">Diagnostic</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-materials" role="tabpanel"
                             aria-labelledby="pills-materials-tab">
                            <div class="row cus-p">
                                <div class="col-3 box-5 mb-3">
                                    <div class="product">
                                        <div class="img">
                                            <a href="#">
                                                <img src="{{url('images/products/20.jpg')}}" alt="product-name"
                                                     class="img-fluid front">
                                                <img src="{{url('images/products/22.jpg')}}" alt="product-name"
                                                     class="img-fluid back">
                                            </a>
                                            <div class="icon-pro">
                                                <div class="icon">
                                                    <div class="save-item">
                                                        <a href="#"><span class="style-flex"><img
                                                                        src="{{url('images/save-icon.png')}}"
                                                                        alt=""></span></a>
                                                    </div>
                                                    <div class="compare-item">
                                                        <a href="#"><span class="style-flex"><img
                                                                        src="{{url('images/compare-icon.png')}}"
                                                                        alt=""></span></a>
                                                    </div>
                                                </div>
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
                                    <div class="col-3 box-5 mb-3">
                                        <div class="product">
                                            <div class="img">
                                                <a href="#">
                                                    <img src="{{url('images/products/1.jpg')}}" alt="product-name"
                                                         class="img-fluid front">
                                                    <img src="{{url('images/products/2.jpg')}}" alt="product-name"
                                                         class="img-fluid back">
                                                </a>
                                                <div class="icon-pro">
                                                    <div class="icon">
                                                        <div class="save-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/save-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                        <div class="compare-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/compare-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                    </div>
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
                                                    <h4>Hand Sanitizer</h4>
                                                </a></div>
                                            <div class="price"><span>$35.00</span> <span class="price-dis">$35.00</span>
                                            </div>

                                        </div>
                                    </div>
                                @endfor
                                @for($i=0; $i<6 ; $i++)
                                    <div class="col-3 box-5 mb-3">
                                        <div class="product">
                                            <div class="img">
                                                <a href="#">
                                                    <img src="{{url('images/products/test-1.jpg')}}" alt="product-name"
                                                         class="img-fluid front">
                                                    <img src="{{url('images/products/test.jpg')}}" alt="product-name"
                                                         class="img-fluid back">
                                                </a>
                                                <div class="icon-pro">
                                                    <div class="icon">
                                                        <div class="save-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/save-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                        <div class="compare-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/compare-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                    </div>
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
                        <div class="tab-pane fade" id="pills-instruments" role="tabpanel"
                             aria-labelledby="pills-instruments-tab">
                            <div class="row cus-p">
                                @for($i=0; $i<6 ; $i++)
                                    <div class="col-3 box-5 mb-3">
                                        <div class="product">
                                            <div class="img">
                                                <a href="#">
                                                    <img src="{{url('images/products/test-1.jpg')}}" alt="product-name"
                                                         class="img-fluid front">
                                                    <img src="{{url('images/products/test.jpg')}}" alt="product-name"
                                                         class="img-fluid back">
                                                </a>
                                                <div class="icon-pro">
                                                    <div class="icon">
                                                        <div class="save-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/save-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                        <div class="compare-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/compare-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                    </div>
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
                                <div class="col-3 box-5 mb-3">
                                    <div class="product">
                                        <div class="img">
                                            <a href="#">
                                                <img src="{{url('images/products/20.jpg')}}" alt="product-name"
                                                     class="img-fluid front">
                                                <img src="{{url('images/products/22.jpg')}}" alt="product-name"
                                                     class="img-fluid back">
                                            </a>
                                            <div class="icon-pro">
                                                <div class="icon">
                                                    <div class="save-item">
                                                        <a href="#"><span class="style-flex"><img
                                                                        src="{{url('images/save-icon.png')}}"
                                                                        alt=""></span></a>
                                                    </div>
                                                    <div class="compare-item">
                                                        <a href="#"><span class="style-flex"><img
                                                                        src="{{url('images/compare-icon.png')}}"
                                                                        alt=""></span></a>
                                                    </div>
                                                </div>
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
                                    <div class="col-3 box-5 mb-3">
                                        <div class="product">
                                            <div class="img">
                                                <a href="#">
                                                    <img src="{{url('images/products/1.jpg')}}" alt="product-name"
                                                         class="img-fluid front">
                                                    <img src="{{url('images/products/2.jpg')}}" alt="product-name"
                                                         class="img-fluid back">
                                                </a>
                                                <div class="icon-pro">
                                                    <div class="icon">
                                                        <div class="save-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/save-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                        <div class="compare-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/compare-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                    </div>
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
                                                    <h4>Hand Sanitizer</h4>
                                                </a></div>
                                            <div class="price"><span>$35.00</span> <span class="price-dis">$35.00</span>
                                            </div>

                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-endodontic" role="tabpanel"
                             aria-labelledby="pills-endodontic-tab">
                            <div class="row cus-p">
                                <div class="col-3 box-5 mb-3">
                                    <div class="product">
                                        <div class="img">
                                            <a href="#">
                                                <img src="{{url('images/products/20.jpg')}}" alt="product-name"
                                                     class="img-fluid front">
                                                <img src="{{url('images/products/22.jpg')}}" alt="product-name"
                                                     class="img-fluid back">
                                            </a>
                                            <div class="icon-pro">
                                                <div class="icon">
                                                    <div class="save-item">
                                                        <a href="#"><span class="style-flex"><img
                                                                        src="{{url('images/save-icon.png')}}"
                                                                        alt=""></span></a>
                                                    </div>
                                                    <div class="compare-item">
                                                        <a href="#"><span class="style-flex"><img
                                                                        src="{{url('images/compare-icon.png')}}"
                                                                        alt=""></span></a>
                                                    </div>
                                                </div>
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
                                    <div class="col-3 box-5 mb-3">
                                        <div class="product">
                                            <div class="img">
                                                <a href="#">
                                                    <img src="{{url('images/products/1.jpg')}}" alt="product-name"
                                                         class="img-fluid front">
                                                    <img src="{{url('images/products/2.jpg')}}" alt="product-name"
                                                         class="img-fluid back">
                                                </a>
                                                <div class="icon-pro">
                                                    <div class="icon">
                                                        <div class="save-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/save-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                        <div class="compare-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/compare-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                    </div>
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
                                                    <h4>Hand Sanitizer</h4>
                                                </a></div>
                                            <div class="price"><span>$35.00</span> <span class="price-dis">$35.00</span>
                                            </div>

                                        </div>
                                    </div>
                                @endfor
                                @for($i=0; $i<6 ; $i++)
                                    <div class="col-3 box-5 mb-3">
                                        <div class="product">
                                            <div class="img">
                                                <a href="#">
                                                    <img src="{{url('images/products/test-1.jpg')}}" alt="product-name"
                                                         class="img-fluid front">
                                                    <img src="{{url('images/products/test.jpg')}}" alt="product-name"
                                                         class="img-fluid back">
                                                </a>
                                                <div class="icon-pro">
                                                    <div class="icon">
                                                        <div class="save-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/save-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                        <div class="compare-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/compare-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                    </div>
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
                        <div class="tab-pane fade" id="pills-stethoscopes" role="tabpanel"
                             aria-labelledby="pills-stethoscopes-tab">
                            <div class="row cus-p">
                                <div class="col-3 box-5 mb-3">
                                    <div class="product">
                                        <div class="img">
                                            <a href="#">
                                                <img src="{{url('images/products/20.jpg')}}" alt="product-name"
                                                     class="img-fluid front">
                                                <img src="{{url('images/products/22.jpg')}}" alt="product-name"
                                                     class="img-fluid back">
                                            </a>
                                            <div class="icon-pro">
                                                <div class="icon">
                                                    <div class="save-item">
                                                        <a href="#"><span class="style-flex"><img
                                                                        src="{{url('images/save-icon.png')}}"
                                                                        alt=""></span></a>
                                                    </div>
                                                    <div class="compare-item">
                                                        <a href="#"><span class="style-flex"><img
                                                                        src="{{url('images/compare-icon.png')}}"
                                                                        alt=""></span></a>
                                                    </div>
                                                </div>
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
                                    <div class="col-3 box-5 mb-3">
                                        <div class="product">
                                            <div class="img">
                                                <a href="#">
                                                    <img src="{{url('images/products/1.jpg')}}" alt="product-name"
                                                         class="img-fluid front">
                                                    <img src="{{url('images/products/2.jpg')}}" alt="product-name"
                                                         class="img-fluid back">
                                                </a>
                                                <div class="icon-pro">
                                                    <div class="icon">
                                                        <div class="save-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/save-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                        <div class="compare-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/compare-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                    </div>
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
                                                    <h4>Hand Sanitizer</h4>
                                                </a></div>
                                            <div class="price"><span>$35.00</span> <span class="price-dis">$35.00</span>
                                            </div>

                                        </div>
                                    </div>
                                @endfor
                                @for($i=0; $i<6 ; $i++)
                                    <div class="col-3 box-5 mb-3">
                                        <div class="product">
                                            <div class="img">
                                                <a href="#">
                                                    <img src="{{url('images/products/test-1.jpg')}}" alt="product-name"
                                                         class="img-fluid front">
                                                    <img src="{{url('images/products/test.jpg')}}" alt="product-name"
                                                         class="img-fluid back">
                                                </a>
                                                <div class="icon-pro">
                                                    <div class="icon">
                                                        <div class="save-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/save-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                        <div class="compare-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/compare-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                    </div>
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
                        <div class="tab-pane fade" id="pills-diagnostic" role="tabpanel"
                             aria-labelledby="pills-diagnostic-tab">
                            <div class="row cus-p">
                                <div class="col-3 box-5 mb-3">
                                    <div class="product">
                                        <div class="img">
                                            <a href="#">
                                                <img src="{{url('images/products/20.jpg')}}" alt="product-name"
                                                     class="img-fluid front">
                                                <img src="{{url('images/products/22.jpg')}}" alt="product-name"
                                                     class="img-fluid back">
                                            </a>
                                            <div class="icon-pro">
                                                <div class="icon">
                                                    <div class="save-item">
                                                        <a href="#"><span class="style-flex"><img
                                                                        src="{{url('images/save-icon.png')}}"
                                                                        alt=""></span></a>
                                                    </div>
                                                    <div class="compare-item">
                                                        <a href="#"><span class="style-flex"><img
                                                                        src="{{url('images/compare-icon.png')}}"
                                                                        alt=""></span></a>
                                                    </div>
                                                </div>
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
                                    <div class="col-3 box-5 mb-3">
                                        <div class="product">
                                            <div class="img">
                                                <a href="#">
                                                    <img src="{{url('images/products/1.jpg')}}" alt="product-name"
                                                         class="img-fluid front">
                                                    <img src="{{url('images/products/2.jpg')}}" alt="product-name"
                                                         class="img-fluid back">
                                                </a>
                                                <div class="icon-pro">
                                                    <div class="icon">
                                                        <div class="save-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/save-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                        <div class="compare-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/compare-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                    </div>
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
                                                    <h4>Hand Sanitizer</h4>
                                                </a></div>
                                            <div class="price"><span>$35.00</span> <span class="price-dis">$35.00</span>
                                            </div>

                                        </div>
                                    </div>
                                @endfor
                                @for($i=0; $i<6 ; $i++)
                                    <div class="col-3 box-5 mb-3">
                                        <div class="product">
                                            <div class="img">
                                                <a href="#">
                                                    <img src="{{url('images/products/test-1.jpg')}}" alt="product-name"
                                                         class="img-fluid front">
                                                    <img src="{{url('images/products/test.jpg')}}" alt="product-name"
                                                         class="img-fluid back">
                                                </a>
                                                <div class="icon-pro">
                                                    <div class="icon">
                                                        <div class="save-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/save-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                        <div class="compare-item">
                                                            <a href="#"><span class="style-flex"><img
                                                                            src="{{url('images/compare-icon.png')}}"
                                                                            alt=""></span></a>
                                                        </div>
                                                    </div>
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
            </div>
        </section>
        <section class="suppliers">
            <div class="container pb-3">
                <div class="row header-title py-4">
                    <div class="col-12 text-right">
                        <div class="see-more">
                            <a href="#" class="flex-end"><span>See More</span> <i
                                        class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 py-3 text-center">
                        <div class="title"><h3>Suppliers</h3></div>
                    </div>
                </div>
                <div class="row cus-p py-3">
                    <div class="col-lg-2 box-7 mb-3">
                        <div class="image zoom-in">
                            <a href="#">
                                <img src="{{url('images/suppliers/axshealth.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 box-7 mb-3">
                        <div class="image zoom-in">
                            <a href="#">
                                <img src="{{url('images/suppliers/2.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 box-7 mb-3">
                        <div class="image zoom-in">
                            <a href="#">
                                <img src="{{url('images/suppliers/3.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 box-7 mb-3">
                        <div class="image zoom-in">
                            <a href="#">
                                <img src="{{url('images/suppliers/4.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 box-7 mb-3">
                        <div class="image zoom-in">
                            <a href="#">
                                <img src="{{url('images/suppliers/5.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 box-7 mb-3">
                        <div class="image zoom-in">
                            <a href="#">
                                <img src="{{url('images/suppliers/6.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 box-7 mb-3">
                        <div class="image zoom-in">
                            <a href="#">
                                <img src="{{url('images/suppliers/7.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 box-7 mb-3">
                        <div class="image zoom-in">
                            <a href="#">
                                <img src="{{url('images/suppliers/brand-logo-primacy@2x.png')}}" alt=""
                                     class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 box-7 mb-3">
                        <div class="image zoom-in">
                            <a href="#">
                                <img src="{{url('images/suppliers/brand-logo-searchlab@2x.png')}}" alt=""
                                     class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 box-7 mb-3">
                        <div class="image zoom-in">
                            <a href="#">
                                <img src="{{url('images/suppliers/brand-logo-stomach-care-200x64@2x.png')}}" alt=""
                                     class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 box-7 mb-3">
                        <div class="image zoom-in">
                            <a href="#">
                                <img src="{{url('images/suppliers/brand-pharmacy@2x.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 box-7 mb-3">
                        <div class="image zoom-in">
                            <a href="#">
                                <img src="{{url('images/suppliers/dark-logo@2x.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-news py-4">
            <div class="container">
                <div class="row header-title py-4">
                    <div class="col-6 ">
                        <div class="title"><h3>Our Latest News</h3></div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="see-more">
                            <a href="#" class="flex-end"><span>See More</span> <i
                                        class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row cus-p">
                    <div class="col-lg-4 grid-blog mb-3">
                        <div class="blog">
                            <div class="image zoom-in">
                                <a href="#">
                                    <img src="{{url('images/blogs/1.jpg')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="date py-2">
                                <span class="icon"><i class="far fa-calendar-minus"></i> September 10,2020</span>
                            </div>
                            <div class="title two-line">
                                <a href="#"><h4 class="two-line">5 Ways 3D Printing Has Revolutionized</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 grid-blog mb-3">
                        <div class="blog">
                            <div class="image zoom-in">
                                <a href="#">
                                    <img src="{{url('images/blogs/2.jpg')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="date py-2">
                                <span class="icon"><i class="far fa-calendar-minus"></i> September 10,2020</span>
                            </div>
                            <div class="title two-line">
                                <a href="#"><h4 class="two-line">5 Ways 3D Printing Has Revolutionized
                                        The Dental Industry</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 grid-blog mb-3">
                        <div class="blog">
                            <div class="image zoom-in">
                                <a href="#">
                                    <img src="{{url('images/blogs/3.jpg')}}" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="date py-2">
                                <span class="icon"><i class="far fa-calendar-minus"></i> September 10,2020</span>
                            </div>
                            <div class="title two-line">
                                <a href="#"><h4 class="two-line">5 Ways 3D Printing Has Revolutionized
                                        The Dental Industry</h4></a>
                            </div>
                        </div>
                    </div>
                    @for($i=0 ; $i<3; $i++)
                        <div class="col-lg-4 grid-blog mb-3">
                            <div class="blog">
                                <div class="image zoom-in">
                                    <a href="#">
                                        <img src="{{url('images/blogs/4.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="date py-2">
                                    <span class="icon"><i class="far fa-calendar-minus"></i> September 10,2020</span>
                                </div>
                                <div class="title two-line">
                                    <a href="#"><h4 class="two-line">5 Ways 3D Printing Has Revolutionized
                                            The Dental Industry</h4></a>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </section>
    </div>



@endsection

@push('websites-css')
    <link href="{{ mix('css/websites/pages/home.css') }}" rel="stylesheet">
@endpush