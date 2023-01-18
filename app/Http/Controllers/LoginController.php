<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('site.login',['title' => 'Login']);
    }

    public function autenticar( Request $request){
        $rules =[
            'user' => 'email',
            'password' => 'required'
        ];

        $feedback = [
            'user.email' => 'O campo de user é obrigatório',
            'password.required' => 'O campo password não pode estar vazio'
        ];

        $request->validate($rules,$feedback);

        print_r($request->all());
    }
}
