@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-secondary border border-5 border-white">
                <div class="card-header">
                    <h2>New Master</h2>
                </div>
                <div class="card-body">
                    <form action={{route('master-store')}} method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label col-4 border-bottom border-white border-3 fs-3">Name:</label>
                            <input class="form-control" type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label col-4 border-bottom border-white border-3 fs-3">Surname:</label>
                            <input class="form-control" type="text" name="surname" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label col-4 border-bottom border-white border-3 fs-3">Salon</label>
                            <select name="salon_id" class="form-select">
                                @foreach($salons as $salon)
                                <option name="salon_id" value="{{$salon->id}}">{{$salon->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label col-4 border-bottom border-white border-3 fs-3">Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <button class="btn btn-dark btn-outline-light col-4 mt-2" type="submit">Add master</button>
                        @csrf
                        <form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
