<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Salon;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salons = Salon::all();
        $services = Service::all();
        return View('back.service.index', ['services' => $services, 'salons' => $salons]);
    }

    public function index2()
    {
        $salons = Salon::all();
        $services = Service::all();
        return View('front.service.index', ['services' => $services, 'salons' => $salons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $salons = Salon::all();
        return View('back.service.create', ['salons' => $salons]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $service = New Service;
        $service->title = $request->title;
        $service->min = $request->min;
        $service->price = $request->price;
        $service->save();

        return redirect()->route('service-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $salons = Salon::all();
        return View('back.service.edit', ['service' => $service, 'salons' => $salons]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->title = $request->title;
        $service->min = $request->min;
        $service->price = $request->price;
        $service->save();

        return redirect()->route('service-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service-index');
    }
}
