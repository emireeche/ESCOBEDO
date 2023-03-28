<?php
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LlantaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\RodadaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\TipousuarioController;


use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::resource('empleado', EmpleadoController::class);
Route::resource('llanta', LlantaController::class);
Route::resource('marca', MarcaController::class);
Route::resource('medida', MedidaController::class);
Route::resource('rodada', RodadaController::class);
Route::resource('servicio', ServicioController::class);
Route::resource('tipousuario', TipoUsuarioController::class);
Route::resource('usuario', UsuarioController::class);
Route::resource('vehiculo', VehiculoController::class);







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
