{{-- request()->routeIs('dashboard') --}}

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
