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

@if( isset( $question_options ) )
    <div class="box">
       <div class="box-header">
          <div class="col-lg-11">
           <h3 class="box-title">
                 Options
           </h3>
         </div>
         <div class="col-lg-1">
           <div style="float:right;">
             <button type="button" name="button" class="btn btn-block btn-primary"> Add Option</button>
           </div>
         </div>
       </div>


       <div class="box-body">

            @forelse( $question_options as $index => $option)
                <div class="box">
                    <div class="box-header">
                        <div class="col-lg-11">
                            <h3 class="box-title">
                                <span>{{  $index+1  }}</span>   {{ $option->option_text  }}
                            </h3>
                        </div>
                        <div class="col-lg-1">
                          <a class="btn btn-app">
                            <i class="fa fa-edit"></i> Edit
                          </a>
                        </div>
                    </div>
                </div>

           @empty
           @endforelse
        </div>
    </div>

@else
  <div class="box">
     <div class="box-body">
          <h4>No options yet! Go ahead and Create an Option!</h4>
          <p>when you create options then the question can be used to lauch a dilemma online. Go Ahead and create one.</p>
          <div class="">
              <button id="newOpt" class="btn btn-block btn-primary">Create Option</button>
          </div>
      </div>
  </div>
@endif

@stop
