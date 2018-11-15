@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Titulo</th>
      <th>Responsable</th>
    </tr>
    @foreach($proyectos as $proyecto)
    <tr>	
    	<td>{{$proyecto->id}}</td>
		<td>{{$proyecto->nombre}}</td>
		<td>{{$proyecto->titulo}}</td>
		<td></td>
    </tr> 
    @endforeach 	
    	<!-- <th>{{$proyecto->responsable}}</th> !-->
  </table>

@endsection