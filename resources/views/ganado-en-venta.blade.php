@push('estilos')
    @vite(['resources/css/app.scss', 'resources/css/nosotros.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest title="Quienes somos" style="background-image: url({{asset('img/')}})">
    <header class="hero-nosotros">
        <div class="container">
            <div class="video">
                <iframe width="80%" height="415"
                    src="https://www.youtube.com/embed/kO3mpz75I8Q?autoplay=1&mute=1&playlist=kO3mpz75I8Q&loop=1&rel=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>

            </div>
            <h1>Sementales Brangus Certificados en Venta</h1>
            <p>Genética Brangus de alta calidad, seleccionada por su rusticidad y ganancia de peso, lista para mejorar
                su hato.</p>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Descargar Catálogo</button>
        </div>
    </header>
    <section class="quienes-somos" id="quienesosmos">
        <div class="container">
            <div class="quienes-somos__info">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div>
                            <h3>Nuestra genética Brangus</h3>
                            <p>Nuestra selección genética se fundamenta en el equilibrio perfecto entre la rusticidad del Cebú y la calidad cárnica del Angu, trabajamos con líneas de sangre probadas que garantizan una descendencia funcional, con excelentes DEPs (Diferencias Esperadas de Progenie) en peso al destete y facilidad de parto. <br><br>
                                Cada ejemplar de nuestro catálogo es el resultado de un riguroso proceso de selección fenotípica y genotípica, asegurando sementales con alta capacidad de monta y hembras con una habilidad materna superior. Al elegir nuestra genética Brangus, usted invierte en precocidad sexual y una conformación carnicera que eleva los estándares de cualquier hato comercial.
                            </p>
                        </div>
                        
                        
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <iframe width="100%" height="359"
                            src="https://www.youtube.com/embed/kO3mpz75I8Q?autoplay=1&mute=1&playlist=kO3mpz75I8Q&loop=1&rel=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="quienes-somos__lista">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="{{ asset('/img/ganado-brangus.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 m-auto p-4">
                        <h4>Nuestros  sementales fundadores han sido desarrollados en Campeche, bajo condiciones reales del trópico.</h4>

                        <li> Certificado</li>
                        <li> Con evaluación reproductiva</li>
                        <li>
                            Con trazabilidad digital
                        </li>
                        <li>
                             Adaptado al clima cálido y húmedo
                        </li>
                        </ul>
                        <p>Si algún animal no cumple estándar de pie de cría, no se vende como reproductor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="formulario">
        <div class="container text-center">
            <p class="cta">
                En Rancho San Joaquín, nuestro programa genético se enfoca en producir animales funcionales para el ganadero comercial. <br class="d-none d-sm-none d-md-block d-lg-block"> Descargue nuestro catálogo para conocer los sementales y lotes de hembras disponibles este mes.
            </p>
           <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Descargar Catálogo actualizado</button>
        </div>
    </section>

  
    <section class="diferentes" style="min-height: 600px; display:flex; flex-direction:column; justify-content:center; align-items:center;">
        <div class="container text-center">

            <p class="mb-5"><b>Ubicados en Hecelchakán, Campeche. </b><br>
                Producción para todo el sureste de México.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.133955075487!2d-90.10809825559913!3d20.179673533107795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f87bd759ab0f05%3A0x667c5626c8298c67!2sRancho%20San%20Joaquin!5e1!3m2!1ses!2smx!4v1773855751049!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    @push('js')
        <script>
            // Esto ayuda a que el navegador "despierte" el iframe
            window.onload = function() {
                var iframe = document.querySelector('iframe');
                var src = iframe.src;
                iframe.src = src; // Re-cargar el src al terminar de cargar la página
            };
        </script>
    @endpush

</x-layouts.guest>
