// JavaScript para la página de Kone's

document.addEventListener('DOMContentLoaded', function() {
    // Funcionalidad del menú hamburguesa
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const mainNav = document.querySelector('.main-nav');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Toggle del menú hamburguesa
    hamburgerMenu.addEventListener('click', function() {
        hamburgerMenu.classList.toggle('active');
        mainNav.classList.toggle('active');
        document.body.classList.toggle('menu-open');
    });
    
    // Cerrar menú al hacer clic en un enlace
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            hamburgerMenu.classList.remove('active');
            mainNav.classList.remove('active');
            document.body.classList.remove('menu-open');
        });
    });
    
    // Cerrar menú al hacer clic fuera de él
    document.addEventListener('click', function(e) {
        if (!hamburgerMenu.contains(e.target) && !mainNav.contains(e.target)) {
            hamburgerMenu.classList.remove('active');
            mainNav.classList.remove('active');
            document.body.classList.remove('menu-open');
        }
    });
    
    // Smooth scrolling para enlaces de navegación
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            // Solo interceptar enlaces que empiecen con #
            if (targetId.startsWith('#')) {
                e.preventDefault();
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
            // Si no empieza con #, dejar que el enlace funcione normalmente
        });
    });

    // Animación de aparición para las tarjetas
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observar elementos para animación
    const animatedElements = document.querySelectorAll('.service-card, .facility-card, .activity-card');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Validación del formulario de contacto
    const submitBtn = document.querySelector('.submit-btn');
    const contactForm = document.querySelector('.contact-form');
    
    if (submitBtn && contactForm) {
        submitBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Limpiar mensajes anteriores
            clearMessages();
            
            const nombre = document.getElementById('nombre').value.trim();
            const email = document.getElementById('email').value.trim();
            const mensaje = document.getElementById('mensaje').value.trim();
            
            let hasErrors = false;
            
            // Validaciones básicas
            if (!nombre) {
                showError('nombre-error', 'Falta el nombre');
                hasErrors = true;
            }
            
            if (!email) {
                showError('email-error', 'Falta el correo');
                hasErrors = true;
            } else if (!isValidEmail(email)) {
                showError('email-error', 'El formato del correo no es válido');
                hasErrors = true;
            }
            
            if (!mensaje) {
                showError('mensaje-error', 'Falta el mensaje');
                hasErrors = true;
            }
            
            // Si hay errores, no continuar
            if (hasErrors) {
                return;
            }
            
            // Si todo está bien, simular envío
            submitBtn.textContent = 'Enviando...';
            submitBtn.disabled = true;
            
            setTimeout(function() {
                // Mostrar mensaje de éxito
                showSuccess('Mensaje enviado');
                
                // Limpiar campos
                document.getElementById('nombre').value = '';
                document.getElementById('email').value = '';
                document.getElementById('mensaje').value = '';
                
                // Restaurar botón después de 2 segundos
                setTimeout(function() {
                    submitBtn.textContent = 'Enviar';
                    submitBtn.disabled = false;
                    clearMessages();
                }, 2000);
            }, 1000);
        });
    }
    
    // Funciones auxiliares para mostrar mensajes
    function showError(elementId, message) {
        const errorElement = document.getElementById(elementId);
        errorElement.textContent = message;
        errorElement.classList.add('show');
    }
    
    function showSuccess(message) {
        const successElement = document.getElementById('success-message');
        successElement.textContent = message;
        successElement.classList.add('show');
    }
    
    function clearMessages() {
        const errorMessages = document.querySelectorAll('.error-message');
        const successMessage = document.getElementById('success-message');
        
        errorMessages.forEach(msg => {
            msg.classList.remove('show');
            msg.textContent = '';
        });
        
        successMessage.classList.remove('show');
        successMessage.textContent = '';
    }

    // Función para validar email
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Efecto hover mejorado para las tarjetas
    const cards = document.querySelectorAll('.service-card, .facility-card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 8px 25px rgba(0,0,0,0.15)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 4px 15px rgba(0,0,0,0.1)';
        });
    });

    // Botón de scroll hacia arriba
    const scrollTopBtn = document.createElement('button');
    scrollTopBtn.innerHTML = '↑';
    scrollTopBtn.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background-color: #ff6b9d;
        color: white;
        border: none;
        border-radius: 50%;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1000;
    `;
    
    document.body.appendChild(scrollTopBtn);
    
    // Mostrar/ocultar botón según scroll
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollTopBtn.style.opacity = '1';
        } else {
            scrollTopBtn.style.opacity = '0';
        }
    });
    
    // Funcionalidad del botón
    scrollTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});

// Función para mostrar/ocultar descripciones de servicios
function toggleDescription(serviceId) {
    const allDescriptions = document.querySelectorAll('.service-description-text');
    const firstDescription = allDescriptions[0];
    const isAnyActive = firstDescription.classList.contains('active');
    
    if (isAnyActive) {
        // Si alguna está activa, cerrar todas
        allDescriptions.forEach(desc => {
            desc.classList.remove('active');
        });
    } else {
        // Si ninguna está activa, abrir todas
        allDescriptions.forEach(desc => {
            desc.classList.add('active');
        });
    }
}


// Función para manejar el scroll suave
function smoothScrollTo(targetId) {
    const target = document.getElementById(targetId);
    if (target) {
        const headerHeight = document.querySelector('.header').offsetHeight;
        const targetPosition = target.offsetTop - headerHeight - 20;
        
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    }
}

// Función para detectar prefers-reduced-motion
function respectReducedMotion() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    
    if (prefersReducedMotion) {
        // Desactivar animaciones si el usuario prefiere movimiento reducido
        document.documentElement.style.setProperty('--animation-duration', '0s');
        document.documentElement.style.setProperty('--transition-duration', '0s');
    }
}

// Inicializar funciones cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    respectReducedMotion();
    
    // Escuchar cambios en la preferencia de movimiento
    window.matchMedia('(prefers-reduced-motion: reduce)').addEventListener('change', respectReducedMotion);
});
