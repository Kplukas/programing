@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-secondary border border-5 border-white">
                <div class="card-header">
                    <h2>{{$salon->title}}</h2>
                </div>
                <div class="card-body">
                    <p>{{$salon->adress}} {{$salon->tel}}</p>
                    <h3 class="text-center">Beauty experts in this salon:</h3>
                    <ul class="card-group">
                        @forelse($masters as $master)
                        <li class="col-5 list-group-item m-2 p-2 border border-white border-3 text-center">
                            <h3>{{$master->name}} {{$master->surname}}</h3>
                        </li>
                        @empty
                        <li class="col-5 list-group-item m-2 p-2 border border-white border-3 text-center">
                            <h3>No masters added yet</h3>
                        </li>
                        @endforelse
                    </ul>
                    <form class="row ms-4" action={{route('order-create')}} method="post" enctype="multipart/form-data">
                        <input type="hidden" name="salon_id" value="{{$salon->id}}">
                        <div class="mb-3 col-5">
                            <label class="form-label col-10 border-bottom border-white border-3 fs-3">Select master</label>
                            <select name="master_id" class="form-select">
                                @foreach($masters as $master)
                                <option name="master_id" value="{{$master->id}}">{{$master->name}} {{$master->surname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-5">
                            <label class="form-label col-10 border-bottom border-white border-3 fs-3">Select service</label>
                            <select name="service_id" class="form-select">
                                @foreach($services as $service)
                                <option name="service_id" value="{{$service->id}}">{{$service->title}} | {{$service->price}} &euro; | {{$service->min}} minutes</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-5">
                            <label class="form-label col-10 border-bottom border-white border-3 fs-3">Select date</label>
                            <input class="col-12 form-control" type="date" name="date" min=2023-03-07>
                        </div>
                        <div class="mb-3 col-5">
                            <label class="form-label col-10 border-bottom border-white border-3 fs-3">Select time</label>
                            <select name="time" class="form-select">
                                <option name="time" value="8:00">8:00</option>
                                <option name="time" value="8:30">8:30</option>
                                <option name="time" value="9:00">9:00</option>
                                <option name="time" value="9:30">9:30</option>
                                <option name="time" value="10:00">10:00</option>
                                <option name="time" value="10:30">10:30</option>
                                <option name="time" value="11:00">11:00</option>
                                <option name="time" value="11:30">11:30</option>
                                <option name="time" value="12:00">12:00</option>
                                <option name="time" value="12:30">12:30</option>
                                <option name="time" value="13:00">13:00</option>
                                <option name="time" value="13:30">13:30</option>
                                <option name="time" value="14:00">14:00</option>
                                <option name="time" value="14:30">14:30</option>
                                <option name="time" value="15:00">15:00</option>
                                <option name="time" value="15:30">15:30</option>
                                <option name="time" value="16:00">16:00</option>
                                <option name="time" value="16:30">16:30</option>
                                <option name="time" value="17:00">17:00</option>
                                <option name="time" value="17:30">17:30</option>
                            </select>
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <button class="btn btn-dark btn-outline-light col-4 m-2" type="submit">Order</button>
                        @csrf
                        <form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
