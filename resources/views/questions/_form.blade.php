<div class='form-group'>
        {!! Form::label('Theme' ) !!}
        {!! Form::text('theme' , null , ['class' => 'form-control']) !!}
    </div>
    <div class='form-group'>
        {!! Form::label('Question Description' ) !!}
        {!! Form::textarea('question' , null , ['class' => 'form-control', 'rows' => '3']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('Release Date' ) !!}
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
        {!! Form::text('release_date' , null , ['class' => 'form-control', 'data-inputmask' => '"alias": "dd/mm/yyyy"', 'data-mask' , 'id'=>'ReleaseDate']) !!}
      </div><!-- /.input group -->
    </div><!-- /.form group -->

    <div class='form-group'>
        {!! Form::label('is_open' ) !!}
        {{ Form::checkbox('is_open', 1, null, ['class' => 'field minimal']) }}
    </div>

    <div class='form-group'>
        {!! Form::submit($submitButtonText ,  ['class' => 'btn btn-primary']) !!}

        or <a href='{{url('questions')}}' class="btn btn-default" > Cancel</a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
          $("#ReleaseDate").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
    });
</script>
