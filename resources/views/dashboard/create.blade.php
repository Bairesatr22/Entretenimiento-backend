@extends('adminlte::page')

@section('title', 'Registro  de Usuario')

@section('content_header')
    <h1>Registro de Usuario</h1>
@stop

@section('content')


    <form method="post" action="{{url('dashboard.create')}}">
	
	   @csrf
	   
	    <input type="text" name="nombre" value="{{old('nombre')}}">
	   
	    <input type="text" name="email" value="{{old('email')}}">
		
		<input type="password" name="clave" value="{{old('clave')}}">
	   
	    <select  name="nivel">
		
		  <option value="">-Seleccone</option>
		  <option value="Administrador">Administrador</option>
		  <option value="Usuario">Usuario</option>
		
		</select>
		
		<input type="submit" value="Enviar">
	
	
	</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop