@extends('layouts.default')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleado: {{$empleado->nombre}}</h2>
  <h3>Responsable del proyecto: {{$empleado->proyecto->titulo}}</h3>
  <h3>Colabora en los siguientes proyectos: {{$empleado->proyectos}}</h3>

@endsection
