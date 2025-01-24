@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold text-center mb-6">Our Products</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
        <div class="max-w-sm mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <img
                class="w-full h-48 object-cover"
                src="{{ asset('images/static-watch.jpg') }}"
                alt="{{ $product->name }}"
            />
            <div class="p-4">
                <h2 class="text-lg font-bold text-gray-800">{{ $product->name }}</h2>
                <p class="text-gray-600 mt-2">{{ $product->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
