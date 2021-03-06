<div class="side-nav expand-lg">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="{{ route('admins.adminDashboard') }}">
                    <span class="icon-holder">
                        <i class="mdi mdi-gauge"></i>
                    </span>
                    <span class="title">{{ __('admin dashboard') }}</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="{{ route('admins.categories.index') }}">
                    <span class="icon-holder">
                        <i class="mdi mdi-briefcase"></i>
                    </span>
                    <span class="title">{{ __('categories') }}</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="{{ route('admins.specializes.index') }}">
                    <span class="icon-holder">
                        <i class="mdi mdi-account-box-outline"></i>
                    </span>
                    <span class="title">{{ __('specializes') }}</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="{{ route('admins.users.index') }}">
                    <span class="icon-holder">
                        <i class="mdi mdi-account-circle"></i>
                    </span>
                    <span class="title">{{ __('users') }}</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="{{ route('admins.courses.index') }}">
                    <span class="icon-holder">
                        <i class="mdi mdi-discord"></i>
                    </span>
                    <span class="title">{{ __('courses') }}</span>
                    <span class="arrow">
                        <i class="mdi mdi-chevron-right"></i>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
