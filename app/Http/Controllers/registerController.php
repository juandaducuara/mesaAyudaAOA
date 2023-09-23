<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequest;
use App\Models\User;
use App\Models\usuario;
use Illuminate\Http\Request;

class registerController extends Controller
{
    //
    public function show(){
        return view('auth.register');
    }

    public function register(registerRequest $request){
        $usuario = usuario::create($request->validated());
        return redirect('auth.register')->with('success','Usuario creado correctamente');
    }
}
