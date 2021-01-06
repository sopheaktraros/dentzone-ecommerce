@extends('layouts.web')

@section('content')
    <div class="container-fluid" style="padding-bottom: 100px;">
        <div class="faq">
        <div class="row mb-3">
            <div class="col-12 mt-2">
                <div class="title-path">
                    <span><a href="#">Home </a>/</span>
                    <span><a href="#"><strong> FAQ </strong></a></span>
                </div>
            </div>
        </div> 
        
        <img class="d-block w-100 image" src="{{url('images/faq/slide1b.png')}}" alt="No inage">
        
        <div class="row">
            <div class="col-9 mx-auto card">
                <div class="bg-faded rounded p-5">
                    <h1 class="text text-center">Frequently Asked Questions</h1>
                    <p class="text text-center text-muted">Get answers to the most frequently asked questions.</p>
                        
                <div id="accordion" class="accordion">
                    <div class="mt-5">
                        <a class="collapsed d-block" data-parent="#accordion" data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse-collapsed" style="text-decoration: none; color: black;">
                            <h4>
                                <i class="fas fa-chevron-down icon"></i>
                                Question number 01 goes in here?
                            </h4>
                        </a>
                        <div class="collapse pl-4" id="collapse1" data-parent="#accordion">
                            <p class="text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. 
                            Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.</p>
                        </div>
                          
                        <hr>
                          
                        <a class="collapsed d-block" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse-collapsed" style="text-decoration: none; color: black;">
                            <h4>
                                <i class="fas fa-chevron-down icon"></i>
                                Question number 02 goes in here?
                            </h4>
                        </a>
                        <div class="collapse pl-4" id="collapse2" data-parent="#accordion">
                            <p class="text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. 
                            Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.</p>
                        </div>
                    
                        <hr>
                    
                        <a class="collapsed d-block" data-parent="#accordion" data-toggle="collapse" href="#collapse3" aria-expanded="true" aria-controls="collapse-collapsed" style="text-decoration: none; color: black;">
                            <h4>
                                <i class="fas fa-chevron-down icon"></i>
                                Question number 03 goes in here?
                            </h4>
                        </a>
                        <div class="collapse pl-4" id="collapse3" data-parent="#accordion">
                            <p class="text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. 
                            Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.</p>
                        </div>
                    
                        <hr>
                    
                        <a class="collapsed d-block" data-parent="#accordion" data-toggle="collapse" href="#collapse4" aria-expanded="true" aria-controls="collapse-collapsed" style="text-decoration: none; color: black;">
                            <h4>
                                <i class="fas fa-chevron-down icon"></i>
                                Question number 04 goes in here?
                            </h4>
                        </a>
                        <div class="collapse pl-4" id="collapse4" data-parent="#accordion">
                            <p class="text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. 
                            Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.</p>
                        </div>
                    
                        <hr>
                    
                        <a class="collapsed d-block" data-parent="#accordion" data-toggle="collapse" href="#collapse5" aria-expanded="true" aria-controls="collapse-collapsed" style="text-decoration: none; color: black;">
                            <h4>
                                <i class="fas fa-chevron-down icon"></i>
                                Question number 05 goes in here?
                            </h4>
                        </a>
                        <div class="collapse pl-4" id="collapse5" data-parent="#accordion">
                            <p class="text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. 
                            Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.</p>
                        </div>
                    
                        <hr>
                    
                        <a class="collapsed d-block" data-parent="#accordion" data-toggle="collapse" href="#collapse6" aria-expanded="true" aria-controls="collapse-collapsed" style="text-decoration: none; color: black;">
                            <h4>
                                <i class="fas fa-chevron-down icon"></i>
                                Question number 06 goes in here?
                            </h4>
                        </a>
                        <div class="collapse pl-4" id="collapse6" data-parent="#accordion">
                            <p class="text text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. 
                            Ut eget imperdiet neque. In volutpat ante semper diam molestie, et aliquam erat laoreet.</p>
                        </div>
    
                    </div>

                </div>
                </div>
            </div>
        </div>

        </div>
    </div>
@endsection