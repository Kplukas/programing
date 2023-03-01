@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 <h2>Update salon || {{$salon->title}} ||</h2>
                </div>
                <div class="card-body">
                    <form action={{route('salon-edit', $salon)}} method="post" enctype="multipart/form-data">
                        <div>
                            <label>Salon title</label>
                            <input type="text" name="title" value="{{$salon->title}}">
                        </div>
                        <div>
                            <label>Adress</label>
                            <input type="text" name="adress" value="{{$salon->adress}}">
                        </div>
                        <div>
                            <label>Telephone number</label>
                            <input type="text" name="tel" value="{{$salon->tel}}">
                        </div>
                        <button type="submit">Update salon</button>
                        @csrf
                        @method('put')
                    <form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
