@extends('website.layouts.master')
@section('content') 
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Shop</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="/">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="shop__option">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="shop__option__search">
                            {{-- <form action="#"> --}}
                                <select>
                                    <option value="">Shirts</option>
                                    <option value="">Hoodies</option>
                                    <option value="">Labcoats</option>
                                    <option value="">Scrubs</option>
                                </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($items as $item)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ asset($item->image) }}">
                            <div class="product__label">
                                <span>{{ $item->category->name }}</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6>{{ $item->name }}</h6>
                            <div class="product__item__price">{{ $item->price }} JD</div>
                            <div class="cart_add">
                                <a href="{{ route('single-item', ['id' => $item->id, 'category_id' => $item->category_id]) }}">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="shop__last__option">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__pagination">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><span class="arrow_carrot-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__last__text">
                            <p>Showing 1-9 of 10 results</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
