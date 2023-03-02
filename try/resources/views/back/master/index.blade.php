@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Our beauty experts list</h2>
                </div>
                <div class="card-body">
                    <ul>
                        @forelse($masters as $master)
                        <li>
                            <h3>Master {{$master->name}} {{$master->surname}}</h3>
                            @foreach($salons as $salon)
                            @if($salon->id == $master->salon_id)
                            <p>Working in <strong>{{$salon->title}}</strong> beauty salon</p>
                            @endif
                            @endforeach
                            @if(!$master->photo)
                            <p>No photo yet</p>
                            @else
                            <img src="{{asset($master->photo)}}">
                            @endif
                            <a href="{{route('master-edit', $master)}}">Edit master</a>
                            <form action="{{route('salon-delete', $master)}}" method="post">
                                <button type="submit">Remove master</button>
                                @csrf
                                @method('delete')
                            </form>
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
