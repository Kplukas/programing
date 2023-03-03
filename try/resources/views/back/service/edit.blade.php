@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Edit service - {{$service->title}}</h2>
                </div>
                <div class="card-body">
                    <form action={{route('service-edit', $service)}} method="post" enctype="multipart/form-data">
                        <div>
                            <label>Service title</label>
                            <input type="text" name="title" value="{{$service->title}}">
                        </div>
                        <div>
                            <label>Duration (minutes)</label>
                            <input type="text" name="min" value="{{$service->min}}">
                        </div>
                        <div>
                            <label>Price</label>
                            <input type="text" name="price" value="{{$service->price}}">
                        </div>
                        <button type="submit">Update service</button>
                        @csrf
                        @method('put')
                        <form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
