<div class="m-portlet__body">

					<div class="form-group m-form__group row">
						<div class="col-lg-6">
							<label>
								Name:
							</label>
							<input type="text" name="name" class="form-control m-input {{ $errors->has('name') ? 'has-error' : '' }} " placeholder="Name" value="{{ isset($product) ? $product->name : old('name') }}">
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
								Slug:
							</label>
              <div class="m-input-icon m-input-icon--right">
               <input type="text" class="form-control m-input {{ $errors->has('slug') ? 'has-error' : '' }}" placeholder="Slug" name="slug" value="{{ isset($product) ? $product->slug : old('slug') }}">
							 @if($errors->has('slug'))
 									<span class="m-form__help has-error">
 										 {{ $errors->first('slug') }}
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

						{{-- @if(config('product.has_price')) --}}
            <div class="col-lg-6" {{ !config('product.has_price') ? "style=visibility:hidden;" : ''  }}>
							<label>
								Price:
							</label>

              <div class="input-group">
                <input type="text" class="form-control m-input" placeholder="Price" name="price" value="{{ isset($product) ? number_format($product->price, 2) : old('price') }}">
                <span class="input-group-addon" id="basic-addon2">
                  {{ config('product.currency') }}
                </span>
              </div>
							<span class="m-form__help">
								Price
							</span>
						</div>
					{{-- @endif --}}

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
					<div class="m-form__group form-group row">
							<div class="col-md-6">
								<label class="m-checkbox m-checkbox--state-brand">
										<input type="checkbox" {{ isset($product) && $product->active == 1 ? 'checked' : '' }} value="{{ isset($product) ? $product->active : 0 }}" name="active" id="active">
										Active
										<span></span>
								</label>
							</div>

							<div class="col-md-6">
								<label>Featured image: </label>
								<div class="input-group">
							    <span class="input-group-btn">
										 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-brand" style="color: white;">
										 	 <i class="fa fa-picture-o"></i> Choose
										 </a>

							    </span>
							     <input id="thumbnail" class="form-control" type="hidden" name="featured_image" value="{{ isset($product) && !is_null($product->featured_image) ? $product->featured_image : old('featured_image') }}">
							</div>
							<img id="holder" style="margin-top:15px;max-height:100px;" src="{{ isset($product) && !is_null($product->featured_image) ? asset($product->featured_image) : old('featured_image') }}">
							</div>
					</div>

						<div class="m-form__group form-group row">
								<div class="col-md-12">
										<label> Description: </label>
										<textarea name="description" class="ckeditor" rows="8" cols="80">{!! isset($product) ? $product->description : old('description') !!}</textarea>
								</div>
						</div>

						<div class="m-form__group form-group row">
							<div class="col-lg-6">
								<label>
									Seo title:
								</label>
								<input type="text" name="seo_title" class="form-control m-input {{ $errors->has('seo_title') ? 'has-error' : '' }} " placeholder="Seo title" value="{{ isset($product) ? $product->seo_title : old('seo_title') }}">

							</div>
							<div class="col-lg-6">
								<label>
									Seo keywords:
								</label>
								<input type="text" name="seo_keywords" class="form-control m-input {{ $errors->has('seo_keywords') ? 'has-error' : '' }} " placeholder="Seo keywords" value="{{ isset($product) ? $product->seo_keywords : old('seo_keywords') }}">

							</div>
						</div>

						<div class="m-form__group form-group row">
								<div class="col-md-12">
									<label>
										  Seo description:
									</label>
									<textarea name="seo_description" class="form-control m-input m-input--air"  rows="10">{!! isset($product) ? $product->seo_description : old('seo_description') !!}</textarea>
								</div>
						</div>

		</div>
