@extends('layout.app')

@section('title')
<h1>
  Questions
  <small>This is the place to see all the questions</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active"><a href="#">Questions</a></li>
</ol>
@stop

@section('content')

<div class="box">
  <div class="box-header">
    <div class="col-lg-11">
    </div>
    <div class="col-lg-1">
       <div style="float:right;">
         <a name="add" href="questions/create" class="btn btn-block btn-primary">Add Question</a>
       </div>
    </div>
  </div><!-- /.box-header -->
  <div id="questionTable" class="box-body">
        @include('questions._table')

  </div><!-- /.box-body -->
</div><!-- /.box -->



<script >

function deleteQuestion(question_id){
  var postData = '_method=DELETE';
  var refreshSection = $('#questionTable');

  form_post(postData, '/questions/'+ question_id , refreshSection, true);

  feedbackSuccess('Question is deleted now, gone!');
  return false;
}
</script>

@stop
