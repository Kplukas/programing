@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-secondary border border-5 border-white">
                <div class="card-header">
                    <h2>Services</h2>
                </div>
                <div class="card-body">
                    <ul class="card-group">
                        @forelse($services as $service)
                        <li class="col-5 list-group-item m-2 p-2 border border-white border-3 text-center">
                            <h3>Service: {{$service->title}}</h3>
                            <p>{{$service->price}} &euro;</p>
                            <p>{{$service->min}} minutes</p>
                            <form action="{{route('service-delete', $service)}}" method="post">
                                <a class="btn btn-dark btn-outline-light col-sm-12 mt-2" href="{{route('service-edit', $service)}}">Edit service</a>
                                <button class="btn btn-dark btn-outline-light col-sm-12 mt-2" type="submit">Delete service</button>
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
