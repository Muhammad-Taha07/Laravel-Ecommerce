<!--Admin Sidebar Panel -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('images/admin_images/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('images/admin_images/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">USER</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="/admin/home" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie" aria-hidden="true"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                {{-- BRAND SECTION --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Brands
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('View_category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Brands</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add-category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add a New Brand</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- BRAND SECTION END--}}

                {{-- CATEGORIES - SECTION --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('View_category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add-category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add a Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- CATEGORIES - SECTION END --}}

                {{-- PRODUCTS - SECTION --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Products<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('view-product') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Add-Product-form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add a Product</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- PRODUCTS - SECTION END --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
