<div class="m-menu__submenu" {{ setDisplayBlock('admin/'.$module->getLowerName()) }}>
        <span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">
                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                        <span class="m-menu__link">
                                <span class="m-menu__link-text">
                                        Base
                                </span>
                        </span>
                </li>
                <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('admin.product.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                       All products
                                </span>
                        </a>
                </li>

                <li class="m-menu__item " aria-haspopup="true" >
                        <a  href="{{ route('admin.product.create') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                       Crate Product
                                </span>
                        </a>
                </li>


        </ul>
</div>
