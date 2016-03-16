<div class='form-group'>
        {!! Form::label('Theme' ) !!}
        {!! Form::text('theme' , null , ['class' => 'form-control']) !!}
    </div>
    <div class='form-group'>
        {!! Form::label('Question Description' ) !!}
        {!! Form::textarea('question' , null , ['class' => 'form-control', 'rows' => '3']) !!}
    </div>
    <div class='form-group'>
        {!! Form::submit($submitButtonText ,  ['class' => 'btn btn-primary']) !!}

        or <a href='{{url('questions')}}' class="btn btn-default" > Cancel</a>
</div>
