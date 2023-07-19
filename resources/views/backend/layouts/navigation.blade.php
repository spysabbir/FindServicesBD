{{-- request()->routeIs('dashboard') --}}
{{--  <span class="badge badge-default mr-0">12</span> --}}

<nav id="left-sidebar-nav" class="sidebar-nav">
    <ul id="main-menu" class="metismenu animation-li-delay">
        <li class="header">Main</li>
        <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="header">Admin</li>
        <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-envelope"></i> <span>Category</span></a></li>
        <li><a href="{{ route('admin.subcategory.index') }}"><i class="fa fa-comments"></i> <span>Subcategory</span></a></li>
        <li class="header">Vendors</li>
        <li>
            <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>ui Elements</span></a>
            <ul>
                <li><a href="ui-helper-class.html">Helper Classes</a></li>
                <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                <li><a href="ui-typography.html">Typography</a></li>
            </ul>
        </li>
        <li class="header">More Pages</li>
        <li><a href="widgets.html"><i class="fa fa-puzzle-piece"></i><span>Widgets</span></a></li>
        <li>
            <a href="#Pages" class="has-arrow"><i class="fa fa-folder"></i><span>Pages</span></a>
            <ul>
                <li><a href="page-login.html">Login</a></li>
                <li><a href="page-register.html">Register</a></li>
            </ul>
        </li>
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


<ul class="metismenu" id="menu">
    <li>
        <a href="{{ route('admin.dashboard') }}">
            <div class="parent-icon"><i class='bx bx-home'></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-spa' ></i>
            </div>
            <div class="menu-title">Application</div>
        </a>
        <ul>
            <li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Email</a>
            </li>
            <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Chat Box</a>
            </li>
            <li> <a href="app-file-manager.html"><i class="bx bx-right-arrow-alt"></i>File Manager</a>
            </li>
            <li> <a href="app-contact-list.html"><i class="bx bx-right-arrow-alt"></i>Contatcs</a>
            </li>
            <li> <a href="app-to-do.html"><i class="bx bx-right-arrow-alt"></i>Todo List</a>
            </li>
            <li> <a href="app-invoice.html"><i class="bx bx-right-arrow-alt"></i>Invoice</a>
            </li>
            <li> <a href="app-fullcalender.html"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
            </li>
        </ul>
    </li>
    @if (Auth::user()->role == 'Admin')
    <li class="menu-label">Resource</li>
    <li>
        <a href="{{ route('admin.category.index') }}">
            <div class="parent-icon"><i class='bx bx-briefcase-alt-2'></i>
            </div>
            <div class="menu-title">Category</div>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.subcategory.index') }}">
            <div class="parent-icon"><i class='bx bx-briefcase-alt-2'></i>
            </div>
            <div class="menu-title">Subcategory</div>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.charge.index') }}">
            <div class="parent-icon"><i class='bx bx-briefcase-alt-2'></i>
            </div>
            <div class="menu-title">Charge</div>
        </a>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-cart-alt' ></i>
            </div>
            <div class="menu-title">eCommerce</div>
        </a>
        <ul>
            <li>
                <a href="#"><i class="bx bx-right-arrow-alt"></i>Products</a>
            </li>
            <li>
                <a href="#"><i class="bx bx-right-arrow-alt"></i>Product Details</a>
            </li>
            <li>
                <a href="#"><i class="bx bx-right-arrow-alt"></i>Add New Products</a>
            </li>
            <li>
                <a href="#"><i class="bx bx-right-arrow-alt"></i>Orders</a>
            </li>
        </ul>
    </li>
    @endif

    @if (Auth::user()->role == 'Employee')
    <li class="menu-label">Others</li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-cart-alt' ></i>
            </div>
            <div class="menu-title">eCommerce</div>
        </a>
        <ul>
            <li>
                <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Products</a>
            </li>
            <li>
                <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Product Details</a>
            </li>
            <li>
                <a href="ecommerce-add-new-products.html"><i class="bx bx-right-arrow-alt"></i>Add New Products</a>
            </li>
            <li>
                <a href="ecommerce-orders.html"><i class="bx bx-right-arrow-alt"></i>Orders</a>
            </li>
        </ul>
    </li>
    @endif

    @if (Auth::user()->role == 'User')
    <li>
        <a href="https://codervent.com/{{ env('APP_NAME') }}/documentation/index.html" target="_blank">
            <div class="parent-icon"><i class='bx bx-file' ></i>
            </div>
            <div class="menu-title">Documentation</div>
        </a>
    </li>
    <li>
        <a href="https://themeforest.net/user/codervent" target="_blank">
            <div class="parent-icon"><i class='bx bx-headphone' ></i>
            </div>
            <div class="menu-title">Support</div>
        </a>
    </li>
    @endif
</ul>
