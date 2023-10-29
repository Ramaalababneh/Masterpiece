@extends('website.layouts.master')
@section('content') 
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <!-- <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                            here</a> to enter your code</h6> -->
                            <h6 class="checkout__title">Billing Details</h6>
                            <form action="{{ route('checkoutcreate') }}" method="post">
                            @csrf


                            <div class="col-md-12 mb-3">
                            <input type="text" class="form-control" id="name"
                            value="{{ $user->name }}" placeholder="Name" name="name" required>
                            @error('name')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                            </div>
                        
                            <div class="col-12 mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email"
                            name="email" value="{{ $user->email }}">
                            @error('email')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                            </div>


                            <div class="col-12 mb-3">
                            <input type="text" class="form-control mb-3" id="street_address"
                            placeholder="Address" name="address" value="{{ $user->Address }}">
                            @error('address')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                            </div>
                        
                            <div class="col-md-12 mb-3">
                            <input type="number" class="form-control" id="phone_number" min="0"
                            placeholder="Phone No" name="phone" value="">
                            @error('phone')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                            </div>
                            <!-- <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Create an account?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                                <p>Create an account by entering the information below. If you are a returning customer
                                please login at the top of the page</p>
                            </div> -->
                            <!-- <div class="checkout__input">
                                <p>Account Password<span>*</span></p>
                                <input type="text">
                            </div> -->

                                <div class="payment-method">
                                    <!-- Cash on delivery -->
                                    <div class="custom-control custom-radio mr-sm-2">
                                        <input type="radio" class="custom-control-input" id="cashOnDelivery"
                                            name="payment" value="cash" checked>
                                        <label class="custom-control-label" for="cashOnDelivery">Cash on Delivery</label>
                                    </div>
                                    <!-- Paypal -->
                                    <div class="custom-control custom-radio mr-sm-2">
                                        <input type="radio" class="custom-control-input" id="paypal" name="payment" value="paypal">
                                        <label class="custom-control-label" for="paypal">
                                            <img class="ml-15" src="Web/assets/img/icons/payments/paypal-primary.png"
                                                alt="">
                                        </label>
                                    </div>
                                </div>

                                <div class="cart-btn mt-100">
                                    <button type="submit" class="btn amado-btn w-100">Checkout</button>
                                </div>

                            </form>





                            {{-- <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Note about your order, e.g, special noe for delivery
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text"
                                placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div> --}}






                        {{-- <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h6 class="order__title">Your order</h6>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    <li><samp>3.</samp> blue T-shirt <span>$ 30.0</span></li>
                                    <li><samp>2.</samp> Geaen hoddie <span>$ 50.0</span></li>
                                    <li><samp>3.</samp> Labcoat <span>$ 40.0</span></li>
                                    <li><samp>4.</samp> blue hoddie <span>$ 100.0</span></li>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span>$220.00</span></li>
                                    <li>Total <span>$222.00</span></li>
                                </ul> --}}
                                <!-- <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div> -->
                                <!-- <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div> -->

                                <div class="col-12 col-lg-4">

                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <div>
                                <ul class="summary-table">
                                    <li><span>Product</span><span></span> <span>Total</span></li>
                                    <hr>
                                    @php $total=0; @endphp
                                    @foreach ($cart as $item)
                                        @php
                                            
                                            $total += $item->Totalprice;
                                            
                                        @endphp

                                        <li><span> {{ $item->product->name }} </span><span>x{{ $item->quantity }} </span>
                                            <span>{{ $item->price * $item->quantity }}JOD </span>
                                        </li>
                                    @endforeach
                                </ul>
                                <hr>
                            </div>
                            <ul class="summary-table">
                                <li style="font-weight: bold;"><span>subtotal:</span> <span>{{ $total }}JOD </span>
                                </li>
                                <li style="font-weight: bold;"><span>delivery:</span> <span>Free</span></li>
                                <li style="font-weight: bold;"><span>total:</span> <span>{{ $total }}JOD</span></li>
                            </ul>



                            <form action="{{ route('checkoutcreate') }}" method="post">
                                @csrf
                                <!-- Your form fields and content here -->

                            </form>





                                <a href="payment.html">
                                    <button type="button" class="site-btn">PLACE ORDER</button>
                                </a>
                                
                            {{-- </div>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
    </section>
@endsection
