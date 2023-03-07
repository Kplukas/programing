@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-secondary border border-5 border-white">
                <div class="card-header">
                    <h2>{{Auth::user()->name}} orders</h2>
                </div>
                <div class="card-body">
                    <ul class="card-group">
                        @forelse($orders as $order)
                        @if($order->user_id == Auth::user()->id)
                        <li class="col-11 list-group-item m-2 p-2 border border-white border-3 text-center">
                            <h3 class="bg-dark col-12 p-2">
                                @foreach($salons as $salon)
                                @if($salon->id == $order->salon_id)
                                {{$salon->title}}
                                @endif
                                @endforeach
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
                            <p class="text-dark fw-bolder fs-4">@foreach($services as $service)
                                @if($service->id == $order->service_id)
                                {{$service->title}}
                                @endif
                                @endforeach
                                {{$order->time}} {{$order->date}}</p>
                            @if($order->confirmed == '3')

                            @else
                            <form action="{{route('order-edit', $order)}}" method="post">
                                <input type="hidden" name="confirmed" value="3">
                                <button class="btn btn-dark btn-outline-danger col-4 mt-2" type="submit">Cancel reservation</button>
                                @csrf
                                @method('put')
                            </form>
                            @endif
                        </li>
                        @else
                        <li>
                            <h3> No orders yet</h3>
                        </li>
                        @endif
                        @empty
                        <li>
                            <h3> No orders yet</h3>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
