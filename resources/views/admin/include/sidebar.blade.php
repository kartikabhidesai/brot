@php
$currRoute = Route::current()->getName();
$items = Session::get('logindata');
@endphp
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll">
            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
               
                <li class="nav-item start {{ ($currRoute == 'dashboard')  ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item start {{ ($currRoute == 'category-list')  ? 'active' : '' }}">
                    <a href="{{ route('category-list') }}" class="nav-link nav-toggle">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span class="title">Category</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item start {{ ($currRoute == 'subcategory-list')  ? 'active' : '' }}">
                    <a href="{{ route('subcategory-list') }}" class="nav-link nav-toggle">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span class="title">Sub Category</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item start {{ ($currRoute == 'size-list')  ? 'active' : '' }}">
                    <a href="{{ route('size-list') }}" class="nav-link nav-toggle">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span class="title">Size</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item {{ ($currRoute == 'product-list')   ? 'active' : '' }}">
                    <a href="{{ route('product-list') }}" class="nav-link nav-toggle">
                        <i class="fa fa-product-hunt" aria-hidden="true"></i>
                        <span class="title">Product</span>
                    </a>
                </li>
                <li class="nav-item {{ ($currRoute == 'order')   ? 'active' : '' }}">
                    <a href="{{ route('order') }}" class="nav-link nav-toggle">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span class="title">Order</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

