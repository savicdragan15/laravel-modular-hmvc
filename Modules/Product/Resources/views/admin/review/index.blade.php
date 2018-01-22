@extends('admin.layouts.master')

@section('title')
   All Reviews
@endsection

@section('content')
{{ debug($reviews) }}
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                        Review
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

          {{-- <a href="{{ route('admin.product.create') }}" class="btn btn-success m-btn m-btn--icon m-btn--wide">
					<span>
						<i class="la la-plus-square"></i>
						<span>
							Create new Product
						</span>
					</span>
					</a> --}}
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
                  All reviews
                  <small>
                    List all reviews
                  </small>
                </h3>
              </div>
            </div>
          </div>
									<div class="m-portlet__body">
										<!--begin::Section-->
										<div class="m-section">
											<span class="m-section__sub">
												{{-- Using the most basic table markup, here’s how tables look in Metronic: --}}
											</span>
											<div class="m-section__content">
                        <div class="table-responsive ">
								              <table class="table m-table m-table--head-bg-brand table-bordered table-hover">
													<thead>
														<tr>
															<th class="text-center">
																#
															</th>
															<th>
																Name
															</th>
                              <th>
                                Product
                              </th>
                              <th>
																Content
															</th>
															<th class="text-center">
																Created at
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
                              @foreach ($reviews as $review)
                                  <tr>
                                    <td class="text-center"> {{ $review->id }} </td>
                                    <td> {{ $review->name }} </td>
                                    <td> <a href="{{ route('admin.product.edit', ['id' => $review->product->id]) }}" target="_blank"> {{ $review->product->name }} </a> </td>
                                    <td> {!! $review->content !!} </td>
                                    <td class="text-center">
                                      <i> {{ $review->created_at ? $review->created_at->format('d.m.Y. H:i') : '/' }} </i>
      															</td>
                                    <td class="text-center">
                                      {!! $review->active ? '<span class="m-badge  m-badge--success m-badge--wide">Active</span>' : '<span class="m-badge  m-badge--danger m-badge--wide">Inactive</span>' !!}
                                    </td>
                                    <td></td>
                                  </tr>
                              @endforeach
													</tbody>
												</table>
                        </div>
                        {!! $reviews->links() !!}
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
  <script src="{{  Module::asset('product:js/html-table.js') }}" type="text/javascript"></script>
@endsection
