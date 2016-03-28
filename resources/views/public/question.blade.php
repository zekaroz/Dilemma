@extends('layout.app')

@section('title')
  {{ $question->theme }}
@stop

@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Dilemma {{ $question->theme }}</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
      <h1>
        {{ $question->question }}
      </h1>
  </div><!-- /.box-body -->
</div><!-- /.box -->

  <div id="optionSection">
      @include('public.question_options', ['question_options' => $question_options,
                                             'question_id' => $question->id
                                          ])
  </div>

@stop
