<!-- footer.php -->
<link rel="stylesheet" href="EstilosCss/Index.css">

<section>
    <!-- Información de contacto y redes sociales -->
    <div class="container-fluid contRS">
        <div class="row justify-content-center ContenedorRedes">
            <h2 class="text-center font-weight-bold text-white mb-3">Información de contacto</h2>
            <h3 class="text-center font-weight-bold text-white mb-4">Nuestras redes sociales</h3>

            <!-- Redes Sociales -->
            <div class="col-3 col-md-1 d-flex justify-content-center align-items-center redsocial1 mb-3">
                <a href="https://www.facebook.com/fundesotec" target="_blank" aria-label="Facebook de Fundesotec">
                    <i class="bi bi-facebook icono-redes"></i>
                </a>
            </div>
            <div class="col-3 col-md-1 d-flex justify-content-center align-items-center redsocial1 mb-3">
                <a href="https://www.instagram.com/fundesotec" target="_blank" aria-label="Instagram de Fundesotec">
                    <i class="bi bi-instagram icono-redes"></i>
                </a>
            </div>
            <div class="col-3 col-md-1 d-flex justify-content-center align-items-center redsocial1 mb-3">
                <a href="https://www.tiktok.com/@fundesotec" target="_blank" aria-label="TikTok de Fundesotec">
                    <i class="bi bi-tiktok icono-redes"></i>
                </a>
            </div>
            <div class="col-3 col-md-1 d-flex justify-content-center align-items-center redsocial1 mb-3">
                <a href="https://www.linkedin.com/company/fundación-desarrollo-social-y-tecnológico" target="_blank" aria-label="LinkedIn de Fundesotec">
                    <i class="bi bi-linkedin icono-redes"></i>
                </a>
            </div>
            <div class="col-3 col-md-1 d-flex justify-content-center align-items-center redsocial1 mb-3">
                <a href="https://www.youtube.com/@fundesotec" target="_blank" aria-label="YouTube de Fundesotec">
                    <i class="bi bi-youtube icono-redes"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Información de contacto: Dirección, correo, teléfonos y horarios -->
    <div class="container-fluid contenedorFooter">
        <div class="row">
            <!-- Dirección -->
            <div class="col-12 col-md-3 contDatos mb-4 mb-md-0">
                <h4 class="datosContactos">DIRECCIÓN</h4><br>
                <p class="informacion" itemscope itemtype="https://schema.org/PostalAddress">
                    <div style="display: inline-flex; align-items: center;">
                        <i class="bi bi-geo-alt" style="margin-right: 8px;"></i>
                        <p class="fw-bold" style="margin-bottom: 0;">País: Ecuador</p>
                    </div>

                    <a href="https://www.google.com/maps/search/?api=1&query=Juan+Lavalle+N9-461,+Quito,+Ecuador" target="_blank">
                        Calle, Juan Lavalle N9-461, Quito 170803
                    </a>
                </p>

                <!-- Correo debajo de Dirección -->
                <h4 class="datosContactos">CORREO</h4><br>
                <p class="informacion">
                    <i class="bi bi-envelope"></i>
                    <a href="mailto:fundesotec.osfl@fundesotec.org?subject=Solicitud%20de%20información%20-%20Educador%20Quito&body=Hola,%20quisiera%20más%20información%20sobre%20los%20servicios%20de%20Fundesotec." target="_blank" itemprop="email">
                        fundesotec.osfl@fundesotec.org
                    </a>
                </p>
            </div>

            <!-- Teléfonos -->
            <div class="col-12 col-md-3 contDatos mb-4 mb-md-0">
                <h4 class="datosContactos">TELÉFONOS</h4><br>
                <p class="fw-bold">Oficina Matriz</p>
                <p class="informacion">
                    <i class="bi bi-telephone-forward"></i>
                    <a href="https://wa.me/593990029024?text=Hola,%20quisiera%20información%20por%20favor" target="_blank">
                        +593 99 002 9024
                    </a>
                </p>

                <p class="informacion">
                    <i class="bi bi-telephone-forward"></i>
                    <a href="https://wa.me/593984533092?text=Hola,%20quisiera%20información%20por%20favor" target="_blank">
                        +593 98 453 3092
                    </a>
                </p>

                
            </div>

            <!-- Horarios -->
            <div class="col-12 col-md-3 contDatos mb-4 mb-md-0">
                <h4 class="datosContactos text-center mb-3" style="font-size: 1.5rem; color: #9f07ba; font-weight: bold;">
                    <i class="bi bi-clock"></i> HORARIO DE ATENCIÓN
                </h4>

                <div class="card" style="background-color: #f8f9fa; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div style="text-align: center; padding: 1rem;">
                        <p class="informacion" style="font-size: 1.1rem; font-weight: bold; color: #333;">
                            <i class="bi bi-calendar-week" style="color: #007bff;"></i> LUNES A VIERNES
                        </p>
                        <p class="informacion" style="font-size: 1.1rem; font-weight: bold; color: #333;">
                            De 8:00 a. m. a 4:30 p. m.
                        </p>
                    </div>
                </div>

                <!-- Botón de Políticas de Privacidad con espaciado superior -->
                <div class="text-center mt-4 mb-3">
                    <a href="index.php?page=Vista/Politicas.html"  class="btn-donacion">
                        Políticas de Privacidad
                    </a>
                </div>
            </div>
        </div>

        <!-- Línea divisoria -->
        <hr>

        <!-- Derechos -->
        <div class="row">
            <div class="col text-center">
                <h2>© 2018 - 2025 
                    <span class="fundesotec-text">
                        <span class="blue">FUN</span><span class="magenta">D</span><span class="blue">ESOTEC</span>
                    </span>. Todos los derechos reservados
                </h2>
            </div>
        </div>
    </div>
</section>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
