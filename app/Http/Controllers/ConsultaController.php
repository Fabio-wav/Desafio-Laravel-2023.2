<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Animal;
use App\Models\Consulta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultas = Consulta::all();
        return view('admin.consultas.index', compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $consulta = new Consulta();
        $animais = Animal::all();
        $users = Auth::user();

        return view('/admin.consultas.create', compact('consulta', 'animais', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = $request->all();
    $data['user_id'] = Auth::user()->id;
    $consultas = Consulta::all();
    $request->dataHoraInicio = str_replace('T', ' ', $request->dataHoraInicio);
        $request->dataHoraFim = str_replace('T', ' ', $request->dataHoraFim);
        foreach($consultas as $consulta){

            if($request->dataHoraInicio >= $consulta->dataHoraInicio && $request->dataHoraInicio < $consulta->dataHoraFim){
                return back()->with('message-error', 'Conflito de horário!');
            }else if($request->dataHoraInicio <= $consulta->dataHoraInicio && $request->dataHoraFim > $consulta->dataHoraInicio){
                return back()->with('message-error', 'Conflito de horário!');
            }
        }

    
    Consulta::create($data);
    return redirect()->route('consultas.index')->with('success', 'Consulta agendada com sucesso!');
}
    /**
     * Display the specified resource.
     */
    public function show(Consulta $consulta)
    {
        return view ('admin.consultas.show', compact('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consulta $consulta)
    {
        $animais = Animal::all();
        $users = User::all();
        return view('admin.consultas.edit', compact('consulta', 'animais', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consulta $consulta)
    {
        $data = $request->all();
        $consulta->update($data);

        return redirect()->route('consultas.index')->with('sucess', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consulta $consulta)
    {
        $consulta->delete();
        return redirect()->route('consultas.index')->with('sucess', true);
    }
}
