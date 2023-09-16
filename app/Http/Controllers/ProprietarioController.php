<?php

namespace App\Http\Controllers;

use App\Models\Proprietario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proprietarios = Proprietario::all();
        return view('admin.proprietarios.index', compact('proprietarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proprietario = new Proprietario();
        return view('admin.proprietarios.create', compact('proprietario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

         if ($request->hasFile('foto')) {
          //  $imagePath = $request->file('foto')->store('images/proprietarios');
          //  $data['foto'] = $imagePath;
          $file = $request->file('foto');
          $file->store('public/storage/foto_proprietarios');
          $data['foto'] = $file->hashName();
        }
        else {
            $data['foto'] = null;
        }

        Proprietario::create($data);

        return redirect()->route('proprietarios.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Proprietario $proprietario)
    {
        return view ('admin.proprietarios.show', compact('proprietario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proprietario $proprietario)
    {
        return view('admin.proprietarios.edit', compact('proprietario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proprietario $proprietario)
    {
        $data = $request->all();
        $proprietario->update($data);

        return redirect()->route('proprietarios.index')->with('sucess', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proprietario $proprietario)
    {
        $proprietario->delete();
        return redirect()->route('proprietarios.index')->with('sucess', true);
    }
}
