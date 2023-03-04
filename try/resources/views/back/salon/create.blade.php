@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-secondary border border-5 border-white">
                <div class="card-header">
                    <h2>New salon</h2>
                </div>
                <div class="card-body">
                    <form action={{route('salon-store')}} method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label col-4 border-bottom border-white border-3 fs-3">Salon title</label>
                            <input class="form-control" type="text" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label col-4 border-bottom border-white border-3 fs-3">Adress</label>
                            <input class="form-control" type="text" name="adress">
                        </div>
                        <div class="mb-3">
                            <label class="form-label col-4 border-bottom border-white border-3 fs-3">Telephone number</label>
                            <input class="form-control" type="text" name="tel">
                        </div>
                        <button class="btn btn-dark btn-outline-light col-4 mt-2" type="submit">Save salon</button>
                        @csrf
                        <form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
