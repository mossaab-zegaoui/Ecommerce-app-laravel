@extends('layouts.app')
@section('content')
<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="{{ asset($product->image) }}" width="100%" id="MainImg" alt="">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="{{ asset('img/f2.jpg') }}" width="100%" alt="" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="{{ asset('img/f3.jpg') }}" width="100%" alt="" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="{{ asset('img/f4.jpg') }}" width="100%" alt="" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="{{ asset('img/f5.jpg') }}" width="100%" alt="" class="small-img">
            </div>
        </div>
    </div>
    <div class="single-pro-details">
        <h6>{{ $product->name}}</h6>
        <h4>{{ $product->description}}</h4>
        <h2> @money($product->price)</h2>
        <select>
            <option value="">Select Size</option>
            @foreach($product->size as $size)
            <option value="">{{ $size }}</option>
            @endforeach
        </select>
        <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <input type="number" name="quantity" value="1" min="1" max="{{ $product->quantity }}">
            <button type="submit">Add to cart</button>
        </form>
        <div>
            @if (session('message'))
            <div class="alert alert-success mt-2" style="width: 50%;">
                {{ session('message')}}
            </div>
            @endif
        </div>
        <h4>Product details</h4>
        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis quis porro, unde, in, vel ab neque nobis tempora quia dolorem amet eius tempore laborum! Dolores facere perspiciatis hic tenetur numquam.</span>
    </div>
</section>
<section id="product1" class="">
    <div class="container">
        <h2>Recommandations</h2>
        <div class="pro-container">
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
    var MainImg = document.getElementById('MainImg');
    var SmallImg = document.getElementsByClassName('small-img');
    SmallImg[0].onclick = function() {
        MainImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function() {
        MainImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function() {
        MainImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function() {
        MainImg.src = SmallImg[3].src;
    }
    const link = document.querySelectorAll("#link1, #link3, #link4, #link5, #link6");
    for (var i = 0; i < link.length; i++) {
        link[i].classList.remove('active');
    }
    document.getElementById('link2').classList.add('active');
</script>
@endsection
@section('extra-js')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection