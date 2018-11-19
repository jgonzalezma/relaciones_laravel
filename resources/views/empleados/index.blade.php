@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>
  <table>
    <tr>
      <th>Id</th>
      <th>Nombre/Apellido</th>
      <th>Departamento</th>
      <th>Responsable del proyecto</th>
    </tr>
    @foreach($empleados as $empleado)
    <tr>
      <td>{{$empleado->id}}</td>
    <td>{{$empleado->nombre}} {{$empleado->apellido1}}</td>
    <td>{{$empleado->departamento->nombre}}</td>
    <td>{{is_null($empleado->proyecto)?"":($empleado->proyecto->titulo)}}</td>
    </tr>
    @endforeach
  </table>

@endsection