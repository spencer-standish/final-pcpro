@extends('layouts.app')

@section('title', 'Memory')

@section('content')
    <header class="main-header">
        <h1>Choose Memory</h1>
    </header>
    <table>
        <thead>
        <tr>
            @auth
            <th>Name</th>
            <th>Type</th>
            <th>Capacity</th>
            <th>Modules</th>
            <th>Color</th>
            <th>Latency</th>
            <th>Rating</th>
            <th>Price</th>
            <th>Action</th>
            @else
            <th>Name</th>
            <th>Type</th>
            <th>Capacity</th>
            <th>Modules</th>
            <th>Color</th>
            <th>Latency</th>
            <th>Rating</th>
            <th>Price</th>
            {{-- <th>Action</th>  --}}
            @endauth
            
        </tr>
        </thead>
        <tbody>
            @auth
            @for ($i = 1; $i <= 10; $i++)
            <tr>
                <td>Corsair Vengeance 16 GB</td>
                <td>DDR3-1600</td>
                <td>16 GB</td>
                <td>2 x 8GB</td>
                <td>Black / Yellow</td>
                <td>11.25 ns</td>
                <td>3.5</td>
                <td>$79.99</td>
                <td><a href="{{ url('products/memory/'.$i.'/add') }}" class="button">Add</a></td>
            </tr>
        @endfor
                @else
                @for ($i = 1; $i <= 10; $i++)
                <tr>
                    <td>Corsair Vengeance 16 GB</td>
                    <td>DDR3-1600</td>
                    <td>16 GB</td>
                    <td>2 x 8GB</td>
                    <td>Black / Yellow</td>
                    <td>11.25 ns</td>
                    <td>3.5</td>
                    <td>$79.99</td>
                    {{-- <td><a href="{{ url('products/memory/'.$i.'/add') }}" class="button">Add</a></td> --}}
                </tr>
            @endfor
            @endauth
       
        </tbody>
    </table>
@endsection
