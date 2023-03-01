@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 <h2>New service</h2>
                </div>
                <div class="card-body">
                    <form action={{route('service-store')}} method="post" enctype="multipart/form-data">
                        <div>
                            <label>Service title</label>
                            <input type="text" name="title">
                        </div>
                        <div>
                            <label>Duration (minutes)</label>
                            <input type="text" name="min">
                        </div>
                        <div>
                            <label>Price</label>
                            <input type="text" name="price">
                        </div>
                        <div>
                            <label>Salon</label>
                            <select name="salon_id">
                                @foreach($salons as $salon)
                                    <option name="salon_id" value="{{$salon->id}}">{{$salon->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit">Add service</button>
                        @csrf
                    <form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
