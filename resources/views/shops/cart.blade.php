@extends('layouts.app')

@section('content')
<section id="cart" class="section-p1">
    @if (session('message'))
    <div class="alert alert-sucess">
        Item removed
    </div>
    @endif
    @if ( Cart::count() > 0)
    <table>
        <thead>
            <tr>
                <td></td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantite</td>
                <td>Total</td>
            </tr>
        </thead>
        <tbody>
            @foreach (Cart::content() as $cartItem)
            <tr>
                <td>
                    <form action="{{ route('cart.destroy', $cartItem->rowId) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit "><i class="bi bi-trash delete"> </i></button>
                    </form>
                </td>
                <td>
                    <a href=" {{ route('shops.show' ,$cartItem->id) }}">
                        <img src="{{ asset($cartItem->options['image']) }}" alt="">
                    </a>
                </td>
                <td>{{ $cartItem->name}}</td>
                <td>$ {{ $cartItem->price }}</td>
                <td><input type="number" value="{{ $cartItem->qty }}" disabled></td>
                <td>$ {{ $cartItem->price * $cartItem->qty}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No items in the cart</p>
    @endif
</section>
<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>Apply coupon</h3>
        <div>
            <input type="text" placeholder="Enter your coupon">
            <button>Apply coupon</button>
        </div>
    </div>
    <div id="subtotal">
        <h2>Cart total</h2>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>$ {{ Cart::subtotal() }}</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>{{ Cart::tax()}}</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$ {{ Cart::total() }}</td>
            </tr>
        </table>
        <button>Order now</button>
    </div>
</section>

<footer class="section-p1">
    <div class="col">
        <img src="{{ asset('img/logo.png') }}" alt="" class="logo">
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
            <img src="{{ asset('img/app.jpg') }}" alt="">
            <img src="{{ asset('img/play.jpg') }}" alt="">
        </div>
        <p>Secure Payments Gateways</p>
        <img src="{{ asset('img/pay.png') }}" alt="">
    </div>

</footer>
<script>
    document.getElementById('link1').classList.remove('active');
    document.getElementById('link2').classList.remove('active');
    document.getElementById('link3').classList.remove('active');
    document.getElementById('link4').classList.remove('active');
    document.getElementById('link5').classList.remove('active');
    document.getElementById('link6').classList.add('active');
</script>
@endsection