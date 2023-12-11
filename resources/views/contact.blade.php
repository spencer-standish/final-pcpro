@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<style>
    body{
        background-image: url("{{ asset('images/contact.jpg') }}");
        background-size: auto;
        background-position: center;
    }
</style>
<body>
<div class="container">
    <h1>Contact Us</h1>
    <h2>PCpro</h2>
    <p>
        <strong>Address:</strong><br>
        1234 PCpro Street, Brampton, Ontario, Canada<br>

        <strong>Email:</strong><br>
        support@pcpro.com<br>

        <strong>Phone:</strong><br>
        +1 234-567-8901
    </p>

    <h2>Customer Service</h2>
    <p>
        Our customer service team is available Monday to Friday from 9:00 AM to 5:00 PM (EST). We strive to respond to all inquiries within 24 hours.
    </p>

    <h2>Technical Support</h2>
    <p>
        For technical support, please email us at techsupport@pcpro.com. Our technical support team is available Monday to Friday from 9:00 AM to 5:00 PM (EST).
    </p>
    <a href="{{ url('contact/contact-form') }}" class="button">Contact Form</a>
</div>
</body>
@endsection
