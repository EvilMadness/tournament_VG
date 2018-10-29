<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Http\Requests\CarreraRequest;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::all();
        $title = "Carreras";
        return view('carrera.index', compact('carreras', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Nueva carrera";
        return view('carrera.add',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarreraRequest $request)
    {
        Carrera::create($request->all());
        toast('¡Carrera agregada correctamente!', 'success', 'top');
        return redirect('carrera');
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
        $carreras = Carrera::findOrFail($id);
        $title = 'Editar carrera';
        return view('carrera.add', compact('carreras', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarreraRequest $request, $id)
    {
        $carreras = Carrera::findOrFail($id);
        $carreras->update($request->all());
        return redirect('carrera')->with('alert', 'Carrera actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carreras = Carrera::findOrFail($id);
        $carreras->delete();
        toast('¡Carrera eliminada exitosamente!', 'success', 'top');
        return redirect('carrera');
    }
}
