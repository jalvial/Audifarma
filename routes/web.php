<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;


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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', function () {
    return view('cliente.index');
});

Route::get('/cliente/create',[ClienteController::class,'create']);
*/
Route::resource('cliente', ClienteController::class);

Route::get('/', function () {
    return view('home');
});

Route::get('/register',[RegisterController::class, 'create'])
->name('register.index'); 

Route::post('/register', [RegisterController::class, 'store'])
->name('register.store');

Route::get('/login',[SessionsController::class, 'create'])
->name('login.index');

Route::post('/login',[SessionsController::class, 'store'])
->name('login.store');

Route::get('/logout',[SessionsController::class, 'destroy'])
->name('login.destroy');

Route::get('/edit',[RegisterController::class, 'create'])
->name('edit.index'); 

Route::post('cliente/',[ClienteController::class, 'create'])
->name('cliente/'); 





