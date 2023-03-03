@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-secondary border border-5 border-white">
                <div class="card-body" style="min-height: 70vh;">
                    <h2 class="text-center m-2 border-bottom border-white border-3">Welcome to BEAUTY FOR YOU!</h2>
                    <p class="text-center mt-5">Select your beauty services at our web platform.</p>
                    <p class="text-center mt-2">New salons, beauty experts and services are being added often!</p>
                    @guest
                    <h3 class="mt-5 p-5 text-center border-top border-bottom border-white border-3">
                        <a class="btn btn-dark btn-outline-light col-3 fs-2" href="{{ route('login') }}">Log in</a>
                        or
                        <a class="btn btn-dark btn-outline-light col-3 fs-2" href="{{ route('register') }}">Sign up</a>
                        to get started!
                    </h3>
                    @else
                    <h3 class="mt-5 p-5 text-center border-top border-bottom border-white border-3">Browse beauty: <br>
                        <a class="btn btn-dark btn-outline-light col-sm-12 m-2" href="{{route('salon-index2')}}">Salons </a>
                        <a class="btn btn-dark btn-outline-light col-sm-12 m-2" href="{{route('master-index2')}}">Experts </a>
                        <a class="btn btn-dark btn-outline-light col-sm-12 m-2" href="{{route('service-index2')}}">Services </a>
                    </h3>
                    @endguest
                    <h4 class="text-center mt-5">We are missing something? Please let us know and we will add it in no time!</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
