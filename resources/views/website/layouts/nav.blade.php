<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__cart">
        <div class="offcanvas__cart__links">
            <a href="" class="search-switch" data-setbg="{{ asset('website/img/icon/search.png') }}"></a>
            <a href="{{ asset('img/icon/heart.png') }}" data-setbg="{{ asset('img/icon/heart.png') }}"></a>
        </div>
        <div class="offcanvas__cart__item">
            <a href="./shoping-cart.html"><img src="{{ asset('/public/assets/images/img/icon/cart.png') }}"></a>
            <div class="cart__price">Cart: <span>0.00 jd</span></div>
        </div>
    </div>
    <div class="offcanvas__logo">
        <a href="./index.html"><img src="{{ asset('img/blackshirt4.png') }}" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__option">
        <ul>
            <li><a href="Register.html">Sign in</a></span></li>
        </ul>
    </div>
</div>
<!-- Offcanvas Menu End -->
<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header__top__inner">
                        <div class="header__top__left">
                            <ul>
                                <li><a href="Register.html">Sign in</a> <span class="arrow_carrot-down"></span></li>
                            </ul>
                        </div>
                        <center>
                            <div class="header__logo">
                                <a href="./index.html"><img src="{{ asset('images/img/UNIFORMY.png') }}" alt="" style="margin-top: -19px; margin-left: -50px;"></a>
                            </div>
                        </center>
                        <div class="header__top__right">
                            <div class="header__top__right__links">
                                <a href="#" class="search-switch"><img src="{{ asset('images/img/icon/search.png') }}" alt=""></a>
                                <a href="./wisslist.html"><img src="{{ asset('img/icon/heart.png') }}" alt=""></a>
                            </div>
                            <div class="header__top__right__cart">
                                <a href="./shoping-cart.html"><img src="{{ asset('images/img/icon/cart.png') }}" alt=""> <span>0</span></a>
                                <div class="cart__price">Cart: <span>0.00 jd</span></div>
                            </div>
                        </div>
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
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="#">Shop</a>
                            <ul class="dropdown">
                                <li><a href="./shop.html">Shirts</a></li>
                                <li><a href="./shop.html">Hoodies</a></li>
                                <li><a href="./shop.html">Scrubs</a></li>
                                <li><a href="./shop.html">Labcoat</a></li>
                            </ul>
                        </li>
                        <li><a href="./about.html">About</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
    <!-- Header Section End -->