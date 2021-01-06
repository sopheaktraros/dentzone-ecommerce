@extends('layouts.theme')

@section('title','Edit')
@section('page-name-class','edit-faq')
@section('breadcrumbs',Breadcrumbs::render('answer-and-questions.edit'))

@section('content')
<div id="customers">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{ Form::open(['url' => url('answer-and-questions/'.$answerAndQuestion->id), 'files' => 'true' , 'id' => 'form-validation','autocomplete' => 'off', 'method' => 'put']) }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Question</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="question" name="question"
                                    value="{{$answerAndQuestion->question}}" placeholder="Question" required>
                                {!!  $errors->has('question') ? showError($errors->first('question')) : ''  !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Answer</label><span class="text-danger">*</span>
                        <textarea type="text" class="form-control" id="answer" placeholder="Remark" name="answer" cols="30" rows="3" required>{{$answerAndQuestion->answer}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Status(Inactive/Active)</label><span class="text-danger">*</span>
                        <div class="can-toggle can-toggle--size-small">
                            <input id="status" type="checkbox" value="1" {{ $answerAndQuestion->active == 1 ? 'checked' : ''}} name="active" />
                            <label for="status" class="label-switch-status">
                                <div class="can-toggle__switch" data-checked="Active" data-unchecked="Inactive"></div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.footer')
        <a href="{{ url('answer-and-questions') }}" class="btn btn-light"><i class="fas fa-chevron-left"></i> Back</a>
        <button type="submit" class="btn btn-primary" id="create"><i class="fas fa-pen"></i> Update</button>
    @endcomponent
    {{Form::close()}}
</div>
@endsection
