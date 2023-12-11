@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<style>
body{
        background-image: url("{{ asset('images/about.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<body>
<div class="container">
    <h1>About Us</h1>
    <h2>Who We Are</h2>
    <p>Welcome to our website! We are a team of dedicated PC enthusiasts who specialize in assembling high-quality PC parts and providing exceptional technical services.</p>

    <h2>Our Mission</h2>
    <p>At our company, we understand that building a PC is more than just selecting components. It's about creating a personalized experience tailored to your needs. Whether you're a gamer, a content creator, or a professional, we are here to guide you through the process of building your dream PC.</p>

    <h2>Technical Services</h2>
    <p>In addition to providing high-quality PC parts, we offer a comprehensive range of technical services. Our skilled technicians are equipped with the knowledge and expertise to assist you with PC assembly, troubleshooting, upgrades, and more. We are committed to delivering top-notch customer service and ensuring that your PC operates at its peak performance.</p>

    <h2>Thank You</h2>
    <p>Thank you for choosing us as your trusted source for PC parts and technical services. We are excited to embark on this journey with you and help you unleash the full potential of your PC.</p>
</div>
</body>
@endsection
