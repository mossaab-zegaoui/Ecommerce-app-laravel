@extends('layouts.app')

@section('content')

<section id="product1" class="">
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
</section>
<section id="newsletter" class="section-p1 section-m1">
    <div class="news-text">
        <h4>Sign up for our news letter</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
    </div>
    <div class="newsform">
        <input type="text" placeholder="Enter your email address">
        <button>Sign up</button>
    </div>
</section>

<footer class="section-p1">
    <div class="col">
        <img src="img/logo.png" alt="" class="logo">
        <h4>Contact</h4>
        <p><strong>Address: </strong> 562 Wellington Road</p>
        <p><strong>Phones: </strong> 562 Wellington Road</p>
        <p><strong>Hours: </strong> 562 Wellington Road</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-youtube"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About us </a>
        <a href="#">Delivery Information </a>
        <a href="#">Privacy Policy </a>
        <a href="#">Terms & Conditions </a>
        <a href="#">Contact us </a>
    </div>
    <div class="col">
        <h4>Account</h4>
        <a href="#">Sign In </a>
        <a href="#">View Cart </a>
        <a href="#">My wishlist </a>
        <a href="#">Track My Order </a>
        <a href="#">Help</a>
    </div>
    <div class="col install">
        <h4>Install app</h4>
        <p>From App store or Google App</p>
        <div class="row">
            <img src="img/app.jpg" alt="">
            <img src="img/play.jpg" alt="">
        </div>
        <p>Secure Payments Gateways</p>
        <img src="img/pay.png" alt="">
    </div>
</footer>
<script>
    const link = document.querySelectorAll("#link1, #link3, #link4, #link5, #link6");
    for (var i = 0; i < link.length; i++) {
        link[i].classList.remove('active');
    }
    document.getElementById('link2').classList.add('active');
</script>
@endsection