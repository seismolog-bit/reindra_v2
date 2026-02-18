<ul class="navbar-nav flex-column" id="navbarVerticalNav">
    <li class="nav-item">
        <div class="nav-item-wrapper">
            <a class="nav-link label-1 {{ request()->routeIs('admin.index') ? 'active' : '' }}"
                href="{{ route('admin.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="compass"></span>
                    </span>
                    <span class="nav-link-text">Home</span>
                </div>
            </a>
        </div>
    </li>
    <li class="nav-item">
        <!-- label-->
        <p class="navbar-vertical-label">Apps</p>
        <hr class="navbar-vertical-line">
        <div class="nav-item-wrapper">
            <a class="nav-link dropdown-indicator label-1" href="#nv-home" role="button" data-bs-toggle="collapse"
                aria-expanded="false" aria-controls="nv-home">
                <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon">
                        <span class="fas fa-caret-right"></span>
                    </div>
                    <span class="nav-link-icon">
                        <span data-feather="clipboard"></span>
                    </span>
                    <span class="nav-link-text">Project Management</span>
                </div>
            </a>
            <div class="parent-wrapper label-1">
                <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-home">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.portfolio.create') ? 'active' : '' }}"
                            href="{{ route('admin.portfolio.create') }}" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text">Create New</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.portfolio.index') ? 'active' : '' }}"
                            href="{{ route('admin.portfolio.index') }}" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text">Project List</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.portfolio-category.*') ? 'active' : '' }}"
                            href="{{ route('admin.portfolio-category.index') }}" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-text">Project Categories</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="nav-item-wrapper">
            <a class="nav-link label-1 {{ request()->routeIs('admin.experience.*') ? 'active' : '' }}"
                href="{{ route('admin.experience.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="pie-chart"></span>
                    </span>
                    <span class="nav-link-text">Experiences</span>
                </div>
            </a>
        </div>
        <div class="nav-item-wrapper">
            <a class="nav-link label-1 {{ request()->routeIs('admin.pricing.*') ? 'active' : '' }}"
                href="{{ route('admin.pricing.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="credit-card"></span>
                    </span>
                    <span class="nav-link-text">Pricing Plans</span>
                </div>
            </a>
        </div>

        <div class="nav-item-wrapper">
            <a class="nav-link label-1 {{ request()->routeIs('admin.technology.*') ? 'active' : '' }}"
                href="{{ route('admin.technology.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="cpu"></span>
                    </span>
                    <span class="nav-link-text">Technologies</span>
                </div>
            </a>
        </div>
    </li>
    <li class="nav-item">
        <!-- label-->
        <p class="navbar-vertical-label">Themes</p>
        <hr class="navbar-vertical-line">
        <div class="nav-item-wrapper">
            <a class="nav-link label-1 {{ request()->routeIs('admin.theme.*') ? 'active' : '' }}"
                href="{{ route('admin.theme.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="layout"></span>
                    </span>
                    <span class="nav-link-text">Themes</span>
                </div>
            </a>
        </div>
        <div class="nav-item-wrapper">
            <a class="nav-link label-1 {{ request()->routeIs('admin.theme-category.*') ? 'active' : '' }}"
                href="{{ route('admin.theme-category.index') }}" role="button" data-bs-toggle=""
                aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="layers"></span>
                    </span>
                    <span class="nav-link-text">Theme Categories</span>
                </div>
            </a>
        </div>
        <div class="nav-item-wrapper">
            <a class="nav-link label-1 {{ request()->routeIs('admin.theme-tag.*') ? 'active' : '' }}"
                href="{{ route('admin.theme-tag.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="tag"></span>
                    </span>
                    <span class="nav-link-text">Theme Tags</span>
                </div>
            </a>
        </div>
    </li>

    <li class="nav-item">
        <!-- label-->
        <p class="navbar-vertical-label">Modules</p>
        <hr class="navbar-vertical-line">
        <div class="nav-item-wrapper">
            <a class="nav-link label-1 {{ request()->routeIs('admin.user.*') ? 'active' : '' }}"
                href="{{ route('admin.user.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="users"></span>
                    </span>
                    <span class="nav-link-text">Users</span>
                </div>
            </a>
        </div>
        <div class="nav-item-wrapper">
            <a class="nav-link label-1" href="{{ route('admin.config.index') }}" role="button" data-bs-toggle=""
                aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="settings"></span>
                    </span>
                    <span class="nav-link-text">Config</span>
                </div>
            </a>
        </div>
    </li>
</ul>
