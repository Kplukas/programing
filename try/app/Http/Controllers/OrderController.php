<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Master;
use App\Models\Service;
use App\Models\Salon;
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
        $salons = Salon::all();
        $masters = Master::all();
        $services = Service::all();
        $orders = Order::all();
        return View('back.order.index', [
            'orders' => $orders,
            'masters' => $masters,
            'salons' => $salons,
            'services' => $services
            ]);
    }

    public function index2()
    {
        $salons = Salon::all();
        $masters = Master::all();
        $services = Service::all();
        $orders = Order::all();
        return View('front.order.index', [
            'orders' => $orders,
            'masters' => $masters,
            'salons' => $salons,
            'services' => $services
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $order->confirmed = '0';
        $order->save();

        return redirect()->route('salon-show', $request->salon_id);
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
    public function edit2(Order $order)
    {
        return View('front.order.edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->confirmed = $request->confirmed;
        $order->save();
        return redirect()->route('order-index');
    }
    public function update2(UpdateOrderRequest $request, Order $order)
    {
        $order->confirmed = $request->confirmed;
        $order->save();
        return redirect()->route('order-index2');
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
