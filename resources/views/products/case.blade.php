@extends('layouts.app')

@section('title', 'Case')

@section('content')
    <header class="main-header">
        <h1>Choose A Case</h1>
    </header>
    <table>
        <thead>
        <tr>
            @auth
            <th>Name</th>
            <th>Type</th>
            <th>Color</th>
            <th>Power Supply</th>
            <th>Side Panel</th>
            <th>Volume</th>
            <th>Drive Bays</th>
            <th>Rating</th>
            <th>Price</th>
            <th>Action</th>
            @else
            <th>Name</th>
            <th>Type</th>
            <th>Color</th>
            <th>Power Supply</th>
            <th>Side Panel</th>
            <th>Volume</th>
            <th>Drive Bays</th>
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
                <td>Corsair 4000D Airflow</td>
                <td>ATX Mid Tower</td>
                <td>Black</td>
                <td>None</td>
                <td>Tinted Tempered Glass</td>
                <td>48.6 L</td>
                <td>2</td>
                <td>3.5</td>
                <td>$104.99</td>
                <td><a href="{{ url('products/case/'.$i.'/add') }}" class="button">Add</a></td>
            </tr>
        @endfor
            @else
        @for ($i = 1; $i <= 10; $i++)
            <tr>
                <td>Corsair 4000D Airflow</td>
                <td>ATX Mid Tower</td>
                <td>Black</td>
                <td>None</td>
                <td>Tinted Tempered Glass</td>
                <td>48.6 L</td>
                <td>2</td>
                <td>3.5</td>
                <td>$104.99</td>
                {{-- <td><a href="{{ url('products/case/'.$i.'/add') }}" class="button">Add</a></td> --}}
            </tr>
        @endfor
        @endauth
        </tbody>
    </table>
@endsection
