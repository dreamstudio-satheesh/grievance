<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu border-end">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('admin_assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('admin_assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ url('/admin/') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('admin_assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('admin_assets/images/logo-light.png') }}" alt="" height="17">
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
                                <a href="{{ url('/admin/')}}" class="nav-link">Home</a>
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
                                <a href="{{ url('/admin/users')}}"  class="nav-link"> <i class="ri-account-circle-line"></i> Users List</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('/admin/users/create')}}"  class="nav-link"> <i class="ri-user-add-line"></i>Add User</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Wardlist" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-newspaper-fill"></i> <span>Location</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Wardlist">
                        <ul class="nav nav-sm flex-column">                            

                            <li class="nav-item">
                                <a href="#Panchayat" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm">Panchayats</a>
                                <div class="collapse menu-dropdown" id="Panchayat">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/panchayats')}}"  class="nav-link"> Panchayat List</a>
                                        </li>
                        
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/panchayats/create')}}"  class="nav-link"></i>Add Panchayat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/wards')}}"  class="nav-link"> Ward List</a>
                                        </li>
                        
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/wards/create')}}"  class="nav-link"></i>Add Ward</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ url('/admin/streets')}}"  class="nav-link">  Streets List</a>
                                        </li>
                        
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/streets/create')}}"  class="nav-link"> Add Street</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                             <li class="nav-item">
                                <a href="#Division" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm">Divisions</a>
                                <div class="collapse menu-dropdown" id="Division">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/divisions')}}"  class="nav-link"> Division List</a>
                                        </li>
                        
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/divisions/create')}}"  class="nav-link"> Add Division</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ url('/admin/dstreets')}}"  class="nav-link"> Streets List</a>
                                        </li>
                        
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/dstreets/create')}}"  class="nav-link"> Add Street</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>                        
                        </ul>
                    </div>
                </li>                
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#complaintsList" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-discuss-fill"></i> <span>Complaints</span>
                    </a>
                    <div class="collapse menu-dropdown" id="complaintsList">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{ url('/admin/complaints')}}"  class="nav-link"> <i class="ri-discuss-fill"></i>Complaints List</a>
                            </li>
            
                            <li class="nav-item">
                                <a href="{{ url('/admin/complaints/create')}}"  class="nav-link"> <i class="ri-questionnaire-line"></i>New Compaint</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Gallery" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-honour-line"></i> <span>News & Events</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Gallery">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ url('/admin/news_events')}}">
                                    <i class="ri-honour-line"></i> <span>News & Events</span>
                                </a>
                            </li>
            
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ url('/admin/news_events/create')}}">
                                    <i class="ri-honour-line"></i> <span> create News & Events</span>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </li>
             

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Gallery" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-gallery-fill"></i> <span>Gallery</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Gallery">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/admin/galleries')}}"  class="nav-link"> <i class="ri-image-fill"></i> Gallery List</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('/admin/galleries/create')}}"  class="nav-link"> <i class="ri-image-add-line"></i>Add Gallery</a>
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
