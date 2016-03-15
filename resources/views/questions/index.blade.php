@extends('layout.app')

@section('title')
<h1>
  Questions
  <small>advanced tables</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active"><a href="#">Questions</a></li>
</ol>
@stop

@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">All questions</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    <table class="table table-striped search-table">
        <thead>
        <th> Id </th>
        <th> Name </th>
        <th> Code </th>
        <th> Created at </th>
        <th></th>
        </thead>
    <tbody>
        @forelse( $questions as $question)
            <tr>
                <td>

                       {{ $question->id }}
                </td>
                <td>
                    <a href="questions/{{$question->id}}/edit">
                       {{ $question->theme}}
                     </a>
                </td>
                <td>
                   {{ $question->question}}
                </td>
                <td>
                   {{ $question->release_date}}
                </td>
                 <td>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">
                    No records to show...
                </td>
            </tr>
        @endforelse
    </tbody>
    </table>

  </div><!-- /.box-body -->
</div><!-- /.box -->

<script >

</script>

@stop
