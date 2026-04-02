@component('mail::message')
# 🐂 Nueva solicitud de catálogo

Has recibido los datos de un cliente interesado en el catálogo de ganado del rancho. Aquí tienes el detalle de la información:

@component('mail::table')
| Campo | Detalle |
| :--- | :--- |
| **Nombre:** | {{ $nombre }} |
| **Email:** | {{ $email }} |
| **Teléfono:** | {{ $telefono ?? 'No proporcionado' }} |
@endcomponent

### Mensaje o Comentarios:
{{ $mensaje }}

@component('mail::button', ['url' => 'mailto:' . $email])
Responder a este cliente
@endcomponent

Gracias,<br>
El sistema de tu Rancho
@endcomponent