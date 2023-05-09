<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/backoffice" class="brand-link">
        <i class="fa fa-pen-fancy bg-danger text-white px-2 py-1"></i>
        <span class="brand-text font-weight-light">Deep Ink Oy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset("backasset")}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @auth
                <a href="#" class="d-block">{{request()->user()->name}}</a>
                @else
                    <a href="#" class="d-block">#####</a>
                @endauth
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route("backoffice.dashboard")}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("backoffice.appointment.today")}}" class="nav-link">
                        <i class="nav-icon  fa fa-calendar"></i>
                        <p>
                            Today's Appointments
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("backoffice.appointment.index")}}" class="nav-link">
                        <i class="nav-icon  fa fa-calendar"></i>
                        <p>
                            All Appointments
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("backoffice.order.index")}}" class="nav-link">
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                            Orders
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("backoffice.order.completed")}}" class="nav-link">
                        <i class="nav-icon  fa fa-shopping-cart"></i>
                        <p>
                            Completed Orders
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
