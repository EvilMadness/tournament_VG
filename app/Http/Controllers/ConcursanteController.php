<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Concursante;
use App\Escuela;
use App\Http\Requests\ConcursanteRequest;
use App\Personaje;
use Illuminate\Http\Request;

class ConcursanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concursantes = Concursante::with('personaje')->get();
        $title = "Concursantes";
        return view('concursante.index', compact('concursantes', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personajes = Personaje::all();
        $carreras = Carrera::all();
        $escuelas = Escuela::all();
        $title = "Registrar nuevo concursante";
        return view('concursante.add',compact('personajes','carreras', 'escuelas', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConcursanteRequest $request)
    {
        Concursante::create($request->all());
        toast('¡Concursante registrado correctamente!', 'success', 'top');
        return redirect('concursante');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $concursantes = Concursante::with('carrera','escuela','personaje')->findOrFail($id);
        //dd($concursantes);
        //$mensajes = $concursante->mensajes()->paginate(5);
        $title = "Detalles usuario";
        return view('concursante.profile', compact('concursantes','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $concursantes = Concursante::findOrFail($id);
        $personajes = Personaje::all();
        $carreras = Carrera::all();
        $escuelas = Escuela::all();
        $title = 'Editar concursante';
        return view('concursante.edit', compact('concursantes','personajes', 'carreras', 'escuelas', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConcursanteRequest $request, $id)
    {
        $concursantes = Concursante::findOrFail($id);
        $concursantes->update($request->all());
        return redirect('concursante')->with('alert', 'Concursante actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $concursantes = Concursante::findOrFail($id);
        $concursantes->delete();
        toast('¡Concursante eliminado exitosamente!', 'success', 'top');
        return redirect('concursante');
    }
}
