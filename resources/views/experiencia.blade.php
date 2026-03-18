@push('estilos')
    @vite(['resources/css/app.scss', 'resources/css/experiencia.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest>
    <header></header>
    <section class="description">
        <div class="container">
            <p>Descubre el equilibrio perfecto entre elegancia rústica y serenidad absoluta en nuestra Casa Principal.
                Diseñada para quienes buscan una desconexión auténtica, esta propiedad te envuelve en una arquitectura
                campestre llena de luz, techos altos y espacios ventilados que invitan al descanso.
                Desde el primer café en la terraza hasta las cenas con vista panorámica al rancho, cada rincón está
                pensado para crear memorias inolvidables. Disfruta de la privacidad total que ofrece su distribución
                inteligente, ideal para familias que desean vivir la experiencia rural sin renunciar a la comodidad
                moderna. Es más que un alojamiento; es tu hogar privado frente a la naturaleza.
            </p>
            <h1></h1>
        </div>
    </section>
</x-layouts.guest>
