@extends('admin.layouts.master')

@section('title')
   Create Product
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
                                <a href="#" class="m-nav__link m-nav__link--icon">
                                        <i class="m-nav__link-icon la la-home"></i>
                                </a>
                        </li>
                        <li class="m-nav__separator">
                                -
                        </li>
                        <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                        <span class="m-nav__link-text">
                                                Product
                                        </span>
                                </a>
                        </li>
                        <li class="m-nav__separator">
                                -
                        </li>
                        <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                        <span class="m-nav__link-text">
                                                All products
                                        </span>
                                </a>
                        </li>
                </ul>
        </div>
<!--                <div>
                        <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                                <span class="m-subheader__daterange-label">
                                        <span class="m-subheader__daterange-title">Today:</span>
                                        <span class="m-subheader__daterange-date m--font-brand">Jan 6</span>
                                </span>
                                <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                                        <i class="la la-angle-down"></i>
                                </a>
                        </span>
                </div>-->
        </div>
</div>
<!-- END: Subheader -->
<div class="m-content">

  <div class="row">
  <div class="col-md-12">
      <div class="m-portlet">
            <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                            Create new product
                                    </h3>
                            </div>
                    </div>
            </div>
  <!--begin::Form-->
  <form action="{{ route('admin.product.store') }}" method="POST" class="m-form">
          {{ csrf_field() }}
          @include('product::admin.partials.form')
          <div class="m-portlet__foot m-portlet__foot--fit">
              <div class="m-form__actions m-form__actions">
                  <button class="btn btn-brand m-btn m-btn--custom m-btn--icon pull-right" type="submit">
                    <span>
                      <i class="fa fa-save"></i>
                      <span>
                        Create
                      </span>
                    </span>
                  </button>
              </div>
          </div>
  </form>
  <!--end::Form-->
    </div>
</div>
</div>

</div>

@stop

@section('scripts')
  <script type="text/javascript">

       $(document).ready(function(){
          // $('.m_selectpicker').selectpicker();
          $('.m_selectpicker').select2({
            placeholder: "Select a category"
          });

          $('#lfm').filemanager('image');
       });

  </script>
@endsection
