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
                                                  Categories
                                          </span>
                                  </a>
                          </li>
                          <li class="m-nav__separator">
                                  -
                          </li>
                          <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                          <span class="m-nav__link-text">
                                                  All Categories
                                          </span>
                                  </a>
                          </li>
                  </ul>
          </div>
          <div>
            {{-- <a href="{{ route('admin.product.create') }}" class="btn m-btn--pill    btn-outline-success">
    						 Insert new Product
  					</a> --}}

            <a href="{{ route('admin.productcategory.create') }}" class="btn btn-success m-btn m-btn--icon m-btn--wide">
  					<span>
  						<i class="la la-plus-square"></i>
  						<span>
  							Create new Category
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
                    All categories
                    <small>
                      List all categories
                    </small>
                  </h3>
                </div>
              </div>
              {{-- <div class="m-portlet__head-tools">
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
              </div> --}}
            </div>

            <div class="m-portlet__body">

              <div class="m-section">
                <span class="m-section__sub">
                  Using the most basic table markup, here’s how tables look in Metronic:
                </span>


                <div class="m-section__content">
                  <div class="table-responsive ">
                  <table class="table m-table m-table--head-bg-brand table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>
                          Name
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
                      @foreach ($categories as $category)
                        <tr class="btn-metal">
                          <td class="text-left">{{ $category->id }}</td>
                          <td>{{ $category->name }}</td>
                          <td class="text-center"><i> {{ $category->created_at ? $category->created_at->format('d.m.Y. H:i') : '/' }} </i></td>
                          <td class="text-center"><i> {{ $category->updated_at ? $category->updated_at->format('d.m.Y. H:i') : '/' }} </i></td>
                          <td class="text-center">
                            {!! $category->active ? '<span id="active-'.$category->id.'" data-value="0" data-url="'.route('admin.productcategory.active', ['id' => $category->id]).'" class="m-badge active  m-badge--success m-badge--wide">Active</span>' : '<span id="active-'.$category->id.'" data-value="1" data-url="'.route('admin.productcategory.active', ['id' => $category->id]).'" class="m-badge active  m-badge--danger m-badge--wide">Inactive</span>' !!}
                          </td>
                          <td class="text-center">
                            <a href="{{ route('admin.productcategory.edit', ['id' => $category->id]) }}" target="_blank" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">
                              <i class="la la-edit"></i>
                            </a>
                            <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                              <i class="la la-trash"></i>
                            </a>
                          </td>
                        </tr>
                        @foreach($category->subcategories as $subcategory)
                          <tr class="btn-secondary">
                            <td class="text-center">{{ $subcategory->id }}</td>
                            <td>{{ $subcategory->name }}</td>
                            <td class="text-center"><i> {{ $subcategory->created_at ? $subcategory->created_at->format('d.m.Y. H:i') : '/' }} </i></td>
                            <td class="text-center"><i> {{ $subcategory->updated_at ? $subcategory->updated_at->format('d.m.Y. H:i') : '/' }} </i></td>
                            <td class="text-center">
                              {!! $subcategory->active ? '<span id="active-'.$subcategory->id.'" data-value="0" data-url="'.route('admin.productcategory.active', ['id' => $subcategory->id]).'" class="m-badge active  m-badge--success m-badge--wide">Active</span>' : '<span id="active-'.$subcategory->id.'" data-value="1" data-url="'.route('admin.productcategory.active', ['id' => $subcategory->id]).'" class="m-badge active  m-badge--danger m-badge--wide">Inactive</span>' !!}
                            </td>
                            <td class="text-center">
                              <a href="{{ route('admin.productcategory.edit', ['id' => $subcategory->id]) }}" target="_blank" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">
                                <i class="la la-edit"></i>
                              </a>
                              <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                <i class="la la-trash"></i>
                              </a>
                            </td>
                          </tr>
                          @foreach($subcategory->subsubcategories as $subsubcategory)
                          <tr class="btn-light">
                            <td class="text-right">{{ $subsubcategory->id }}</td>
                            <td>{{ $subsubcategory->name }}</td>
                            <td class="text-center"><i> {{ $subsubcategory->created_at ? $subsubcategory->created_at->format('d.m.Y. H:i') : '/' }} </i></td>
                            <td class="text-center"><i> {{ $subsubcategory->updated_at ? $subsubcategory->updated_at->format('d.m.Y. H:i') : '/' }} </i></td>
                            <td class="text-center">
                              {!! $subsubcategory->active ? '<span id="active-'.$subsubcategory->id.'" data-value="0" data-url="'.route('admin.productcategory.active', ['id' => $subsubcategory->id]).'" class="m-badge active  m-badge--success m-badge--wide">Active</span>' : '<span id="active-'.$subsubcategory->id.'" data-value="1" data-url="'.route('admin.productcategory.active', ['id' => $subsubcategory->id]).'" class="m-badge active  m-badge--danger m-badge--wide">Inactive</span>' !!}
                            </td>
                            <td class="text-center">
                              <a href="{{ route('admin.productcategory.edit', ['id' => $subsubcategory->id]) }}" target="_blank" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">
                                <i class="la la-edit"></i>
                              </a>
                              <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                <i class="la la-trash"></i>
                              </a>
                            </td>
                          </tr>
                         @endforeach
                        @endforeach
                      @endforeach
                    </tbody>
                  </table>
                  </div>
                  {{-- {!! $categories->links() !!} --}}
                </div>

              </div>

            </div>
        </div>

      </div>
    </div>
  </div>
@endsection


@section('scripts')
  <script type="text/javascript">
      $(document).ready(function(){

      });
  </script>
@endsection
