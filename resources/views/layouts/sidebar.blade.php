<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu border-end">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ url('index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
               
                <li class="menu-title"><span>@lang('translation.menu')</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span>@lang('translation.dashboards')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/index')}}" class="nav-link">Home</a>
                            </li>
                           
                        </ul>
                    </div>
                </li>
               
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#UserList" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-account-circle-line"></i> <span>Users</span>
                    </a>
                    <div class="collapse menu-dropdown" id="UserList">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/users')}}"  class="nav-link"> <i class="ri-account-circle-line"></i> Users List</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('users/create')}}"  class="nav-link"> <i class="ri-user-add-line"></i>Add User</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Wardlist" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-newspaper-fill"></i> <span>Wards</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Wardlist">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{ url('/wards')}}"  class="nav-link"> <i class="ri-newspaper-fill"></i> Ward List</a>
                            </li>
            
                            <li class="nav-item">
                                <a href="{{ url('wards/create')}}"  class="nav-link"> <i class="ri-newspaper-line"></i>New Ward</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Wardlist" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-newspaper-fill"></i> <span>Complaints</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Wardlist">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{ url('/wards')}}"  class="nav-link"> <i class="ri-newspaper-fill"></i> Ward List</a>
                            </li>
            
                            <li class="nav-item">
                                <a href="{{ url('wards/create')}}"  class="nav-link"> <i class="ri-newspaper-line"></i>New Ward</a>
                            </li>
                        </ul>
                    </div>
                </li>



                <li class="nav-item">
                    <a class="nav-link menu-link" href="#StreetList" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-barricade-fill"></i> <span>Streets</span>
                    </a>
                    <div class="collapse menu-dropdown" id="StreetList">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{ url('/streets')}}"  class="nav-link"> <i class="ri-barricade-fill"></i> Streets List</a>
                            </li>
            
                            <li class="nav-item">
                                <a href="{{ url('streets/create')}}"  class="nav-link"> <i class=" ri-barricade-line"></i>Add Street</a>
                            </li>

                        </ul>
                    </div>
                </li>
                
                
               


              








            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
