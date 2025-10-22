<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kone's - Centro Psicoeducativo Infantil</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header y Navegación -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <!-- Logo de imagen -->
                <div class="logo-colorful">
                    <img src="assets/images/logo.jpg" alt="Kone's" class="logo-image">
                </div>
                
                <!-- Navegación -->
                <nav class="main-nav">
                    <a href="#servicios" class="nav-link">Servicios</a>
                    <a href="#instalaciones" class="nav-link">Instalaciones</a>
                    <a href="#actividades" class="nav-link">Actividades</a>
                    <a href="#contacto" class="nav-link">Contacto</a>
                </nav>
                
                <!-- Menú hamburguesa -->
                <div class="hamburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <!-- Sección de Bienvenida -->
    <section id="inicio" class="hero">
        <div class="container">
            <!-- Elementos decorativos -->
            <div class="hero-decorations">
                <div class="decoration-circle circle-1"></div>
                <div class="decoration-circle circle-2"></div>
                <div class="decoration-circle circle-3"></div>
                <div class="decoration-circle circle-4"></div>
                <div class="decoration-circle circle-5"></div>
                <div class="decoration-rainbow"></div>
                <div class="decoration-star"></div>
                <div class="decoration-star star-2"></div>
                <div class="decoration-star star-3"></div>
            </div>
            
            <div class="hero-content">
                <!-- Título principal con tipografía mejorada -->
                <h1 class="hero-title">
                    <span class="hero-title-part1">¡Bienvenido a</span>
                    <span class="hero-title-part2">Kone's!</span>
                </h1>
                
                <!-- Subtítulo emocional -->
                <div class="hero-subtitle">
                    <p class="hero-subtitle-main">Acompañamos el desarrollo de cada niño con amor, juego y aprendizaje.</p>
                    <!-- <p class="hero-subtitle-secondary">La misión de Kone's es educar con compromiso y dedicación, ofreciendo un servicio personalizado, integral y novedoso que impulse el desarrollo de cada niño.</p> -->
                </div>
                
                <!-- Imágenes de niños con marcos mejorados -->
                <div class="children-images">
                    <div class="child-image child-writing">
                        <img src="assets/images/nina_escribiendo.jpg" alt="Niña escribiendo y aprendiendo" class="child-photo">
                    </div>
                    <div class="child-image child-playing">
                        <img src="assets/images/nina_jugando.jpg" alt="Niña jugando y explorando" class="child-photo">
                    </div>
                    <div class="child-image child-reading">
                        <img src="assets/images/nino_leyendo.jpg" alt="Niño leyendo y descubriendo" class="child-photo">
                    </div>
                </div>
                
                <!-- Botones CTA mejorados -->
                <div class="hero-buttons">
                    <a href="#servicios" class="cta-button cta-services" aria-label="Conoce nuestros servicios educativos">
                        <span>Conoce nuestros servicios</span>
                        <span class="cta-icon">→</span>
                    </a>
                    <a href="#contacto" class="cta-button cta-appointment" aria-label="Agendar una cita para conocer Kone's">
                        Agendar cita
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section id="servicios" class="services">
        <div class="container">
            <h2 class="section-title">SERVICIOS</h2>
            
            <!-- Estimulación Temprana -->
            <div class="service-main">
                <div class="service-logo">
                    <img src="assets/images/bb-kones.jpg" alt="BB Kone's" class="service-logo-img">
                </div>
                <div class="service-content">
                    <h3 class="service-title">ESTIMULACIÓN TEMPRANA</h3>
                    <p class="service-description">
                        Programa que ayuda a los bebés a desarrollar habilidades en las áreas cognitiva, lenguaje, motora, afectiva y social, siempre respetando la etapa y ritmo del niño, promoviendo el vínculo madre-hijo y apego seguro.
                    </p>
                </div>
            </div>
            
            <!-- Servicios principales con iconos circulares -->
            <div class="services-main-grid">
                <div class="service-main-card" onclick="toggleDescription('dhap')">
                    <div class="service-icon-circle dhap">
                        <span class="service-icon-text">DHAP</span>
                    </div>
                    <h4 class="service-main-title">Desarrollo de habilidades para el aprendizaje</h4>
                    <div class="service-description-text" id="dhap-desc">
                        <p>Programa grupal para intervenir en procesos cognitivos como atención, memoria, funciones ejecutivas y trabajar metacognición y creatividad.</p>
                    </div>
                </div>

                <div class="service-main-card" onclick="toggleDescription('nee')">
                    <div class="service-icon-circle nee">
                        <span class="service-icon-text">NEE</span>
                    </div>
                    <h4 class="service-main-title">Necesidades educativas especiales</h4>
                    <div class="service-description-text" id="nee-desc">
                        <p>Programa personalizado para niños con trastornos como Síndrome de Down, TDAH, trastornos del aprendizaje (TEA), enfocado en desarrollo cognitivo, motor, lenguaje, afectivo y social.</p>
                    </div>
                </div>

                <div class="service-main-card" onclick="toggleDescription('lee')">
                    <div class="service-icon-circle lee">
                        <span class="service-icon-text">LEE</span>
                    </div>
                    <h4 class="service-main-title">Lecto-escritura</h4>
                    <div class="service-description-text" id="lee-desc">
                        <p>Programa individual o grupal dirigido a la adquisición y perfeccionamiento de los procesos de comprensión lectora y escritura.</p>
                    </div>
                </div>

                <div class="service-main-card" onclick="toggleDescription('dhas')">
                    <div class="service-icon-circle dhas">
                        <span class="service-icon-text">DHAS</span>
                    </div>
                    <h4 class="service-main-title">Desarrollo de habilidades sociales</h4>
                    <div class="service-description-text" id="dhas-desc">
                        <p>Programa grupal enfocado en desarrollar habilidades sociales en los niños, promoviendo autoseguridad, trabajo en equipo, relaciones interpersonales sanas y autoestima.</p>
                    </div>
                </div>
            </div>

            <!-- Club de Tareas -->
            <div class="service-main">
                <div class="service-logo">
                    <img src="assets/images/club-kones.jpg" alt="Club Kone's" class="service-logo-img">
                </div>
                <div class="service-content">
                    <h3 class="service-title">CLUB DE TAREAS Y REGULARIZACIÓN</h3>
                    <p class="service-description">
                        Club diseñado para apoyar a niños de preescolar y primaria con tareas y dificultades, ayudándolos a reforzar sus conocimientos de manera lógica y acorde a sus necesidades.
                    </p>
                </div>
            </div>

            <!-- Ludoteca -->
            <div class="service-main ludoteca">
                <div class="service-logo">
                    <img src="assets/images/ludo-kones.jpg" alt="Ludo Kone's" class="service-logo-img">
                </div>
                <div class="service-content">
                    <h3 class="service-title">LUDOTECA</h3>
                    <p class="service-description">
                        La ludoteca de Kone's es un espacio donde los niños aprenden jugando, utilizando diversos materiales para juego de roles, juego simbólico y actividades de la vida diaria. También cuenta con área de lectura.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Instalaciones -->
    <section id="instalaciones" class="facilities">
        <div class="container">
            <h2 class="section-title">INSTALACIONES</h2>
            
            <div class="facilities-grid">
                <div class="facility-image">
                    <img src="assets/images/cocina-didactica.jpg" alt="Cocina Didáctica" class="facility-img">
                    <div class="facility-overlay">
                        <h4 class="facility-title">Cocina Didáctica</h4>
                        <p class="facility-description">Área equipada para actividades prácticas y desarrollo de habilidades motoras</p>
                    </div>
                </div>

                <div class="facility-image">
                    <img src="assets/images/area-juego.jpg" alt="Área de Juego" class="facility-img">
                    <div class="facility-overlay">
                        <h4 class="facility-title">Área de Juego</h4>
                        <p class="facility-description">Espacio diseñado para juegos de roles y actividades imaginativas</p>
                    </div>
                </div>

                <div class="facility-image">
                    <img src="assets/images/zona-motricidad.jpg" alt="Zona de Motricidad" class="facility-img">
                    <div class="facility-overlay">
                        <h4 class="facility-title">Zona de Motricidad</h4>
                        <p class="facility-description">Espacio seguro con colchonetas y elementos para desarrollo físico</p>
                    </div>
                </div>

                <div class="facility-image">
                    <img src="assets/images/area-disfraces.jpg" alt="Área de Disfraces" class="facility-img">
                    <div class="facility-overlay">
                        <h4 class="facility-title">Área de Disfraces</h4>
                        <p class="facility-description">Zona especializada para juego dramático y expresión creativa</p>
                    </div>
                </div>

                <div class="facility-image">
                    <img src="assets/images/sala-lectura.jpg" alt="Sala de Lectura" class="facility-img">
                    <div class="facility-overlay">
                        <h4 class="facility-title">Sala de Lectura</h4>
                        <p class="facility-description">Espacio tranquilo para fomentar el amor por los libros</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Actividades -->
    <section id="actividades" class="activities">
        <div class="container">
            <h2 class="section-title">ACTIVIDADES</h2>
            
            <div class="activity-content">
                <div class="activity-image">
                    <img src="assets/images/memorama-navideno.jpg" alt="Kone's Memorama Navideño" class="activity-img">
                </div>
                <div class="activity-text">
                    <h3 class="activity-title">Kone's Memorama Navideño</h3>
                    <p class="activity-description">
                        Actividades especiales y juegos temáticos para celebrar las fechas importantes del año, fomentando la creatividad y el aprendizaje a través del juego.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="contact">
        <div class="container">
            <h2 class="section-title">CONTACTO</h2>
            
            <div class="contact-content">
                <div class="contact-methods">
                    <a href="https://wa.me/523318729237" target="_blank" class="contact-method contact-link">
                        <div class="contact-icon whatsapp">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                        </div>
                        <div class="contact-info">
                            <span class="contact-label">WhatsApp</span>
                            <span class="contact-value">(+52) 33-18-72-92-37</span>
                        </div>
                    </a>
                    
                    <a href="https://maps.app.goo.gl/nfpesFVyrTccKHxWA" target="_blank" class="contact-method contact-link">
                        <div class="contact-icon location">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                        <div class="contact-info">
                            <span class="contact-label">Ubicación</span>
                            <span class="contact-value">Vasco de Quiroga, La Loma, Guadalajara, Jalisco</span>
                        </div>
                    </a>
                    
                    <a href="mailto:konesmx@gmail.com" class="contact-method contact-link">
                        <div class="contact-icon email">✉️</div>
                        <div class="contact-info">
                            <span class="contact-label">Email</span>
                            <span class="contact-value">konesmx@gmail.com</span>
                        </div>
                    </a>
                </div>

                <!-- Formulario de Contacto -->
                <div class="contact-form-container">
                <form action="contacto.php" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="nombre">Nombre *</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-mail *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="mensaje">Mensaje *</label>
                        <textarea id="mensaje" name="mensaje" rows="4" required style="resize: none;"></textarea>
                    </div>
                    
                    <div class="form-submit">
                        <button type="submit" class="submit-btn">Enviar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-left">
                    <a href="aviso-privacidad.php" class="footer-link">Aviso de Privacidad</a>
                </div>
                
                <div class="footer-center">
                    <span class="footer-copyright">© Kone's™ 2024</span>
                </div>
                
                <div class="footer-right">
                    <div class="social-links">
                        <a href="https://www.instagram.com/konesmx/" target="_blank" class="social-link instagram">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
