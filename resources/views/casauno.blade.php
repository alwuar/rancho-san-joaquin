@push('estilos')
    @vite(['resources/css/app.scss', 'resources/css/casas.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest>
    <header class="mt-5 mb-5">
        <div class="container">
            <div class="grid-casas">
                <div class="digital">
                    <img src="{{ asset('/img/casa1/1.png') }}" alt="">
                </div>
                <div class="impresos">
                    <img src="{{ asset('/img/casa1/2.png') }}" alt="">
                </div>
                <div class="frase">
                    <img src="{{ asset('/img/casa1/3.jpg') }}" alt="">
                </div>
                <div class="foto4">
                    <img src="{{ asset('/img/casa1/4.png') }}" alt="">
                </div>
                <div class="foto5">
                    <img src="{{ asset('/img/casa1/5.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>
    <section class="description">
        <div class="container">
            <h2>La casa principal</h2>
            <p class="py-4 pb-4">Descubre el equilibrio perfecto entre elegancia y serenidad absoluta en nuestra
                Casa Principal.
                Diseñada para quienes buscan una desconexión auténtica, esta propiedad te envuelve en una arquitectura
                campestre llena de luz, techos altos y espacios ventilados que invitan al descanso.
                Desde el primer café en la terraza hasta las cenas con vista panorámica al rancho, cada rincón está
                pensado para crear memorias inolvidables. Disfruta de la privacidad total que ofrece su distribución
                inteligente, ideal para familias que desean vivir la experiencia rural sin renunciar a la comodidad
                moderna. Es más que un alojamiento; es tu hogar privado frente a la naturaleza.
            </p>
            <div class="amenidades">
                <h3>Elegancia rústica con vista al campo</h3><br>
                <span>Nuestra Casa Principal combina comodidad, privacidad y arquitectura campestre.</span>
                <ul class="py-4 pb-4"><b>Distribucion:</b>
                    <li> Planta baja con habitación principal y baño completo privado</li>
                    <li>Cocina totalmente equipada</li>
                    <li>Sala amplia</li>
                    <li>Comedor con vista al rancho</li>
                    <li>Terraza exterior</li>
                </ul>
                <ul class=" pb-4">
                    <b>En la planta alta:</b>
                    <li>2 habitaciones completas</li>
                    <li>Espacios amplios y ventilados</li>
                    <li>Vista panorámica al paisaje natural</li>
                </ul>
                <span>Ideal para familias que desean conocer el rancho y vivir la experiencia completa.</span>
            </div>
            <div class="areas-comunes py-5 pb-5">
                <h3>Áreas comunes</h3>
                <div class="row py-5">
                    <div class="col-lg-6 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12"
                                style="display: flex; flex-direction: column; gap: 15px; list-style: none;">
                                <li style="display: flex; flex-direction:row; gap: 10px;">
                                    <img src="{{ asset('/img/ventana.svg') }}" width="30" alt="">Alberca
                                    infinita
                                </li>
                                <li style="display: flex; flex-direction:row; gap: 10px;">
                                    <img src="{{ asset('/img/ventana.svg') }}" width="30" alt="">Árboles
                                    frutales
                                </li>
                                <li style="display: flex; flex-direction:row; gap: 10px;">
                                    <img src="{{ asset('/img/wifi.svg') }}" width="30" alt="">Wifi
                                </li>
                                <li style="display: flex; flex-direction:row; gap: 10px;">
                                    <img src="{{ asset('/img/comida.svg') }}" width="30" alt="">Horno de
                                    leña tradicional
                                </li>
                                <li style="display: flex; flex-direction:row; gap: 10px;">
                                    <img src="{{ asset('/img/ventana.svg') }}" width="30" alt="">Espacios
                                    abiertos para caminatas
                                </li>

                            </div>
                            <div class="col-lg-6 col-sm-12 pt-3"
                                style="display: flex; flex-direction: column; gap: 15px; list-style: none;">
                                <li style="display: flex; flex-direction:row; gap: 10px;">
                                    <img src="{{ asset('/img/comida.svg') }}" width="30" alt="">Cenas bajo
                                    las estrellas
                                </li>
                                <li style="display: flex; flex-direction:row; gap: 10px;">
                                    <img src="{{ asset('/img/ventana.svg') }}" width="30" alt="">Silencio
                                    natural
                                </li>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="cta text-center" style="height: 150px; display:flex; flex-direction: column; justify-content:center; align-items: center;">
                <a class="btn btn-primary btn-lg" href="https://www.airbnb.mx/rooms/1403669619336700457?unique_share_id=79ceadd0-1208-450b-b61a-16a8494aa37f&viralityEntryPoint=1&s=76&source_impression_id=p3_1773858296_P3WtfR1D3BG2D6NQ" target="blank_">
                   <img src="{{ asset('/img/iconos/airbnb-brands-solid-full.svg') }}" width="30" alt=""> Reservar en Airbnb
                </a>
            </div>
        </div>
    </section>

    <x-ventacruzada>
        <x-slot name="vcruzada1">
            <a href="/experiencia-rancho/casa-en-la-playa">
                <div class="size">

                    <img src="{{ asset('/img/playa/6.jpeg') }}" class="img-fluid" alt="">
                </div>
                <h4>Casa en la playa</h4>
            </a>
        </x-slot>
        <x-slot name="vcruzada2">
            <a href="/experiencia-rancho/villa-capilla">
                <div class="size">

                    <img src="{{ asset('/img/casa2/1.png') }}" class="img-fluid" alt="">
                </div>
                <h4>Villa Capilla</h4>
            </a>
        </x-slot>

        <x-slot name="vcruzada3">
            <a href="/experiencia-rancho/el-departamento-de-campo">
                <div class="size">

                    <img src="{{ asset('/img/casa3/1.png') }}" class="img-fluid" alt="">
                </div>
                <h4>El departamento de campo</h4>
            </a>
        </x-slot>
    </x-ventacruzada>
</x-layouts.guest>
