<section class="footer mt-5" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 contenido m-auto">
                <div class="elemento">
                    <h5>Dirección</h5>
                    <p><a href="https://maps.app.goo.gl/Cc2HYr14wFx2TsoN8">Hecelchakán, Campeche</a></p>
                </div>
                <div class="elemento">
                    <h5>Email</h5>
                    <p><a href="mailto:administracion@ranchosanjoaquin.com.mx">
                            administracion@ranchosanjoaquin.com.mx</a></p>
                </div>
                <div class="elemento">
                    <h5>Teléfono</h5>
                    <p><a href="tel:9999909048">+52 (999) 990 9048</a></p>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 formulario">
                @if (session('success'))
                    <div class="alert alert-success" style="color: #000">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form id="contactoDirectoForm" action="{{ route('contacto.directo.enviar') }}" method="POST">
                    @csrf
                    <input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Tu nombre"
                            value="{{ old('nombre') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="nombre@empresa.com" value="{{ old('email') }}" required>

                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="tel" name="telefono" class="form-control" placeholder="Número de teléfono"
                            value="{{ old('telefono') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mensaje</label>
                        <textarea name="mensaje" class="form-control" rows="3" required>{{ old('mensaje') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-warning" id="btnEnviarDirecto">
                        <span id="spinnerDirecto" class="spinner-border spinner-border-sm d-none" role="status"
                            aria-hidden="true"></span>
                        <span id="textDirecto">Enviar mensaje</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="footernav">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-12">
                <ul class="navbar-nav m-auto justify-content-center d-flex flex-row flex-wrap text-center">

                    <li class="nav-item active col-6 col-lg-auto">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" href="/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" href="#">Ganado en venta</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" href="/experiencia-rancho/casa-principal">Casa uno</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" href="/experiencia-rancho/villa-capilla">Villa Capilla</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" href="/experiencia-rancho/el-departamento-de-campo">El departamento de
                            campo</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" href="/experiencia-rancho/casa-en-la-playa">Casa en la playa</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link" href="/solicitudes">Contacto</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="redes ">
            <div class="enlaces">
                <a href="https://www.facebook.com/ranchosanjoaquinmx" target="blank_">
                    <img src="{{ asset('/img/iconos/facebook-brands-solid-full.svg') }}" width="30" alt="">
                </a>
                <a href="http://www.tiktok.com/@rancho_sanjoaquin" target="blank_">
                    <img src="{{ asset('/img/iconos/tiktok-brands-solid-full.svg') }}" width="30" alt="">
                </a>
                <a href="https://www.instagram.com/ranchosanjoaquinmx/" target="blank_">
                    <img src="{{ asset('/img/iconos/square-instagram-brands-solid-full.svg') }}" width="30"
                        alt="">
                </a>
                <a href="https://www.youtube.com/@RanchoSanJoaqu%C3%ADn" target="blank_">
                    <img src="{{ asset('/img/iconos/youtube-brands-solid-full.svg') }}" width="30"
                        alt="">
                </a>
                <a href="https://es-l.airbnb.com/rooms/1403669619336700457?source_impression_id=p3_1774030314_P3TBbBssiToBDPkg"
                    target="blank_">
                    <img src="{{ asset('/img/iconos/airbnb-brands-solid-full.svg') }}" width="30"
                        alt="">
                </a>
            </div>
        </div>
        <div class="col-12 text-center pt-3 pb-3">
            <img src="{{ asset('/img/logo-sj.svg') }}" width="40" alt="">
        </div>
        <hr>
        <div class="copyright">
            Rancho San Joaquín © TODOS LOS DERECHOS RESERVADOS
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="contactoFormModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (session('success'))
                        <div class="alert alert-success text-white bg-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger text-white bg-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form id="contactoForm" action="{{ route('contacto.enviar') }}" method="POST" target="_blank">
                        @csrf
                        <input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre"
                                class="form-control @error('nombre') is-invalid @enderror" placeholder="Tu nombre"
                                value="{{ old('nombre') }}" required>
                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="nombre@empresa.com" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="tel" name="telefono" class="form-control"
                                placeholder="Número de teléfono" value="{{ old('telefono') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea name="mensaje" class="form-control @error('mensaje') is-invalid @enderror" rows="3" required>{{ old('mensaje') }}</textarea>
                            @error('mensaje')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary" id="btnEnviar">
                            <span id="btnSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                aria-hidden="true"></span>
                            <span id="btnText">Descargar catálogo</span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('contactoDirectoForm').addEventListener('submit', function(e) {
    e.preventDefault(); 

    const spinner = document.getElementById('spinnerDirecto');
    const text = document.getElementById('textDirecto');
    const btn = document.getElementById('btnEnviarDirecto');
    
    spinner.classList.remove('d-none');
    text.innerText = "Enviando...";
    btn.disabled = true;

    grecaptcha.ready(function() {
        grecaptcha.execute('6Lc89Z8sAAAAALt1LkKAd74ZVJBD6W0kNIKGckd5', {action: 'submit'}).then(function(token) {
            
            document.querySelector('#contactoDirectoForm .g-recaptcha-response').value = token;
            
            // Enviamos el formulario de forma tradicional
            document.getElementById('contactoDirectoForm').submit();
        });
    });
});
</script>

{{-- <script>
    // Esperamos a que todo el HTML esté listo
    document.addEventListener('DOMContentLoaded', function() {
        const formulario = document.getElementById('contactoForm');

        // Solo si el formulario existe en esta página, activamos el evento
        if (formulario) {
            formulario.addEventListener('submit', function(e) {
                e.preventDefault();

                const btn = document.getElementById('btnEnviar');
                const spinner = document.getElementById('btnSpinner');
                const text = document.getElementById('btnText');

                btn.disabled = true;
                if (spinner) spinner.classList.remove('d-none');
                if (text) text.innerText = "Enviando...";

                grecaptcha.ready(function() {
                    grecaptcha.execute("{{ config('services.recaptcha.site_key') }}", {
                        action: 'contacto'
                    }).then(function(token) {
                        document.getElementById('g-recaptcha-response').value = token;
                        formulario.submit();
                    });
                });
            });
        }
    });
</script> --}}
