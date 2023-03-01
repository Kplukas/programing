@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 <h2>New salon</h2>
                </div>
                <div class="card-body">
                    <form action={{route('salon-store')}} method="post" enctype="multipart/form-data">
                        <div>
                            <label>Salon title</label>
                            <input type="text" name="title">
                        </div>
                        <div>
                            <label>Adress</label>
                            <input type="text" name="adress">
                        </div>
                        <div>
                            <label>Telephone number</label>
                            <input type="text" name="tel">
                        </div>
                        <button type="submit">Save salon</button>
                        @csrf
                    <form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
