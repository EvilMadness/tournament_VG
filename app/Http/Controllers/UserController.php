<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $title = "Administradores";
        return view('user.index', compact('users', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Añadir admisnitrador";
        return view('user.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $request['password']=Hash::make($request['password']);
        User::create($request->all());
        toast('¡Administrador agregado correctamente!', 'success', 'top');
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::findOrFail($id);
        $show = true;
        $title = "Detalles del administrador";
        return view('user.profile', compact('users', 'show', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        $title = "Editar administrador";
        return view('user.edit', compact('users', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        if ($request->has('cambiar_pass')){
            $this->validate($request,[
                'name' => 'required|string|max:191',
                'password' => 'required|min:6|max:191|confirmed',
                'email' => 'required|max:191|email|unique:users,email,'.$id
            ]);
            $request['password']=Hash::make($request['password']);
        }else{
            $this->validate($request,[
                'name' => 'required|string|max:191',
                'email' => 'required|max:191|email|unique:users,email,'.$id
            ]);
            $request['password']=$users->password;
        }
        $users->update($request->all());
        toast('¡Administrador editado correctamente!', 'success', 'top');
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        toast('¡Administrador eliminado correctamente!', 'success', 'top');
        return redirect('user');
    }
}
