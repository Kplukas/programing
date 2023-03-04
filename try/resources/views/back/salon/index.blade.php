@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-secondary border border-5 border-white">
                <div class="card-header">
                    <h2>Our salons</h2>
                </div>
                <div class="card-body">
                    <ul class="card-group">
                        @forelse($salons as $salon)
                        <li class="col-5 list-group-item m-2 p-2 border border-white border-3 text-center">
                            <h3>Salon: {{$salon->title}}</h3>
                            <p>Adress: {{$salon->adress}}</p>
                            <p>Telephone: {{$salon->tel}}</p>
                            <form action="{{route('salon-delete', $salon)}}" method="post">
                                <a class="btn btn-dark btn-outline-light col-sm-12 mt-2" href="{{route('salon-edit', $salon)}}">Edit salon</a>
                                <button class="btn btn-dark btn-outline-light col-12 mt-2" type="submit">Delete salon</button>
                                @csrf
                                @method('delete')
                            </form>
                        </li>
                        @empty
                        <li>
                            <h3> No open Salons at this time</h3>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
