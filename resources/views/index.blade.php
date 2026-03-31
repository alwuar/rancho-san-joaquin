@push('estilos')
    @vite(['resources/css/app.scss', 'resources/css/index.scss', 'resources/js/app.js', 'resources/js/bg.js'])
@endpush
<x-layouts.guest>
    <header class="header" id="inicio">
        <video src="{{asset('video/drone.webm')}}" muted autoplay loop></video>
        <div class="overlay"></div>
        <div class="container contenido">
            <h1 class="titular">Pie de Cría Brangus Certificado en el Sureste de México <br>Rancho San Joaquín -
                Hecelchakán, Campeche</h1>
            <p>Genética Brangus desarrollada y adaptada al clima cálido y húmedo del sureste.</p>
            <div class="botones gap-3">
                <button href="" class="cta btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ver Sementales Disponibles</button>
                <a href="https://wa.me/529999909048" target="blank" class="cta btn btn-outline-warning" style="color: #fff;">Agendar visita privada</a>
            </div>
        </div>
    </header>
    <section class="nosotros">
        <div class="container">
            <div class="contenido">
                <h3 class="titular ">Ganado desarrollado en el Sureste de México.</h3>
                <p>En el sureste de México las condiciones son exigentes: calor intenso, humedad elevada y presión
                    parasitaria constante. El Brangus que se desarrolla en climas templados no siempre responde igual en
                    el
                    trópico. En Rancho San Joaquín criamos y desarrollamos Brangus en Campeche, bajo las condiciones
                    reales
                    del sureste.</p>
            </div>
        </div>
    </section>
    <section class="lote-fundador" id="ganado">
        <div class="container-fluid">
            <div class="titular text-center">
                <h3>Lote Fundador 2026</h3>
                <p>Sementales Brangus Certificados en VENTA</p>
            </div>
            <div class="grid-contenido">
                <div class="foto1">
                    <video loading="lazy" src="{{ asset('/video/vaca-pasto.webm') }}" autoplay muted playsinline loop webkit-playsinline alt="">
                </div>
                <div class="foto2">
                    <video loading="lazy" src="{{ asset('/video/reloj.webm') }}" autoplay muted playsinline loop webkit-playsinline alt="">
                </div>
                <div class="foto3">
                    <video loading="lazy" src="{{ asset('/video/vaca-primerplano.webm') }}" autoplay muted playsinline loop webkit-playsinline alt="">
                </div>
                <div class="foto4">
                    <video loading="lazy" src="{{ asset('/video/vaca1.webm') }}" autoplay muted playsinline loop webkit-playsinline alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row informacion">
                <div class="col-lg-6 col-md-12">
                    <div class="cta">
                        <p>Nuestro primer lote fundador incluye  sementales Brangus certificados por la Asociación
                            Mexicana
                            de Criadores de Brangus.
                        </p>
                        <div class="botones">
                            <button href="" class="cta btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> Descargar catálogo</button>
                            <a href="https://wa.me/529999909048" target="blank" class="cta btn btn-outline-warning">Whatsapp directo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <ul>
                        <li>✔ Sistema NDVI </li>
                        <li>✔ Sistema argentino Vela, que regula el pastoreo de una forma eficiente.</li>
                        <li>✔ Reloj australiano para el conteo sin estrés.</li>
                        <li>✔ Alimentación propia controlada</li>
                        <li>✔ Libre pastoreo racional</li>
                        <li>✔ Manejo higiénico diario</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="datos-duros">
        <div class="container">
            <div class="contenido text-center">
                <h2 class="text-center">Brangus Adaptado al Clima del Sureste de México</h2>
                <small>La mejor combinación de resistencia, productividad y genética confiable para el trópico mexicano.</small>
            </div>
            <div class="grid-brangus">
                <div class="foto1" style="background-image: url({{asset('/img/vaca1_1.png')}}); justify-content:center; align-items: center; background-size:cover;  text-align-center; display:flex; flex-direction:column; ">
                    <div class="foto1__contenido">
                        <h2>Brahman</h2>
                        <p>Aporta resistencia al calor, rusticidad y adaptación al trópico</p>
                    </div>
                </div>
                <div class="foto2" style="background-image: url({{asset('/img/vaca2_1.png')}}); justify-content:center; align-items: center; background-size:cover;  text-align-center; display:flex; flex-direction:column; ">
                    <div class="foto2__contenido">
                        <h2>Angus</h2>
                        <p>Aporta calidad de carne, precocidad y genética productiva</p>
                    </div>
                   
                </div>
                <div class="foto3">
                    <div class="foto3__contenido">
                        <p>Esta combinación logra un equilibrio perfecto entre calidad y adaptación, lo que la convierte en una de las mejores opciones para la ganadería en climas cálidos como el sureste de México.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="sistema">
            <h3 class="text-center">Sistema Tecnificado</h3>
        </div>
        <div class="mapeo text-center py-5" style="min-height: 600px">
            <iframe width="80%" height="455" src="https://www.youtube.com/embed/kO3mpz75I8Q?si=FsueVOBV-DEDB2Mc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        </div>
    </section>
    <x-faqs></x-faqs>
    
</x-layouts.guest>
