@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Your basket</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Quantite</th>
                <th scope="col">P.U</th>
                <th scope="col">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <img src="{{ $product->image }}" alt="" height="100px">
                </th>
                <td>1</td>
                <td> {{$product->price_ht}} $</td>
                <td>{{ $product->price_ht }} $</td>
            </tr>
            <tr>
                <th scope="row">
                </th>
                <td></td>
                <td>Total HT</td>
                <td>{{ $product->price_ht }} $</td>
            </tr>
            <tr>
                <th scope="row">
                </th>
                <td></td>
                <td> TVA (20%)</td>
                <td>{{ $product->price_ht *0.02 }} $</td>
            </tr>
            <tr>
                <th scope="row">
                </th>
                <td></td>
                <td> Total TTC </td>
                <td>{{ $product->price_ht *0.02 + $product->price_ht }} $</td>
            </tr>

        </tbody>
    </table>
    <div class="mt-4 d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-warning" type="button">Order</button>

    </div>
    <div class="d-flex justify-content-end">
        <a href="{{ route('shops.index') }}" class="btn btn-info mt-4">Go back</a>
    </div>
</div>

@endsection