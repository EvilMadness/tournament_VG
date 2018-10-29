<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonajeRequest;
use App\Personaje;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personajes = Personaje::all();
        $title = "Personajes";
        return view('personaje.index', compact('personajes', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Nuevo personaje";
        return view('personaje.add',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonajeRequest $request)
    {
        Personaje::create($request->all());
        toast('¡Personaje agregado correctamente!', 'success', 'top');
        return redirect('personaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personajes = Personaje::findOrFail($id);
        $title = 'Editar personaje de juego';
        return view('personaje.add', compact('personajes', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonajeRequest $request, $id)
    {
        $personajes = Personaje::findOrFail($id);
        $personajes->update($request->all());
        return redirect('personaje')->with('alert', 'Personaje actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personajes = Personaje::findOrFail($id);
        $personajes->delete();
        toast('¡Personaje eliminado exitosamente!', 'success', 'top');
        return redirect('personaje');
    }
}
