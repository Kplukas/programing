@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Available beauty services</h2>
                </div>
                <div class="card-body">
                    <ul>
                        @forelse($services as $service)
                        <li>
                            <h3>{{$service->title}}</h3>
                        </li>
                        @empty
                        <li>
                            <h3>No services added yet.</h3>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
