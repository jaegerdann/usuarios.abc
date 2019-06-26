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
      'password' => $request->password
    ]);

    return redirect('/altas');
  }
}
