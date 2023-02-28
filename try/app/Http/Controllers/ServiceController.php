<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return View('back.service.index', ['services' => $services]);
    }

    public function index2()
    {
        $services = Service::all();
        return View('front.service.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('back.service.create');
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
        $service->salon_id = $request->salon_id;
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
        return View('back.service.edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->title = $request->title;
        $service->min = $request->min;
        $service->price = $request->price;
        $service->salon_id = $request->salon_id;
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
