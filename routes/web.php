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

//pagina base
Route::get('/', function () {
    $fumetti = config('fumetti');
    return view('home.index', compact('fumetti'));
}) -> name('home');

//pagine singoli fumetti
Route::get('/{id}', function ($id) {
    $fumetti = config('fumetti');
    $fumettoSelezionato = null;

    foreach ($fumetti as $i => $fumetto) {
        if ($fumetto["id"] === intval($id)) {
            $fumettoSelezionato = $fumetto;
            break;
        }
    }

    if (is_null($fumettoSelezionato)) {
        abort("404");
    }

    //dump($fumettoSelezionato);

    return view('home.show', [
            'fumetto' => $fumettoSelezionato
        ]);

}) -> name('home.show');