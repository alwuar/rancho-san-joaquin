@push('estilos')
    @vite(['resources/css/app.scss', 'resources/css/casas.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest>
    <header class="mt-5 mb-5">
        <div class="container">
            <div class="grid-casas">
                <div class="digital">
                    <img src="{{ asset('/img/casa3/1.png') }}" alt="">
                </div>
                <div class="impresos">
                    <img src="{{ asset('/img/casa3/2.png') }}" alt="">
                </div>
                <div class="frase">
                    <img src="{{ asset('/img/casa3/3.png') }}" alt="">
                </div>
                <div class="foto4">
                    <img src="{{ asset('/img/casa3/4.png') }}" alt="">
                </div>
                <div class="foto5">
                    <img src="{{ asset('/img/casa3/5.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>
    <section class="description">
        <div class="container">
            <h2>El Departamento del Campo</h2>
            <p class="py-4 pb-4">El Equilibrio Perfecto entre Comodidad y Practicidad.
                Ya sea que busques un refugio para concentrarte en tus proyectos o un punto de partida estratégico para
                explorar la ciudad, este espacio ha sido diseñado para maximizar cada metro cuadrado. Aquí, la
                funcionalidad se encuentra con la calidez para ofrecerte una estancia sin complicaciones.
            </p>
            <div class="amenidades">
                <h3>Una opción más privada y práctica.</h3><br>
                <ul class="py-4 pb-4"><b>Distribucion:</b>
                    <li>2 habitaciones completas</li>
                    <li>Cocina equipada</li>
                    <li>Sala cómoda</li>
                    <li>Espacios funcionales</li>
                </ul>
                <span>Ideal para estancias ejecutivas o visitas técnicas al rancho.</span>
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
                            <div class="col-lg-6 col-sm-12"
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
                <a class="btn btn-primary btn-lg" href="https://www.airbnb.mx/rooms/1403711728096970651?unique_share_id=0007da5e-46cf-47d4-8b85-787902ce82d6&viralityEntryPoint=1&s=76&source_impression_id=p3_1773858289_P3guXdWQq0iwtbFK" target="blank_">
                    <img src="{{ asset('/img/iconos/airbnb-brands-solid-full.svg') }}" width="30" alt=""> Reservar en Airbnb
                </a>
            </div>
        </div>
    </section>
    <x-ventacruzada>
        <x-slot name="vcruzada1">
            <a href="/experiencia-rancho/casa-en-la-playa">
                <div class="size">
                    <img src="{{ asset('/img/playa/3.png') }}" class="img-fluid" alt="">
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
            <a href="/experiencia-rancho/casa-principal">
                <div class="size">

                    <img src="{{ asset('/img/casa1/1.png') }}" class="img-fluid" alt="">
                </div>
                <h4>Casa principal</h4>
            </a>
        </x-slot>
    </x-ventacruzada>
</x-layouts.guest>
