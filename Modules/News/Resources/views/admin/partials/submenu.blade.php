<div class="m-menu__submenu" {{ setDisplayBlock('admin/'.$module->getLowerName()) }}>
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
                        <a  href="{{ route('admin.news.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                       All articles
                                </span>
                        </a>
                </li>

                <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('admin.news.create') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                       Crate Article
                                </span>
                        </a>
                </li>

                <li class="m-menu__item m-menu__item--submenu {{ setActive('admin/newscategory') }}" aria-haspopup="true" data-menu-submenu-toggle="hover">
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
														<a href="{{ route('admin.newscategory.index') }}" class="m-menu__link" data-subsubparent='true'>
															<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																<span></span>
															</i>
															<span class="m-menu__link-text">
																All Categories
															</span>
														</a>
													</li>

                          <li class="m-menu__item " aria-haspopup="true">
														<a href="{{ route('admin.newscategory.create') }}" class="m-menu__link" data-subsubparent='true'>
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

                <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('admin.newstag.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                       Tags
                                </span>
                        </a>
                </li>
        </ul>
</div>
