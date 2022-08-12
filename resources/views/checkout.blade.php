@extends('layouts.app')
@section('content')
<section id="checkout">
    <div class="container">
        @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message')}}
        </div>
        @endif
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="text-muted">{{ Cart::content()->count() }}</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach(Cart::content() as $item)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <img src="{{ $item->options['image'] }}" alt="" height="70px" width="auto">
                            <h6 class="my-0">{{ $item->name}}</h6>
                            <small class="text-muted">{{ $item->name}} </small>
                            <br>
                            <small class="text">{{ $item->price}} $</small>

                        </div>
                        <span class="text-muted">{{ $item->qty }}</span>
                    </li>
                    @endforeach

                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Subtotal (USD)</span>
                        {{ Cart::subtotal() }}
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Discount (10%) </span>
                        - {{ Cart::discount() }}
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>TAX (21%) </span>
                        {{ Cart::tax() }}
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <strong><span>Total (USD)</span></strong>
                        <strong>{{ Cart::total() }}</strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <form action="{{ route('checkout.store') }}" id="payment-form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="card-holder-name"> name</label>
                        <input id="card-holder-name" class="form-control" id="card-holder-name" name="card-holder-name" type="text" value="{{ old('card-holder-name') }}">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
                    </div>
                    <div class="form-group">
                        <label for="province">Province</label>
                        <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}">
                    </div>
                    <div class="form-group">
                        <label for="postalcode">Postal Code</label>
                        <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                    </div>
                    <!-- Stripe Elements Placeholder -->
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element"></div>
                    <!-- Used to display Element errors. -->
                    <div id="card-errors" role="alert"></div>
                    <button type="submit" id="card-button" class="btn btn-info">
                        Process Payment
                    </button>
            </div>

            </form>
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