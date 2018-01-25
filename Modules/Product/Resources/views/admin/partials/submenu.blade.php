<div class="m-menu__submenu">
        <span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">
                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                        <span class="m-menu__link">
                                <span class="m-menu__link-text">
                                      {{ $module->getName() }}
                                </span>
                        </span>
                </li>
                <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('admin.product.index') }}" class="m-menu__link " data-subsubparent='false'>
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                       All products
                                </span>
                        </a>
                </li>

                <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('admin.product.create') }}" class="m-menu__link " data-subsubparent='false'>
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                       Crate Product
                                </span>
                        </a>
                </li>
                <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('admin.productreview.index') }}" class="m-menu__link " data-subsubparent='false'>
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                      Product reviews
                                </span>
                        </a>
                </li>

                <li class="m-menu__item m-menu__item--submenu {{ setActive('admin/productcategory') }}" aria-haspopup="true" data-menu-submenu-toggle="hover">
											<a href="#" class="m-menu__link m-menu__toggle">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Categories
												</span>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu " >
												<span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true">
														<a href="{{ route('admin.productcategory.index') }}" class="m-menu__link" data-subsubparent='true'>
															<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																<span></span>
															</i>
															<span class="m-menu__link-text">
																All Categories
															</span>
														</a>
													</li>

                          {{-- <li class="m-menu__item " aria-haspopup="true">
														<a href="" class="m-menu__link" data-subsubparent='true'>
															<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																<span></span>
															</i>
															<span class="m-menu__link-text">
																SubCategories
															</span>
														</a>
													</li> --}}

                          {{-- <li class="m-menu__item " aria-haspopup="true">
                            <a href="" class="m-menu__link" data-subsubparent='true'>
                              <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                              </i>
                              <span class="m-menu__link-text">
                                SubSubCategories
                              </span>
                            </a>
                          </li> --}}

                          <li class="m-menu__item " aria-haspopup="true">
														<a href="{{ route('admin.productcategory.create') }}" class="m-menu__link" data-subsubparent='true'>
															<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																<span></span>
															</i>
															<span class="m-menu__link-text">
																Create category
															</span>
														</a>
													</li>

												</ul>
											</div>
								</li>
        </ul>
</div>
