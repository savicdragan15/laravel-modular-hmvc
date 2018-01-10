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
<div class="m-content">
  <div class="row">
    <div class="col-md-12">
      <div class="m-portlet">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  All Products
                </h3>
              </div>
            </div>
          </div>
          <div class="m-portlet__body">
            <!--begin::Section-->
            <div class="m-section">
              <span class="m-section__sub">
                {{-- Neki text --}}
              </span>
              <div class="m-section__content">
                <table class="table m-table m-table--head-bg-success table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Name
                      </th>
                      <th class="text-center">
                        Price
                      </th>
                      <th class="text-center">
                        Created at
                      </th>
                      <th class="text-center">
                        Updated at
                      </th>
                      <th class="text-center">
                        Active
                      </th>
                      <th class="text-center">
                        Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $key => $product)
                      <tr>
                        <td>{{ $product->id }}</td>
                        <td> {{ $product->name }} </td>
                        <td class="text-center"> {{ number_format($product->price, 2) }} </td>
                        <td class="text-center"> {{ $product->created_at ? $product->created_at->format('d.m.Y.') : '/' }} </td>
                        <td class="text-center"> {{ $product->updated_at ? $product->updated_at->format('d.m.Y.') : '/' }} </td>
                        <td class="text-center"> {!! $product->active ? '<span class="m-badge  m-badge--success m-badge--wide">Active</span>' : '<span class="m-badge  m-badge--danger m-badge--wide">Inactive</span>' !!}  </td>
                        <td class="text-center">
                          <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}" target="_blank" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">
                            <i class="la la-edit"></i>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>

                {!! $products->links() !!}
              </div>
            </div>
            <!--end::Section-->
        </div>
        <!--end::Form-->
      </div>
    </div>
  </div>
</div>

@stop


@section('scripts')
  {{-- <script src="{{ asset('assets/admin/demo/default/custom/components/datatables/base/data-ajax.js') }}" type="text/javascript"></script> --}}
@endsection
