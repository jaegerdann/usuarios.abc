@extends('plantilla')

@section('contenido')

<div class="container">
<h1>altas</h1>

<form action="/altas/guardar" method="post">
{{ csrf_field() }}

  <div class="form-group">
    <label class="form-check-label" for="InputNombre"> Nombre </label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
  </div>

  <div class="form-group">
    <label for="InputEmail">Direccion Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="InputPassword">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
  <a href="/consultas" class="btn btn-outline-secondary">Consultas</a>
  <a href="/" class="btn btn-outline-success">Regresar a Inicio</a>
</form>
</div>
@endsection
