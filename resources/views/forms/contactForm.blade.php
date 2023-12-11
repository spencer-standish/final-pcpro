@extends('layouts.formapp')

@section('title', 'Contact Form')

@section('content')
<div class="container w-50 pt-5 border border-secondary p-4 text-bg-light " style="background-color: #2c3e50;">
    <form class="form-signin">
        <h3 class="mb-4">Contact Us</h3>
        <div class="form-group mb-2">
            <label for="contactName" class="sr-only">Name</label>
            <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Your Name" required>
        </div>
        <div class="form-group mb-2">
            <label for="contactEmail" class="sr-only">Email</label>
            <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Your Email" required>
        </div>
        <div class="form-group mb-2">
            <label for="contactSubject" class="sr-only">Subject</label>
            <input type="text" class="form-control" id="contactSubject" name="contactSubject" placeholder="Subject" required>
        </div>
        <div class="form-group mb-2">
            <label for="contactMessage" class="sr-only">Message</label>
            <textarea class="form-control" id="contactMessage" name="contactMessage" rows="4" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>
@endsection
