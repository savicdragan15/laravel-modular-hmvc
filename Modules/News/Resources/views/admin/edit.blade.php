@extends('admin.layouts.master')

@section('title')
   Edit article
@endsection

@section('content')
  <!-- BEGIN: Subheader -->
  <div class="m-subheader ">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="m-subheader__title m-subheader__title--separator">
                          News
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
                                                All articles
                                          </span>
                                  </a>
                          </li>
                          <li class="m-nav__separator">
                                  -
                          </li>
                          <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                          <span class="m-nav__link-text">
                                                  Edit article - {{ $article->name }}
                                          </span>
                                  </a>
                          </li>
                  </ul>
          </div>
          <div>

            {{-- @if(config('product.has_more_image'))
              <a href="{{ route('admin.productimage.edit', ['id' => $article->id]) }}" class="btn btn-brand m-btn m-btn--icon m-btn--wide">
    					<span>
    						<i class="la la-image"></i>
    						<span>
    							 Product images
    						</span>
    					</span>
    					</a>
            @endif --}}

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


  <div class="m-content">

    @if(Session::has('message'))
      @include('product::admin.partials.notification')
    @endif

    {{ debug($article) }}

    <div class="row">
      <div class="col-md-12">
        <div class="m-portlet">
              <div class="m-portlet__head">
                      <div class="m-portlet__head-caption">
                              <div class="m-portlet__head-title">
                                      <span class="m-portlet__head-icon m--hide">
                                              <i class="la la-gear"></i>
                                      </span>
                                      <h3 class="m-portlet__head-text">
                                              Edit article - {{ $article->name }}
                                      </h3>
                              </div>
                      </div>
              </div>
    <!--begin::Form-->
    <form action="{{ route('admin.news.update', ['id' => $article->id]) }}" method="POST" class="m-form">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            @include('news::admin.partials.form')

            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <button class="btn btn-brand m-btn m-btn--custom m-btn--icon pull-right" type="submit">
                      <span>
                        <i class="fa fa-save"></i>
                        <span>
                          Save
                        </span>
                      </span>
                    </button>
                </div>
            </div>
    </form>
    <!--end::Form-->
    </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript">

       $(document).ready(function(){
          // $('.m_selectpicker').selectpicker();

          $('.m_selectpicker').select2({
            placeholder: "Select a category"
          });

          $('.tags').select2({
            placeholder: "Select a tags"
          });

          //populate select2
          $('#category_id').val({!! $article->format('categories') !!}).trigger('change');
          $('#subcategory_id').val({!! $article->format('subcategories') !!}).trigger('change');
          $('#subsubcategory_id').val({!! $article->format('subsubcategories') !!}).trigger('change');
          $('#tag_id').val({!! $article->format('tags') !!}).trigger('change');

          $('#lfm').filemanager('image');

          $('#publish_date').datetimepicker({
            todayHighlight: true,
            autoclose: true,
            pickerPosition: 'bottom-left',
            todayBtn: true,
            format: 'yyyy-mm-dd hh:ii'
          });

       });

  </script>
@endsection
