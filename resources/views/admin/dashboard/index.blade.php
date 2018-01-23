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
                                                Modules
                                        </span>
                                </a>
                        </li>
                        <li class="m-nav__separator">
                                -
                        </li>
                        <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                        <span class="m-nav__link-text">
                                                All Modules
                                        </span>
                                </a>
                        </li>
                </ul>
        </div>
        {{-- <div>
          <a href="{{ route('admin.product.create') }}" class="btn m-btn--pill    btn-outline-success">
  						Insert new Product
					</a>
				</div> --}}
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
													Modules
												</h3>
											</div>
										</div>
									</div>

									<div class="m-portlet__body">
										<!--begin::Section-->
										<div class="m-section m-section--last">
											<div class="m-section__content">
												<!--begin::Preview-->
												<div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
													<div class="m-demo__preview">
														<div class="m-nav-grid">
															<div class="m-nav-grid__row">
                                @foreach (Module::getOrdered() as $key => $module)
                                  @if(Route::has('admin.'.$module->getLowerName().'.index'))
                                    <a href="{{ route('admin.'.$module->getLowerName().'.index') }}" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon {{ config($module->getLowerName().'.icon') }}"></i>
                                      <span class="m-nav-grid__text">
                                        {{ $module->getName() }}
                                      </span>
                                    </a>
                                  @endif
                                @endforeach
															</div>
														</div>
													</div>
												</div>
												<!--end::Preview-->
											</div>
										</div>
										<!--end::Section-->
									</div>
								</div>
    </div>
  </div>
</div>

@stop


@section('scripts')
  {{-- <script src="{{ asset('assets/admin/demo/default/custom/components/datatables/base/data-ajax.js') }}" type="text/javascript"></script> --}}
@endsection
