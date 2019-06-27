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
     <th scope="col">Acción</th>
   </tr>
  </thead>
  <tbody>
    @foreach($datos as $lista)
      <tr>
        <td scope"row">{{ $lista->id }}</td>
        <td>{{ $lista->name }}</td>
        <td>{{ $lista->email }}</td>
        <td>{{ $lista->password }}</td>
        <td>
          <form action="/delete" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" id="id" value="{{ $lista->id }}">
            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
    <a href="/altas" class="btn btn-primary">Altas</a>
</div>
@endsection
