<nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <div class="nav-link">
                        <form action="{{route('logout') }}" method="post">
                            @csrf
                            <button type="submit">
                                <i class="fas fa-sign-out-alt"></i>
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
                <span class="brand-text font-weight-light">NewsCMS</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Ram Pukar</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">Menu List</li>
                        <li class="nav-item">
                            <a href="{{ route('patient.index') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">Patient List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('patient.create') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">New Patient Entry</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('patient-report.index') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">Patient Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('chart.index') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">Progress Chart</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('statement.index') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">Statement</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">Create New User</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>