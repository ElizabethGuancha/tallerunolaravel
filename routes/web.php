<?php

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

Route::get('/pagina1', function () {
    return view('pagina1', [
        'name' => 'Elizabeth Guancha',
        'phone' => '3164897978',
        'email' => 'elizabethguancha@gmail.com'
    ] );
});

    Route::get('/pagina2/{multiplo}', function ($multiplo) {
        return view('pagina2',[
            'multiplo' => $multiplo
        ]);
});
