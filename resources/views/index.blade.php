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
                <a href="" class="cta btn btn-warning"> Ver Sementales Disponibles</a>
                <a href="" class="cta btn btn-outline-warning" style="color: #fff;">Agendar visita privada</a>
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
                            <a href="" class="cta btn btn-warning"> Descargar catálogo</a>
                            <a href="" class="cta btn btn-outline-warning">Whatsapp directo</a>
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
                <small>El Brangus es una raza sintética compuesta por:</small>
            </div>
            <div class="grid-brangus">
                <div class="foto1">
                    <img loading="lazy" src="{{ asset('/img/vaca1.png') }}" alt="">
                </div>
                <div class="foto2">
                    <img loading="lazy" src="{{ asset('/img/vaca2.png') }}" alt="">
                </div>
                <div class="foto3">
                    <div class="foto3__contenido">
                        <p>Del Angus hereda calidad de carne, fertilidad y precocidad. Del Brahman hereda adaptación al calor, resistencia a humedad y rusticidad.</p>
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
    <section class="faq" id="faq">
        <div class="container">
            <h3 class="text-center pb-5">Preguntas frecuentes</h3>
            <div class="contenido">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    {{-- Preguntas frecuentes --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                ¿Qué es el Brangus?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                ¿Cuál es su origen y composición genética?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                ¿Qué significa que el brangus sea una raza sintética?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would
                                look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsefour" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Información de Brangus en Mérida y la península de yucatán
                            </button>
                        </h2>
                        <div id="flush-collapsefour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would
                                look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingfive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsefive" aria-expanded="false"
                                aria-controls="flush-collapsefive">
                                ¿Son criadores Brangus de Registro?
                            </button>
                        </h2>
                        <div id="flush-collapsefive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would
                                look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingsix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsesix" aria-expanded="false"
                                aria-controls="flush-collapsesix">
                                ¿Cuáles son los beneficios productivos reales?
                            </button>
                        </h2>
                        <div id="flush-collapsesix" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would
                                look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</x-layouts.guest>
