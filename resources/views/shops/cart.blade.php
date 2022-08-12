@extends('layouts.app')

@section('content')
<section id="cart" class="section-p1">
    @if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message')}}
    </div>
    @endif
    @if (session('Error'))
    <div class="alert alert-warning" role="alert">
        {{ session('Error')}}
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
            <form action="{{ route('coupon.store') }}" method="POST">
                @csrf
                <input type="text" placeholder="Enter your coupon" name="code" id="code">
                <button type="submit">Apply coupon</button>
            </form>

        </div>
    </div>
    <div id="subtotal">
        <h2>Cart total</h2>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>$ {{ Cart::subtotal() }}</td>
            </tr>
            @if(session()->has('coupon'))
            <tr>
                <td>Discount ({{ session()->get('coupon')['name']}})</td>
                <td>$ {{ $discount}}</td>
            </tr>
            <tr>
                <td>
                    <form action="{{ route('coupon.destroy') }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-info">Remove Coupon</button>
                    </form>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>New Subtotal</td>
                <td>$ {{ $newSubtotal }}</td>
            </tr>

            <tr>
                <td>Tax ( 21%) </td>
                <td>{{ $newTax }}</td>
            </tr>
            <tr>
                <td>Cart Total</td>
                <td>$ {{ $newTotal }}</td>
            </tr>
            @else
            <tr>
                <td>Tax ( 21%) </td>
                <td>{{ Cart::tax() }}</td>
            </tr>
            <tr>
                <td>Cart Total</td>
                <td>$ {{ Cart::total() }}</td>
            </tr>
            @endif
        </table>
        <a href=" {{ route('shops.index') }}"><button>Continue shopping</button></a>
        <a href=" {{ route('checkout.index') }}">
            <button>Order now</button>
        </a>
    </div>
</section>

<footer class="section-p1 cart-bg">
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