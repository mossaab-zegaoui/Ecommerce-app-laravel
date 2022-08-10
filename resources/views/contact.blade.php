@extends('layouts.app')

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
    <form action="">
        <span>Right your message</span>
        <h2>We love to hear your feedback</h2>
        <input type="text" placeholder="Enter your name ....">
        <input type="text" placeholder="Enter your email ....">
        <input type="text" placeholder="Enter your Subject ....">
        <textarea name="" id="" cols="30" rows="10" placeholder="Right down your message ..."></textarea>
        <button type="submit">Send</button>
    </form>
    <div class="people">
        <div>
            <img src="img/1.png" alt="">
            <p>
                <span>Eric John</span><br>
                Senior Project Manager <br>
                Phone: +212 585 368 215 <br>
                Email: eric@gmail.com
            </p>
        </div>
        <div>
            <img src="img/2.png" alt="">
            <p>
                <span>Jake John</span><br>
                Senior Marketing Manager <br>
                Phone: +212 585 368 215 <br>
                Email: jake@gmail.com
            </p>
        </div>
        <div>
            <img src="img/3.png" alt="">
            <p>
                <span>Kate John</span><br>
                Senior Developer Manager<br>
                Phone: +212 585 368 215 <br>
                Email: logan@gmail.com
            </p>
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
    document.getElementById('link5').classList.add('active');
    const link = document.querySelectorAll("#link1, #link2, #link3, #link4, #link6");
    for (var i = 0; i < link.length; i++) {
        link[i].classList.remove('active');
    }
</script>
</script>
@endsection