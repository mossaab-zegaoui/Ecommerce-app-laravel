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
        <h2> $ {{$product->price_ht }}</h2>
        <select>
            <option value="">Select Size</option>
            @foreach ($product->size as $size)
            <option value="">{{$size}}</option>
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
            {{ session('message')}}
            @endif
        </div>
        <h4>Product details</h4>
        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis quis porro, unde, in, vel ab neque nobis tempora quia dolorem amet eius tempore laborum! Dolores facere perspiciatis hic tenetur numquam.</span>
    </div>
</section>