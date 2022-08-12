@extends('layouts.app')

@section('content')

<section id="page-header" class="blog-header">

</section>
<section id="blog">
    @foreach($posts as $post)
    <div class="blog-box">
        <div class="blog-img">
            <img src="{{ $post->image}}" alt="" srcset="">
        </div>
        <div class="blog-details">
            <h4> {{ $post->title}}</h4>
            <p>{{ $post->description}}.</p>
            <a href="#">Read more</a>
        </div>
        <h1>{{ $post->created_at}}</h1>
    </div>
    @endforeach
    <div class="mt-4 d-flex justify-content-end">
        {{ $posts->links() }}
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
    document.getElementById('link3').classList.add('active');
    const link = document.querySelectorAll("#link1, #link2, #link4, #link5, #link6");
    for (var i = 0; i < link.length; i++) {
        link[i].classList.remove('active');
    }
</script>
</script>
@endsection