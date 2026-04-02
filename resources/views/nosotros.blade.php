@push('estilos')
    @vite(['resources/css/app.scss', 'resources/css/nosotros.scss', 'resources/js/app.js'])
@endpush
<x-layouts.guest title="Quienes somos">
    <header class="hero-nosotros">
        <div class="container">
            <div class="video">
                <div class="ratio ratio-16x9 mx-auto" style="max-width: 700px; width: 80%;">
    <iframe src="https://www.youtube.com/embed/M_s3EWI_g38?autoplay=1&mute=1&si=e5EkeO405zg0HzlL"
            title="YouTube video player" 
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen>
    </iframe>
</div>

            </div>
            <h1>Rancho San Joaquín</h1>
            <p>Brangus desarrollado con visión, orden y precisión</p>
        </div>
    </header>
    <section class="quienes-somos" id="quienesosmos">
        <div class="container">
            <div class="quienes-somos__info">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h3>Nuestra historia</h3>
                        <p>Rancho San Joaquín nace del sueño de una familia empresaria yucateca con una convicción
                            clara:
                            hacer las cosas bien. <br> <br>
                            Después de décadas construyendo empresas bajo principios de orden, disciplina y visión
                            estratégica, decidimos aplicar esa misma filosofía a la ganadería.
                            No para ser los más grandes. Sino para ser los más consistentes. <br><br>
                            Lo que comenzó como un proyecto de vida se convirtió en un sistema de producción
                            tecnificado, medible y sustentable, enfocado en desarrollar genética Brangus adaptada al
                            trópico del sureste de México. <br><br>
                            Aquí no se improvisa.
                            Aquí se planea, se mide y se ejecuta.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <iframe width="100%" height="359"
                            src="https://www.youtube.com/embed/EIaa7pSBRYU?autoplay=1&mute=1"
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
                        <img src="{{ asset('/img/foto-aerea-rancho-san-joaquin.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 m-auto p-4">
                        <h5>Somos criadores de Brangus de registro, miembros activos de la Asociación Mexicana de
                            Criadores de Brangus. </h5>
                        <p>
                            Desarrollamos pie de cría certificado bajo un modelo de ganadería de precisión que integra:
                        </p>
                        <li>Pastoreo racional tecnificado</li>
                        <li>Sistema argentino Vela de rotación</li>
                        <li>
                            Monitoreo NDVI con dron multiespectral MAVIC
                        </li>
                        <li>
                            Reloj australiano para mejor control de la manga.
                        </li>
                        <li>Fábrica automatizada de alimentos</li>
                        <li>Sistema hidráulico con 354 cañones de riego</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="marca">
        <div class="container">
            <div class="marca__filosofia">
                <h3>Nuestra filosofía</h3>
                <p>Orden. Disciplina. Después trabajo.
                    Creemos que la calidad no se peina en ferias.
                    Se produce todos los días, cada jornada inicia con planeación y termina con evaluación, cada potrero
                    se mide, cada animal se registra, cada decisión se fundamenta en datos.
                    <span>La ganadería puede ser tradicional o puede ser profesional, nosotros elegimos
                        profesional.</span>
                </p>
            </div>
            <div class="marca__misionvision">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h4>Nuestra misión</h4>
                        <p>Desarrollar y comercializar pie de cría Brangus certificado, adaptado al trópico del sureste
                            mexicano, bajo un modelo de producción sustentable, tecnificado y medible que garantice
                            calidad genética real para nuestros clientes.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h4>Nuestra visión</h4>
                        <p>Consolidarnos como uno de los referentes en producción de Brangus de alta calidad en el
                            sureste de México, alcanzando para 2028 una producción anual de 220 cabezas certificadas,
                            manteniendo estándares superiores de genética, adaptación y trazabilidad. <br><br>


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="valores mt-5 mb-t">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 m-auto">
                    <h3>Nuestros valores</h3>
                    <ul>
                        <li>Honestidad genética,
                            Si un ejemplar no cumple estándar de pie de cría, <br
                                class="d-none d-sm-none d-md-block d-lg-block"> no se vende como reproductor.
                        </li>
                        <li> Disciplina operativa
                            Todo se mide. Todo se documenta.</li>
                        <li>
                            Bienestar animal,
                            Ganado manso, libre de estrés y correctamente alimentado.
                        </li>
                        <li>
                            Sustentabilidad,
                            Producción propia de alimento y fertilización natural del suelo.

                        </li>
                        <li> Innovación responsable,
                            Tecnología aplicada con propósito, no por moda.
                        </li>
                        <li>Transparencia,
                            El rancho está abierto a quienes desean conocer cómo producimos.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12">
                    <iframe width="100%" height="359"
                        src="https://www.youtube.com/embed/OH3bvQzs2J4?autoplay=1&mute=1" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="diferentes mt-5 mb-5">
        <div class="container text-center">
            <h3>Nuestro compromiso</h3>
            <p>Nuestro compromiso es vender pie de cría Brangus certificado al mercado mexicano. <br
                    class="d-none d-sm-none d-md-block">
                Si un ejemplar no alcanza el estándar reproductivo, se destina a producción de carne de alta calidad,
                <br class="d-none d-sm-none d-md-block">
                pero nunca se comercializa como reproductor.
                La confianza se construye con hechos, no con palabras.
            </p>
            <p>Ubicados en: Hecelchakán, Campeche. <br>
                Producción para todo el sureste de México.</p>
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
