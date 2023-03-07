@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-secondary border border-5 border-white">
                <div class="card-header">
                    <h2>Salon list</h2>
                </div>
                <div class="card-body">
                    <ul class="card-group">
                        @forelse($salons as $salon)
                        <li class="col-5 list-group-item m-2 p-2 border border-white border-3 text-center">
                            <h3>{{$salon->title}}</h3>
                            <a href="{{route('salon-show', $salon)}}">View salon</a>
                        </li>
                        @empty
                        <li class="col-5 list-group-item m-2 p-2 border border-white border-3 text-center">
                            <h3> No Salons added yet.</h3>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
