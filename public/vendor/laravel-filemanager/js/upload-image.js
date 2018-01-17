(function( $ ){

  $.fn.uploadimage = function(type, options) {
    type = type || 'file';

    this.on('click', function(e) {
      var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
      localStorage.setItem('target_input', $(this).data('input'));
      localStorage.setItem('target_preview', $(this).data('preview'));
      window.open(route_prefix + '?type=' + type, 'FileManager', 'width=1200,height=600');

      window.SetUrl = function (url, file_path) {
          console.log(file_path);
          var product_id = $('#product_id').val();

          var data = {
              'product_id' : product_id,
              'name' : file_path
          };

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
            type: "POST",
            url: '/admin/productimage',
            data: data,
            success: function(data){
              console.log(data);
              location.reload();
            }
          });


          //set the value of the desired input to image url
          // var target_input = $('#' + localStorage.getItem('target_input'));
          // target_input.val(file_path).trigger('change');

          //set or change the preview image src
          // var target_preview = $('#' + localStorage.getItem('target_preview'));
          // target_preview.attr('src', url).trigger('change');
      };
      return false;
    });
  };

})(jQuery);
