<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }
    
    public function index(User $user){

        return view('dashboard',[

            'user'=> $user
        ]);

        //dd(auth() -> user());
    }

    public function create(){

        return view('posts.create');
    }


    public function store(Request $request){

        $this->validate($request,[

            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen'=> 'required'


        ]);
    }
}



