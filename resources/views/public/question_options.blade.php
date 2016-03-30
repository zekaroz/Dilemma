@if( count( $question_options ) > 0 )
      @forelse( $question_options as $index => $option)
            <label class="element-animation{{ $index+1 }} btn btn-lg btn-primary btn-block">
              <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i>
              </span>
              <input type="radio" name="{{ $index }}_answer" value="{{ $option->id }}"> {{ $option->option_text }}
            </label>
       @empty
       @endforelse
@endif
