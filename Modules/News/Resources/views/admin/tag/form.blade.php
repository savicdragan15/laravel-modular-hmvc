<div class="m-portlet__body">

  <div class="form-group m-form__group row">
    <div class="col-lg-6">
      <label>
        Name:
      </label>

      <div class="input-group m-input-group">
        <span class="input-group-addon" id="basic-addon1">
            <i class="fa fa-chevron-right"></i>
        </span>
      <input type="text" name="name" class="form-control m-input {{ $errors->has('name') ? 'has-error' : '' }} " placeholder="Name" value="{{ isset($tag) ? $tag->name : old('name') }}">

    </div>
    @if($errors->has('name'))
        <span class="m-form__help has-error">
           {{ $errors->first('name') }}
        </span>
    @endif
    </div>

    <div class="col-lg-6">
      <label>
        Slug:
      </label>

      <div class="input-group m-input-group">
        <span class="input-group-addon" id="basic-addon1">
            <i class="fa fa-chevron-right"></i>
        </span>
        <input type="text" name="slug" class="form-control m-input {{ $errors->has('slug') ? 'has-error' : '' }} " placeholder="Slug" value="{{ isset($tag) ? $tag->slug : old('slug') }}">
      </div>
      @if($errors->has('slug'))
          <span class="m-form__help has-error">
             {{ $errors->first('slug') }}
          </span>
      @endif

    </div>

  </div>

  <div class="form-group m-form__group row">

    <div class="col-lg-6">

      <label class="m-checkbox m-checkbox--state-brand">
          <input type="checkbox" {{ isset($tag) && $tag->active == 1 ? 'checked' : '' }} value="{{ isset($tag) ? $tag->active : 0 }}" name="active" id="active">
          Active
          <span></span>
      </label>

    </div>

  </div>

</div>
