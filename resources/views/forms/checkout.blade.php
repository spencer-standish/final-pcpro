@extends('layouts.formapp')

@section('title', 'Checkout')

@section('content')
<div class="container w-50 pt-5 border border-secondary p-4 text-bg-light " style="background-color: #2c3e50;">
    <form class="form-signin">
        <h3 class="mb-4">Checkout</h3>
        <div class="form-group mb-2">
            <label for="checkoutName" class="sr-only">Name</label>
            <input type="text" class="form-control" id="checkoutName" name="checkoutName" placeholder="Your Name" required>
        </div>
        <div class="form-group mb-2">
            <label for="checkoutEmail" class="sr-only">Email</label>
            <input type="email" class="form-control" id="checkoutEmail" name="checkoutEmail" placeholder="Your Email" required>
        </div>
        <div class="form-group mb-2">
            <label for="checkoutAddress" class="sr-only">Address</label>
            <input type="text" class="form-control" id="checkoutAddress" name="checkoutAddress" placeholder="Your Address" required>
        </div>
        <div class="form-group mb-2">
            <label for="checkoutCity" class="sr-only">City</label>
            <input type="text" class="form-control" id="checkoutCity" name="checkoutCity" placeholder="Your City" required>
        </div>
        <div class="form-group mb-2">
            <label for="checkoutZipCode" class="sr-only">Zip Code</label>
            <input type="text" class="form-control" id="checkoutZipCode" name="checkoutZipCode" placeholder="Your Zip Code" required>
        </div>
        <div class="form-group mb-2">
            <label for="checkoutCardNumber" class="sr-only">Credit Card Number</label>
            <input type="text" class="form-control" id="checkoutCardNumber" name="checkoutCardNumber" placeholder="Credit Card Number" required>
        </div>
        <div class="form-group mb-2">
            <label for="checkoutExpiryDate" class="sr-only">Expiry Date</label>
            <input type="text" class="form-control" id="checkoutExpiryDate" name="checkoutExpiryDate" placeholder="Expiry Date" required>
        </div>
        <div class="form-group mb-2">
            <label for="checkoutCVV" class="sr-only">CVV</label>
            <input type="text" class="form-control" id="checkoutCVV" name="checkoutCVV" placeholder="CVV" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Place Order</button>
    </form>
</div>
@endsection
