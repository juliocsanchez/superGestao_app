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

Route::get ('/', 'MainController@main')->name('site.main');
Route::get('/aboutus', 'AboutUsController@about')->name('site.aboutus'); 
Route::get('/contact', 'ContactController@contact')->name('site.contact');
Route::post('/contact', 'ContactController@save')->name('site.contact');
Route::get('/login', function(){return 'Login';})->name('site.login');

Route::middleware('authenticade:padrao')->prefix('/app')->group( function() {
    Route::get('/clients', function(){return 'Clients';})->name('app.client');
    Route::get('/provider', 'ProviderController@index')->name('app.provider');
    Route::get('/products',function(){return 'Products';})->name('app.products');
});

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.main').'">Clique aqui</a> para retornar ';
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');





// name, category, about, message

/*Route::get('/contact/{name}/{category_id}', 
    function(
        string $name ='Desconhecido',
        int $category_id = 1 // the value 1 represent 'Info '
     ) {
        echo "Nome: $name - $category_id ";
    }
) 
->where('category_id','[0-9]+') //+ means the parameter of minimium one caracter
->where('name','[A-Za-z]+');
*/ 