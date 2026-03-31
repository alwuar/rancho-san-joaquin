<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/experiencia-rancho', function () {
    return view('experiencia');
});
Route::get('/experiencia-rancho/casa-principal', function () {
    return view('casauno');
});
Route::get('/experiencia-rancho/villa-capilla', function () {
    return view('casados');
});
Route::get('/experiencia-rancho/el-departamento-de-campo', function () {
    return view('casatres');
});
Route::get('/experiencia-rancho/casa-en-la-playa', function () {
    return view('casaplaya');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/ganado-en-venta', function () {
    return view('ganado-en-venta');
});
// Bloqueamos el acceso directo por URL (GET)
Route::get('/solicitudes', function () {
    return view('contacto'); 
});
Route::post('/contacto', [ContactoController::class, 'procesar'])->name('contacto.enviar');

Route::post('/send-mail',function(Request $request){
    Mail::to('ab@agenciavandu.com')->send(new Form($request->nombre,$request->empresa,$request->telefono));
    return response()->download(public_path('documents/public/documents/catalogo-ganado-en-venta.pdf'));
})->name('send.form');

