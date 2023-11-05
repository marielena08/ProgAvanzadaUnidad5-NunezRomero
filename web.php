<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'HOLAAAAA PROFE SOTO';
});

#Ruta que mande una vista con el nombre del visitante y salude desde la vista 
Route::get('/saludito/{nombre?}', function ($nombre="Profesor") {
    return view('example',['nombre' => $nombre]);
})->where('nombre', '[A-Za-z]+');

#RUTA DE SALUDO CON APELLIDO OPCIONAL
Route::get('/saludo/{nombre}/{lastname?}', function ($nombre,$lastname = "laraveeel") {
    return 'Holis '.$nombre.' '.$lastname;
})->where('nombre', '[A-Za-z]+','lastname', '[A-Za-z]+');

#RUTAS DE OPERACIONES BASICAS
#SUMA
Route::get('/suma/{n1}/{n2}', function ($n1,$n2) {
    return 'La suma es: '.$n1 + $n2;
})->where('n1', '[0-9]+','n2', '[0-9]+');

#RESTA
Route::get('/resta/{n1}/{n2}', function ($n1,$n2) {
    return 'La resta es: '.$n1 - $n2;
})->where('n1', '[0-9]+','n2', '[0-9]+');

#MULTIPLICACION
Route::get('/multi/{n1}/{n2}', function ($n1,$n2) {
    return 'La multiplicacion es: '.$n1 * $n2;
})->where('n1', '[0-9]+','n2', '[0-9]+');

#DIVISION
Route::get('/division/{n1}/{n2}', function ($n1,$n2) {
    if ($n2 != 0) {
        return 'La división es: ' . $n1 / $n2;
    } else {
        return 'NO se puede dividir entre 0';
    }
})->where('n1', '[0-9]+','n2', '[0-9]+');

#Ruta que mande a un controlador con el nombre del visitante y salude desde la vista
Route::get('/user/{nombre?}', [UserController::class, 'index'
])->where('nombre', '[A-Za-z]+');
