@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Master {{$master->name}} {{$master->surname}}</h2>
                </div>
                <div class="card-body">
                    <form action={{route('master-edit', $master)}} method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Name:</label>
                            <input type="text" name="name" class="form-control" value="{{$master->name}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Surname:</label>
                            <input type="text" name="surname" class="form-control" value="{{$master->surname}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Salon</label>
                            <select name="salon_id" class="form-select">
                                @foreach($salons as $salon)
                                <option name="salon_id" @if($salon->id == $master->salon_id)
                                    selected
                                    @endif value="{{$salon->id}}">{{$salon->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <button type="submit">Add master</button>
                        @csrf
                        @method('put')
                        <form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
