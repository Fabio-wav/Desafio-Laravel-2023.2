<?php

namespace App\Http\Controllers;

use App\Models\Proprietario;
use App\Models\Animal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animais = Animal::all();
        return view('admin.animais.index', compact('animais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $animal = new Animal();
        $proprietarios = Proprietario::all();
        return view('admin.animais.create', compact('animal'), compact('proprietarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Animal::create($data);

        return redirect()->route('animais.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {

        $proprietarios = Proprietario::all();
        return view ('admin.animais.show', compact('animal'), compact('proprietarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        $proprietarios = Proprietario::all();
        return view('admin.animais.edit', compact('animal'), compact('proprietarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $data = $request->all();
        $animal->update($data);

        return redirect()->route('animais.index')->with('sucess', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animais.index')->with('sucess', true);
    }

}
