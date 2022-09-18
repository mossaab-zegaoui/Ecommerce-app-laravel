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
<div class="container section-m1">
    <div class="row">
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
                                <h3>@money($product->price) </h3>
                                <h4> {{ $product->name }}</h4>
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
    </div>
</div>
@endsection