@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamento: {{$departamento->nombre}}</h2>
  <h3>Codigo: {{$departamento->codigo}}</h3>
  <h3>Empleados: {{$departamento->empleado}}</h3>

@endsection
