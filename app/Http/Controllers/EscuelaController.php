<?php

namespace App\Http\Controllers;

use App\Escuela;
use App\Http\Requests\EscuelaRequest;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escuelas = Escuela::all();
        $title = "Instituciones educativas";
        return view('institucion.index', compact('escuelas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Nueva institución educativa";
        return view('institucion.add',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EscuelaRequest $request)
    {
        Escuela::create($request->all());
        toast('¡Escuela agregada correctamente!', 'success', 'top');
        return redirect('escuela');
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
        $escuelas = Escuela::findOrFail($id);
        $title = 'Editar institución educativa';
        return view('institucion.add', compact('escuelas', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EscuelaRequest $request, $id)
    {
        $escuelas = Escuela::findOrFail($id);
        $escuelas->update($request->all());
        return redirect('escuela')->with('alert', 'Institución actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
