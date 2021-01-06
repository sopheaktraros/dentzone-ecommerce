@extends('layouts.theme')

@section('title','FAQ')
@section('page-name-class','faq')

@section('breadcrumbs',Breadcrumbs::render('answer and questions'))

@section('content')
<div id="answer-and-question">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="tools text-right">
                        <a href="{{route('answer-and-questions.create')}}" class="btn btn-primary "><i class="fas fa-plus"></i> New</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="answer-and-question-table" data-route="{{ route('answer-and-question.table') }}"
                                class="table table-sm table-bordered table-striped" cellspacing="0"
                                width="100%" role="grid" style="width: 100%;">
                            <thead>
                            <tr>
                                <td><strong>#</strong></td>
                                <td width="150"><strong>Question</strong></td>
                                <td><strong>Answer</strong></td>
                                <td width="55"><strong>Status</strong></td>
                                <td width="65"><strong>Action</strong></td>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
    <style>
        .bg-danger, .bg-success {
            border-radius: 10px;
        }
    </style>
@endpush
