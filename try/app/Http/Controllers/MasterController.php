<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Http\Requests\StoreMasterRequest;
use App\Http\Requests\UpdateMasterRequest;
use Illuminate\Support\Facades\Validator;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masters = Master::all();
        return View('back.master.index', ['masters' => $masters]);
    }

    public function index2()
    {
        $masters = Master::all();
        return View('front.master.index', ['masters' => $masters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('back.master.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMasterRequest $request)
    {
        $master = new Master;
        $master->name = $request->name;
        $master->surname = $request->surname;
        $master->salon_id = $request->salon_id;
        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            $name = pathInfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
            $file = $name. '-'. rand(100000, 999999). $ext;
            $photo->move(public_path().'/img', $file);
            $master->photo = '/img'. '/'. $file;
        }
        $master->save();
        return redirect()->route('master-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Master $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Master $master)
    {
        return View('back.master.edit', ['master' => $master]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMasterRequest $request, Master $master)
    {
        $master->name = $request->name;
        $master->surname = $request->surname;
        $master->salon_id = $request->salon_id;
        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            $name = pathInfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
            $file = $name. '-'. rand(100000, 999999). $ext;
            $photo->move(public_path().'/img', $file);
            $master->photo = '/img'. '/'. $file;
        }
        $master->save();
        return redirect()->route('master-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Master $master)
    {
        $master->delete();
        return redirect()->route('master-index');
    }
}
