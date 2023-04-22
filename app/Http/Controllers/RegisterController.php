<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    
   public function index ()
    {
        return view('auth.register');
    }

    public function store (Request $request)
    {
        //dd($request);


        //modificar para que no de error en login si hay el mismo username

        $request->request->add(['username'=> Str::slug($request->username)]);

        //validar
        $this->validate($request,[
            'name'=>'required|max:30',
            'username'=>'required|unique:users|min:3|max:20',
            'email'=>'required|unique:users|email|max:30',
            'password'=>'required|confirmed|min:6',
           
        ]);


        User::create([
            'name'=>$request->name,
            'username'=>$request->username ,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
        ]);


        //autenticar usuario

        //auth()->attempt([
            //'email' => $request -> email,
          //  'password' => $request -> password
        //]);

        auth()->attempt($request->only('email', 'password'));


        //redireccionar al momento de completar from
        return redirect()->route('posts.index');

    }
}
