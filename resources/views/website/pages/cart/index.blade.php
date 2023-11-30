@extends('website.layouts.master')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Shopping cart</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">

        @if (session('cartPageReloaded'))
            <script>
                setTimeout(function() {
                    location.reload();
                }, 1000);

                @php session()->forget('cartPageReloaded') @endphp
            </script>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping_cart_table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>

                                </tr>
                            </thead>
                            @php
                                $total = 0;
                            @endphp
                            @if (session('cart'))
                                @foreach (session('cart') as $item => $details)
                                    @php
                                        $total += $details['price'] * $details['quantity'];
                                    @endphp
                                    <tbody>
                                        <tr rowId={{ $item }}>
                                            <td class="product_cart_item">
                                                <div class="product_cartitem_pic">
                                                    <img style="width:100px" src="{{ asset($details['image']) }}"
                                                        alt="IMG">
                                                </div>

                                                <div class="product_cartitem_text">
                                                    <h6> {{ $details['name'] }} </h6>
                                                </div>
                                            </td>
                                            <td class="column-3">
                                                <h5>{{ $details['price'] }} JOD</h5>
                                            </td>
                                            <td class="quantity__item col-3">
                                                <div class="quantity">
                                                    <div class="">

                                                        <a
                                                            href="{{ route('quantitycart', ['id' => $item, 'type' => 'plus']) }}">
                                                            <span class="inc qtybtn">+</span></a>
                                                        <input type="text" value="{{ $details['quantity'] }}" readonly>
                                                        <a
                                                            href="{{ route('quantitycart', ['id' => $item, 'type' => 'minus']) }}">
                                                            <span class="dec qtybtn">-</span></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="column-5">
                                                {{ $details['price'] * $details['quantity'] }}JOD</td>
                                            <td class="column-1"><a href="{{ route('deletecart', ['item' => $item]) }}"><i
                                                        class="zmdi zmdi-delete" style="color:red;font-size:18px"></i></a>
                                            </td>

                                            <td class="cart__close">
                                                <a href="{{ route('deletecart', ['item' => $item]) }}"><span
                                                        class="icon_close"></span></a>
                                            </td>
                                        </tr>
                                @endforeach
                            @endif
                            </tbody>

                            @if (Auth::id())
                                <tbody>
                                    @foreach ($cartDB as $cartItem)
                                    @php
                                    $total +=  $cartItem->item_price *$cartItem->quantity;
                                @endphp
                                        <tr rowId={{ $cartItem->id }}>
                                            <td class="product_cart_item">
                                                <div class="product_cartitem_pic">
                                                    <img style="width:100px" src="{{ asset($cartItem->items->image) }}"
                                                        alt="IMG">
                                                </div>

                                                <div class="product_cartitem_text">
                                                    <h6>{{ $cartItem->items->name }}</h6>
                                                </div>
                                            </td>

                                            <td class="column-3">
                                                <h5>{{ $cartItem->item_price }} JOD</h5>
                                            </td>
                                            
                                            <td class="quantity__item">
                                                <div class="quantity">
                                                    <div class="">

                                                        <a
                                                            href="{{ route('quantitycart', ['id' => $cartItem, 'type' => 'plus']) }}">
                                                            <span class="inc qtybtn">+</span></a>
                                                        <input type="text" value="{{ $cartItem->quantity }}" readonly>
                                                        <a
                                                            href="{{ route('quantitycart', ['id' => $cartItem, 'type' => 'minus']) }}">
                                                            <span class="dec qtybtn">-</span></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="column-5">
                                                {{ $cartItem->total }} JOD
                                            </td>

                                            <td class="column-1">
                                                <a href="{{ route('deletecart', ['item' => $cartItem]) }}">
                                                    <i class="zmdi zmdi-delete" style="color:red;font-size:18px"></i>
                                                </a>
                                            </td>

                                            <td class="cart__close"> <a
                                                    href="{{ route('deletecart', ['item' => $cartItem->id]) }}"><span
                                                        class="icon_close"></span></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            @endif
                            </tbody>

                        </table>
                    </div>


                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="shop.html">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue_btn update_btn">
                                <a href="#"><i class="bi bi-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <div class="flex-w flex-m m-r-20 m-tb-5">
                            <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text"
                                name="coupon" placeholder="Coupon Code">
                            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                Apply coupon
                            </div>
                        </div>
                    </div>


                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span></span></li>
                            <li>Total <span> {{ $total }}JOD </span></li>
                        </ul>
                        <a href="{{ route('checkout') }}" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection