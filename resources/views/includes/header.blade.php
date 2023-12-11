<nav class="navbar">
    <div class="logo">
        <img src="{{ asset('images/pc-pro-logo.png') }}" alt="PC-Pro Logo">
    </div>
    <div class="header-content">
        <h1>PC-Pro</h1>
        <h2>Your Source for Custom PCs</h2>
    </div>
</nav>
<div class="lower-header">
    <ul class="nav-links">
        <li><a href="{{ url('/') }}">Builder</a></li>
        <li><a href="{{ url('/products') }}">Products</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
        <li><a href="{{ url('/faq') }}">FAQ</a></li>
    </ul>
    <div class="user-actions">
        <!-- Add your user action buttons here -->
        @auth
        <a href="{{url('/userProfile')}}" class=" user-button">Hello, {{auth()->user()->fullName}}</a>
        <a href="{{ url('/checkout') }}" class="user-button">Checkout</a>
        {{-- <form action="/logout"></form> --}}
        <a href="{{ url('/logout') }}" class="user-button">Log Out</a>
        @else
        <a href="{{ url('/register') }}" class="user-button">Sign Up</a>
        <a href="{{ url('/login') }}" class="user-button">Login</a>
        <a href="{{ url('#') }}" class="user-button">Admin Login</a>
        @endauth
        
       
    </div>
</div>
