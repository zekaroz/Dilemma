@extends('layout.app')

@section('title')
<h1>
  Edit Question
  <small>{{$question->theme}}</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active"><a href="#">Questions</a></li>
</ol>
@stop

@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Edit Question {{ $question->theme }}</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    {!! Form::model($question,['method' => 'PATCH', 'action'=> ['QuestionsController@update', $question->id] ]) !!}
         @include('questions._form', ['submitButtonText' => 'Update Question'  ])
    {!! Form::close() !!}
  </div><!-- /.box-body -->
</div><!-- /.box -->

  <div id="optionSection">
      @include('questions.questionoptions', ['question_options' => $question_options,
                                             'question_id' => $question->id
                                          ])
  </div>

@stop
