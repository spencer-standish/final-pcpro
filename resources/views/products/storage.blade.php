@extends('layouts.app')

@section('title', 'Storage')

@section('content')
    <header class="main-header">
        <h1>Choose Storage</h1>
    </header>
    <table>
        <thead>
        <tr>
            @auth
            <th>Name</th>
            <th>Type</th>
            <th>Capacity</th>
            <th>Price per GB</th>
            <th>Cache</th>
            <th>Form Factor</th>
            <th>Interface</th>
            <th>Rating</th>
            <th>Price</th>
            <th>Action</th>
                @else
                <th>Name</th>
            <th>Type</th>
            <th>Capacity</th>
            <th>Price per GB</th>
            <th>Cache</th>
            <th>Form Factor</th>
            <th>Interface</th>
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
                <td>Samsung 980 Pro</td>
                <td>SSD</td>
                <td>2 TB</td>
                <td>$0.065</td>
                <td>2048 MB</td>
                <td>M.2-2280</td>
                <td>M.2 PCIe 4.0 X4</td>
                <td>5</td>
                <td>$129.99</td>
                <td><a href="{{ url('products/storage/'.$i.'/add') }}" class="button">Add</a></td>
            </tr>
        @endfor
                @else
                @for ($i = 1; $i <= 10; $i++)
                <tr>
                    <td>Samsung 980 Pro</td>
                    <td>SSD</td>
                    <td>2 TB</td>
                    <td>$0.065</td>
                    <td>2048 MB</td>
                    <td>M.2-2280</td>
                    <td>M.2 PCIe 4.0 X4</td>
                    <td>5</td>
                    <td>$129.99</td>
                    {{-- <td><a href="{{ url('products/storage/'.$i.'/add') }}" class="button">Add</a></td> --}}
                </tr>
            @endfor
            @endauth
       
        </tbody>
    </table>
@endsection
