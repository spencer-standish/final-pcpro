@extends('layouts.formapp')

{{-- @section('title', 'Login Form') --}}


@section('content')
@auth

@else

<div class="container w-25  border p-4 text-bg-light " >
    <form action="/login" method="POST" class="form-signin">
        @csrf
        <h3 class="mb-4">Login</h3>
        <div class="form-group mb-2">
            <label for="loginEmail" class="sr-only">Email</label>
            <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Email" required>
            @error('loginEmail')
            <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label for="loginPassword" class="sr-only">Password</label>
            <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password" required>
            @error('loginPassword')
            <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
        <div class="mt-3">
           Don't have an account?<a href="/register" class=" p-2 ">Sign up</a>
        </div>
    </form>
</div>

@endauth


@endsection
