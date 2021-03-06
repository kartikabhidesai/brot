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
                
                <li class="nav-item start {{ ($currRoute == 'details')  ? 'active' : '' }}">
                    <a href="{{ route('details') }}" class="nav-link nav-toggle">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span class="title">Details</span>
                        <span class="selected"></span>
                    </a>
                </li>
                
                <li class="nav-item start {{ ($currRoute == 'slider' || $currRoute == 'add-slider' || $currRoute == 'edit-silder')  ? 'active' : '' }}">
                    <a href="{{ route('slider') }}" class="nav-link nav-toggle">
                        <i class="fa fa-sliders" aria-hidden="true"></i>
                        <span class="title">Home page Slider</span>
                        <span class="selected"></span>
                    </a>
                </li>
                
                <li class="nav-item start {{ ($currRoute == 'category-list') || ($currRoute == 'add-category') || ($currRoute == 'update-category') ? 'active' : '' }}">
                    <a href="{{ route('category-list') }}" class="nav-link nav-toggle">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span class="title">Category</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item start {{ ($currRoute == 'subcategory-list') || ($currRoute == 'add-subcategory') || ($currRoute == 'edit-subcategory') ? 'active' : '' }}">
                    <a href="{{ route('subcategory-list') }}" class="nav-link nav-toggle">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span class="title">Sub Category</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item start {{ ($currRoute == 'size-list') || ($currRoute == 'add-size') || ($currRoute == 'edit-size')  ? 'active' : '' }}">
                    <a href="{{ route('size-list') }}" class="nav-link nav-toggle">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span class="title">Size</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item {{ ($currRoute == 'product-list') || ($currRoute == 'add-product') || ($currRoute == 'edit-product')   ? 'active' : '' }}">
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

