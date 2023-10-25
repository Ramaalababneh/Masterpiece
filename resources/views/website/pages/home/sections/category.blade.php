<section class="team spad">
        <section class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <h2>Our categories</h2>
                    </div>
                </div>
            </div>

            <!-- categorie cards -->
            <div class="row">
                @foreach ($category as $item)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card__image" style="background-image: url('{{ asset($item->image) }}'); background-size: 80% 80%; background-repeat: no-repeat;"></div>
                        <div class="card__content">
                            <h6>{{ $item->name }}</h6>
                            {{-- <button>Shop Now</button> --}}
                            <a href="{{ route('category', ['id' => $item->id]) }}">Shop Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

</section>
</section>
    <br> <br> <br> <br>