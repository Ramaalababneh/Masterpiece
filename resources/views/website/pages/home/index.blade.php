@extends('website.layouts.master')
@section('content')  
    <!-- slider Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="website/img/header.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Welcome to <span style="color: #FDB827;">Uniformy</span>! <br> where you can build your own uniform</h2>
                                <a href="./shop.html" class="primary-btn"style="border-radius: 10px;">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="website/img/img1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Welcome to <span style="color: #FDB827;">Uniformy</span>! where you can build your own uniform</h2>
                                <a href="./shop.html" class="primary-btn" style="border-radius: 10px;">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- Hero Section End -->

    <br> <br> <br> <br>
    
    <!-- About Section Begin -->
    <section class="about spad" style="padding: 40px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>Uniformy</span>
                            <h2>where you can build your own uniform</h2>
                        </div>
                        <p>You can customize your uniform by uploading your logo, and we will take care of generating your uniform.</p>
                        <a href="./shop.html" class="primary-btn">Shop Now  </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-deal-image"> 
                    <img src="website/img/main-Shirt.png" alt="shirt with logo"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->

@include('website.pages.home.sections.category')
@include('website.pages.home.sections.reviews')
@endsection