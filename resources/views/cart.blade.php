@extends('layouts.app')

@section('title', 'Cart')

@section('content')
    <div class="container mt-4">
        <h2>Your Cart</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($cartItems) && count($cartItems) > 0)
                @php
                    $totalPrice = 0;
                @endphp
                @foreach($cartItems as $index => $cartItem)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>
                            @if($cartItem->product)
                                {{ $cartItem->product->product_name }}
                            @else
                                Product not available
                            @endif
                        </td>
                        <td>{{ $cartItem->quantity }}</td>
                        <td>${{ $cartItem->product ? $cartItem->product->price : '0.00' }}</td>
                        <td>
                            <form action="{{ route('cart.remove', ['id' => $cartItem->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                            </form>
                        </td>
                        @php
                            $totalPrice += $cartItem->product ? $cartItem->product->price * $cartItem->quantity : 0;
                        @endphp
                    </tr>
                @endforeach
                {{-- Display grand total --}}
                <tr>
                    <td colspan="2"></td>
                    <td><strong>Grand Total</strong></td>
                    <td>${{ number_format($totalPrice, 2) }}</td>
                    <td></td>
                </tr>
            @else
                <tr>
                    <td colspan="5">Your cart is empty.</td>
                </tr>
            @endif
            </tbody>
        </table>

        {{-- Add button to proceed to checkout --}}
        <div class="text-center mt-3">
            <a href="{{ url('/checkout') }}" class="button btn-lg">Proceed to Checkout</a>
        </div>
    </div>
@endsection
