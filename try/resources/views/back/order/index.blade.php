@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-secondary border border-5 border-white">
                <div class="card-header">
                    <h2>Orders</h2>
                </div>
                <div class="card-body">
                    <ul class="col-12">
                        @forelse($orders as $order)
                        <li class="col-11 list-group-item m-2 p-2 border border-white border-3 text-center">
                            <h3 class="bg-dark col-12 p-2">Order id: {{$order->id}}
                                @if($order->confirmed == '0')
                                <span class="badge bg-secondary">Awaiting confirmation</span>
                                @elseif($order->confirmed == '1')
                                <span class="badge bg-success">Reservation confirmed</span>
                                @elseif($order->confirmed == '2')
                                <span class="badge bg-danger">Reservation cancelled</span>
                                @elseif($order->confirmed == '3')
                                <span class="badge bg-danger">User cancelled</span>
                                @endif
                            </h3>
                            <p>
                                @foreach($users as $user)
                                @if($user->id == $order->user_id)
                                {{$user->name}}
                                @endif
                                @endforeach
                                @foreach($salons as $salon)
                                @if($salon->id == $order->salon_id)
                                {{$salon->title}}
                                @endif
                                @endforeach
                                @foreach($masters as $master)
                                @if($master->id == $order->master_id)
                                {{$master->name}} {{$master->surname}}
                                @endif
                                @endforeach
                                @foreach($services as $service)
                                @if($service->id == $order->service_id)
                                {{$service->title}} {{$service->price}} &euro; {{$service->min}} min.
                                @endif
                                @endforeach
                            </p>
                            <p>
                                {{$order->time}} {{$order->date}}
                            </p>
                            @if($order->confirmed == '3')
                            @else
                            <form action="{{route('order-edit', $order)}}" method="post">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="confirmed" id="flexRadioDefault1" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Confirm reservation
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="confirmed" id="flexRadioDefault2" value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Cancel reservation
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="confirmed" id="flexRadioDefault3" value="0">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Awaiting confirmation
                                    </label>
                                </div>
                                <button class="btn btn-dark btn-outline-danger col-4 mt-2" type="submit">Update reservation</button>
                                @csrf
                                @method('put')
                            </form>
                            @endif

                        </li>
                        @empty
                        <li class="col-10 ms-1">
                            <h3 class="bg-dark col-12 p-2">No orders</h3>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
