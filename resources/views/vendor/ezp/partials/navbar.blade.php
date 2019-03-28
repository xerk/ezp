<!-- ***** Header Area Start ***** -->
<header class="header_area home-3">
    <div class="main_header_area" id="stickyHeader">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mainmenu_area">
                        <nav id="bigshop-nav" class="navigation">
                            <!-- Logo Area Start -->
                            <div class="nav-header">
                                <div class="nav-toggle"></div>
                                <div class="">
                                    <a href="{{ route('landingPage') }}"><img class="img-logo" src="{{ asset('img/logo.png')}}" alt="EZP"></a>
                                </div>
                            </div>
                            <div class="header_meta_info_area">
                                <div class="nav-search align-to-right">
                                    <div class="nav-search-button">
                                        <i class="nav-search-icon"></i>
                                    </div>
                                    <form>
                                        <div class="nav-search-inner">
                                            <input type="search" name="search"
                                                placeholder="Search for Products, Brands or Catagory">
                                        </div>
                                    </form>
                                </div>
                                <div class="hero_meta_area d-flex align-items-center align-to-right">
                                    <!-- Wishlist Area -->
                                    <div class="wishlist">
                                        <a href="wishlist.html"><i class="ti-heart"></i></a>
                                    </div>
                                    <!-- Cart Area -->
                                    <div class="cart">
                                        <a href="#" id="header-cart-btn" target="_blank"><i class="ti-bag"></i><span
                                                class="cart_quantity">3</span></a>
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            <li>
                                                <a href="#" class="image"><img src="{{ asset('img/product-img/top-1.png') }}"
                                                        class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Kid's Fashion</a></h6>
                                                    <p>1x - <span class="price">$32.99</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li>
                                                <a href="#" class="image"><img src="{{ asset('img/product-img/best-4.png') }}"
                                                        class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Trendy Headphone</a></h6>
                                                    <p>2x - <span class="price">$49.99</span></p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#" class="image"><img src="{{ asset('img/product-img/onsale-4.png') }}"
                                                        class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Water Bottle</a></h6>
                                                    <p>1x - <span class="price">$69.99</span></p>
                                                </div>
                                            </li>
                                            <li class="total">
                                                <span>Total: $202.96</span>
                                                <a href="cart.html" class="btn btn-sm btn-cart">Cart</a>
                                                <a href="checkout-1.html" class="btn btn-sm btn-checkout">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    @auth
                                    <!-- User Area -->
                                    <div class="user_thumb">
                                        <a href="#" id="header-user-btn"><img class="img-fluid"
                                                src="{{ asset('img/bg-img/user.jpg') }}" alt=""></a>
                                        <!-- User Meta Dropdown Area Start -->
                                        <ul class="user-meta-dropdown">
                                            <li class="user-title"><span>Hello,</span> {{ Auth::user()->name }}</li>
                                            <li><a href="profile.html">My Profile</a></li>
                                            <li><a href="order-list.html">Orders List</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true" ></i>
                                                {{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    @else
                                    <a href="{{ route('login') }}" class="btn bigshop-btn bigshop-btn-sm">{{ __('Login') }}</a>
                                    @endauth
                                </div>
                            </div>

                            <!-- Main Menus Wrapper -->
                            <div class="nav-menus-wrapper">
                                <ul class="nav-menu nav-menu-centered">
                                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('landingPage') }}">Home</a></li>
                                    <li class="{{ request()->is('shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">Shop</a></li>
                                    <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{ route('landingPage') }}">About Us</a></li>
                                    <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('landingPage') }}">Contact</a></li>
                                    <li class="{{ request()->is('fqa') ? 'active' : '' }}"><a href="{{ route('landingPage') }}">FAQ</a></li>
                                </ul>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
<style>
.img-logo {
    position: absolute;
    top: 0;
    left: 0;
    width: 128px;
}
</style>
