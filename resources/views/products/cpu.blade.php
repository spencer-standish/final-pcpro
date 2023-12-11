@extends('layouts.app')

@section('title', 'CPU')

@section('content')
    <header class="main-header">
        <h1>Choose A CPU</h1>
    </header>
    <table>
        <thead>
            @auth
            <tr>
                <th>Name</th>
                <th>Core Count</th>
                <th>Performance Core Clock</th>
                <th>Performance Boost Clock</th>
                <th>TDP</th>
                <th>Integrated Graphics</th>
                <th>Rating</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            @else
            <tr>
                <th>Name</th>
                <th>Core Count</th>
                <th>Performance Core Clock</th>
                <th>Performance Boost Clock</th>
                <th>TDP</th>
                <th>Integrated Graphics</th>
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
                <td>AMD A10-6700</td>
                <td>4</td>
                <td>3.7 GHz</td>
                <td>4.2 GHz</td>
                <td>65 W</td>
                <td>Radeon HD 8670D</td>
                <td>0</td>
                <td>$83.22</td>
                <td><a href="{{ url('products/cpu/'.$i.'/add') }}" class="button">Add</a></td>
            </tr>
        @endfor
                @else
                @for ($i = 1; $i <= 10; $i++)
                <tr>
                    <td>AMD A10-6700</td>
                    <td>4</td>
                    <td>3.7 GHz</td>
                    <td>4.2 GHz</td>
                    <td>65 W</td>
                    <td>Radeon HD 8670D</td>
                    <td>0</td>
                    <td>$83.22</td>
                    {{-- <td><a href="{{ url('products/cpu/'.$i.'/add') }}" class="button">Add</a></td> --}}
                </tr>
            @endfor
            @endauth
       
        </tbody>
    </table>
@endsection
