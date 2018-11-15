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
    <td></td>
    <td></td>
    </tr>
    @endforeach
  </table>

@endsection