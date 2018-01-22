@extends('admin.layouts.master')

@section('title')
   All Articles
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
                                                  All Articles
                                          </span>
                                  </a>
                          </li>
                  </ul>
          </div>
          <div>
            {{-- <a href="{{ route('admin.product.create') }}" class="btn m-btn--pill    btn-outline-success">
    						 Insert new Product
  					</a> --}}

            <a href="{{ route('admin.news.create') }}" class="btn btn-success m-btn m-btn--icon m-btn--wide">
  					<span>
  						<i class="la la-plus-square"></i>
  						<span>
  							Create new Article
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
                    All articles
                    <small>
                      List all articles
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
                          <th class="text-center">
                            Featured image
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                            Secondary title
                          </th>
                          <th class="text-center">
                            Slug
                          </th>
                          <th>
                            Author
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
                          @foreach($articles as $article)
                            <tr>
                              <td class="text-center"> {{ $article->id }} </td>
                              <td class="text-center"> <img src="{{ $article->featured_image }}" alt="" width="30"> </td>
                              <td> {{ $article->name }} </td>
                              <td> {{ $article->name_secondary }} </td>
                              <td> {{ $article->slug }} </td>
                              <td> {{ $article->author->name or 'None' }} </td>
                              <td> <i> {{ $article->created_at ? $article->created_at->format('d.m.Y. H:i') : '/' }} </i> </td>
                              <td> <i> {{ $article->updated_at ? $article->updated_at->format('d.m.Y. H:i') : '/' }} </i> </td>
                              <td class="text-center">
                                {!! $article->active ? '<span class="m-badge  m-badge--success m-badge--wide">Active</span>' : '<span class="m-badge  m-badge--danger m-badge--wide">Inactive</span>' !!}
                              </td>
                              <td>
                                <a href="{{ route('admin.news.edit', ['id' => $article->id]) }}" target="_blank" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">
                                  <i class="la la-edit"></i>
                                </a>
                                <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                  <i class="la la-trash"></i>
                                </a>
                              </td>
                            </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                  {!! $articles->links() !!}
                </div>
              </div>


            </div>




        </div>
      </div>
    </div>
  </div>

@endsection
