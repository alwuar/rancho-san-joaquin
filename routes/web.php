<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\Form; 

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


Route::post('/contacto', function(Request $request) {
    
    // 1. Validamos los datos
    $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email',
        'mensaje' => 'required',
        'g-recaptcha-response' => 'required'
    ]);

    // 2. Verificamos el captcha con Google
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => '6Lc89Z8sAAAAALXnUzHVLii8OKZy41Tj68OnxKRj', 
        'response' => $request->input('g-recaptcha-response'),
    ]);

    $captchaResult = $response->json();

    if (!$captchaResult['success'] || $captchaResult['score'] < 0.5) {
        // Si falla el captcha, lo regresamos con un error visual
        return redirect()->back()->with('error', 'La validación de seguridad falló. Inténtalo de nuevo.');
    }

    // 3. Enviamos el correo
    Mail::to(['ab@agenciavandu.com', 'ranchosanjoaquinmx@gmail.com'])->send(new Form(
        $request->nombre, 
        $request->email, 
        $request->telefono, 
        $request->mensaje
    ));
    
    // 4. EL PLAN INFAILBLE: Forzamos la descarga directa del archivo PDF
    $rutaArchivo = public_path('documents/catalogo-ganado-en-venta.pdf');
    
    return response()->download($rutaArchivo);
    
})->name('contacto.enviar');

Route::post('/enviar-contacto-directo', function(Request $request) {
    
    // 1. Validamos los datos
    $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email',
        'mensaje' => 'required',
        'g-recaptcha-response' => 'required'
    ]);

    // 2. Verificamos el captcha con Google
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => '6Lc89Z8sAAAAALXnUzHVLii8OKZy41Tj68OnxKRj', 
        'response' => $request->input('g-recaptcha-response'),
    ]);

    $captchaResult = $response->json();

    if (!$captchaResult['success'] || $captchaResult['score'] < 0.5) {
        return redirect()->back()
            ->with('error', 'La validación de seguridad falló.')
            ->withInput();
    }

    // 3. Enviamos el correo (reutilizamos tu Mailable Form)
    Mail::to(['contacto@ranchosanjoaquin.com.mx', 'ranchosanjoaquinmx@gmail.com'])->send(new Form(
        $request->nombre, 
        $request->email, 
        $request->telefono, 
        $request->mensaje
    ));
    
    // 4. Redireccionamos de vuelta con mensaje de éxito
    return redirect()->back()->with('success', '¡Tu mensaje ha sido enviado con éxito! Nos pondremos en contacto contigo pronto.');
    
})->name('contacto.directo.enviar');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
