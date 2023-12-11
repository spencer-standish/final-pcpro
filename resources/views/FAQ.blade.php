@extends('layouts.app')

@section('title', 'FAQ')

@section('content')
<style>
    body{
        background-image: url("{{ asset('images/faq.jpg') }}");
        background-size: auto;
        background-position: center;
    }
</style>
<body>
<div class="container">
    <h1>Frequently Asked Questions (FAQ)</h1>
    <h2>About PCpro</h2>
    <p>
        <strong>What is PCpro?</strong><br>
        PCpro is a leading provider of quality PC parts. We offer a wide range of components to help you build the perfect PC.<br>

        <strong>Where is PCpro located?</strong><br>
        Our main office is located in Brampton, Ontario, Canada.
    </p>

    <h2>Products</h2>
    <p>
        <strong>What kind of PC parts does PCpro offer?</strong><br>
        We offer a wide range of PC parts including CPUs, GPUs, motherboards, RAM, storage devices, power supplies, and more.<br>

        <strong>Are the PC parts sold by PCpro new or used?</strong><br>
        All PC parts sold by PCpro are brand new and come with a manufacturer's warranty.
    </p>

    <h2>Order and Delivery</h2>
    <p>
        <strong>How can I place an order?</strong><br>
        You can place an order directly on our website. Simply add the items you want to your cart and proceed to checkout.<br>

        <strong>How long does delivery take?</strong><br>
        Delivery times vary depending on your location. However, we aim to deliver all orders within 5-7 business days.
    </p>

    <h2>Support</h2>
    <p>
        <strong>What if I need help with my order?</strong><br>
        If you need help with your order, you can contact our customer service team via the 'Contact Us' page on our website.<br>

        <strong>What is PCpro's return policy?</strong><br>
        We offer a 30-day return policy on all our products. If you're not satisfied with your purchase, you can return it for a full refund.
    </p>
</div>
</body>
@endsection
