<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactoRecibido extends Mailable
{
    use Queueable, SerializesModels;

    public $datos;


    public function __construct(array $datos)
    {
        $this->datos = $datos;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            // Usamos el nombre que viene en el formulario para el asunto
            subject: 'Nuevo mensaje de: ' . $this->datos['nombre'],
        );
    }


    public function content(): Content
    {
        return new Content(
            // Asegúrate de que el archivo exista en resources/views/emails/contacto.blade.php
            view: 'emails.contacto', 
        );
    }

    public function attachments(): array
    {
        return [];
    }
}