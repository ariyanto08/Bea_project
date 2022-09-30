@php
function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

<div id="left-sidebar" class="sidebar">
    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{ url('public') }}/assets-super-admin/images/user.png" class="rounded-circle user-photo"
                alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pamela
                        Petrus</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
            <hr>
            <ul class="row list-unstyled">
                <li class="col-4">
                    <small>Bea Masuk</small>
                    <h6>561</h6>
                </li>
                <li class="col-4">
                    <small>Bea Keluar</small>
                    <h6>920</h6>
                </li>
                <li class="col-4">
                    <small>Cukai</small>
                    <h6>$23B</h6>
                </li>
            </ul>
        </div>
        <!-- Nav tabs -->
        <div class="tab-content padding-0">
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul class="nav metismenu li_animation_delay">
                    <li class="nav-item {{checkRouteActive('dashboard')}}">
                        <a class="nav-link" href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    <li class="nav-item {{checkRouteActive('akses')}}">
                        <a class="nav-link" href="{{ url('akses') }}"><i class="fa fa-th-large"></i>Akses User</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
