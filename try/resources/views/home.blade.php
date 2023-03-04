@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-secondary border border-5 border-white">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <h3 class="mt-5 p-5 text-center border-top border-bottom border-white border-3">Browse beauty: <br>
                        <a class="btn btn-dark btn-outline-light col-sm-12 m-2" href="{{route('salon-index2')}}">Salons </a>
                        <a class="btn btn-dark btn-outline-light col-sm-12 m-2" href="{{route('master-index2')}}">Experts </a>
                        <a class="btn btn-dark btn-outline-light col-sm-12 m-2" href="{{route('service-index2')}}">Services </a>
                    </h3>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
