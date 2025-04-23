@extends('layouts.app')

@section('content')
    <div class="container mt-5 fade-in">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Product Details</h4>
                <a href="{{ route('products.index') }}" class="btn btn-light btn-sm"><i class="bi bi-arrow-left me-1"></i>Back</a>
            </div>
            <div class="card-body">
                <h3 class="card-title mb-3">{{ $product->name }}</h3>
                <p class="card-text mb-2"><strong>Price:</strong> ₱{{ number_format($product->price, 2) }}</p>
                <p class="card-text mb-2"><strong>Stock Quantity:</strong> {{ $product->stock_quantity }}</p>
                <p class="card-text mb-2"><strong>Overall Total:</strong> ₱{{ number_format($product->price * $product->stock_quantity, 2) }}</p>
            </div>
        </div>
    </div>
@endsection

<style>
    .fade-in {
        animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .btn {
        border-radius: 4px;
        padding: 8px 16px;
        font-weight: 500;
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .card {
        border-radius: 8px;
    }

    .card-header {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 1.5rem;
    }

    .card-text {
        font-size: 1rem;
    }
</style>
