<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="javascript:void()">
            <span class="align-middle">Foodo</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Route::is('admin.pages.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.pages.index') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Pages</span>
                </a>
            </li>

            <li class="sidebar-item {{ Route::is('menu-types.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.menu-types.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Menu Types</span>
                </a>
            </li>


            <li class="sidebar-item {{ Route::is('menus.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.menus.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Menus</span>
                </a>
            </li>

            {{-- <li class="sidebar-item {{ Route::is('permissions.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.permissions.index') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">permissions</span>
                </a>
            </li> --}}

            <li class="sidebar-item">
                <a href="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="align-middle me-2" data-feather="users"></i>  <span class="align-middle">Access</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.roles.index') }}">Roles</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link"
                            href="{{ route('admin.permissions.index') }}">permissions</a></li>
                </ul>
            </li>

            <li class="sidebar-item {{ Route::is('admin.users.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.users.index') }}">
                    <i class="align-middle me-2" data-feather="users"></i> <span class="align-middle">Users</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
