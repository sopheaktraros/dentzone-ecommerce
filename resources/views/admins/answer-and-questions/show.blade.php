@extends('layout')

@section('title','FAQ')
@section('page-name-class','show-faq')

@section('breadcrumbs',Breadcrumbs::render('answer-and-questions.show'))

@section('content')
    <div id="applicant" class="mt-2">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-lg-2 text-center">
                                <img id="profile-image" src="{{ $customer->image_profile ?
                                     url($customer->image_profile) : url('images/default-image.jpg') }}"
                                     alt="Profile">
                                <h4>{{ $customer->name }}</h4>
                            </div>
                            <div class="col-md-10 col-sm-10 col-lg-10">
                                <table class="table table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="font-weight">Date Sign up:</span></td>
                                            <td>{{ date('d-M-Y' , strtotime($customer->date_sign_up ))}} </td>
                                        </tr>
                                        <tr>
                                            <td><span class="font-weight">Phone:</span></td>
                                            <td>{{ $customer->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td><span class="font-weight">Email:</span></td>
                                            <td>{{ $customer->email }}</td>
                                        </tr>
                                        <tr>
                                            <td><span class="font-weight">Facebook Link:</span></td>
                                            <td>{{ $customer->facebook_link }}</td>
                                        </tr>
                                        <tr>
                                            <td><span class="font-weight">Address:</span></td>
                                            <td>{{ $customer->address }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @component('components.footer')
            <a href="{{ url('customers') }}" class="btn btn-light"><i class="fas fa-chevron-left"></i> Back</a>
        @endcomponent
    </div>
@endsection

@push('css')
    <style>
        .font-weight {
            font-weight: 600;
        }

        #profile-image {
            border-radius: 50%;
            width: 130px;
            height: 130px;
            margin-bottom: 5px;
        }

        .w-15 {
            width: 15%;
        }

        .w-35 {
            width: 35%;
        }

        .font-weight {
            font-weight: 600;
        }
    </style>
@endpush

