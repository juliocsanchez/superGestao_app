<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index(){
        $providers = [
            0=>
            [
                'nome'=>'Forncedor 1',
                'status' => 'N',
                'CNPJ' => '0',
                'DDD' => '32', //Juiz de Fora
                'Telefone' => '0000-0000'
            ],

            1=>
            [
                'nome'=>'Forncedor 2',
                'status' => 'S',
                'DDD' => '85', //Fortal
                'CNPJ' => null,
                'Telefone' => '0000-0000'
            ],

            2 =>
            [
                'nome'=>'Forncedor 3',
                'status' => 'S',
                'DDD' => '11', //SP
                'CNPJ' => null,
                'Telefone' => '0000-0000'
            ],

            3 =>
            [
                'nome'=>'Forncedor 4',
                'status' => 'N',
                'DDD' => '12', //SP
                'CNPJ' => null,
                'Telefone' => '0000-0000'
            ]
        ];
        return view ('app.provider.index', compact('providers'));
    }
}
