<aside class="main-sidebar elevation-4" style="background-color: #3F65D4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('logo/OCC_LOGO.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="text-white brand-text font-weight-light">GRADE INQUIRY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="pb-3 mt-3 mb-3 user-panel d-flex">
            <div class="info">
                <a href="#" class="text-white uppercase d-block">
                    {{ auth()->user()->name }}
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->

                {{-- <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link @if (request()->route()->named('dashboard')) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('fireguard') }}" class="nav-link @if (request()->route()->named('fireguard*')) active @endif">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Fireguard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('members') }}" class="nav-link @if (request()->route()->named('members*')) active @endif">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Members
                        </p>
                    </a>
                </li>

               --}}

                <li class="nav-item">
                    <a href="{{ route('school-year.index') }}"
                        class="nav-link text-white @if (request()->route()->named('school-year*')) active @endif">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            School Year
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('subjects.index') }}"
                        class="nav-link text-white @if (request()->route()->named('subjects*')) active @endif">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Subjects
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('curriculum.index') }}"
                        class="nav-link text-white @if (request()->route()->named('curriculum*')) active @endif">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Curriculum
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('users.index') }}"
                        class="nav-link text-white @if (request()->route()->named('users*')) active @endif">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Administrators
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#"  id="LogoutButton" class="text-white nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form action="{{ route('logout') }}" method="POST" id="LogoutForm">
                        @csrf
                        @method('delete')
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
