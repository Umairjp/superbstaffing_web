<div class="sidebar">
    <div class="sidebar-logo">
        <img class="logo" src="{{ asset('front/assets/images/logo-w.png') }}" alt="logo">
    </div>
    <ul class="side-menu">
        <li class="menu-item {{ Request::is('agency/dashboard*') ? 'active' : '' }}">
            <a href="{{ url('/') }}" class="menu-link">
                <i class="icon-house1 menu-icon"></i>
                Dashboard
            </a>
        </li>
        <li class="menu-item {{ Request::is('agency/profile*') ? 'active' : '' }}">
            <a href="{{ url('/agency/profile') }}" class="menu-link">
                <i class="icon-house1 menu-icon"></i>
                Profile
            </a>
        </li>
        <li class="menu-item {{ Request::is('agency/jobs*') ? 'active' : '' }}">
            <a href="{{ url('/agency/jobs') }}" class="menu-link">
                <i class="icon-house1 menu-icon"></i>
                Jobs
            </a>
        </li>
        <li class="menu-item {{ Request::is('agency/messages*') ? 'active' : '' }}">
            <a href="{{ url('/agency/messages') }}" class="menu-link">
                <i class="icon-house1 menu-icon"></i>
                Messages
            </a>
        </li>
        <li class="menu-item {{ Request::is('agency/employees*') ? 'active' : '' }}">\
            <a href="{{ url('/agency/employees') }}" class="menu-link">
                <i class="icon-house1 menu-icon"></i>
                Employees
            </a>
        </li>
        <li class="menu-item {{ Request::is('agency/payments*') ? 'active' : '' }}">
            <a href="{{ url('/agency/payments') }}" class="menu-link">
                <i class="icon-house1 menu-icon"></i>
                Payments
            </a>
        </li>
        <li class="menu-item {{ Request::is('agency/settings*') ? 'active' : '' }}">
            <a href="{{ url('/agency/settings') }}" class="menu-link">
                <i class="icon-house1 menu-icon"></i>
                Settings
            </a>
        </li>

    </ul>
    <div class="text-center mt-lg-40 mt-2 logout-btn">
        <a href="#" class="btn btn-primary">Logout</a>
    </div>
</div>

<!-- responsive-sidebar -->

<div class="responsive-sidebar">
    <div class="pos-f-t">
        <nav class="navbar navbar-dark bg-dark exit-btn">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <div class="sidebar">
                    <div class="sidebar-logo">
                        <img class="logo" src="{{ asset('front/assets/images/logo-w.png') }}" alt="logo">
                    </div>
                    <ul class="side-menu">
                        <li class="menu-item ">
                            <a href="{{ url('/') }}" class="menu-link">
                                <i class="icon-house1 menu-icon"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="menu-item ">
                            <a href="{{ url('/profile') }}" class="menu-link">
                                <i class="icon-house1 menu-icon"></i>
                                Profile
                            </a>
                        </li>
                        <li class="menu-item ">
                            <a href="{{ url('/jobs') }}" class="menu-link">
                                <i class="icon-house1 menu-icon"></i>
                                Jobs
                            </a>
                        </li>
                        <li class="menu-item ">
                            <a href="{{ url('/messages') }}" class="menu-link">
                                <i class="icon-house1 menu-icon"></i>
                                Messages
                            </a>
                        </li>
                        <li class="menu-item ">
                            <a href="{{ url('/employees') }}" class="menu-link">
                                <i class="icon-house1 menu-icon"></i>
                                Employees
                            </a>
                        </li>
                        <li class="menu-item ">
                            <a href="{{ url('/payments') }}" class="menu-link">
                                <i class="icon-house1 menu-icon"></i>
                                Payments
                            </a>
                        </li>
                        <li class="menu-item ">
                            <a href="{{ url('/settings') }}" class="menu-link">
                                <i class="icon-house1 menu-icon"></i>
                                Settings
                            </a>
                        </li>

                    </ul>
                    <div class="text-center mt-lg-40 mt-2 logout-btn">
                        <a href="#" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
