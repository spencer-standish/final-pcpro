@extends('layouts.formapp')

@section('title', 'Register Form')

@section('content')
<div class="container w-25 pt-5 border border-secondary p-4 text-bg-light " style="background-color: #2c3e50;">
    <form class="form-signin" method="post" action='/register'>
        @csrf
        <h3 class="mb-4">Registration</h3>
        <div class="form-group mb-2">
            <label for="fullName" class="sr-only">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" value="{{old('fullName')}}">
            @error('fullName')
            <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label for="email" class="sr-only">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="{{old('email')}}">
            @error('email')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label for="password" class="sr-only">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required value="{{old('password')}}">
            @error('password')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label for="confirmPassword" class="sr-only">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required value="{{old('confirmPassword')}}">
            @error('confirmPassword')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label for="phoneNumber" class="sr-only">Phone Number</label>
            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required value="{{old('phoneNumber')}}">
            @error('phoneNumber')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label for="province" class="sr-only">Province</label>
            <select class="form-control" id="province" name="province" required value="{{old('province')}}">
                <option value="" disabled selected>Select Province</option>
                <option value="on">Ontario</option>
                <option value="qc">Quebec</option>
                <option value="mt">Manitoba</option>
                <option value="sk">Saskatchewan</option>
                <option value="ab">Alberta</option>
                <option value="bc">British Comolombia</option>
                <option value="pei">Prince Edward Island</option>
                <option value="ns">Nova Scotia</option>
                <option value="nfl">NewFoundLand</option>
                <option value="nb">New Brunswick</option>
            </select>
            @error('province')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
</div>
@endsection
