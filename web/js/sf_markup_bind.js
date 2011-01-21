$(document).ready(function(){
    $(document).unbind('rebind.markitup');
    $(document).bind('rebind.markitup', function() {
      $(".sf_mkp").markItUp(mySettings);
  })

   $(document).trigger('rebind.markitup');
});