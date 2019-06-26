@extends('plantilla')

@section('contenido')

<h1>consultas</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
     <th scope="col">Nombre</th>
     <th scope="col">Email</th>
     <th scope="col">Handl</th>
   </tr>
@foreach($datos as $lista)
  {{ $lista->name }}
  {{ $lista->email }}
  {{ $lista->password }}
@endforeach
@endsection
