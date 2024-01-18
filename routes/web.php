<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//Hacemos esto porque le vamos a asignar el controlador HomeController a una ruta
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// *** Ruta que apunta a un Single Action Controller: ***
Route::get('/', HomeController::class);


Route::get('cursos', function () {
    return "Bienvenidos a la página cursos";
});
Route::get('cursos/create', function () {
    return "En esta página podrás crear un curso";
});


// *** Paso de variables por la ruta: ***
Route::get('cursos/{id}', function ($id) {
    return "Bienvenido al curso con id: $id";
});


// *** Paso de variables opcionales: ***
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
    // En principio, la lógica esta del if.. else se debería de derivar al controlador
    if($categoria){
        return "Bienvenido al curso $curso de la categoria $categoria";
    }
    return "Bienvenido al curso: $curso";
});


// *** Rutas que apunta a un método en particular de un controlador : ***
Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/create', [ProductoController::class, 'create']);
Route::get('productos/{producto}', [ProductoController::class, 'show']);


// *** Grupos de rutas: ***
Route::prefix('productos2') -> group( function(){
    Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/create', [ProductoController::class, 'create']);
Route::get('productos/{producto}', [ProductoController::class, 'show']);
});


// ***Plantillas BLADE
Route::get('principal', function () { return view('principal'); });
