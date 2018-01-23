@extends('admin.layouts.master')

@section('title')
   Images
@endsection

@section('styles')
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" media="screen" type="text/css" href="{{ asset('assets/admin/colorpicker/css/colorpicker.css') }}" />
@endsection

@section('content')
  <!-- BEGIN: Subheader -->
  <div class="m-subheader ">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="m-subheader__title m-subheader__title--separator">
                          Product
                  </h3>
                  <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                          <li class="m-nav__item m-nav__item--home">
                                  <a href="{{ route('admin.dashboard') }}" class="m-nav__link m-nav__link--icon">
                                          <i class="m-nav__link-icon la la-home"></i>
                                  </a>
                          </li>
                          <li class="m-nav__separator">
                                  -
                          </li>
                          <li class="m-nav__item">
                                  <a href="{{ route('admin.product.index') }}" class="m-nav__link">
                                          <span class="m-nav__link-text">
                                                All products
                                          </span>
                                  </a>
                          </li>
                          <li class="m-nav__separator">
                                  -
                          </li>
                          <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                          <span class="m-nav__link-text">
                                                ee
                                          </span>
                                  </a>
                          </li>
                  </ul>
          </div>

          </div>
  </div>
  <!-- END: Subheader -->

  {{ debug($product) }}
  {{ debug($product->images) }}


  <div class="m-content">
    <div class="row">

        <div class="col-lg-12">
          <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__body">
              <div class="col-md-12">

									 <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}" class="btn btn-success" style="color: white;">
									 	 <i class="fa fa-arrow-left"></i> Back to product
									 </a>

                   <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-brand" style="color: white;">
									 	 <i class="fa fa-picture-o"></i> Choose image
									 </a>

							</div>

              <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">

              @if(!$product->images->isEmpty())
                <form class="" action="{{ route('admin.productimage.update', ['id' => $product->id]) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                  <div class="input-group">
                    <ul id="sortable">
                      @foreach ($product->images as $key => $image)
                          <li class="ui-state-default" id="image-{{ $image->id }}">
                            <div class="m-portlet__body">

                              <div style="height: 200px;">
                                <img src="{{ asset($image->name) }}" alt="" width="200">
                              </div>

                              @if(config('product.has_color_image'))
                                <div class="input-group m-input-group">
                                  <span class="input-group-addon" id="basic-addon1">
                                      <i class="fa fa-pencil"></i>
                                  </span>
                                  <input type="text" name="color" class="form-control m-input" placeholder="Color" value="#bd2abd">
                                </div>
                             @endif

                              <input type="hidden" name="ids[]" value="{{ $image->id }}">

                              <div style="margin-top: 5px;">
                                <button class="btn btn-{{ $image->active ? 'success' : 'danger' }} btn-sm active-image" data-id="{{ $image->id }}" data-value="{{ $image->active ? 0 : 1 }}" type="button">
                                    {!! $image->active ? '<i class="fa fa-check"></i>' : '<i class="fa fa-close"></i>' !!}
                                </button>

                                  <button type="button" data-id="{{ $image->id }}" class="btn btn-danger btn-sm pull-right delete-image">
                                     <i class="fa fa-trash"></i> Delete
                                  </button>

                              </div>
                            </div>
                          </li>
                      @endforeach
                    </ul>
                  </div>

                  <div class="input-group">
                    <div class="m-portlet__foot m-portlet__foot--fit">
										<div class="m-form__actions">
											<button type="submit" class="btn btn-brand">
												<i class="fa fa-save"></i> Save
											</button>
										</div>
									</div>

                  </div>
                </form>
              @endif
                </div>
          </div>
        </div>

    </div>

  </div>

@endsection

@section('scripts')
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="{{ asset('assets/admin/colorpicker/js/colorpicker.js') }}"></script>
  <script type="text/javascript">

       $(document).ready(function(){
         $( "#sortable" ).sortable();
         $( "#sortable" ).disableSelection();
       });

       $('#lfm').uploadimage('image');

        // $("input[name='color']").ColorPicker({
        //     onBeforeShow: function (colpkr) {
        //       $(colpkr).fadeIn(500);
        //       $(this).ColorPickerSetColor(this.value);
        //     },
        //     onHide: function (colpkr) {
        //       console.log($(this));
        //       $(colpkr).fadeOut(500);
        //       return false;
        //     }
        // });

       $('.delete-image').on('click', function(e) {
          e.preventDefault();
          console.log($(this).attr('data-id'));

          var image_id = $(this).attr('data-id');

          var data = {
              'id' : image_id
          };

          $.ajax({
            type: "DELETE",
            url: '/admin/productimage/'+image_id,
            data: data,
            success: function(data){
              mApp.unblockPage();
              if(data.error == false){
                  $('#image-'+data.id).remove();
                  toastr.success(data.message);
              }
            }
          });

       });

       $('.active-image').on('click', function(e) {
         e.preventDefault();
         console.log($(this).attr('data-id'));

         var image_id = $(this).attr('data-id');
         var active = $(this).attr('data-value');

         var data = {
             'id' : image_id,
             'value' : active
         };

         $.ajax({
           type: "POST",
           url: '{{ route('admin.productimage.active') }}',
           data: data,
           success: function(data){
             mApp.unblockPage();
             if(data.error == false){
               var button = $('#image-'+data.id).find('.active-image');
               button.attr('data-value', data.active);
               console.log(data);

               if(data.active == 0){
                 button.removeClass('btn-danger').addClass('btn-success');
                 button.find('i').removeClass('fa-close').addClass('fa-check');
               }

               if(data.active == 1){
                 button.removeClass('btn-success').addClass('btn-danger');
                 button.find('i').removeClass('fa-check').addClass('fa-close');
               }


               console.log(button.find('i'));
               toastr.success(data.message);
             }

             if(data.error == true){
               toastr.error(data.message);
             }


           }
         });

       });


  </script>
@endsection
