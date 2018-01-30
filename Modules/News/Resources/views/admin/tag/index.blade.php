@extends('admin.layouts.master')

@section('title')
   All Tags
@endsection

@section('content')
  <!-- BEGIN: Subheader -->
  <div class="m-subheader ">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="m-subheader__title m-subheader__title--separator">
                          Tags
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
                                  <a href="{{ route('admin.news.index') }}" class="m-nav__link">
                                          <span class="m-nav__link-text">
                                                  News
                                          </span>
                                  </a>
                          </li>
                          <li class="m-nav__separator">
                                  -
                          </li>
                          <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                          <span class="m-nav__link-text">
                                                  All Tags
                                          </span>
                                  </a>
                          </li>
                  </ul>
          </div>
          <div>
            {{-- <a href="{{ route('admin.product.create') }}" class="btn m-btn--pill    btn-outline-success">
    						 Insert new Product
  					</a> --}}

            <a href="{{ route('admin.newstag.create') }}" class="btn btn-success m-btn m-btn--icon m-btn--wide">
  					<span>
  						<i class="la la-plus-square"></i>
  						<span>
  							Create new Tag
  						</span>
  					</span>
  					</a>
  				</div>
          </div>
  </div>
  <!-- END: Subheader -->


  <div class="m-content">
    
    @if(Session::has('message'))
      @include('news::admin.partials.notification')
    @endif

      <div class="row">
          <div class="col-lg-12">
              <div class="m-portlet">

                <div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													All Tags
												</h3>
											</div>
										</div>
									</div>

                  <div class="m-portlet__body">
										<!--begin::Section-->
										<div class="m-section">
											<div class="m-section__content">
												<table class="table m-table m-table--head-bg-brand">
													<thead>
														<tr>
															<th class="text-center">
																#
															</th>
															<th>
																Name
															</th>
															<th>
																Slug
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
                              <th>
                                Actions
                              </th>
														</tr>
													</thead>
													<tbody>
                            @foreach($tags as $tag)
														<tr>
															<th scope="row" class="text-center">
																{{ $tag->id }}
															</th>
															<td>
																{{ $tag->name }}
															</td>
                              <td>
                                {{ $tag->slug }}
                              </td>
                              <td class="text-center"> <i> {{ $tag->created_at ? $tag->created_at->format('d.m.Y. H:i') : '/' }} </i> </td>
                              <td class="text-center"> <i> {{ $tag->updated_at ? $tag->updated_at->format('d.m.Y. H:i') : '/' }} </i> </td>
                              <td class="text-center">
                                {!! $tag->active ? '<span id="active-'.$tag->id.'" data-value="0" data-url="'.route('admin.newstag.active', ['id' => $tag->id]).'" class="m-badge active-inactive  m-badge--success m-badge--wide">Active</span>' : '<span id="active-'.$tag->id.'" data-value="1" data-url="'.route('admin.newstag.active', ['id' => $tag->id]).'" class="m-badge active-inactive  m-badge--danger m-badge--wide">Inactive</span>' !!}
                              </td>
                              <td>
                                <a href="{{ route('admin.newstag.edit', ['id' => $tag->id]) }}" target="_blank" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">
                                  <i class="la la-edit"></i>
                                </a>
                                <button onclick="document.getElementById('delete-form-{{ $tag->id }}').submit();" type="submit" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                  <i class="la la-trash"></i>
                                </button>
                                <form  id="delete-form-{{$tag->id}}" action="{{ route('admin.newstag.destroy', ['id' => $tag->id]) }}" method="post" style="display: none;">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                </form>
                              </td>
														</tr>
                          @endforeach
													</tbody>
												</table>
											</div>
										</div>
										<!--end::Section-->
								</div>

              </div>
          </div>
      </div>

  </div>
@endsection
