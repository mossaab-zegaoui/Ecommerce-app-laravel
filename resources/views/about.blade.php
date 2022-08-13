@extends('layouts.app')

@section('content')

<section id="page-header" class="about-header">
</section>
<section id="about-head" class="section-p1">
    <img src="img/a6.jpg" alt="" srcset="">
    <div>
        <h2>Who are we?</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem vel at quasi dolorem commodi laboriosam, sunt debitis odit iste animi mollitia deserunt nobis impedit labore quo adipisci dolor saepe voluptatum. Molestias ut velit vitae totam pariatur eius aperiam reprehenderit repellendus!
        </p>
    </div>
</section>
<div id="title">
    <h3>Services we offer</h3>
</div>

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="img/f1.png" alt="">
        <h6>Free shipping</h6>
    </div>
    <div class="fe-box">
        <img src="img/f2.png" alt="">
        <h6>Order online</h6>
    </div>
    <div class="fe-box">
        <img src="img/f3.png" alt="">
        <h6>Save money</h6>
    </div>
    <div class="fe-box">
        <img src="img/f4.png" alt="">
        <h6>Promotions</h6>
    </div>
    <div class="fe-box">
        <img src="img/f5.png" alt="">
        <h6>Happy sell</h6>
    </div>
    <div class="fe-box">
        <img src="img/f6.png" alt="">
        <h6>24/7 Support</h6>
    </div>
</section>
<section id="about-app" class="section-p1">
    <h1>Download our <a href="#">app </a> </h1>
    <div class="video">
        <video autoplay muted loop src="img/video.mp4"></video>
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
    document.getElementById('link4').classList.add('active');
    const link = document.querySelectorAll("#link1, #link2, #link3, #link5, #link6");
    for (var i = 0; i < link.length; i++) {
        link[i].classList.remove('active');
    }
</script>
@endsection