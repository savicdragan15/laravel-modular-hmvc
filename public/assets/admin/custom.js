$(document).ready(function() {

  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  };

  $("button[type='submit']").on('click', function(){
      mApp.blockPage();
  });

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    beforeSend: function(){
      mApp.blockPage();
    }
});

  $('#active').on('change', function() {
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
