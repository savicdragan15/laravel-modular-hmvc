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
          <a href="{{ route('admin.product.create') }}" class="btn m-btn--pill    btn-outline-success">
  						Insert new Product
					</a>
				</div>
        </div>
</div>
<!-- END: Subheader -->


@stop

@section('scripts')
  <script src="{{  Module::asset('product:js/html-table.js') }}" type="text/javascript"></script>
@endsection
