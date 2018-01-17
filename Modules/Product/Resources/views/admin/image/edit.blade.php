@extends('admin.layouts.master')

@section('title')
   Images
@endsection

@section('styles')
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
								<div class="input-group">
							    <span class="input-group-btn">
										 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-brand" style="color: white;">
										 	 <i class="fa fa-picture-o"></i> Choose image
										 </a>
							    </span>
							</div>

							</div>
            </div>

              @if(!$product->images->isEmpty())
                <ul id="sortable">
                  @foreach ($product->images as $key => $image)
                      <li class="ui-state-default">
                        <div class="m-portlet__body">
                          <img src="{{ asset($image->name) }}" alt="" width="200">
                          <div style="margin-top: 5px;">
                            <button class="btn btn-success btn-sm"type="button" name="button">ee</button>
                          </div>
                        </div>
                      </li>
                  @endforeach
                </ul>
              @endif
          </div>
        </div>
        <input type="text" name="" id="product_id" value="{{ $product->id }}">
    </div>

  </div>

@endsection

@section('scripts')
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">

       $(document).ready(function(){
         $( "#sortable" ).sortable();
         $( "#sortable" ).disableSelection();
       });

       $('#lfm').uploadimage('image');

  </script>
@endsection
