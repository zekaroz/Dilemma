@extends('layout.app_naked')

@section('title')
  {{ $question->theme }}
@stop

@section('content')

    <h1>This is just a Preview!</h1>
    <a class="btn btn-default" href='{{ url('/questions/'.$question->id.'/edit')  }}' > Go back</a>
    <div class="">
      <span>Share This: </span>
  <input type="text" style="width:700px;" onclick="this.select();" name="name" value="{{url('/dilemma/'.$question->key) }}">
    </div>

  @include('public._questionViewer')

@stop
