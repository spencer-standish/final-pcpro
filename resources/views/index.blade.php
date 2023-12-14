@extends('layouts.app')

@section('title', 'PC-Pro')

@section('content')
    <header class="main-header">
        <h1>Choose Your Parts</h1>
    </header>
    <table>
        <thead>
        <tr>
            <th>Component</th>
            <th>Selection</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>CPU</td>
            <td><a href="{{ url('products/cpu') }}">Choose A CPU</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Motherboard</td>
            <td><a href="{{ url('products/motherboard') }}">Choose A Motherboard</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Memory</td>
            <td><a href="{{ url('products/memory') }}">Choose Memory</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Storage</td>
            <td><a href="{{ url('products/storage') }}">Choose Storage</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Video Card</td>
            <td><a href="{{ url('products/video_card') }}">Choose A Video Card</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Case</td>
            <td><a href="{{ url('products/case') }}">Choose A Case</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
@endsection
