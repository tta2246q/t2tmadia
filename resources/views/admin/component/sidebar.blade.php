<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{route('/')}}" class="logo">
                <img src="{{asset('/admin/img/kaiadmin/logo_demo.jpg')}}" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item ">
                    <a href="{{route('dashboard')}}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('dashboard')}}">
                        <i class="fas fa-edit"></i>
                        <p>Edit Block</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('dashboard')}}">
                        <i class="fas fa-home"></i>
                        <p>New</p>
                    </a>
                </li>
                
                
                
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->