@extends('layouts.app')

@section('title', 'Video Card')

@section('content')
    <header class="main-header">
        <h1>Choose A Video Card</h1>
    </header>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($videocard as $product)
            <tr>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_desc }}</td>
                <td>
                    <img src="{{ asset('images/' . $product->product_image) }}" alt="{{ $product->product_name }}" style="max-width: 100px; max-height: 100px;">
                </td>
                <td>${{ $product->price }}</td>
                <td>
                    <form action="{{ route('cart.addToCart', ['id' => $product->product_id]) }}" method="post">
                        @csrf
                        <button type="submit" class="button">Add</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
