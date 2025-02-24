@extends('layouts.app')

@section('content')
<div class="container py-5">
    
   
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['description'] }}</p>
                        <p class="card-text">
                            <small class="text-muted">Category: {{ $product['category'] }}</small>
                        </p>
                        <h6 class="card-subtitle mb-2 text-primary">₱{{ number_format($product['price'], 2) }}</h6>
                        <a href="#" class="btn btn-dark">Buy Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection