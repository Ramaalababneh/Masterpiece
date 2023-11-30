@extends('website.layouts.master')
@section('content') 
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Product detail</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Details Section Begin -->
    <section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product__details__img"> 
                    <div class="product__details__big__img">
                        <img class="big_img" src="{{ $item->image }}" alt="Product Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                @if (isset($item))
                <div class="product__details__text">
                    <h4>{{ $item->name }}</h4>
                    <h5>{{ $item->price }} JOD</h5>
                    <p>{{ $item->description }}</p>

                    <ul>
                        <li>Logo: <span>Price includes the logo</span></li>
                        <li>Category: <span>{{ $item->category->name }}</span></li>
                        <li>Size: <span>{{ $item->size }}</span></li>
                    </ul>

                    <form action="/upload" method="post" enctype="multipart/form-data">
                    <label for="fileInput" style="background-color: #FDB827; color: #fff; padding: 15px 20px; border: none; border-radius: 5px; cursor: pointer; display: inline-block;">Upload Your Logo
                        <input type="file" name="photo" id="fileInput" style="display: none;" accept="image/*">
                    </label>
                    </form>


                    <br> <br>
                    <div class="product__details__option">
                        <a href="{{ route('addtocart', ['id' => $item->id]) }}" class="primary-btn" style="background-color: #FDB827; text-decoration: none;border-radius: 5px">Add to cart</a>
                        </div>
                </div>
                @else
                <p>Item not found for the selected category.</p>
                @endif
            </div>
        </div>
    </div>
</section>

            <div class="product__details__tab">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <p>comfortable unisex t-shirt, the perfect blend of style and relaxation. Crafted from premium 100% cotton, this t-shirt ensures breathability and a soft touch against your skin. Its versatile design features a timeless crew neck and short sleeves,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->
@include('website.pages.singleItem.relatedItems')
@endsection