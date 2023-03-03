@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{Auth::user()->name}} orders</h2>
                </div>
                <div class="card-body">
                    <ul>
                        @forelse($orders as $order)
                        <li>

                        </li>
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
