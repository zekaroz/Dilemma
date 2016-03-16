@extends('layout.app')

@section('title')
<h1>
New Question
  <small>this is a new question</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active"><a href="#">Questions</a></li>
</ol>
@stop

@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">New Question</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['method' => 'POST', 'action'=> ['QuestionsController@store'] ]) !!}
         @include('questions._form', ['submitButtonText' => 'Create Question'  ])
    {!! Form::close() !!}
  </div><!-- /.box-body -->
</div><!-- /.box -->

@stop
