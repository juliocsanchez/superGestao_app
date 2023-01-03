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
                'CNPJ' => '0'
            ],

            1=>
            [
                'nome'=>'Forncedor 2',
                'status' => 'S',
            ]
        ];
        return view ('app.provider.index', compact('providers'));
    }
}
