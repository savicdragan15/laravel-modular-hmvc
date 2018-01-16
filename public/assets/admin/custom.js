$(document).ready(function() {
  $('#active').on('change', function() {
    //console.log($(this).val());
    var val = $(this).val();

    if(val == 1){
       $(this).val(0);
       $(this).attr('name', 'active');
    }else{
      $(this).val(1);
       $(this).attr('name', 'active');
    }

  });

});
