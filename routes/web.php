<?php

use App\Http\Controllers\CrudController;
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

Route::get('/', function (){
    return view ('home');
});
// Farmacos
Route::get('/farma', [CrudController::class, 'index'])->name('farma');
Route::get('/medicamentos/{name}', [CrudController::class, 'medicamentos'])->name('medicamentos');
Route::get('/editefarmaco/{id}', [CrudController::class, 'editeFarmaco'])->name('editefarmaco');
Route::get('/removefarmaco/{id}', [CrudController::class, 'removeFarmaco'])->name('removefarmaco');
Route::get('/adicionarfarmaco', [CrudController::class, 'addFarmaco'])->name('adicionarfarmaco');
Route::post('/addFarm', [CrudController::class, 'addFarming'])->name('addfaming');
Route::get('/upFarm/{id}', [CrudController::class, 'upFarming'])->name('upFarm');
Route::post('/addfarmacos', [CrudController::class, 'addFarming'])->name('addfaming');
Route::get('/farmacos.editefarma', [CrudController::class, 'editeFarms'])->name('editefarms');
// *
// Usuarios
Route::get('/adicionarusuarios', [CrudController::class, 'adicionarusuarios'])->name('adicionarusuarios');
Route::post('/adduser', [CrudController::class, 'addUser'])->name('adduser');
Route::get('/userlist', [CrudController::class, 'userlist'])->name('userlist');
Route::get('/editeuser/{id}', [CrudController::class, 'editeusers'])->name('editeuser');
Route::get('/removeuser/{id}', [CrudController::class, 'removeusers'])->name('removeuser');
Route::post('/addusers', [CrudController::class, 'addUsers'])->name('addusers');
// *

    Route::get('/home', function () {
        return view('Welcome');
    }) ->name('home-index');

Route::fallback (function(){
    return "Erro ao localizar a rota!";
});




