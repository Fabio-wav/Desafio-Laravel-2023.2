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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proprietario $proprietario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proprietario $proprietario)
    {
        //
    }
}
