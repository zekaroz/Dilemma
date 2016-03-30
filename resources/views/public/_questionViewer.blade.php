<link rel="stylesheet" href="/css/dilemma.css" media="screen" title="no title" charset="utf-8">

<!-- <script src="/js/dilemma.js" charset="utf-8"></script> -->

<script type="text/javascript">
    $(function(){
        var loading = $('#loadbar').hide();
        $(document)
        .ajaxStart(function () {
            loading.show();
        }).ajaxStop(function () {
          loading.hide();
        });

        $("label.btn").on('click',function () {
          var choice = $(this).find('input:radio').val();
          $('#loadbar').show();
          $('#quiz').fadeOut();
          setTimeout(function(){
                $('#quiz').show();
                $('#loadbar').fadeOut();
               /* something else */
          }, 1500);
        });


    });
</script>

<div class="container-fluid bg-info" style="height:calc(85vh);">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3><span class="label label-warning" id="qid">{{ $question->id  }}</span> {{ $question->question }}</h3>
        </div>
        <div class="modal-body">
            <div class="col-xs-3 col-xs-offset-5">
               <div id="loadbar" style="display: none;">
                  <div class="blockG" id="rotateG_01"></div>
                  <div class="blockG" id="rotateG_02"></div>
                  <div class="blockG" id="rotateG_03"></div>
                  <div class="blockG" id="rotateG_04"></div>
                  <div class="blockG" id="rotateG_05"></div>
                  <div class="blockG" id="rotateG_06"></div>
                  <div class="blockG" id="rotateG_07"></div>
                  <div class="blockG" id="rotateG_08"></div>
              </div>
          </div>

          <div class="quiz" id="quiz" data-toggle="buttons">
           @include('public.question_options', ['question_options' => $question_options,
                                                  'question_id' => $question->id
                                               ])
       </div>
   </div>
   <div class="modal-footer text-muted">
    <span id="answer"></span>
</div>
</div>
</div>
</div>

<div id="optionSection">

</div>
