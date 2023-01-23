<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request){

        $erro=$request->get('erro');
        return view('site.login',['title' => 'Login', 'erro' => $erro]);
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


        //recovery params of forms
        $email= $request->get('user');
        $password=$request->get('password');  

        echo "usr: $email  senha :$password";

        //Init Model User
        $user= new User();

        $verify=$user->where('email', $email )
        ->where('password',$password)
        ->get()
        ->first();

        
        if(isset($verify->name)){
            echo'existe';
        } else {
            return redirect()->route('site.login', ['erro' => 'Login inválido']);
        }
       
    }
}
