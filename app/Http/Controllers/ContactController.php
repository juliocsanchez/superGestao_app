<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContact;
use App\MotivoContato;

class ContactController extends Controller
{
    public function contact (Request $request){

       $motivo_contatos=  MotivoContato::all();
        return view('site.contact',['motivo_contatos'=>$motivo_contatos]);
    }

    public function save (Request $request){
        //validate the data of forms 
        $request->validate([
            'nome' => 'required|min:3|max:40', //min e max of caracters
            'telefone' => 'required|unique:site_contacts',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem'=> 'required|max:2000' 
        ],
        [
            'nome.required' => 'O campo nome precisa estar preenchido',
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome precisa não pode ultrapassar 40 caracteres',
            'telefone.required' => 'O campo telefone precisa estar preenchido',
            'telefone.unique' => 'Este telefone já foi utilizado para envio do formulário',
            'email.email' => 'Email inválido',
            'motivo_contatos_id.required' => 'O motivo do contato precisa estar preenchido',
            'mensagem.required' => 'O campo mensagem precisa estar preenchido',
            'mensagem.max' => 'A mesngaem não pode ultrapassar 2000 caracteres'

        ]);

        SiteContact::create($request->all());
        return redirect()->route('site.main');
    }
}






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
