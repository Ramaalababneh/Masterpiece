@extends('website.layouts.master')
@section('content')
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="{{ route('checkoutcreate') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Name<span>*</span></p>
                                    <input type="text" name="name" value="{{ $user->name }}">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input value="{{ $user->email }}" name="email" type="text">
                                </div>
                            </div>
                            <div class=" col-lg-6 ">
                                <div class="checkout__input">
                                    <p>Address<span>*</span></p>
                                    <input type="text" value="{{ $user->location }}" name="location" placeholder=" Address"
                                        class="checkout_input_add">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input value="{{ $user->mobileNum }}" name="mobileNum" type="text">
                                </div>
                            </div>


                            <div class="payment-method">

                                <div class="custom-control custom-radio mr-sm-2">
                                    <input type="radio" class="custom-control-input" id="cashOnDelivery" name="payment"
                                        value="cash" checked>
                                    <label class="custom-control-label" for="cashOnDelivery"
                                        style="color: black; font-weight:300">Cash on Delivery</label>
                                </div>

                                <div class="custom-control custom-radio mr-sm-2">
                                    <input type="radio" class="custom-control-input" id="paypal" name="payment"
                                        value="paypal">
                                    <label class="custom-control-label" for="paypal">
                                        <img style="width: 20px" class="ml-15" src="paypal.jpeg" alt="">

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h6 class="order__title">Your order</h6>
                                <div class="checkout_order_products">Product <span>Total</span></div>
                                <ul class="checkout_total_products">
                                    @php $total=0; @endphp
                                    @foreach ($cart as $item)
                                        <li><samp>{{ $item->quantity }}.</samp> {{ $item->items->name }}
                                            <span>{{ $item->item_price }}JOD</span></li>
                                        @php
                                            $total += $item->total;
                                        @endphp
                                    @endforeach
                                </ul>
                                <ul class="checkout_total_all">
                                    <li>Subtotal <span>{{ $total }}JOD</span></li>
                                    <li><span>enjoy free deleviry!</span></li>
                                    <li>Total <span>{{ $total }}JOD</span></li>
                                </ul>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
<!-- Breadcrumb Begin -->