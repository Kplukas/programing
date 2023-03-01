@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 <h2> Our salons</h2>
                </div>
                <div class="card-body">
                <ul>
                    @forelse($salons as $salon)
                    <li>
                        <h3>Salon: {{$salon->title}}</h3>
                        <p>Adress: {{$salon->adress}} || Telephone: {{$salon->tel}}</p>
                        <a href="{{route('salon-edit', $salon)}}">Edit salon</a>
                        <form action="{{route('salon-delete', $salon)}}" method="post">
                            <button type="submit">Delete salon</button>
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
