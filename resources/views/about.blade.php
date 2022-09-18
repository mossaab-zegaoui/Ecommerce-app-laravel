@extends('layouts.app')
@section('extra-css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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
<!-- 
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
</section> -->
<header>
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <div class="position-relative">
            <a href="#" class="mx-2 js-search-open"></a>
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.html" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div>
        </div>
    </div>
</header>
    <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">About us</h1>
                </div>
            </div>

            <div class="row mb-5">

                <div class="d-md-flex post-entry-2 half">
                    <a href="#" class="me-4 thumbnail">
                        <img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid">
                    </a>
                    <div class="ps-md-5 mt-4 mt-md-0">
                        <div class="post-meta mt-4">About us</div>
                        <h2 class="mb-4 display-4">Company History</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                        <p>Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>
                    </div>
                </div>

                <div class="d-md-flex post-entry-2 half mt-5">
                    <a href="#" class="me-4 thumbnail order-2">
                        <img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid">
                    </a>
                    <div class="pe-md-5 mt-4 mt-md-0">
                        <div class="post-meta mt-4">Mission &amp; Vision</div>
                        <h2 class="mb-4 display-4">Mission &amp; Vision</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                        <p>Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="mb-5 bg-light py-5">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-between align-items-lg-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="display-4 mb-4">Latest News</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rem eaque vel est asperiores iste pariatur placeat molestias, rerum provident ea maiores debitis eum earum esse quas architecto! Minima, voluptatum! Minus tempora distinctio quo sint est blanditiis voluptate eos. Commodi dolore nesciunt culpa adipisci nemo expedita suscipit autem dolorum rerum?</p>
                    <p>At magni dolore ullam odio sapiente ipsam, numquam eius minus animi inventore alias quam fugit corrupti error iste laboriosam dolorum culpa doloremque eligendi repellat iusto vel impedit odit cum. Sequi atque molestias nesciunt rem eum pariatur quibusdam deleniti saepe eius maiores porro quam, praesentium ipsa deserunt laboriosam adipisci. Optio, animi!</p>
                    <p><a href="#" class="more">View All Blog Posts</a></p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6">
                            <img src="assets/img/post-portrait-3.jpg" alt="" class="img-fluid mb-4">
                        </div>
                        <div class="col-6 mt-4">
                            <img src="assets/img/post-portrait-4.jpg" alt="" class="img-fluid mb-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h2 class="display-4">Our Team</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center mb-5">
                    <img src="assets/img/person-1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>Cameron William</h4>
                    <span class="d-block mb-3 text-uppercase">Founder &amp; CEO</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                </div>
                <div class="col-lg-4 text-center mb-5">
                    <img src="assets/img/person-2.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>Wade Paul</h4>
                    <span class="d-block mb-3 text-uppercase">Founder, VP</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                </div>
                <div class="col-lg-4 text-center mb-5">
                    <img src="assets/img/person-3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
                    <h4>Jane Derants</h4>
                    <span class="d-block mb-3 text-uppercase">Editor Staff</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
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
    document.getElementById('link4').classList.add('active');
    const link = document.querySelectorAll("#link1, #link2, #link3, #link5, #link6");
    for (var i = 0; i < link.length; i++) {
        link[i].classList.remove('active');
    }
</script>
@endsection
@section('extra-js')
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/glightbox.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/validate.js"></script>

<!-- Template Main JS File -->
<script src="js/main2.js"></script>

@endsection