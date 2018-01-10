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
        <div class="col-md-6">
            <div class="m-portlet">
                                            <div class="m-portlet__head">
                                                    <div class="m-portlet__head-caption">
                                                            <div class="m-portlet__head-title">
                                                                    <span class="m-portlet__head-icon m--hide">
                                                                            <i class="la la-gear"></i>
                                                                    </span>
                                                                    <h3 class="m-portlet__head-text">
                                                                            Default Form Layout
                                                                    </h3>
                                                            </div>
                                                    </div>
                                            </div>
                                            <!--begin::Form-->
                                            <form class="m-form">
                                                    <div class="m-portlet__body">
                                                            <div class="m-form__section m-form__section--first">
                                                                    <div class="form-group m-form__group">
                                                                            <label for="example_input_full_name">
                                                                                    Full Name:
                                                                            </label>
                                                                            <input type="email" class="form-control m-input" placeholder="Enter full name">
                                                                            <span class="m-form__help">
                                                                                    Please enter your full name
                                                                            </span>
                                                                    </div>
                                                                    <div class="form-group m-form__group">
                                                                            <label>
                                                                                    Email address:
                                                                            </label>
                                                                            <input type="email" class="form-control m-input" placeholder="Enter email">
                                                                            <span class="m-form__help">
                                                                                    We'll never share your email with anyone else
                                                                            </span>
                                                                    </div>
                                                                    <div class="form-group m-form__group">
                                                                            <label>
                                                                                    Subscription
                                                                            </label>
                                                                            <div class="input-group">
                                                                                    <span class="input-group-addon" id="basic-addon2">
                                                                                            $
                                                                                    </span>
                                                                                    <input type="text" class="form-control m-input" placeholder="99.9">
                                                                            </div>
                                                                    </div>
                                                                    <div class="m-form__group form-group">
                                                                            <label for="">
                                                                                    Communication:
                                                                            </label>
                                                                            <div class="m-checkbox-list">
                                                                                    <label class="m-checkbox">
                                                                                            <input type="checkbox">
                                                                                            Email
                                                                                            <span></span>
                                                                                    </label>
                                                                                    <label class="m-checkbox">
                                                                                            <input type="checkbox">
                                                                                            SMS
                                                                                            <span></span>
                                                                                    </label>
                                                                                    <label class="m-checkbox">
                                                                                            <input type="checkbox">
                                                                                            Phone
                                                                                            <span></span>
                                                                                    </label>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                                            <div class="m-form__actions m-form__actions">
                                                                    <button type="reset" class="btn btn-primary">
                                                                            Submit
                                                                    </button>
                                                                    <button type="reset" class="btn btn-secondary">
                                                                            Cancel
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
