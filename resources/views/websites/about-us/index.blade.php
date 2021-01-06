

@extends('layouts.web')

@section('content')

<div class="container-fluid">
    <section class="breadcrumb m-0">
        <div class="container">
            <div class="title">
                <span><a href="#">Home </a>/</span>
                <span><a href="#"> About Us </a></span>
            </div>
        </div>
    </section>
    <section class="slide">
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
               
            {{-- slides --}}
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="{{url('images/about-us/Slider-bg-3-scaled.jpg')}}"
                                alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                </div>
            </div>
            {{-- slides --}}

        </div>   
    </section>
          
    <section class="about-us">
        <div class="container">
            <div class="row header-title py-4">
                <div class="col-1"></div>
                <div class="col-10 mt-4">
                    <h2 class="title">ABOUT US</h2>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="container">
            <div class="row header-title py-4">
                <div class="col-1"></div>
                <div class="col-10">
                    <p>VBNK was established in 1997, born out of the desire to bring
                       the best of international knowledge about social and organizational
                       change into the Cambodian development sector. Since its inception 
                       VBNK has benefited from a diverse range of people, their ideas and 
                       the creative approaches they brought to capacity development in the
                       Cambodian social development context. Now, fully registered as a local
                       NGO, VBNK is a totally Cambodian-led and managed organization that 
                       combines the best of creative, high quality capacity development methodologies
                       with the ability to engage and implement at a local level.
                    </p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="container">
            <div class="row header-title py-4">
                <div class="col-1"></div>
                <div class="col-sm-12 col-lg-5">
                    <img class="d-block w-100" src="{{url('images/about-us/girl.png')}}"
                        alt="second image">
                </div>
                
                <div class="col-sm-12 col-lg-5">
                    <div class="text-vision">
                        <div class="about-us">
                            <strong>ABOUT US</strong> 
                        </div>

                        <div class="content-vision mt-4">                           
                            <h1>Our vision</h1>
                        </div>

                        <div class="contant-vision mt-4">
                            <p> VBNK exists to improve the quality of capacity development initiatives
                                in multiple stakeholder environments through the use of creative consulting
                                methods to accelerate, increase and sustain the impact of social change initiatives.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>


        <div class="container">
            <div class="row header-title py-4">
                <div class="col-1"></div>

                <div class="col-sm-12 col-lg-5">
                    <div class="our-mission">
                        <div class="about-us">
                            <strong>ABOUT US</strong>
                        </div>
                        
                        <div class="title-mission mt-4">
                            <h2>Our mission</h2>
                        </div>
                            
                        <div class="contant-mission mt-4">
                            <p>VBNK wants to see people with the capacity to proactively and responsibly
                                promote wellbeing and create positive social change.
                            </p>
                        </div>
                        
                    </div>
                </div>

                <div class="col-sm-12 col-lg-5">
                    <div class="text-vision vision-image">
                        <img class="d-block w-100" src="{{url('images/about-us/Rectangle 4.png')}}"
                            alt="second image">
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        
    </section>
</div>
@endsection