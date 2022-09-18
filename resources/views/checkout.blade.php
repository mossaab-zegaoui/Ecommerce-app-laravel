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
<section id="checkout">
    <div class="container">
        @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message')}}
        </div>
        @endif
        <!-- Cart part -->
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="text-muted">{{ Cart::content()->count() }} items</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach(Cart::content() as $item)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <img src="{{ $item->options['image'] }}" alt="" height="70px" width="auto">
                            <h4 class="my-0">{{ $item->name}}</h4>
                            <br>
                            <small class="text"> @money($item->price)</small>
                        </div>
                        <span class="text-muted"> quantity = {{ $item->qty }}</span>
                    </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between ">
                        @if(session()->has('coupon'))
                        <div class="text-success">
                            <h4 class="my-0">Promo code</h4>
                        </div>
                        <h5 class="text-success"> {{ session()->get('coupon')['name']}}</h5>
                        @endif
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Subtotal (USD)</span>
                        @money(Cart::subtotal())
                    </li>
                    @if(session()->has('coupon'))
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Discount</span>
                        @money($discount)
                    </li>
                    @endif

                    <li class="list-group-item d-flex justify-content-between">
                        <span>TAX (21%) </span>
                        @money(Cart::tax())
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <strong><span>Total (USD)</span></strong>
                        <strong>@money(Cart::total())</strong>
                    </li>
                </ul>
            </div>
            <!-- END CART -->
            <!-- FORM -->
            <div class="col-md-8 order-md-1">
                <form action="{{ route('checkout.store') }}" id="payment-form" method="POST">
                    @csrf
                    <h3>Personnal details</h3>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <h3>Payment details</h3>
                    <div class="form-group">
                        <label for="card-holder-name"> Name on the card</label>
                        <input id="card-holder-name" class="form-control" id="card-holder-name" name="card-holder-name" type="text" value="{{ old('card-holder-name') }}">
                    </div>
                    <!-- Stripe Elements Placeholder -->
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element"></div>
                    <!-- Used to display Element errors. -->
                    <div id="card-errors" role="alert"></div>
                    <br>
                    <button type="submit" id="card-button" class="btn btn-info">
                        Process Payment
                    </button>
                </form>
            </div>
            <!-- END FORM -->
        </div>
    </div>
    </div>
</section>

@endsection
@section('extra-js')
<script src="https://js.stripe.com/v3/"></script>
<script>
    (function() {
        const stripe = Stripe(" {{ env('STRIPE_KEY') }}");
        const elements = stripe.elements();
        const card = elements.create('card', {
            hidePostalCode: true
        });
        card.mount('#card-element');
        // Create a token or display an error when the form is submitted.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the customer that there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            // Submit the form
            form.submit();
        }
    })();
</script>
@endsection