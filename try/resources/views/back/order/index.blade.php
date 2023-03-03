@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Orders</h2>
                </div>
                <div class="card-body">
                    <ul class="col-12">
                        @forelse($orders as $order)
                        <li class="col-3">

                        </li>
                        @empty
                        <li class="col-10 ml-1">
                            <h3>No orders</h3>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
