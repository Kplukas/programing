@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body" style="min-height: 70vh;">
                    <h2>Welcome to BEAUTY FOR YOU!</h2>
                    <p>Select your beauty services at our web platform.</p>
                    <p>New salons, beauty experts and services are being added often!</p>
                    <h4>We are missing something? Please let us know and we will add it in no time!</h4>
                    <h3>
                        <a href="{{ route('login') }}">Log in</a> or <a href="{{ route('register') }}">Sign up</a> to get started!
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
