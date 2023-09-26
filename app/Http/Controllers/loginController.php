<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function show(){
        return view('auth.login');
    }

    public function login(loginRequest $request){
        $credentials = $request->getCredentials();
        if (!Auth::validate($credentials)) {
            return redirect()->to('/login')->withErrors('auth.failed');
        }
        $usuario = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($usuario);
        return $this->autenticated($request,$usuario);
    }

    public function autenticated(Request $request,$user){
        return redirect('/home');
    }
}
