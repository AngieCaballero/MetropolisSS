<?php

use App\Http\Controllers\MetropolisController;
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

Route::get('/', function () {
    return view('Index');
}) -> name('Index');

Route::get('/spanishclasses', [MetropolisController::class, 'SClasses']) -> name('SC');

Route::get('/toursandtransport', [MetropolisController::class, 'TTransport']) -> name('TT');

Route::get('/DetallesViajes/{nombre}', [MetropolisController::class, 'DetallesViajes']);
