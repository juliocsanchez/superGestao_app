<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get ('/', 'MainController@main');

Route::get('/aboutus', 'AboutUsController@about');

Route::get('/contact', 'ContactController@contact');
// name, category, about, message

Route::get('/contact/{name}/{category_id}', 
    function(
        string $name ='Desconhecido',
        int $category_id = 1 // the value 1 represent 'Info '
     ) {
        echo "Nome: $name - $category_id ";
    }
) 
->where('category_id','[0-9]+') //+ means the parameter of minimium one caracter
->where('name','[A-Za-z]+')
;