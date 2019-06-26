@extends('plantilla')

@section('contenido')

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
    <tr>
      @foreach($datos as $lista)
        <th scope"row">{{ $lista->id }}</th><br>
          <td>{{ $lista->name }}</td>
          <td>{{ $lista->email }}</td>
          <td>{{ $lista->password }}</td>
      @endforeach
    </tr>
  </tbody>
</table>
@endsection
