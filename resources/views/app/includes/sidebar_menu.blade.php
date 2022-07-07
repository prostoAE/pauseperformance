<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>Home</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-folder"></i>
                <p>Activities</p>
            </a>
        </li>
        <li class="nav-item {{Request::is('settings*') ? 'menu-is-opening menu-open' : '' }}">
            <a href="../widgets.html" class="nav-link {{Request::is('settings*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                    Settings
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @auth
                    <li class="nav-item">
                        <a href="{{route('profile.edit', Auth::user()->id)}}" class="nav-link {{request()->routeIs('settings.profile') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                @endauth
                <li class="nav-item">
                    <a href="{{route('settings.roles')}}" class="nav-link  {{request()->routeIs('settings.roles') ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Roles and Permissions</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('settings.company')}}" class="nav-link {{request()->routeIs('settings.company') ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Company Information</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('settings.brand_product')}}" class="nav-link {{request()->routeIs('settings.brand_product') ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Brand and Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('settings.campaign')}}" class="nav-link {{request()->routeIs('settings.campaign') ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Campaign</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('settings.lanquage')}}" class="nav-link {{request()->routeIs('settings.lanquage') ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lanquage</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('settings.payments')}}" class="nav-link {{request()->routeIs('settings.payments') ? 'active' : ''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Payments</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
