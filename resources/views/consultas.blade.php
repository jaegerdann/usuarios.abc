@extends('plantilla')

@section('contenido')
<div class="container">
<h1>consultas</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
     <th scope="col">Nombre</th>
     <th scope="col">Email</th>
     <th scope="col">Password</th>
   </tr>
  </thead>
  <tbody>
    @foreach($datos as $lista)
      <tr>
        <td scope"row">{{ $lista->id }}</td>
        <td>{{ $lista->name }}</td>
        <td>{{ $lista->email }}</td>
        <td>{{ $lista->password }}</td>
      </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection
