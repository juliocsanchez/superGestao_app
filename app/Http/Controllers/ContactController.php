<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContact;

class ContactController extends Controller
{
    public function contact (Request $request){

       $motivo_contatos=[
        '1' =>'Dúvida',
        '2' =>'Elogio',
        '3' =>'Reclamação'
       ];
       // $contact= new SiteContact();
       // $contact->fill($request->all());

        //$contact -> save();

         /*
        $contact= new SiteContact();
        $contact->nome = $request ->input('nome');
        $contact->telefone = $request ->input('telefone');
        $contact->email = $request ->input('email');
        $contact->motivo_contato = $request ->input('motivo');
        $contact->mensagem = $request ->input('mensagem');
        */
        
        //print_r($contact->getAttributes());

        return view('site.contact',['motivo_contatos'=>$motivo_contatos]);
    }

    public function save (Request $request){
        //validate the data of forms 
        $request->validate([
            'nome' => 'required|min:3|max:40', //min e max of caracters
            'telefone' => 'required|min:13|max:16',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem'=> 'required|max:2000' 
        ]);

        SiteContact::create($request->all());
    }
}
