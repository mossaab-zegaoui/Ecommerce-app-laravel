@extends('layouts.app')

@section('content')

<section id="home">
    <div class="container main_slider">
        <h6>Spring / Summer Collection 2022</h6>
        <h1 class="home_h1"><span>Get up to 30% Off <br>
            </span> New Arrivals</h1>
        <div class="button_shop_now">
            <button>Shop now</button>
        </div>
    </div>
</section>
<section id="categories" class="w-100">
    <div class="row p-0 m-0">
        <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class=" img-fluid" src="{{ asset('img/categorie1.webp') }}" alt="" srcset="">
            <div class="details">
                <h2>Women's</h2>
                <button class="text-uppercase">Shop now</button>
            </div>
        </div>
        <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class=" img-fluid" src="{{ asset('img/categorie2.webp') }}" alt="" srcset="">
            <div class="details">
                <h2>Men's</h2>
                <button class="text-uppercase">Shop now</button>
            </div>
        </div>
        <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class=" img-fluid" src="{{ asset('img/categorie3.webp') }}" alt="" srcset="">
            <div class="details">
                <h2>accessories </h2>
                <button class="text-uppercase">Shop now</button>
            </div>
        </div>
    </div>
</section>
<section id="product1" class="">
    <div class="container">
        <h2>Featured Products</h2>
        <div class="pro-container">
            <div class="pro">
                <img src="{{ asset('img/f1.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/f2.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/f3.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/f4.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/f5.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/f6.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/f7.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/f8.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="banner">
    <h4>Repair services</h4>
    <h2>Up to <span>70% off</span> - All t-shirts & accessories</h2>
    <button class="normal">Exploy more</button>
</section>
<section id="product1" class="">
    <div class="container">
        <h2>New Arrivals</h2>
        <div class="pro-container">
            <div class="pro">
                <img src="{{ asset('img/n6.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/n1.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/n2.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/n3.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/n4.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/n5.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/n7.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="{{ asset('img/n8.jpg') }}" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Long sleeve Shirt</h5>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>$ 29.99</h4>
                    <a href="#"><i class="bi bi-cart3 cart"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>Crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>Best classic dress is on sale </span>
        <button>Learn more</button>
    </div>
    <div class="banner-box banner-box2">
        <h4>Spring/Summer</h4>
        <h2>Upcoming season</h2>
        <span>Best classic dress is on sale </span>
        <button>Collection</button>
    </div>
</section>
<section id="banner3">
    <div class="banner-box banner-box2">
        <h2>Long sleeves</h2>
        <h3>Winter collection -40% OFF</h3>
    </div>
    <div class="banner-box">
        <h2>Long sleeves</h2>
        <h3>Winter collection -40% OFF</h3>
    </div>
    <div class="banner-box banner-box3">
        <h2>Long sleeves</h2>
        <h3>Winter collection -40% OFF</h3>
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
        <img src="{{ asset('img/app.jpg') }}" alt="" class="logo">
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
@endsection