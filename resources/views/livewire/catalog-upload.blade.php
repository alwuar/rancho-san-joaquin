<div class="p-6 bg-white border border-gray-200 shadow-sm sm:rounded-lg">
    <div class="mb-4 text-xl font-semibold text-gray-800">
        Actualizar Catálogo de Ganado
    </div>
    
    <p class="mb-6 text-sm text-gray-600">
        Sube un nuevo archivo PDF para reemplazar el catálogo actual. Este archivo es el que se descarga automáticamente cuando los usuarios envían un formulario en la sección de contacto.
    </p>

    @if (session()->has('message'))
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg md:p-5 bg-green-50" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            <span class="sr-only">Success</span>
            <div>
              <span class="font-medium">Éxito!</span> {{ session('message') }}
            </div>
        </div>
    @endif

    <form wire:submit="save">
        <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="catalogPdf">
                Selecciona archivo (Solo PDF, Max 20MB)
            </label>
            <div class="flex items-center justify-center w-full">
                <label for="catalogPdf" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Haz clic para subir</span> o arrastra y suelta el archivo</p>
                        <p class="text-xs text-gray-500">PDF (Max. 20MB)</p>
                    </div>
                    <input id="catalogPdf" wire:model="catalogPdf" type="file" class="hidden" accept="application/pdf" />
                </label>
            </div>
            
            <!-- Vista previa del archivo seleccionado -->
            @if ($catalogPdf)
                <div class="p-3 mt-3 text-sm text-blue-700 align-middle bg-blue-100 rounded-lg flex gap-2 items-center">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Z" clip-rule="evenodd"/>
                    </svg>
                    Archivo listo para subir
                </div>
            @endif

            <div wire:loading wire:target="catalogPdf" class="mt-2 text-sm text-blue-500">
                Analizando archivo...
            </div>
            
            @error('catalogPdf') 
                <span class="block mt-2 text-sm text-red-600">{{ $message }}</span> 
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-4 {{ !$catalogPdf ? 'bg-gray-400 opacity-50 cursor-not-allowed hover:bg-gray-400' : '' }}" 
                wire:loading.attr="disabled" 
                wire:target="save, catalogPdf"
                :disabled="!$catalogPdf">
                <span wire:loading.remove wire:target="save">Subir Nuevo Catálogo</span>
                <span wire:loading wire:target="save">Subiendo...</span>
            </x-button>
        </div>
    </form>
</div>
