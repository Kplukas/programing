<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use App\Models\Master;
use App\Models\Service;
use App\Http\Requests\StoreSalonRequest;
use App\Http\Requests\UpdateSalonRequest;
use Illuminate\Support\Facades\Validator;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salons = Salon::all();
        return View('back.salon.index', ['salons' => $salons]);
    }

    public function index2()
    {
        $salons = Salon::all();
        return View('front.salon.index', ['salons' => $salons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('back.salon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSalonRequest $request)
    {
        $salon = New Salon;
        $salon->adress = $request->adress;
        $salon->title = $request->title;
        $salon->tel = $request->tel;
        $salon->save();

        return redirect()->route('salon-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Salon $salon)
    {
        $masters = Master::where('salon_id', '=', $salon->id)->get();
        $services = Service::all();
        return View('front.salon.show', ['salon' => $salon, 'masters' => $masters, 'services' => $services]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salon $salon)
    {
        return View('back.salon.edit', ['salon' => $salon]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSalonRequest $request, Salon $salon)
    {
        $salon->title = $request->title;
        $salon->adress = $request->adress;
        $salon->tel = $request->tel;
        $salon->save();

        return redirect()->route('salon-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salon $salon)
    {
        $salon->delete();
        return redirect()->route('salon-index');
    }
}
