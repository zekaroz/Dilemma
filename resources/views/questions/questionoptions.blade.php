  @if( count( $question_options ) > 0 )
      <div class="box">
         <div class="box-header">
            <div class="col-lg-11">
             <h3 class="box-title">
                   Options
             </h3>
           </div>
           <div class="col-lg-1">
             <div style="float:right;">
               <button type="button" id="addOption" onclick="addOption();" class="btn btn-block btn-primary"> Add Option</button>
             </div>
           </div>
         </div>


         <div class="box-body">

              @forelse( $question_options as $index => $option)
                  <div class="box">
                      <div class="box-header">
                          <div class="col-lg-11">
                              <h3 class="box-title">
                                   {!! Form::model($option,[
                                                              'method' => 'PATCH',
                                                              'action'=> ['QuestionsController@update', $option->question_id],
                                                              'class' => 'optionForm',
                                                              'data-id' => $option->id
                                                              ]) !!}
                                    <div class="input-group">
                                      <span class="input-group-addon">
                                          {{  $index+1  }}
                                      </span>
                                      {!! Form::text('option_text',null, ['class' => 'form-control input-lg',
                                                                          'onblur' => 'saveOption(this);'
                                                                          ]) !!}
                                    </div>
                                   {!! Form::close() !!}
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

  @else
      <div class="box">
         <div class="box-body">
              <h4>No options yet! Go ahead and Create an Option!</h4>
              <p>when you create options then the question can be used to lauch a dilemma online. Go Ahead and create one.</p>
              <div class="">
                  <button id="newOpt" onclick="addOption();" class="btn btn-block btn-primary">Create Option</button>
              </div>
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
