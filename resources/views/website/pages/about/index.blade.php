@extends('website.layouts.master')
@section('content')  
    <section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about__text">
                    <div class="section-title">
                        <span>About Uniformy</span>
                        <h2>A place where you can customize your uniform!</h2>
                    </div>
                    <p>Welcome to Uniformy, your trusted destination for high-quality, personalized uniforms that reflect your brand's identity. With a firm belief that uniforms should not only be functional but also make a statement, we've been serving businesses, schools, and organizations with pride and dedication. Our journey began with a vision to revolutionize the way uniforms are designed and obtained. We understand that each uniform tells a story, representing the values and professionalism of your team. That's why we've made it our mission to provide custom solutions that align perfectly with your needs. From intricate embroidery to vibrant printing, our customization options are as limitless as your imagination. Our team of experienced designers and skilled artisans is committed to bringing your vision to life.</p>
                </div>
            </div>
<br> <br> 
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="product-deal-image">
                            <img src="website/img/main-Shirt.png" alt="shirt with logo">
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9">
                        <div class="about__bar">
                            <div class="about__bar__item">
                                <p>Shirts design</p>
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap"><span class="tip"></span></div>
                                    <span class="fill" data-percentage="95"></span>
                                </div>
                            </div>
                            <div class="about__bar__item">
                                <p>Scrubs</p>
                                <div id="bar2" class="barfiller">
                                    <div class="tipWrap"><span class="tip"></span></div>
                                    <span class="fill" data-percentage="80"></span>
                                </div>
                            </div>
                            <div class="about__bar__item">
                                <p>Hoodies</p>
                                <div id="bar3" class="barfiller">
                                    <div class="tipWrap"><span class="tip"></span></div>
                                    <span class="fill" data-percentage="90"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    
{{-- review section --}}
        <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Testimonial</span>
                        <h2>Our client say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel" data-autoplay="true" data-autoplayTimeout="2000">
                    <div class="col-lg-9">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{ asset('website/img/MyProfailPicture.jpeg') }}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Marah</h5>
                                    <span>Irbid</span>
                                </div>
                            </div>
                            <p>Brilliant design that adds a touch of sophistication to any setting. A definite conversation starter.</p>
                        </div>
                    </div>


                    <div class="col-lg-9">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{ asset('website/img/razan.jpg') }}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Razan Alrjoob</h5>
                                    <span>Amman</span>
                                </div>
                            </div>
                            <p>it's rare to find a product that combines elegance and utility so seamlessly. A true gem</p>
                        </div>
                    </div>


                    <div class="col-lg-9">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{ asset('website/img/leena.jpg') }}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Leena Alrababah</h5>
                                    <span>Aqaba</span>
                                </div>
                            </div>
                            <p>I can't get enough of this product! It's stylish, functional, and an absolute game-changer</p>
                        </div>
                    </div>


                    <div class="col-lg-9">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{ asset('website/img/rania.jpg') }}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Rania Taha</h5>
                                    <span>Amman</span>
                                </div>
                            </div>
                            <p>i'm thoroughly impressed with the performance of this product. It's reliable and efficient</p>
                        </div>
                    </div>


                    <div class="col-lg-9">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{ asset('website/img/lama.jpg') }}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Lama Nazzal</h5>
                                    <span>Irbid</span>
                                </div>
                            </div>
                            <p>I'm blown away by the innovative features of this product. It's designed with the user in mind</p>
                        </div>
                    </div>


                    <div class="col-lg-9">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{ asset('website/img/salam.jpg') }}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Sajeda Momani</h5>
                                    <span>Amman</span>
                                </div>
                            </div>
                            <p>This product exceeded my expectations! The quality and attention to detail are truly remarkable</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br> <br> 
    @endsection