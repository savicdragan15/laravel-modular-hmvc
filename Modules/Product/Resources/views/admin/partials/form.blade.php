<div class="m-portlet__body">


					<div class="form-group m-form__group row">
						<div class="col-lg-6">
							<label>
								Name:
							</label>
							<input type="text" name="name" class="form-control m-input" placeholder="Name" value="{{ isset($product) ? $product->name : null }}">
							<span class="m-form__help">
								Name
							</span>
						</div>
						<div class="col-lg-6">
							<label class="">
								Contact Number:
							</label>
							<input type="email" class="form-control m-input" placeholder="Enter contact number">
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
								Postcode:
							</label>
							<div class="m-input-icon m-input-icon--right">
								<input type="text" class="form-control m-input" placeholder="Enter your postcode">
								<span class="m-input-icon__icon m-input-icon__icon--right">
									<span>
										<i class="la la-bookmark-o"></i>
									</span>
								</span>
							</div>
							<span class="m-form__help">
								Please enter your postcode
							</span>
						</div>
					</div>


					<div class="form-group m-form__group row">
						<div class="col-lg-6">
							<label>
								User Group:
							</label>
							<div class="m-radio-inline">
								<label class="m-radio m-radio--solid">
									<input type="radio" name="example_2" checked="" value="2">
									Sales Person
									<span></span>
								</label>
								<label class="m-radio m-radio--solid">
									<input type="radio" name="example_2" value="2">
									Customer
									<span></span>
								</label>
							</div>
							<span class="m-form__help">
								Please select user group
							</span>
						</div>
					</div>


		</div>
