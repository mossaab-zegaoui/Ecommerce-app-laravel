@extends('layouts.app')

@section('content')

<!-- <section id="product1" class="">
    <div class="container">
        <h2>Featured Products</h2>
        <p>
            @if( session('message'))
            {{ session('message')}}
            @endif
        </p>
        <div id="categories">
            <div class="side-bar">
                <h6>Categories</h6>
                <ul>
                    @foreach($categories as $category)
                    <li>
                        <a href="{{ route('shops.categories' ,$category->id) }}">{{ $category->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <a href="{{ route('shops.index') }}">All categories</a>
            <div class="pro-container">
                @foreach($products as $product)
                <div class="pro">
                    <a href="{{ route('shops.show' ,$product->id) }}"><img src=" {{ asset($product->image) }}" alt=""></a>
                    <div class="des">
                        <span>{{ $product->name }}</span>
                        <h5>{{ $product->description }}</h5>
                        <div class="star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h4>$ {{ $product->price_ht}}</h4>
                        <a href="{{ route('shops.show' ,$product->id) }}"><i class="bi bi-cart3 cart"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-end">
            {{ $products->links() }}
        </div>
    </div>
</section> -->
<section>
    <div class="container section-m1">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        @foreach($categories as $category)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="{{ route('shops.categories' ,$category->id) }}">{{ $category->name }}</a>
                                </h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--/category-productsr-->

                    <div class="brands_products">
                        <!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href=""> <span class="pull-right">(50)</span>Acne</a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="pull-right">(56)</span>Grüne Erde</a>
                                </li>
                                <li>
                                    <a href=""> <span class="pull-right">(27)</span>Albiro</a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="pull-right">(32)</span>Ronhill</a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="pull-right">(5)</span>Oddmolly</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/brands_products-->
                    <div class="price-range">
                        <!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" /><br />
                            <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div>
                    <!--/price-range-->
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    @if( session('message'))
                    {{ session('message')}}
                    @endif
                    @foreach($products as $product)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ route('shops.show' ,$product->id) }}"><img src=" {{ asset($product->image) }}" alt=""></a>
                                    <h2>$ {{ $product->price_ht}}</h2>
                                    <p>{{ $product->description }}</p>
                                    <a href="{{ route('shops.show' ,$product->id) }}" id="button-cart">
                                        <i class="bi bi-cart3"></i>
                                        Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
                <ul class="pagination">
                    {!! $products->links() !!}
                </ul>
            </div>
            <!--features_items-->
        </div>
    </div>
    </div>
</section>
<section id="newsletter" class="section-p1">
    <div class="news-text">
        <h4>Sign up for our news letter</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
    </div>
    <div class="newsform">
        <input type="text" placeholder="Enter your email address">
        <button>Sign up</button>
    </div>
</section>

<script>
    const link = document.querySelectorAll("#link1, #link3, #link4, #link5, #link6");
    for (var i = 0; i < link.length; i++) {
        link[i].classList.remove('active');
    }
    document.getElementById('link2').classList.add('active');
</script>
@endsection
@section('extra-js')
<script src="js/jquery.js"></script>
<script src="js/price-range.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/main.js"></script>
@endsection