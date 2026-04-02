@push('estilos')
    @vite(['resources/css/app.scss', 'resources/css/casas.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest>
    <header class="mt-5 mb-5">
        <div class="container">
            <div class="grid-casas">
                <div class="digital">
                    <img src="{{ asset('/img/playa/1.png') }}" alt="">
                </div>
                <div class="impresos">
                    <img src="{{ asset('/img/playa/2.png') }}" alt="">
                </div>
                <div class="frase">
                    <img src="{{ asset('/img/playa/3.png') }}" alt="">
                </div>
                <div class="foto4">
                    <img src="{{ asset('/img/playa/4.png') }}" alt="">
                </div>
                <div class="foto5">
                    <img src="{{ asset('/img/playa/5.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>
    <section class="description">
        <div class="container">
            <h2>Casa Exclusiva frente al Mar: Alberca Privada y Lujo</h2>
            <span>· 6 Habitaciones · Vista directa al mar · Espacios amplios y elegantes</span>
            <p class="py-4 pb-4">Disfruta de la máxima privacidad y elegancia en nuestra espectacular villa de 6 amplias
                habitaciones, diseñada especialmente para quienes buscan un equilibrio entre sofisticación y comodidad.
                Ya sea que estés planeando un retiro corporativo de alto nivel o una reunión privada con amigos y
                familia, este es el escenario donde los sueños se encuentran con el horizonte.

                <h5>Por qué elegirnos para tu próximo evento o retiro:</h5>
                Entendemos que la productividad y la conexión requieren el entorno adecuado. Nuestra propiedad ofrece la
                tranquilidad necesaria para sesiones de trabajo enfocadas o cenas de celebración bajo las estrellas,
                siempre con el sonido de las olas de fondo.

                Nota: La ubicación estratégica y el diseño de la villa aseguran una experiencia de lujo relajado que
                difícilmente encontrarás en otro lugar.
            </p>
            <div class="amenidades mt-5">
                <h3>El Refugio Perfecto para Retiros y Reuniones Inolvidables</h3><br>

                <ul class="py-4 pb-4"><b>Distribucion:</b>
                    <li> 6 habitaciones completas</li>
                    <li>Alberca privada</li>
                    <li>Vista directa al mar</li>
                    <li>Espacios amplios y elegantes</li>
                    <li>Ideal para reuniones privadas o retiros corporativos</li>
                </ul>

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
                                    frente al mar
                                </li>
                                <li style="display: flex; flex-direction:row; gap: 10px;">
                                    <img src="{{ asset('/img/wifi.svg') }}" width="30" alt="">Wifi
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
                <a class="btn btn-primary btn-lg" href="https://www.airbnb.mx/rooms/18104728?unique_share_id=c5739155-ff75-4405-ac25-b8fe699c7c9b&viralityEntryPoint=1&s=76&source_impression_id=p3_1773858387_P3nGSJTN3YEbsiBv" target="blank_">
                   <img src="{{ asset('/img/iconos/airbnb-brands-solid-full.svg') }}" width="30" alt=""> Reservar en Airbnb
                </a>
            </div>
        </div>
    </section>
    <x-ventacruzada>
        <x-slot name="vcruzada1">
            <a href="/experiencia-rancho/casa-principal">
                <div class="size">
                    <img src="{{ asset('/img/casa1/1.png') }}" alt="">
                </div>
                <h4>Casa Principal</h4>
            </a>
        </x-slot>
        <x-slot name="vcruzada2">
            <a href="/experiencia-rancho/villa-capilla">
                <div class="size">
                    <img src="{{ asset('/img/casa2/1.png') }}" alt="">
                </div>
                <h4>Villa Capilla</h4>
            </a>
        </x-slot>

        <x-slot name="vcruzada3">
            <a href="/experiencia-rancho/el-departamento-de-campo">
                <div class="size">
                    <img src="{{ asset('/img/casa3/1.png') }}" alt="">
                </div>
                <h4>El departamento de campo</h4>
            </a>
        </x-slot>
    </x-ventacruzada>
</x-layouts.guest>
