<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){
        
        //dd($request);

        
        // Validación
        $this->validate($request, [
            'name' => 'required|max:30',
            'apellidos' => 'required|max:30',
            'dni' => 'required|unique:users|max:8',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6'

        ]);

        User::create([
            'name' => $request->name,
            'apellidos' => $request->apellidos,
            'dni' => $request->dni,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);


        // Autenticar un usuario
        /*
        auth()->attempt([
            'dni' => $request->dni,
            'password' => $request->password
        ]);
        */
        // Otra forma de autenticar
        auth()->attempt($request->only('dni', 'password'));

        // Redireccionar al Usuario
        return redirect()->route('posts.index');
    }
}
