@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Services</h2>
                </div>
                <div class="card-body">
                    <ul>
                        @forelse($services as $service)
                        <li>
                            <h3>Service: {{$service->title}}</h3>
                            <p>{{$service->price}} &euro; || {{$service->min}} minutes.</p>
                            <a href="{{route('service-edit', $service)}}">Edit service</a>
                            <form action="{{route('service-delete', $service)}}" method="post">
                                <button type="submit">Delete service</button>
                                @csrf
                                @method('delete')
                            </form>
                        </li>
                        @empty
                        <li>
                            <h3> No Services at this time</h3>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
