@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-secondary border border-5 border-white">
                <div class="card-header">
                    <h2>Our beauty experts list</h2>
                </div>
                <div class="card-body">
                    <ul class="card-columns">
                        @forelse($masters as $master)
                        <li class="col-5 m-3 list-group-item border border-white border-3 text-center card" style="display: inline-block">
                            @if(!$master->photo)
                            <img class="card-img-top" src="https://uxwing.com/wp-content/themes/uxwing/download/peoples-avatars/no-profile-picture-icon.png" alt="Card image cap">
                            @else
                            <img class="card-img-top" src="{{asset($master->photo)}}">
                            @endif
                            <h3>Master {{$master->name}} {{$master->surname}}</h3>
                            @foreach($salons as $salon)
                            @if($salon->id == $master->salon_id)
                            <p>Working in <a class="text-white fw-bolder text-decoration-none" href="{{route('salon-show', $salon)}}">{{$salon->title}}</a> beauty salon</p>
                            @endif
                            @endforeach
                            @foreach($reviews as $review)
                            @if($review->master_id == $master->id)

                            @endif
                            @endforeach
                        </li>
                        @empty
                        <li>
                            <h3> No masters added yet.</h3>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
