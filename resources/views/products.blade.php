@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="container-products">
        <h1>Our Products</h1>

        <div class="card-deck">
            <!-- Motherboard Card -->
            <a href="{{ url('products/motherboard') }}" class="card-link">
                <div class="card">
                    <div class="card-container">
                        <img src="{{ asset('images/motherboard.png') }}" class="card-img-top" alt="Motherboard Image">
                        <div class="card-body">
                            <h5 class="card-title">Motherboard</h5>
                        </div>
                    </div>
                </div>
            </a>

            <!-- CPU Card -->
            <a href="{{ url('products/cpu') }}" class="card-link">
                <div class="card">
                    <div class="card-container">
                        <img src="{{ asset('images/cpu.png') }}" class="card-img-top" alt="CPU Image">
                        <div class="card-body">
                            <h5 class="card-title">CPU</h5>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Memory Card -->
            <a href="{{ url('products/memory') }}" class="card-link">
                <div class="card">
                    <div class="card-container">
                        <img src="{{ asset('images/memory.png') }}" class="card-img-top" alt="Memory Image">
                        <div class="card-body">
                            <h5 class="card-title">Memory</h5>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Storage Card -->
            <a href="{{ url('products/storage') }}" class="card-link">
                <div class="card">
                    <div class="card-container">
                        <img src="{{ asset('images/storage.png') }}" class="card-img-top" alt="Storage Image">
                        <div class="card-body">
                            <h5 class="card-title">Storage</h5>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Video Card Card -->
            <a href="{{ url('products/video-card') }}" class="card-link">
                <div class="card">
                    <div class="card-container">
                        <img src="{{ asset('images/video_card.png') }}" class="card-img-top" alt="Video Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Video Card</h5>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Case Card -->
            <a href="{{ url('products/case') }}" class="card-link">
                <div class="card">
                    <div class="card-container">
                        <img src="{{ asset('images/case.png') }}" class="card-img-top" alt="Case Image">
                        <div class="card-body">
                            <h5 class="card-title">Case</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
