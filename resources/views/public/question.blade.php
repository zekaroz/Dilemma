@extends('layout.app_naked')

@section('title')
  {{ $question->theme }}
@stop

@section('content')

<div class="">
  <span>Share This: </span>
  <input type="text" style="width:700px;" onclick="this.select();" name="name" value="{{url('/dilemma/'.$question->key) }}">
</div>

  @include('public._questionViewer')


@stop
