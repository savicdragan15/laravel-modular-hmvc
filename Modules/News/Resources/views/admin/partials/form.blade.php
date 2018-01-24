<div class="m-portlet__body">

  <div class="form-group m-form__group row">
    <div class="col-lg-6">
      <label>
        Title:
      </label>
      <div class="input-group m-input-group">
        <span class="input-group-addon" id="basic-addon1">
            <i class="fa fa-chevron-right"></i>
        </span>
      <input type="text" name="name" class="form-control m-input {{ $errors->has('name') ? 'has-error' : '' }} " placeholder="Name" value="{{ isset($article) ? $article->name : old('name') }}">
    </div>
    @if($errors->has('name'))
        <span class="m-form__help has-error">
           {{ $errors->first('name') }}
        </span>
    @endif
    </div>

    <div class="col-lg-6">
      <label class="">
        Categories:
      </label>
      <select class="form-control m-bootstrap-select m_selectpicker" multiple name="category_id[]" id="category_id">
        @foreach ($categories as $key => $category)
           <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>


  </div>


  <div class="form-group m-form__group row">
      <div class="col-lg-6">
        <label>
          Secondary title:
        </label>

        <div class="input-group m-input-group">
          <span class="input-group-addon" id="basic-addon1">
              <i class="fa fa-chevron-right"></i>
          </span>
          <input type="text" name="name_secondary" class="form-control m-input {{ $errors->has('name_secondary') ? 'has-error' : '' }} " placeholder="Secondary title" value="{{ isset($article) ? $article->name_secondary : old('name_secondary') }}">
          @if($errors->has('name_secondary'))
              <span class="m-form__help has-error">
                 {{ $errors->first('name_secondary') }}
              </span>
          @endif
        </div>

      </div>

      <div class="col-lg-6">
        <label class="">
          Sub Categories:
        </label>
        <select class="form-control m-bootstrap-select m_selectpicker" multiple name="subcategory_id[]" id="subcategory_id">
          @foreach ($categories as $key => $category)
            <optgroup label="{{ $category->name }}">
                @foreach ($category->subcategories as $key => $subcatgories)
                  <option value="{{ $subcatgories->id }}">{{ $subcatgories->name }}</option>
                @endforeach
            </optgroup>

          @endforeach
        </select>
      </div>
  </div>

  <div class="form-group m-form__group row">
      <div class="col-lg-6">
        <label>
          Slug:
        </label>

        <div class="input-group m-input-group">
          <span class="input-group-addon" id="basic-addon1">
              <i class="fa fa-chevron-right"></i>
          </span>
          <input type="text" name="slug" class="form-control m-input {{ $errors->has('slug') ? 'has-error' : '' }} " placeholder="Slug" value="{{ isset($article) ? $article->slug : old('slug') }}">
        </div>
        @if($errors->has('slug'))
            <span class="m-form__help has-error">
               {{ $errors->first('slug') }}
            </span>
        @endif

      </div>

      <div class="col-lg-6">
        <label class="">
          Sub Sub Categories:
        </label>

        <select class="form-control m-bootstrap-select m_selectpicker" multiple name="subsubcategory_id[]" id="subsubcategory_id">
          @foreach ($categories as $key => $category)
                @foreach ($category->subcategories as $key => $subcatgory)
                  <optgroup label="{{ $category->name }} > {{ $subcatgory->name }}">
                  @foreach ($subcatgory->subsubcategories as $key => $subsubcategory)
                      <option value="{{ $subsubcategory->id }}">{{ $subsubcategory->name }}</option>
                  @endforeach
                  </optgroup>
                @endforeach
          @endforeach
        </select>

      </div>
  </div>

  <div class="form-group m-form__group row">
    <div class="col-lg-6">
      <label>
        Publish date:
      </label>

      <div class="input-group m-input-group">
        <span class="input-group-addon" id="basic-addon1">
            <i class="fa fa-calendar"></i>
        </span>

        <input type="text" name="publish_date" id="publish_date" class="form-control m-input {{ $errors->has('publish_date') ? 'has-error' : '' }} " placeholder="Publish date" value="{{ isset($article) ? $article->publish_date : old('publish_date') }}">

        @if($errors->has('publish_date'))
            <span class="m-form__help has-error">
               {{ $errors->first('publish_date') }}
            </span>
        @endif

      </div>
    </div>

    <div class="col-lg-6">
      <label>
        Tags:
      </label>

      <select class="form-control m-bootstrap-select m_selectpicker tags" multiple name="tag_id[]" id="tag_id">
        @foreach ($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
      </select>

    </div>

  </div>

  <div class="form-group m-form__group row">

    <div class="col-lg-6">

      <label class="m-checkbox m-checkbox--state-brand">
          <input type="checkbox" {{ isset($article) && $article->active == 1 ? 'checked' : '' }} value="{{ isset($article) ? $article->active : 0 }}" name="active" id="active">
          Active
          <span></span>
      </label>

      <div>
        <label class="m-checkbox m-checkbox--state-brand">
            <input type="checkbox" {{ isset($article) && $article->featured == 1 ? 'checked' : '' }} value="{{ isset($article) ? $article->featured : 0 }}" name="featured" id="featured">
            Featured
            <span></span>
        </label>
      </div>

    </div>

    <div class="col-md-6">
      <label>Featured image: </label>
      <div class="input-group">
        <span class="input-group-btn">
           <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-brand" style="color: white;">
             <i class="fa fa-picture-o"></i> Choose
           </a>

        </span>
         <input id="thumbnail" class="form-control" type="hidden" name="featured_image" value="{{ isset($article) && !is_null($article->featured_image) ? $article->featured_image : old('featured_image') }}">
    </div>
    <img id="holder" style="margin-top:15px;max-height:100px;" src="{{ isset($article) && !is_null($article->featured_image) ? asset($article->featured_image) : old('featured_image') }}">
    </div>

  </div>


  <div class="form-group m-form__group row">
      <div class="col-lg-12">
        <label> Short text: </label>
        <textarea name="short_text" class="form-control m-input m-input--air" rows="8" cols="80">{!! isset($article) ? $article->short_text : old('short_text') !!}</textarea>
      </div>
  </div>

  <div class="form-group m-form__group row">
      <div class="col-lg-12">
        <label> Long text: </label>
        <textarea name="long_text" class="ckeditor" rows="8" cols="80">{!! isset($article) ? $article->long_text : old('long_text') !!}</textarea>
      </div>
  </div>

  <div class="m-form__group form-group row">
    <div class="col-lg-6">
      <label>
        Seo title:
      </label>

      <div class="input-group m-input-group">
      <span class="input-group-addon" id="basic-addon1">
          <i class="fa fa-chevron-right"></i>
      </span>
      <input type="text" name="seo_title" class="form-control m-input {{ $errors->has('seo_title') ? 'has-error' : '' }} " placeholder="Seo title" value="{{ isset($article) ? $article->seo_title : old('seo_title') }}">
      </div>
    </div>

    <div class="col-lg-6">
      <label>
        Seo keywords:
      </label>

      <div class="input-group m-input-group">
      <span class="input-group-addon" id="basic-addon1">
          <i class="fa fa-chevron-right"></i>
      </span>
      <input type="text" name="seo_keywords" class="form-control m-input {{ $errors->has('seo_keywords') ? 'has-error' : '' }} " placeholder="Seo keywords" value="{{ isset($article) ? $article->seo_keywords : old('seo_keywords') }}">
    </div>
    </div>
  </div>


  <div class="m-form__group form-group row">
      <div class="col-md-12">
        <label>
            Seo description:
        </label>
        <textarea name="seo_description" class="form-control m-input m-input--air"  rows="10">{!! isset($article) ? $article->seo_description : old('seo_description') !!}</textarea>
      </div>
  </div>


</div>
