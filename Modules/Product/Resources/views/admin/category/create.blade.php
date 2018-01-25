@extends('admin.layouts.master')

@section('title')
   All Categories
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
          <div>

  				</div>
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
    <form action="{{ route('admin.productcategory.store') }}" method="POST" class="m-form">
            {{ csrf_field() }}
            @include('product::admin.category.form')
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
@endsection


@section('scripts')
  <script type="text/javascript">
      $(document).ready(function(){
         // $('.m_selectpicker').selectpicker();

          $('.m_selectpicker').select2({
            placeholder: "Select a state",
            // allowClear: true
          });

        });
  </script>
@endsection
