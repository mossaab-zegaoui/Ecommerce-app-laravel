@extends('layouts.app')

@section('content')

<section id="home">
    <div class="container main_slider">
        <h6>Spring / Summer Collection 2022</h6>
        <h1 class="home_h1"><span>Get up to 30% Off <br>
            </span> New Arrivals</h1>
        <div class="button_shop_now">
            <button> <a href="{{ route('shops.index') }}"> Shop now </a></button>
        </div>
    </div>
</section>
<section id="categories" class="w-100">
    <div class="row p-0 m-0">
        <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class=" img-fluid" src="{{ asset('img/man.webp') }}" alt="" srcset="">
            <div class="details">
                <button class="text-uppercase">MAN</button>
            </div>
        </div>
        <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class=" img-fluid" src="{{ asset('img/woman.webp') }}" alt="" srcset="">
            <div class="details">
                <button class="text-uppercase">WOMAN</button>
            </div>
        </div>
        <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class=" img-fluid" src="{{ asset('img/kids.webp') }}" alt="" srcset="">
            <div class="details">
                <button class="text-uppercase">KIDS & BABY</button>
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
        <button id="bbox-1"> <a href="#"> Learn more</a></button>
    </div>
    <div class="banner-box banner-box2">
        <h4>Spring/Summer</h4>
        <h2>Upcoming season</h2>
        <span>Best classic dress is on sale </span>
        <button id="bbox-2"> <a href="#"> Collection </a></button>
    </div>
</section>
<section id="banner3">
    <div class="banner-box banner-box2">
        <h2>JACKETS</h2>
        <h3>WINTER COLLECTION 40% OFF</h3>
    </div>
    <div class="banner-box">
        <h2>ACCESSORIES</h2>
        <h3>ACCESSORIES COLLECTION 25% OFF</h3>
    </div>
    <div class="banner-box banner-box3">
        <h2>SHOES</h2>
        <h3>SUMMER COLLECTION 40% OFF</h3>
    </div>
</section>
<section id="newsletter" class="section-p1 ">
    <div class="news-text">
        <h4>Sign up for our news letter</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
    </div>
    <div class="newsform">
        <input type="text" placeholder="Enter your email address">
        <button>Sign up</button>
    </div>
</section>
<!--footer starts from here-->

@endsection
@section('extra-js')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection