@extends('layouts.app')

@section('title', 'Motherboard')

@section('content')
    <header class="main-header">
        <h1>Choose A Motherboard</h1>
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
        @foreach($motherboards as $motherboard)
            <tr>
                <td>{{ $motherboard->product_name }}</td>
                <td>{{ $motherboard->product_desc }}</td>
                <td>
                    <img src="{{ asset('images/' . $motherboard->product_image) }}" alt="{{ $motherboard->product_name }}" style="max-width: 100px; max-height: 100px;">
                </td>
                <td>${{ $motherboard->price }}</td>
                <td>
                    {{-- Use a form to handle adding items to the cart --}}
                    <form action="{{ route('cart.addToCart', ['id' => $motherboard->product_id]) }}" method="post">
                        @csrf
                        <button type="submit" class="button">Add</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
