<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoRecibido;

class ContactoController extends Controller
{
   public function procesar(Request $request)
{
    // 1. Validar campos (Asegúrate de que coincidan con el 'name' del HTML)
    $request->validate([
        'nombre'   => 'required|string|max:100',
        'email'    => 'required|email',
        'empresa'  => 'nullable|string|max:100', // Agregamos empresa
        'telefono' => 'nullable',
        'mensaje'  => 'required|min:10',
        'g-recaptcha-response' => 'required'
    ]);

    // 2. Verificar reCAPTCHA v3
    // Usamos config() en lugar de env() directamente (es una buena práctica en Laravel)
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret'   => config('services.recaptcha.secret_key'), 
        'response' => $request->input('g-recaptcha-response'),
        'remoteip' => $request->ip(),
    ]);

    $resultado = $response->json();

    if (!$resultado['success'] || $resultado['score'] < 0.5) {
        return back()->withErrors(['captcha' => 'Error de seguridad reCAPTCHA. Inténtalo de nuevo.'])
                     ->withInput(); // Mantiene los datos que el usuario ya escribió
    }

    // 3. Datos y Destinatarios
    // Incluimos 'empresa' para que el Mailable pueda mostrarlo
    $datos = $request->only('nombre', 'email', 'empresa', 'telefono', 'mensaje');
    $destinatarios = ['ddrproyectos08@gmail.com', 'proyectos@ddrproyectos.mx','ab@agenciavandu.com'];

    // 4. Envío
    try {
        Mail::to($destinatarios)->send(new ContactoRecibido($datos));
    } catch (\Exception $e) {
        // Log::error($e->getMessage()); // Descomenta esto si quieres ver el error real en storage/logs/laravel.log
        return back()->with('error', 'Error técnico al enviar el correo: ' . $e->getMessage());
    }

    return back()->with('success', '¡Tu mensaje ha sido enviado con éxito!');
} // Aquí cierra la función
} // Aquí cierra la clase