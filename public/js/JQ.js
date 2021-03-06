

    function loadingStart(){
        //let's just show a little spinner;
        $('.loadingDiv').show();
    }

    function loadingEnd(){
        //let's hide a little spinner;
        setTimeout(
            function(){
              $('.loadingDiv').hide();
            }
            ,
          1
        );
    }

    function clearForm(formId){
            $(':input',formId)
              .not(':button, :submit, :reset, :hidden')
              .val('')
              .removeAttr('checked')
              .removeAttr('selected');

        return false;
    }

    function successInputEffect(inputElement){

        var original_color = inputElement.css("border");
        var original_border = inputElement.css("borderWidth");

        // efect in
        inputElement.animate({
            borderWidth: "3px",
            borderColor: "green",
            opacity: 1
          }, 150 );

          // efect in
          inputElement.animate({
              borderWidth: original_border,
              opacity: 1
            }, 150 );

    }

    // function to handle form posts, and automatic refresh of the screen
    // data - is the data to post to the url
    // url - is the post route to send the data to
    // refreshElement - when set, makes a jquery load on that div with the response if OK.
    function form_post(data, url, refreshElement, loadingOpt){
            if(loadingOpt)
              loadingStart();
          // now that it's loading let's send our request
          $.ajax({
             type: "POST",
             url: url,
             data: data,
             success: function(viewRendered) {
               // this function is suposed to receive a full view on the resonse
               // if refresh element is set the we must refresh it on success
                if (refreshElement){
                    refreshElement[0].innerHTML = viewRendered;
                }
                loadingEnd();
             }.bind(refreshElement )
             ,
             error:  function(XMLHttpRequest, textStatus, errorThrown) {
                    console.error("Some error submiting the form..." +  errorThrown);
            }
           });
           return false;
    }

    // interface to feedback messages
    function feedbackSuccess(message){

        if(!message)
          return;
        // this checks if alertify is here
        if(alertify){
            alertify.success(message);
        }
    }

    // interface to feedback messages
    function feedbackError(message){
        // this checks if alertify is here
        if(alertify){
            alertify.error(message);
        }
    }
