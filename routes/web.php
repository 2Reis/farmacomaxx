<?php

use App\Http\Controllers\FarmacosController;
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

//Route::get('/home', function () {
//    return view('welcome');
//});

// route::view('/farma','farma');

// Route::get('/farma', function () {
//    return "TESTANDO VIEW FARMACO";
//     });

//route::view('/farma','farma',['name'=> 'Fluxetina']);

// route::get('/farma/{id?}/{name?}', function($name = null, $id = null){
//     return view('farma',['nameFarmaco'=> $name, 'idFarmaco'=> $id]);
// }) ->where(['name' => '[a-z]+','id' => '[0-9]+']);

Route::get('/', function (){
    return view ('home');
});
Route::get('/farma', [FarmacosController::class, 'index'])->name('farma');
Route::get('/medicamentos/{name}', [FarmacosController::class, 'medicamentos'])->name('medicamentos');
Route::get('/editefarmaco/{id}', [FarmacosController::class, 'editeFarmaco'])->name('editefarmaco');
Route::get('/removefarmaco/{id}', [FarmacosController::class, 'removeFarmaco'])->name('removefarmaco');
Route::get('/adicionarfarmaco', [FarmacosController::class, 'addFarmaco'])->name('adicionarfarmaco');
Route::post('/addFarm', [FarmacosController::class, 'addFarming'])->name('addfaming');
Route::get('/upFarm/{id}', [FarmacosController::class, 'upFarming'])->name('upFarm');
Route::get('/adicionarusuarios', [FarmacosController::class, 'adicionarusuarios'])->name('adicionarusuarios');
Route::get('/userlist', [FarmacosController::class, 'userlist'])->name('userlist');
Route::post('/addfarmacos', [FarmacosController::class, 'addFarming'])->name('addfaming');
Route::get('/farmacos.editefarma', [FarmacosController::class, 'editeFarms'])->name('editefarms');


    Route::get('/home', function () {
        return view('Welcome');
    }) ->name('home-index');

Route::fallback (function(){
    return "Erro ao localizar a rota!";
});




