<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class userController extends Controller
{
  public function guarda(Request $request)
  {
    $tabla = User::create([
      'name' => $request->nombre,
      'email' => $request->email,
      'password' => $request->password,
      'status' => 1
    ]);

    return redirect('/altas');
  }
  public function inicio()
  {
    return view('index');
  }
  public function Altas()
  {
    return view('altas');
  }
  public function Consultas()
  {
    //$datos = User::all();
    $datos = User::where('status', 1)->get();
    return view('consultas',compact('datos'));
  }
  public function delete(Request $request)
  {
      $do = User::find($request->id);
      $do->status = 0;
      $do->save();
      return redirect('/consultas');
  }
}
