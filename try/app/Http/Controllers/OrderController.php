<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return View('back.order.index', ['orders' => $orders]);
    }

    public function index2()
    {
        $orders = Order::all();
        return View('front.order.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('back.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $order = New Order;
        $order->salon_id = $request->salon_id;
        $order->master_id = $request->master_id;
        $order->user_id = $request->user_id;
        $order->service_id = $request->service_id;
        $order->date = $request->date;
        $order->time = $request->time;
        $order->string('confirmation', 20)->nullable();
        $order->save();

        return redirect()->route('back.order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return View('back.order.edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->salon_id = $request->salon_id;
        $order->master_id = $request->master_id;
        $order->user_id = $request->user_id;
        $order->service_id = $request->service_id;
        $order->date = $request->date;
        $order->time = $request->time;
        $order->string('confirmation', 20)->nullable();
        $order->save();

        return redirect()->route('back.order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order-index');
    }
}
