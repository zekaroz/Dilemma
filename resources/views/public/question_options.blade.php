@if( count( $question_options ) > 0 )
    <div class="box">
       <div class="box-header">
          <div class="col-lg-11">
           <h3 class="box-title">
                 Select your Choice!
           </h3>
         </div>
       </div>


       <div class="box-body">

            @forelse( $question_options as $index => $option)
                <div class="box">
                    <div class="box-header">
                        <div class="col-lg-11">
                            <h3 class="box-title">
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" name="name" value="{{   $option->id   }}">
                                    </span>
                                        {{ $option->option_text }}
                                    </div>
                            </h3>
                        </div>
                        <div class="col-lg-1">
                          <button type="button" class="btn btn-block btn-default deleteOption  input-lg"  style="width:50px;" onclick="deleteOption({{ $option->id }});"> <i class="fa fa-trash-o"></i> </button>
                        </div>
                    </div>
                </div>

           @empty


           @endforelse
        </div>
    </div>
@endif


<script type="text/javascript">

          //function to save each option on blur
          function saveOption(inputElement){
            var form = $(inputElement).closest('.optionForm');

            var postData = form.serialize();
            // this is a post method to the articles/all route
            form_post(postData, '/question_option/'+ form.attr('data-id') +'/save' , null, false);

            successInputEffect($(inputElement));

            return false;
          }

          function deleteOption(option_id){
            var postData = '';
            var refreshSection = $('#optionSection');

            form_post(postData, '/question_option/'+ option_id  +'/remove' , refreshSection, true);
            return false;
          }

          function addOption(){
              var postData = '';
              var refreshSection = $('#optionSection');

              form_post(postData, '/question_option/'+ {{  $question_id  }} +'/add' , refreshSection, true);
              return false;
          }

</script>
