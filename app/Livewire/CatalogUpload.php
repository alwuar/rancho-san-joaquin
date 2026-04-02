<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class CatalogUpload extends Component
{
    use WithFileUploads;

    public $catalogPdf;

    public function save()
    {
        $this->validate([
            'catalogPdf' => 'required|mimes:pdf|max:20480', // 20MB Max
        ], [
            'catalogPdf.required' => 'Debes seleccionar un archivo PDF.',
            'catalogPdf.mimes' => 'El archivo debe ser un PDF válido.',
            'catalogPdf.max' => 'El PDF no debe exceder los 20MB.',
        ]);

        // Aseguramos que el directorio exista
        if (!\Illuminate\Support\Facades\File::exists(public_path('documents'))) {
            \Illuminate\Support\Facades\File::makeDirectory(public_path('documents'), 0755, true);
        }

        // Eliminamos el archivo previo si existe para evitar conflictos en Windows
        if (\Illuminate\Support\Facades\File::exists(public_path('documents/catalogo-ganado-en-venta.pdf'))) {
            \Illuminate\Support\Facades\File::delete(public_path('documents/catalogo-ganado-en-venta.pdf'));
        }

        // Copiamos el archivo temporal a la ruta final
        \Illuminate\Support\Facades\File::copy(
            $this->catalogPdf->getRealPath(),
            public_path('documents/catalogo-ganado-en-venta.pdf')
        );

        $this->reset('catalogPdf');

        session()->flash('message', '¡Catálogo actualizado exitosamente!');
    }

    public function render()
    {
        return view('livewire.catalog-upload');
    }
}
