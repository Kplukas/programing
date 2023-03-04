@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-secondary border border-5 border-white">
                <div class="card-header">
                    <h2>Edit service - {{$service->title}}</h2>
                </div>
                <div class="card-body">
                    <form action={{route('service-edit', $service)}} method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label col-4 border-bottom border-white border-3 fs-3">Service title</label>
                            <input class="form-control" type="text" name="title" value="{{$service->title}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label col-4 border-bottom border-white border-3 fs-3">Duration (minutes)</label>
                            <input class="form-control" type="text" name="min" value="{{$service->min}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label col-4 border-bottom border-white border-3 fs-3">Price</label>
                            <input class="form-control" type="text" name="price" value="{{$service->price}}">
                        </div>
                        <button class="btn btn-dark btn-outline-light col-4 mt-2" type="submit">Update service</button>
                        @csrf
                        @method('put')
                        <form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
