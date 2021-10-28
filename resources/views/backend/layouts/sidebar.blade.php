<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="/admin" class="{{ request()->is('admin') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">All Options</li>
                <!-- <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Users
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="elements-buttons-standard.html">
                                <i class="metismenu-icon"></i>
                                Buttons
                            </a>
                        </li>
                        <li>
                            <a href="elements-dropdowns.html">
                                <i class="metismenu-icon">
                                </i>Dropdowns
                            </a>
                        </li>
                        <li>
                            <a href="elements-icons.html">
                                <i class="metismenu-icon">
                                </i>Icons
                            </a>
                        </li>
                        <li>
                            <a href="elements-badges-labels.html">
                                <i class="metismenu-icon">
                                </i>Badges
                            </a>
                        </li>
                        <li>
                            <a href="elements-cards.html">
                                <i class="metismenu-icon">
                                </i>Cards
                            </a>
                        </li>
                        <li>
                            <a href="elements-list-group.html">
                                <i class="metismenu-icon">
                                </i>List Groups
                            </a>
                        </li>
                        <li>
                            <a href="elements-navigation.html">
                                <i class="metismenu-icon">
                                </i>Navigation Menus
                            </a>
                        </li>
                        <li>
                            <a href="elements-utilities.html">
                                <i class="metismenu-icon">
                                </i>Utilities
                            </a>
                        </li>
                    </ul>
                </li> -->
                <li>
                    <a href="#" class="{{ request()->is('admin/banner*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-album"></i>
                        Banners
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('banner.index')}}">
                                <i class="metismenu-icon"></i>
                                All Banners
                            </a>
                        </li>
                        <li>
                            <a href="{{route('banner.create')}}">
                                <i class="metismenu-icon">
                                </i>Add Banner
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="{{ request()->is('admin/brand*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-paperclip"></i>
                        Brands
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('brand.index')}}">
                                <i class="metismenu-icon"></i>
                                All Bands
                            </a>
                        </li>
                        <li>
                            <a href="{{route('brand.create')}}">
                                <i class="metismenu-icon">
                                </i>Add Brand
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="{{ request()->is('admin/category*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-paperclip"></i>
                        Categories
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('category.index')}}">
                                <i class="metismenu-icon"></i>
                                All Categories
                            </a>
                        </li>
                        <li>
                            <a href="{{route('category.create')}}">
                                <i class="metismenu-icon">
                                </i>Add Category
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="{{ request()->is('admin/product*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-paperclip"></i>
                        Products
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('product.index')}}">
                                <i class="metismenu-icon"></i>
                                All Products
                            </a>
                        </li>
                        <li>
                            <a href="{{route('product.create')}}">
                                <i class="metismenu-icon">
                                </i>Add Product
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="{{ request()->is('admin/cart*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Carts
                    </a>
                </li>
                <li>
                    <a href="#" class="{{ request()->is('admin/order*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-calculator"></i>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="index.html" class="{{ request()->is('admin/review*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Reviews
                    </a>
                </li>

                <li>
                    <a href="index.html" class="{{ request()->is('admin/cupon*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-paperclip"></i>
                        Cupons
                    </a>
                </li>
                <li>
                    <a href="index.html" class="{{ request()->is('admin/comment*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-paperclip"></i>
                        Comments
                    </a>
                </li>
                <li class="app-sidebar__heading">Admins</li>
                <li>
                    <a href="#" class="{{ request()->is('admin/user*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-album"></i>
                        Users
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('user.index')}}">
                                <i class="metismenu-icon"></i>
                                All Users
                            </a>
                        </li>
                        <li>
                            <a href="{{route('user.create')}}">
                                <i class="metismenu-icon">
                                </i>Add User
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.html" class="{{ request()->is('admin/settings*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-gleam"></i>
                        Settings
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href=" {{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="metismenu-icon pe-7s-plug"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>