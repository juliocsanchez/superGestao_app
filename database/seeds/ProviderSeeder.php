<?php

use Illuminate\Database\Seeder;
use App\Provider;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instance a object
           $provider = new Provider();     
           $provider -> name = 'Adidas' ;
           $provider -> site = 'adidas.com' ;
           $provider -> email = 'adidas@contact.com' ;
           $provider -> uf = 'CE' ;
           $provider->save();

        //method Create(fillable necessary in 'App\Provider')
           Provider::create([
            'name' => 'Puma',
            'site' => 'puma.com',
            'email' => 'puma@contact.com',
            'uf' => 'MG'
           ]);

        //insert

           DB::table('providers') ->insert([
            'name' => 'Polo',
            'site' => 'polo.com',
            'email' => 'polo@contact.com',
            'uf' => 'RJ'
           ]);
    }
}
