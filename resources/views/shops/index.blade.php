@extends('layouts.app')
@section('extra-css')
<script src="js/jquery.js" type="text/javascript"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/swiper-bundle.min.css" rel="stylesheet">
<link href="css/glightbox.min.css" rel="stylesheet">
<link href="css/aos.css" rel="stylesheet">

<!-- Template Main CSS Files -->
<link href="css/variables.css" rel="stylesheet">
<link href="css/main2.css" rel="stylesheet">
@endsection
@section('content')
<section>
    @if( session('message'))
    <div class="d-flex justify-content-center section-m1">
        <div class="alert alert-success" style="width: 30%;">
            {{ session('message')}}
        </div>
    </div>
    @endif
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
                                    <a href=""> <span class="pull-right">(50)</span>Adidas</a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="pull-right">(56)</span>Nike Erde</a>
                                </li>
                                <li>
                                    <a href=""> <span class="pull-right">(27)</span>Albiro</a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="pull-right">(32)</span>Louis vuitton</a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="pull-right">(5)</span>Oddmolly</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/brands_products-->
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    @foreach($products as $product)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ route('shops.show' ,$product->id) }}"><img src=" {{ asset($product->image) }}" alt=""></a>
                                    <h3>@money($product->price) </h3>
                                    <h4> {{ $product->name }}</h4>
                                    <p>{{ $product->description }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button class="btn btn-info" type="submit">Add to cart</button>
                                    </form>
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