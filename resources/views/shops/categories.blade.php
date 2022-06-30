@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="card mb-4" style="width: 18rem;">
                <img src=" {{ asset($product->image) }}" class="card-img-top" alt="...">
                <div class="card-body" style="min-height: 280px;">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text"> {{ $product->description }}</p>
                    <div class="row align-items-end">
                        <div class="col-md-10">
                            {{ $product->price_ht}} $
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('shops.product' ,$product->id) }}" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg></a>
                        </div>
                    </div>
                    <p class="card-text mt-1"><small class="text-muted ">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>
@endsection