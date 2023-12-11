@extends('layouts.app')

@section('title', 'Motherboard')

@section('content')
    <header class="main-header">
        <h1>Choose A Motherboard</h1>
    </header>
    <table>
        <thead>
            
        <tr>
            @auth
            <th>Name</th>
            <th>Socket/CPU</th>
            <th>Form Factor</th>
            <th>Memory Max</th>
            <th>Memory Slots</th>
            <th>Rating</th>
            <th>Price</th>
            <th>Action</th>
                @else
                <th>Name</th>
            <th>Socket/CPU</th>
            <th>Form Factor</th>
            <th>Memory Max</th>
            <th>Memory Slots</th>
            <th>Rating</th>
            <th>Price</th>
            {{-- <th>Action</th> --}}
            @endauth
            
        </tr>
        </thead>
        <tbody>
            @auth
            @for ($i = 1; $i <= 10; $i++)
            <tr>
                <td>Motherboard {{ $i }}</td>
                <td>Socket/CPU {{ $i }}</td>
                <td>ATX</td>
                <td>64 GB</td>
                <td>4</td>
                <td>4.5</td>
                <td>$199.99</td>
                <td><a href="{{ url('products/motherboard/'.$i.'/add') }}" class="button">Add</a></td>
            </tr>
        @endfor
                @else
                @for ($i = 1; $i <= 10; $i++)
                <tr>
                    <td>Motherboard {{ $i }}</td>
                    <td>Socket/CPU {{ $i }}</td>
                    <td>ATX</td>
                    <td>64 GB</td>
                    <td>4</td>
                    <td>4.5</td>
                    <td>$199.99</td>
                    {{-- <td><a href="{{ url('products/motherboard/'.$i.'/add') }}" class="button">Add</a></td> --}}
                </tr>
            @endfor
            @endauth
       
        </tbody>
    </table>
@endsection
