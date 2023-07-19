{{-- request()->routeIs('dashboard') --}}
{{--  <span class="badge badge-default mr-0">12</span> --}}

<nav id="left-sidebar-nav" class="sidebar-nav">
    <ul id="main-menu" class="metismenu animation-li-delay">
        <li class="header">Main</li>
        <li class="active"><a href="{{ $dashboardUrl }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        @if (Auth::user()->role == 'Admin')
        <li class="header">Admin</li>
        <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-envelope"></i> <span>Category</span></a></li>
        <li><a href="{{ route('admin.subcategory.index') }}"><i class="fa fa-comments"></i> <span>Subcategory</span></a></li>
        <li><a href="{{ route('admin.charge.index') }}"><i class="fa fa-comments"></i> <span>Charge</span></a></li>
        @endif

        @if (Auth::user()->role == 'Employee')
        <li class="header">Employee</li>
        <li>
            <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>ui Elements</span></a>
            <ul>
                <li><a href="ui-helper-class.html">Helper Classes</a></li>
                <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                <li><a href="ui-typography.html">Typography</a></li>
            </ul>
        </li>
        @endif

        @if (Auth::user()->role == 'User')
        <li class="header">User</li>
        <li><a href="widgets.html"><i class="fa fa-puzzle-piece"></i><span>Widgets</span></a></li>
        <li>
            <a href="#Pages" class="has-arrow"><i class="fa fa-folder"></i><span>Pages</span></a>
            <ul>
                <li><a href="page-login.html">Login</a></li>
                <li><a href="page-register.html">Register</a></li>
            </ul>
        </li>
        @endif

        <li class="extra_widget">
            <div class="form-group">
                <label class="d-block">Traffic this Month <span class="float-right">77%</span></label>
                <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="d-block">Server Load <span class="float-right">50%</span></label>
                <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                </div>
            </div>
        </li>
    </ul>
</nav>
