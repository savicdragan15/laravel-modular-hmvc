<div class="m-menu__submenu ">
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
                        <a  href="{{ route('admin.cart.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                        <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                        All Carts
                                </span>
                        </a>
                </li>
        </ul>
</div>
