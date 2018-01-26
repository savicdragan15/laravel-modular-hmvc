<<<<<<< HEAD
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
      <input type="text" name="name" class="form-control m-input {{ $errors->has('name') ? 'has-error' : '' }} " placeholder="Name" value="{{ isset($category) ? $category->name : old('name') }}">
    </div>
    @if($errors->has('name'))
        <span class="m-form__help has-error">
           {{ $errors->first('name') }}
        </span>
    @endif
    </div>

    <div class="col-lg-6">
      <label class="">
        Parent:
      </label>
      <select class="form-control m-bootstrap-select m_selectpicker"  name="parent_id" id="parent_id">
        <option value="{{ null }}">No parent</option>
        @foreach ($categories as $key => $value)
           <option value="{{ $value->id }}">{{ $value->name }}</option>
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
          <input type="text" name="slug" class="form-control m-input {{ $errors->has('slug') ? 'has-error' : '' }} " placeholder="Slug" value="{{ isset($category) ? $category->slug : old('slug') }}">
          @if($errors->has('slug'))
              <span class="m-form__help has-error">
                 {{ $errors->first('slug') }}
              </span>
          @endif
        </div>

      </div>

      <div class="col-lg-6">
        <label class="">
          Sub Parent:
        </label>
        <select class="form-control m-bootstrap-select m_selectpicker" name="subparent_id" id="subparent_id">
          <option value="{{ null }}">No subparent</option>
          @foreach ($categories as $key => $value)
            <optgroup label="{{ $value->name }}">
                @foreach ($value->subcategories as $key => $subcatgories)
                  <option value="{{ $subcatgories->id }}">{{ $subcatgories->name }}</option>
                @endforeach
            </optgroup>
          @endforeach
        </select>
      </div>
  </div>


</div>
=======
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
      <input type="text" name="name" class="form-control m-input {{ $errors->has('name') ? 'has-error' : '' }} " placeholder="Name" value="{{ isset($category) ? $category->name : old('name') }}">
    </div>
    @if($errors->has('name'))
        <span class="m-form__help has-error">
           {{ $errors->first('name') }}
        </span>
    @endif
    </div>

    <div class="col-lg-6">
      <label class="">
        Parent:
      </label>
      <select class="form-control m-bootstrap-select m_selectpicker"  name="parent_id" id="parent_id">
        <option value="{{ null }}">No parent</option>
        @foreach ($categories as $key => $value)
           <option value="{{ $value->id }}">{{ $value->name }}</option>
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
          <input type="text" name="slug" class="form-control m-input {{ $errors->has('slug') ? 'has-error' : '' }} " placeholder="Slug" value="{{ isset($category) ? $category->slug : old('slug') }}">
          @if($errors->has('slug'))
              <span class="m-form__help has-error">
                 {{ $errors->first('slug') }}
              </span>
          @endif
        </div>

      </div>

      <div class="col-lg-6">
        <label class="">
          Sub Parent:
        </label>
        <select class="form-control m-bootstrap-select m_selectpicker" name="subparent_id" id="subparent_id">
          <option value="{{ null }}">No subparent</option>
          @foreach ($categories as $key => $value)
            <optgroup label="{{ $value->name }}">
                @foreach ($value->subcategories as $key => $subcatgories)
                  <option value="{{ $subcatgories->id }}">{{ $subcatgories->name }}</option>
                @endforeach
            </optgroup>
          @endforeach
        </select>
      </div>
  </div>


  <div class="m-form__group form-group row">
      <div class="col-md-6">
        <label class="m-checkbox m-checkbox--state-brand">
            <input type="checkbox" {{ isset($category) && $category->active == 1 ? 'checked' : '' }} value="{{ isset($category) ? $category->active : 0 }}" name="active" id="active">
            Active
            <span></span>
        </label>
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
      <input type="text" name="seo_title" class="form-control m-input {{ $errors->has('seo_title') ? 'has-error' : '' }} " placeholder="Seo title" value="{{ isset($category) ? $category->seo_title : old('seo_title') }}">
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
      <input type="text" name="seo_keywords" class="form-control m-input {{ $errors->has('seo_keywords') ? 'has-error' : '' }} " placeholder="Seo keywords" value="{{ isset($category) ? $category->seo_keywords : old('seo_keywords') }}">
    </div>
    </div>
  </div>


  <div class="m-form__group form-group row">
      <div class="col-md-12">
        <label>
            Seo description:
        </label>
        <textarea name="seo_description" class="form-control m-input m-input--air"  rows="10">{!! isset($category) ? $category->seo_description : old('seo_description') !!}</textarea>
      </div>
  </div>


</div>
>>>>>>> b8078b47d8e9b8b3b5e9947e30ca3e159e2db2fe
