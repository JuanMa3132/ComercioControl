<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VentaController;

Route::get('/', function () {
    return view('Bienvenida.index');
});

Route::middleware(['guest'])->group(function () {
    Route::view('/login', "Login.login")->name('login');
    Route::view('/Registrarse', "Login.register")->name('register');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/registro', [LoginController::class, 'register'])->name('registro');
});
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', "Pages.index")->name('dashboard');
    Route::view('/ventas', "Pages.venta.Interfaz-ventas")->name('ventas');
    Route::view('/clientes', "Pages.clientes")->name('clientes');
    Route::view('/estadisticas', "Pages.estadisticas")->name('estadisticas');
    Route::view('/proveedores', "Pages.proveedores")->name('proveedores');
    Route::view('/configuracion', "Pages.configuracion")->name('configuracion');
    Route::view('/soporte', "Pages.soporte")->name('soporte');
    Route::view('/editar-perfil', "Pages.editProfile")->name('editar-perfil');
    Route::post('/edit-profile', [ProfileController::class, 'updateProfile'])->name('Pages.edit-profile');
    Route::view('/form', "Pages.venta.form")->name('formulario');
    Route::resource('ventas', VentaController::class);
});

Route::get('css/estilos-personalizados/{filename}', function ($filename) {
    $path = public_path("css/Estilos-personalizados/{$filename}");

    if (file_exists($path)) {
        return response(file_get_contents($path), 200, [
            'Content-Type' => 'text/css',
        ]);
    }

    abort(404);
})->where('filename', '[\w\d\.-_]+\.css');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
