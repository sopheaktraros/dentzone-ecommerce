@extends('layouts.web')

@section('content')
    <div class="container-fluid">
        <div class="saves mx-auto">

            <div class="row">
                <div class="col-12">
                    <div class="title-path mt-1">
                        <span><a href="#">Home </a>/</span>
                        <span><a href="#"><strong> My Saves </strong></a></span>
                    </div>
                    <h1 class="text text-center">My Save</h1>
                    <p class="text text-center text-muted">
                        Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a 
                        <br>
                        feugiat morbi neque tortor.
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-3">
                    <ul class="nav d-block click">

                        <li class="nav-item pt-4">
                            <a class="nav-link active" data-toggle="tab">ALL (20)</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab">Articles</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab">News</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab">Scholarships</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab">Job Announcements</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab">Upcoming Events</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab">Videos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab">Products</a>
                        </li>

                    </ul>
                </div>

                <div class="col-9">
                    <div class="tab-content">

                        {{-- All --}}
                        <div id="all" class="container tab-pane active">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox"></th>
                                        <th>Name</th>
                                        <th>Types</th>
                                        <th>Date Saved</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pt-4"><input type="checkbox" ></td>
                                        <td>
                                            <img src="{{url('images/saves/Virtuo-Vivo.png')}}" class="img-fluid img" alt="No image">
                                            Oil Free Dental Air Compressor
                                        </td>
                                        <td class="pt-4">Products</td>
                                        <td class="pt-4">17/01/2021</td>
                                        <td class="pt-4">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </td>
                                    </tr>
        
                                    <tr>
                                        <td class="pt-4"><input type="checkbox" ></td>
                                        <td>
                                            <img src="{{url('images/saves/Oil Free Dental  Air Compressor.png')}}" class="img-fluid img" alt="No image">
                                            Oil Free Dental Air Compressor
                                        </td>
                                        <td class="pt-4">Articles</td>
                                        <td class="pt-4">17/01/2021</td>
                                        <td class="pt-4">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </td>
                                    </tr>
        
                                    <tr>
                                        <td class="pt-4"><input type="checkbox" ></td>
                                        <td>
                                            <img src="{{url('images/saves/ers_endo_removal_system_box-800x800.png')}}" class="img-fluid img" alt="No image">
                                            Oil Free Dental Air Compressor
                                        </td>
                                        <td class="pt-4">Textbooks</td>
                                        <td class="pt-4">17/01/2021</td>
                                        <td class="pt-4">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </td>
                                    </tr>
        
                                    <tr>
                                        <td class="pt-4"><input type="checkbox" ></td>
                                        <td>
                                            <img src="{{url('images/saves/74488-11535911.png')}}" class="img-fluid img" alt="No image">
                                            Oil Free Dental Air Compressor
                                        </td>
                                        <td class="pt-4">News</td>
                                        <td class="pt-4">17/01/2021</td>
                                        <td class="pt-4">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </td>
                                    </tr>
        
                                    <tr>
                                        <td class="pt-4"><input type="checkbox" ></td>
                                        <td>
                                            <img src="{{url('images/saves/Light Body Silicone.png')}}" class="img-fluid img" alt="No image">
                                            Oil Free Dental Air Compressor
                                        </td>
                                        <td class="pt-4">Upcoming Events</td>
                                        <td class="pt-4">17/01/2021</td>
                                        <td class="pt-4">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </td>
                                    </tr>
        
                                    <tr>
                                        <td class="pt-4"><input type="checkbox" ></td>
                                        <td>
                                            <img src="{{url('images/saves/service-gallery5.png')}}" class="img-fluid img" alt="No image">
                                            Oil Free Dental Air Compressor
                                        </td>
                                        <td class="pt-4">Videos</td>
                                        <td class="pt-4">17/01/2021</td>
                                        <td class="pt-4">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </td>
                                    </tr>
        
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('websites-js')
    <script>
        $(document).ready(function(){
            $(".click .nav-link").on('click', function(){
                document.getElementById('all').innerHTML = `
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>Name</th>
                                <th>Types</th>
                                <th>Date Saved</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pt-4"><input type="checkbox" ></td>
                                <td>
                                    <img src="{{url('images/saves/Virtuo-Vivo.png')}}" class="img-fluid img" alt="No image">
                                    Oil Free Dental Air Compressor
                                </td>
                                <td class="pt-4">Products</td>
                                <td class="pt-4">17/01/2021</td>
                                <td class="pt-4">
                                    <i class="fas fa-ellipsis-v"></i>
                                </td>
                            </tr>

                            <tr>
                                <td class="pt-4"><input type="checkbox" ></td>
                                <td>
                                    <img src="{{url('images/saves/Oil Free Dental  Air Compressor.png')}}" class="img-fluid img" alt="No image">
                                    Oil Free Dental Air Compressor
                                </td>
                                <td class="pt-4">Articles</td>
                                <td class="pt-4">17/01/2021</td>
                                <td class="pt-4">
                                    <i class="fas fa-ellipsis-v"></i>
                                </td>
                            </tr>

                            <tr>
                                <td class="pt-4"><input type="checkbox" ></td>
                                <td>
                                    <img src="{{url('images/saves/ers_endo_removal_system_box-800x800.png')}}" class="img-fluid img" alt="No image">
                                    Oil Free Dental Air Compressor
                                </td>
                                <td class="pt-4">Textbooks</td>
                                <td class="pt-4">17/01/2021</td>
                                <td class="pt-4">
                                    <i class="fas fa-ellipsis-v"></i>
                                </td>
                            </tr>

                            <tr>
                                <td class="pt-4"><input type="checkbox" ></td>
                                <td>
                                    <img src="{{url('images/saves/74488-11535911.png')}}" class="img-fluid img" alt="No image">
                                    Oil Free Dental Air Compressor
                                </td>
                                <td class="pt-4">News</td>
                                <td class="pt-4">17/01/2021</td>
                                <td class="pt-4">
                                    <i class="fas fa-ellipsis-v"></i>
                                </td>
                            </tr>

                            <tr>
                                <td class="pt-4"><input type="checkbox" ></td>
                                <td>
                                    <img src="{{url('images/saves/Light Body Silicone.png')}}" class="img-fluid img" alt="No image">
                                    Oil Free Dental Air Compressor
                                </td>
                                <td class="pt-4">Upcoming Events</td>
                                <td class="pt-4">17/01/2021</td>
                                <td class="pt-4">
                                    <i class="fas fa-ellipsis-v"></i>
                                </td>
                            </tr>

                            <tr>
                                <td class="pt-4"><input type="checkbox" ></td>
                                <td>
                                    <img src="{{url('images/saves/service-gallery5.png')}}" class="img-fluid img" alt="No image">
                                    Oil Free Dental Air Compressor
                                </td>
                                <td class="pt-4">Videos</td>
                                <td class="pt-4">17/01/2021</td>
                                <td class="pt-4">
                                    <i class="fas fa-ellipsis-v"></i>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                `;
            });
        });
    </script>
@endpush
