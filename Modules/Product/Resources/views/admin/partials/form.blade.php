<div class="m-portlet__body">

					<div class="form-group m-form__group row">
						<div class="col-lg-6">
							<label>
								Name:
							</label>
							<input type="text" name="name" class="form-control m-input {{ $errors->has('name') ? 'has-error' : '' }} " placeholder="Name" value="{{ isset($product) ? $product->name : null }}">
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
							{{-- <input type="email" class="form-control m-input" placeholder="Enter contact number"> --}}
              <select class="form-control m-bootstrap-select m_selectpicker" multiple name="category_id[]" id="category_id">
                @foreach ($categories as $key => $category)
                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>

							<span class="m-form__help">
								Please enter your contact number
							</span>
						</div>
					</div>

					<div class="form-group m-form__group row">
            <div class="col-lg-6">
							<label>
								Slug:
							</label>
              <div class="m-input-icon m-input-icon--right">
               <input type="text" class="form-control m-input {{ $errors->has('slug') ? 'has-error' : '' }}" placeholder="Enter your postcode" name="slug" value="{{ isset($product) ? $product->slug : null }}">
							 @if($errors->has('slug'))
 									<span class="m-form__help has-error">
 										 {{ $errors->first('slug') }}
 									</span>
 							@endif
             </div>
							<span class="m-form__help">
								Slug
							</span>
						</div>
            <div class="col-lg-6">
							<label class="">
								Sub Categories:
							</label>
							{{-- <input type="email" class="form-control m-input" placeholder="Enter contact number"> --}}
              <select class="form-control m-bootstrap-select m_selectpicker" multiple name="subcategory_id[]" id="subcategory_id">
                @foreach ($categories as $key => $category)
                  <optgroup label="{{ $category->name }}">
                      @foreach ($category->subcategories as $key => $subcatgories)
                        <option value="{{ $subcatgories->id }}">{{ $subcatgories->name }}</option>
                      @endforeach
                  </optgroup>

                @endforeach
              </select>
							<span class="m-form__help">
								Please enter your contact number
							</span>
						</div>
					</div>


					<div class="form-group m-form__group row">

            <div class="col-lg-6">
							<label>
								Price:
							</label>

              <div class="input-group">
                <input type="text" class="form-control m-input" placeholder="Price" name="price" value="{{ isset($product) ? number_format($product->price, 2) : null }}">
                <span class="input-group-addon" id="basic-addon2">
                  {{ config('product.currency') }}
                </span>
              </div>
							<span class="m-form__help">
								Price
							</span>
						</div>

            <div class="col-lg-6">
							<label class="">
								Sub Sub Categories:
							</label>
							{{-- <input type="email" class="form-control m-input" placeholder="Enter contact number"> --}}
              <select class="form-control m-bootstrap-select m_selectpicker" multiple name="subsubcategory_id[]" id="subsubcategory_id">
                @foreach ($categories as $key => $category)
                      @foreach ($category->subcategories as $key => $subcatgory)
                        <optgroup label="{{ $subcatgory->name }}">
                        @foreach ($subcatgory->subsubcategories as $key => $subsubcategory)
                            <option value="{{ $subsubcategory->id }}">{{ $subsubcategory->name }}</option>
                        @endforeach
                        </optgroup>
                      @endforeach
                @endforeach
              </select>
							<span class="m-form__help">
								Please enter your contact number
							</span>
						</div>
					</div>

						<div class="m-form__group form-group row">
								<div class="col-6">
									<label class="m-checkbox m-checkbox--state-brand">
											<input type="checkbox" {{ isset($product) && $product->active == 1 ? 'checked' : '' }} value="{{ isset($product) ? $product->active : 0 }}" name="active" id="active">
											Active
											<span></span>
									</label>
								</div>
						</div>
		</div>
