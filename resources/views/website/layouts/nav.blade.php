<div class="offcanvas-menu-overlay">
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__cart">
        <div class="offcanvas__cart__links">
            <a href="{{ asset('img/icon/heart.png') }}" data-setbg="{{ asset('website/img/icon/heart.png') }}"></a>
        </div>
        <div>
            <a href="./shoping-cart.html"><img src="website/images/img/icon/cart.png"></a>
        </div>

    </div>
    <div class="offcanvas__logo">
        <a href="./index.html"><img src="{{ asset('website/img/blackshirt4.png') }}" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__option">
        <ul style="list-style: none; margin: 0; padding: 0; display: flex; align-items: center;">
        @if (Auth::check())
            <li><a href="{{ route('logout') }}" style="color: black; text-decoration: none; padding: 10px;">Logout</a></li>
                <li style="color: black; font-weight: bold; margin-left: 10px;">Welcome, {{ Auth::user()->name }}</li>
            @else
                <li><a href="{{ route('login') }}" style="color: black; text-decoration: none; padding: 40px;">
                {{-- <img src="{{ asset('website/img/icon/login.png') }}"> --}}
                Login</a></li>
            @endif

            <li><a href="{{ route('profile.edit') }}">profile</a> </li>
        </ul>
    </div>
</div>
</div>

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header__top__inner">
                        <center>
                            <div class="header__logo">
                                <a href="./index.html"><img src="{{ asset('website/img/UNIFORMY.png') }}" alt=""
                                        style="margin-top: -19px; margin-left: -50px;"></a>
                            </div>
                        </center>
                        <div class="header__top__right">
                            <div class="header__top__right__links">
                                <a href="#" class="search-switch"><img
                                        src="{{ asset('website/img/icon/search.png') }}" alt=""></a>
                                <a href="{{ url('/wisslist.html') }}"><img
                                        src="{{ asset('website/images/img/icon/heart.png') }}" alt=""></a>
                            </div>
                            <div class="header__top__right__cart">
                                <a href="{{ url('/cart') }}"><img
                                src="{{ asset('website/img/icon/cart.png') }}" alt="cart icon"></a>
                            </div>
                            </div>
                            <ul style="list-style: none; margin: 0; padding: 0; display: flex; align-items: center;">
                            <li><a style="text-decoration: none; color: #FDB827;" href="{{ route('profile.edit') }}">profile</a> </li>

                            @if (Auth::check())
                                <li><a href="{{ route('logout') }}" style="color: black; text-decoration: none; padding: 10px;">Logout</a></li>
                                <li style="color: #FDB827; font-weight: bold; margin-left:5px;">Welcome, {{ Auth::user()->name }}!</li>
                            @else
                                <li><a href="{{ route('login') }}" style="color: black; text-decoration: none; padding: 40px;">
                                    {{-- <img src="{{ asset('website/img/icon/login.png') }}"> --}}
                                    Login</a></li>
                            @endif

                            {{-- <li><a href="{{ route('profile.edit') }}">profile</a> </li> --}}

                        </ul>
                    </div>
                </div>
            </div>

            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </div>
    
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <nav class="header__menu mobile-menu">
                <ul>
                    <li class="active"><a href="/" style="text-decoration: none;">Home</a></li>
                    <li>
                        <a href="#" style="text-decoration: none;">Shop</a>
                        <ul class="dropdown">
                            <li><a href="./shop.html" style="text-decoration: none;">Shirts</a></li>
                            <li><a href="./shop.html" style="text-decoration: none;">Hoodies</a></li>
                            <li><a href="./shop.html" style="text-decoration: none;">Scrubs</a></li>
                            <li><a href="./shop.html" style="text-decoration: none;">Labcoat</a></li>
                        </ul>
                    </li>
                    <li><a href="/about" style="text-decoration: none;">About</a></li>
                    <li><a href="/contact" style="text-decoration: none;">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</header>
<!-- Header Section End -->
