<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultas = Proprietario::all();
        return view('admin.consultas.index', compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $consulta = new Proprietario();
        return view('admin.consultas.create', compact('consulta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Proprietario::create($data);

        return redirect()->route('consultas.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Proprietario $consulta)
    {
        return view ('admin.consultas.show', compact('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proprietario $consulta)
    {
        return view('admin.consultas.edit', compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proprietario $consulta)
    {
        $data = $request->all();
        $consulta->update($data);

        return redirect()->route('consultas.index')->with('sucess', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proprietario $consulta)
    {
        $consulta->delete();
        return redirect()->route('consultas.index')->with('sucess', true);
    }
}
