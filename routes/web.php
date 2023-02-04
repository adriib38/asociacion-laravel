<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/eventos', function () {

    return view('eventos');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('eventos', EventController::class)
->parameters(['events' => 'event'])
->names([
    'index' => 'events.lista',
    'create' => 'events.crear',
    'show' => 'events.show',
    'edit' => 'events.editar',
    'store' => 'events.store',
])->except(['update', 'destroy']);


