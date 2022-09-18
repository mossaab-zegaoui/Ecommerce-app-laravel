@extends('layouts.app')
@section('extra-css')
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


<section id="page-header" class="contact-header">
</section>
<section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit on our agency around the glob</h2>
        <h3>Our head office</h3>
        <div>
            <li>
                <i class="bi bi-geo-alt-fill"></i>
                <p>Bâtiment Bréguet, 3 Rue Joliot Curie 2e ét, 91190 Gif-sur-Yvette, France</p>
            </li>
            <li>
                <i class="bi bi-envelope"></i>
                <p>Saclay@gmail.com</p>
            </li>
            <li>
                <i class="bi bi-telephone-fill"></i>
                <p>+33 169 156 750</p>
            </li>
            <li>
                <i class="bi bi-clock"></i>
                <p>Monday to Friday : 9:00 AM to 4:30 PM</p>
            </li>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2632.7702676578747!2d2.16515016772268!3d48.70987179999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67f6794d18479%3A0xf281f304394e3a1c!2sUniversity%20of%20Paris-Saclay!5e0!3m2!1sen!2sma!4v1660074980467!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<section id="form-details">
    @if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message')}}
    </div>
    @endif
    <form action="{{ route('contact_store') }}" name="form-contact" method="POST">
        @csrf
        <span>
            <h3>Write your message here </h3>
        </span>
        <h2>We love to hear your feedback</h2>
        <input type="text" placeholder="Enter your name ...." id="name">
        <input type="text" placeholder="Enter your email ...." id="email">
        <input type="text" placeholder="Enter your Subject ...." id="subject">
        <textarea name="" id="" cols="30" rows="10" placeholder="Right down your message ..." id="message"></textarea>
        <button type="submit">Send</button>
    </form>
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
    document.getElementById('link5').classList.add('active');
    const link = document.querySelectorAll("#link1, #link2, #link3, #link4, #link6");
    for (var i = 0; i < link.length; i++) {
        link[i].classList.remove('active');
    }
</script>
@endsection