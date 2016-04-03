@if( Session::get('flash_notification.level')  == 'success' )
  feedbackSuccess('{{ Session::get('flash_notification.message') }}');
@endif
@if(  Session::get('flash_notification.level')  == 'error' )
  feedbackError('{{ Session::get('flash_notification.message') }}');
@endif
