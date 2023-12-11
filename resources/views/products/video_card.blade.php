@extends('layouts.app')

@section('title', 'Video Card')

@section('content')
    <header class="main-header">
        <h1>Choose A Video Card</h1>
    </header>
    <table>
        <thead>
            @auth
            <tr>
                <th>Name</th>
                <th>Chipset</th>
                <th>Memory</th>
                <th>Base Clock</th>
                <th>Boost Clock</th>
                <th>Color</th>
                <th>Length</th>
                <th>Rating</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
                @else
                <tr>
                    <th>Name</th>
                    <th>Chipset</th>
                    <th>Memory</th>
                    <th>Base Clock</th>
                    <th>Boost Clock</th>
                    <th>Color</th>
                    <th>Length</th>
                    <th>Rating</th>
                    <th>Price</th>
                    {{-- <th>Action</th> --}}
                </tr>
            @endauth
        
        </thead>
        <tbody>
            @auth
            @for ($i = 1; $i <= 10; $i++)
            <tr>
                <td>MSI GeForce RTX 3060 Ventus 2X 12G</td>
                <td>GeForce RTX 3060 12GB</td>
                <td>12 GB</td>
                <td>1320 MHz</td>
                <td>1777 MHz</td>
                <td>Black</td>
                <td>235 mm</td>
                <td>4</td>
                <td>$289.39</td>
                <td><a href="{{ url('products/video_card/'.$i.'/add') }}" class="button">Add</a></td>
            </tr>
        @endfor
                @else
                @for ($i = 1; $i <= 10; $i++)
            <tr>
                <td>MSI GeForce RTX 3060 Ventus 2X 12G</td>
                <td>GeForce RTX 3060 12GB</td>
                <td>12 GB</td>
                <td>1320 MHz</td>
                <td>1777 MHz</td>
                <td>Black</td>
                <td>235 mm</td>
                <td>4</td>
                <td>$289.39</td>
                {{-- <td><a href="{{ url('products/video_card/'.$i.'/add') }}" class="button">Add</a></td> --}}
            </tr>
        @endfor
            @endauth
        
        </tbody>
    </table>
@endsection
