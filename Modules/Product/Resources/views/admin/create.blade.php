@extends('admin.layouts.master')

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
        <div class="col-lg-12">
          <div class="m-portlet">
                <div class="m-portlet__head">
                  <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                      <span class="m-portlet__head-icon m--hide">
                        <i class="la la-gear"></i>
                      </span>
                      <h3 class="m-portlet__head-text">
                        2 Columns  Form Layout
                      </h3>
                    </div>
                  </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
                  <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                      <div class="col-lg-6">
                        <label>
                         Name:
                        </label>
                        <input type="email" name="name" class="form-control m-input" placeholder="Product name">
                        <span class="m-form__help">
                          Enter name product
                        </span>
                      </div>
                      <div class="col-lg-6">
                        <label class="">
                          Contact Number:
                        </label>
                        <input type="email" class="form-control m-input" placeholder="Enter contact number">
                        <span class="m-form__help">
                          Please enter your contact number
                        </span>
                      </div>
                    </div>
                    <div class="form-group m-form__group row">
                      <div class="col-lg-6">
                        <label>
                          Address:
                        </label>
                        <div class="m-input-icon m-input-icon--right">
                          <input type="text" class="form-control m-input" placeholder="Enter your address">
                          <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                              <i class="la la-map-marker"></i>
                            </span>
                          </span>
                        </div>
                        <span class="m-form__help">
                          Please enter your address
                        </span>
                      </div>
                      <div class="col-lg-6">
                        <label class="">
                          Postcode:
                        </label>
                        <div class="m-input-icon m-input-icon--right">
                          <input type="text" class="form-control m-input" placeholder="Enter your postcode">
                          <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                              <i class="la la-bookmark-o"></i>
                            </span>
                          </span>
                        </div>
                        <span class="m-form__help">
                          Please enter your postcode
                        </span>
                      </div>
                    </div>
                    <div class="form-group m-form__group row">
                      <div class="col-lg-6">
                        <label>
                          User Group:
                        </label>
                        <div class="m-radio-inline">
                          <label class="m-radio m-radio--solid">
                            <input type="radio" name="example_2" checked="" value="2">
                            Sales Person
                            <span></span>
                          </label>
                          <label class="m-radio m-radio--solid">
                            <input type="radio" name="example_2" value="2">
                            Customer
                            <span></span>
                          </label>
                        </div>
                        <span class="m-form__help">
                          Please select user group
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions--solid">
                      <div class="row">
                        <div class="col-lg-6">
                          <button type="reset" class="btn btn-primary">
                            Save
                          </button>
                          <button type="reset" class="btn btn-secondary">
                            Cancel
                          </button>
                        </div>
                        {{-- <div class="col-lg-6 m--align-right">
                          <button type="reset" class="btn btn-danger">
                            Delete
                          </button>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                </form>
                <!--end::Form-->
              </div>
        </div>
    </div>

</div>

@stop
