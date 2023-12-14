@extends('layouts.formapp')

{{-- @section('title', 'Login Form') --}}




@section('content')
    <div class="container w-25 pt-5 border border-secondary p-4 text-bg-light pb-5 " style="background-color: #2c3e50;">
        <form class="form-signin" method="post" action='/update/{{auth()->user()->id}}'>
            @csrf
            <h3 class="mb-4">{{auth()->user()->fullName}}'s Profile</h3>
            <div class="form-group mb-2">
                <label for="fullName" class="sr-only">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" value="{{auth()->user()->fullName}}" >

            </div>
            <div class="form-group mb-2">
                <label for="email" class="sr-only">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="{{auth()->user()->email}}" disabled readonly>

            </div>
            <div class="form-group mb-2">
                <label for="phoneNumber" class="sr-only">Phone Number</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required value="{{auth()->user()->phoneNumber}}" >

            </div>
            <div class="form-group mb-2">
                <label for="province" class="sr-only">Province</label>
                <input type="text" class="form-control" id="province" name="province" placeholder="province" required value="{{auth()->user()->province}}">


            </div>
            <div class="form-group mb-2">
                <button class=" btn btn-primary ">Update</button>
            </div>

        </form>
        {{-- <div class="pb-5">

        </div> --}}
    </div >
@endsection
