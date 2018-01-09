<div
    id="m_ver_menu"
    class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
    data-menu-vertical="true"
     data-menu-scrollable="false" data-menu-dropdown-timeout="500"
    >
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                    <a  href="{{ url('/admin') }}" class="m-menu__link ">
                            <i class="m-menu__link-icon flaticon-line-graph"></i>
                            <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                            <span class="m-menu__link-text">
                                                    Dashboard
                                            </span>
                                            <span class="m-menu__link-badge">
                                                    <span class="m-badge m-badge--danger">
                                                            2
                                                    </span>
                                            </span>
                                    </span>
                            </span>
                    </a>
            </li>
            <li class="m-menu__section">
                    <h4 class="m-menu__section-text">
                            Modules
                    </h4>
                    <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>

            @foreach(Module::getOrdered() as $module)
                    <li class="m-menu__item  m-menu__item--submenu {{ setActive('admin/'.$module->getLowerName()) }}" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                            <a  href="#" class="m-menu__link m-menu__toggle">
                                    <i class="m-menu__link-icon {{ config($module->getLowerName().'.admin_sidebar_icon') }}"></i>
                                    <span class="m-menu__link-text">
                                            {{ $module->getName() }}
                                    </span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            @if(View::exists($module->getLowerName().'::admin.partials.submenu'))
                                @include($module->getLowerName().'::admin.partials.submenu')
                            @endif
                    </li>
            @endforeach

    </ul>
</div>
