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
<!-- <section id="page-header" class="blog-header">

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
<!-- End Header -->

<!-- ======= Hero Slider Section ======= -->
<section id="hero-slider" class="hero-slider">
    <div class="container-md" data-aos="fade-in">
        <div class="row">
            <div class="col-12">
                <div class="swiper sliderFeaturedPosts">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-1.jpg');">
                                <div class="img-bg-inner">
                                    <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-2.jpg');">
                                <div class="img-bg-inner">
                                    <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-3.jpg');">
                                <div class="img-bg-inner">
                                    <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-4.jpg');">
                                <div class="img-bg-inner">
                                    <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="custom-swiper-button-next">
                        <span class="bi-chevron-right"></span>
                    </div>
                    <div class="custom-swiper-button-prev">
                        <span class="bi-chevron-left"></span>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero Slider Section -->

<!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="post-entry-1 lg">
                    <a href="#"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2><a href="#">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>

                    <div class="d-flex align-items-center author">
                        <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0"># Jake Paul</h3>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-lg-4 border-start custom-border">
                        <div class="post-entry-1">
                            <a href="#"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2><a href="#">Let’s Get Back to Work, New York</a></h2>
                        </div>
                        <div class="post-entry-1">
                            <a href="#"><img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Food</span> <span class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                            <h2><a href="#">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                        </div>
                        <div class="post-entry-1">
                            <a href="#"><img src="assets/img/post-landscape-7.jpg" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Design</span> <span class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                            <h2><a href="#">Why Craigslist Tampa Is One of The Most Interesting Places On the Web?</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-4 border-start custom-border">
                        <div class="post-entry-1">
                            <a href="#"><img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2><a href="#">6 Easy Steps To Create Your Own Cute Merch For Instagram</a></h2>
                        </div>
                        <div class="post-entry-1">
                            <a href="#"><img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Tech</span> <span class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                            <h2><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                        </div>
                        <div class="post-entry-1">
                            <a href="#"><img src="assets/img/post-landscape-8.jpg" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Travel</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2><a href="#">5 Great Startup Tips for Female Founders</a></h2>
                        </div>
                    </div>

                    <!-- Trending Section -->
                    <div class="col-lg-4">

                        <div class="trending">
                            <h3>Trending</h3>
                            <ul class="trending-post">
                                <li>
                                    <a href="#">
                                        <span class="number">1</span>
                                        <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
                                        <span class="author">Jane Cooper</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="number">2</span>
                                        <h3>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h3>
                                        <span class="author">Wade Warren</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="number">3</span>
                                        <h3>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h3>
                                        <span class="author">Esther Howard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="number">4</span>
                                        <h3>9 Half-up/half-down Hairstyles for Long and Medium Hair</h3>
                                        <span class="author"># Jake Paul</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="number">5</span>
                                        <h3>Life Insurance And Pregnancy: A Working Mom’s Guide</h3>
                                        <span class="author">Jane Doe</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- End Trending Section -->
                </div>
            </div>

        </div> <!-- End .row -->
    </div>
</section> <!-- End Post Grid Section -->

<!-- ======= Culture Category Section ======= -->
<section class="category-section">
    <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Culture</h2>
            <div><a href="#" class="more">See All Culture</a></div>
        </div>

        <div class="row">
            <div class="col-md-9">

                <div class="d-lg-flex post-entry-2">
                    <a href="#" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                        <img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
                    </a>
                    <div>
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                        <h3><a href="#">What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">Wade Warren</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="post-entry-1 border-bottom">
                            <a href="#"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="#">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                            <span class="author mb-3 d-block">Jane Doe</span>
                            <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                        </div>

                        <div class="post-entry-1">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="#">5 Great Startup Tips for Female Founders</a></h2>
                            <span class="author mb-3 d-block">Jane Doe</span>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="post-entry-1">
                            <a href="#"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                            <span class="author mb-3 d-block">Jane Doe</span>
                            <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                    <span class="author mb-3 d-block">Jane Doe</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                    <span class="author mb-3 d-block">Jane Doe</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                    <span class="author mb-3 d-block">Jane Doe</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                    <span class="author mb-3 d-block">Jane Doe</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                    <span class="author mb-3 d-block">Jane Doe</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                    <span class="author mb-3 d-block">Jane Doe</span>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Culture Category Section -->

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
<script>
    document.getElementById('link3').classList.add('active');
    const link = document.querySelectorAll("#link1, #link2, #link4, #link5, #link6");
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