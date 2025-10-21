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
                <!-- Logo colorido -->
                <div class="logo-colorful">
                    <span class="logo-letter logo-k">K</span>
                    <span class="logo-letter logo-o">o</span>
                    <span class="logo-letter logo-n">n</span>
                    <span class="logo-letter logo-e">e</span>
                    <span class="logo-letter logo-s">'s</span>
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
                <div class="decoration-rainbow"></div>
                <div class="decoration-star"></div>
            </div>
            
            <div class="hero-content">
                <h1 class="hero-title">¡Bienvenido a Kone's!</h1>
                <div class="hero-text">
                    <p>
                        La misión de Kone's es educar con compromiso y dedicación, ofreciendo un servicio personalizado, integral y novedoso que impulse el desarrollo de cada niño.
                    </p>
                </div>
                
                <!-- Imágenes de niños -->
                <div class="children-images">
                    <div class="child-image child-writing">
                        <img src="assets/images/nina_escribiendo.jpg" alt="Niña escribiendo" class="child-photo">
                        <div class="child-overlay">
                            <span class="child-icon">✏️</span>
                            <p>Niña escribiendo</p>
                        </div>
                    </div>
                    <div class="child-image child-playing">
                        <img src="assets/images/nina_jugando.jpg" alt="Niña jugando" class="child-photo">
                        <div class="child-overlay">
                            <span class="child-icon">🧱</span>
                            <p>Niña jugando</p>
                        </div>
                    </div>
                    <div class="child-image child-reading">
                        <img src="assets/images/nino_leyendo.jpg" alt="Niño leyendo" class="child-photo">
                        <div class="child-overlay">
                            <span class="child-icon">📚</span>
                            <p>Niño leyendo</p>
                        </div>
                    </div>
                </div>
                
                <!-- Botones de llamada a la acción -->
                <div class="hero-buttons">
                    <a href="#servicios" class="cta-button cta-services">Conoce nuestros servicios</a>
                    <a href="#contacto" class="cta-button cta-appointment">Agendar cita</a>
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
            
            <div class="contact-methods">
                <div class="contact-method">
                    <div class="contact-icon whatsapp">📱</div>
                    <div class="contact-info">
                        <span class="contact-label">WhatsApp</span>
                        <span class="contact-value">(+52) 33-18-72-92-37</span>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-icon location">📍</div>
                    <div class="contact-info">
                        <span class="contact-label">Ubicación</span>
                        <span class="contact-value">Guadalajara, Jalisco, México</span>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-icon email">✉️</div>
                    <div class="contact-info">
                        <span class="contact-label">Email</span>
                        <span class="contact-value">contacto@kones.com.mx</span>
                    </div>
                </div>
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
                        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                    </div>
                    
                    <div class="form-submit">
                        <button type="submit" class="submit-btn">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-left">
                    <span class="footer-link">Aviso de Privacidad</span>
                </div>
                
                <div class="footer-center">
                    <span class="footer-copyright">© Kone's™ 2023</span>
                </div>
                
                <div class="footer-right">
                    <div class="social-links">
                        <a href="#" class="social-link facebook">📘</a>
                        <a href="#" class="social-link instagram">📷</a>
                        <a href="#" class="social-link twitter">🐦</a>
                        <a href="#" class="social-link youtube">📺</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
