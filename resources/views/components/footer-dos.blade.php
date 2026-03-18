<section class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 contenido m-auto">
                <div class="elemento">
                    <h5>Dirección</h5>
                    <p><a href="https://maps.app.goo.gl/Cc2HYr14wFx2TsoN8">Calle 43 # 203 entre 48 y 50, <br> Col
                            Benito Juárez Norte, CP 97119. Mérida, Yucatán</a></p>
                </div>
                <div class="elemento">
                    <h5>Email</h5>
                    <p><a href="mailto:proyectos@ddrproyectos.mx">proyectos@ddrproyectos.mx</a></p>
                </div>
                <div class="elemento">
                    <h5>Phone</h5>
                    <p><a href="tel:9992774864">+52 (999) 277 48 64</a></p>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 formulario">
                @if (session('success'))
                    <div class="alert alert-success" style="color: #000">
                        {{ session('success') }}
                    </div>
                @endif
                <form id="contactoForm" action="{{ route('contacto.enviar') }}" method="POST">
                    @csrf
                    <input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response"> 

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Tu nombre" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="nombre@empresa.com"
                            value="{{ old('email') }}" required>


                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="tel" name="telefono" class="form-control" placeholder="Número de teléfono">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mensaje</label>
                        <textarea name="mensaje" class="form-control" rows="3" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" id="btnEnviar">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="footernav">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h2>DDR PROYECTOS</h2>
            </div>
            {{-- <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="navbar-nav  ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Proyectos de obra civil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Proyectos de obra privada</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Contacto</a>
                        </li>
                    </ul>
                </div> --}}
        </div>
        <hr>
        <div class="copyright">
            DDR PROYECTOS © TODOS LOS DERECHOS RESERVADOS
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="contactoFormModal" aria-hidden="true">
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

                    <form id="contactoForm" action="{{ route('contacto.enviar') }}" method="POST">
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
                            <input type="tel" name="telefono" class="form-control" placeholder="Número de teléfono"
                                value="{{ old('telefono') }}">
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
                            <span id="btnText">Enviar mensaje</span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
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

<script>
    document.addEventListener('submit', function(e) {
        // Detectamos si el formulario enviado es cualquiera de los dos
        if (e.target && (e.target.id === 'contactoForm' || e.target.id === 'contactoFormModal')) {
            e.preventDefault();
            
            const formulario = e.target;
            const btn = formulario.querySelector('.btnEnviar') || formulario.querySelector('button[type="submit"]');
            const spinner = formulario.querySelector('.btnSpinner');
            const text = formulario.querySelector('.btnText');
            const tokenInput = formulario.querySelector('.g-recaptcha-response');

            // Feedback visual
            btn.disabled = true;
            if (spinner) spinner.classList.remove('d-none');
            if (text) text.innerText = "Enviando...";

            grecaptcha.ready(function() {
                grecaptcha.execute("{{ config('services.recaptcha.site_key') }}", {
                    action: 'contacto'
                }).then(function(token) {
                    if (tokenInput) {
                        tokenInput.value = token;
                        formulario.submit();
                    } else {
                        console.error("No se encontró el campo para el token de reCAPTCHA");
                    }
                });
            });
        }
    });
</script>
