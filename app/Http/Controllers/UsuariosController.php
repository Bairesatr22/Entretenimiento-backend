<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
		//$usuarios=Usuario::all();
		//return view('dashboard.index',['usuarios'=>$usuarios]);
		return view('dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
		//return view('dashboard.create',['usuarios'=>Usuario::all()]);
		return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
		/*$request->validate([
		'nombre'=>'required|unique:usuarios|max:50',
		'fecha'=>'required|date',
		'telefono'=>'required|',
		'email'=>'nullabe|email',
		'nivel'=>'required|'
		
		])*/
		
		$usuarios=new Usuario();
		$usuarios->$nombre=$request->input('nombre');
		$usuarios->$correo=$request->input('correo');
		$usuarios->$clave=$request->input('clave');
		$usuarios->$nivel=$request->input('nivel');
        $usuarios->save();
        return  view("dashboard.index");		
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
