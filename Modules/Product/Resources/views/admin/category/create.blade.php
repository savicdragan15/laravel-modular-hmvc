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
            {{-- <a href="{{ route('admin.product.create') }}" class="btn m-btn--pill    btn-outline-success">
    						 Insert new Product
  					</a> --}}

            <a href="{{ route('admin.product.create') }}" class="btn btn-success m-btn m-btn--icon m-btn--wide">
  					<span>
  						<i class="la la-plus-square"></i>
  						<span>
  							Create new Product
  						</span>
  					</span>
  					</a>
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
                  <h3 class="m-portlet__head-text">
                    All products
                    <small>
                      List all products
                    </small>
                  </h3>
                </div>
              </div>
              <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                  <li class="m-portlet__nav-item">
                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                      <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                        <i class="la la-ellipsis-h m--font-brand"></i>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 21.5px;"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav">
                                <li class="m-nav__section m-nav__section--first">
                                  <span class="m-nav__section-text">
                                    Quick Actions
                                  </span>
                                </li>
                                <li class="m-nav__item">
                                  <a href="{{ route('admin.product.create') }}" class="m-nav__link">
                                    <i class="m-nav__link-icon la la-plus-circle"></i>
                                    <span class="m-nav__link-text">
                                      Insert new product
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-text">
                                      Send Messages
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                    <span class="m-nav__link-text">
                                      Upload File
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__section">
                                  <span class="m-nav__section-text">
                                    Useful Links
                                  </span>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-info"></i>
                                    <span class="m-nav__link-text">
                                      FAQ
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                    <span class="m-nav__link-text">
                                      Support
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
                                <li class="m-nav__item m--hide">
                                  <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                    Submit
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            <div class="m-portlet__body">

              <div class="m-section">
                <span class="m-section__sub">
                  Using the most basic table markup, here’s how tables look in Metronic:
                </span>


                <div class="m-section__content">
                </div>

              </div>

            </div>
        </div>

      </div>
    </div>
  </div>
@endsection


@section('scripts')
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="{{ asset('assets/admin/jquery.mjs.nestedSortable.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
        $(document).ready(function(){

          $('.sortable').nestedSortable({
            handle: 'div',
            items: 'li',
            toleranceElement: '> div',
            maxLevels: 2,
            protectRoot: true,
            startCollapsed: true
          });

      });
  </script>
@endsection
