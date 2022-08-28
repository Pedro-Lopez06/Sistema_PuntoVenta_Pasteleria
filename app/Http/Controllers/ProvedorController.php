<?php

namespace App\Http\Controllers;

use App\Models\Provedor;
use App\Http\Requests\StoreProvedorRequest;
use App\Http\Requests\UpdateProvedorRequest;


class ProvedorController extends Controller
{
    public function index()
    {
        $provedors = Provedor::get();
        return view('admin.Provedor.index', compact('provedors'));
    }

    
    public function create()
    {
        return view('admin.Provedor.create');

    }

   
    public function store(StoreProvedorRequest $request)
    {
        Provedor::cretae($request->all());
        return redirect()->route('provedors.index');

    }
    public function show(Provedor $Provedor)
    {
        return view('admin.Provedor.show', compact('provedors'));

    }

   
    public function edit(Provedor $Provedor)
    {
        return view('admin.Provedor.index', compact('provedors'));

    }

   
    public function update(UpdateProvedorRequest $request, Provedor $Provedor)
    {
        $Provedor->update($request->all());
        return redirect()->route('provedors.index');
    }

    
    public function destroy(Provedor $Provedor)
    {
        $Provedor->delete();
        return redirect()->route('provedors.index');
    }
}
