<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){

        //dd('Autenticando...!');
        //dd($request);

        $this->validate($request, [
            'dni' => 'required',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('dni', 'password'))){
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }

        return redirect()->route('posts.index');
    }
}
