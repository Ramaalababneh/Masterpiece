<section class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="related__products__slider owl-carousel">
                @foreach ($relatedItems as $relatedItem)
                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/img/shirts' . $relatedItem->image) }}">
                                <div class="product__label">
                                    <span>{{ $relatedItem->category->name }}</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">{{ $relatedItem->name }}</a></h6>
                                <div class="product__item__price">${{ $relatedItem->price }}</div>
                                <div class="cart_add">
                                    {{-- <a href="{{ route('items.show', $relatedItem->id) }}">Add to cart</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Related Products Section End -->