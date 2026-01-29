<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<section class="relative h-80 flex items-center justify-center parallax bg-fixed"
    style="background-image: url('https://images.unsplash.com/photo-1423666639041-f14d70fa4c5d?q=80&w=1920&auto=format&fit=crop');">
    <div class="absolute inset-0 bg-gray-900/70"></div>
    <div class="text-center text-white relative z-10 max-w-4xl px-4">
        <h1 class="text-4xl md:text-6xl font-display font-bold tracking-tight mb-4 animate-shine">CONTÁCTANOS</h1>
        <p class="mt-2 text-lg md:text-xl text-gray-200 font-light">Estamos listos para hacer realidad tu proyecto</p>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="flex flex-col lg:flex-row gap-16">

            <!-- Contact Info -->
            <div class="lg:w-1/3">
                <div class="bg-white p-10 rounded-3xl shadow-xl h-full relative overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-construtan-orange/10 rounded-full"></div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-8 relative z-10">Información de Contacto</h3>

                    <div class="space-y-8 relative z-10">
                        <div class="flex items-start group">
                            <div
                                class="w-14 h-14 bg-gray-50 rounded-2xl flex items-center justify-center text-construtan-orange flex-shrink-0 group-hover:bg-construtan-orange group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div class="ml-5">
                                <h4 class="font-bold text-gray-800 text-lg">Ubicación</h4>
                                <p class="text-gray-500 text-sm mt-1">Av. Isidoro Dubournais, El Quisco, Litoral
                                    Central, Chile</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div
                                class="w-14 h-14 bg-gray-50 rounded-2xl flex items-center justify-center text-construtan-orange flex-shrink-0 group-hover:bg-construtan-orange group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-phone text-xl"></i>
                            </div>
                            <div class="ml-5">
                                <h4 class="font-bold text-gray-800 text-lg">Llámanos</h4>
                                <p class="text-gray-500 text-sm mt-1 mb-1 font-bold">+56 9 1234 5678</p>
                                <p class="text-gray-400 text-xs">Lunes a Viernes: 9:00 - 18:00 hrs</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div
                                class="w-14 h-14 bg-gray-50 rounded-2xl flex items-center justify-center text-construtan-orange flex-shrink-0 group-hover:bg-construtan-orange group-hover:text-white transition-colors duration-300">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div class="ml-5">
                                <h4 class="font-bold text-gray-800 text-lg">Escríbenos</h4>
                                <p class="text-gray-500 text-sm mt-1">contacto@construtan.cl</p>
                            </div>
                        </div>
                    </div>

                    <!-- Map Placeholder -->
                    <div class="mt-10 h-56 bg-gray-100 rounded-2xl overflow-hidden shadow-inner border border-gray-200">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53372.58334415842!2d-71.72892984920257!3d-33.39578648057262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966213f2da79e397%3A0x629555132d73315a!2sEl%20Quisco%2C%20Valpara%C3%ADso!5e0!3m2!1ses-419!2scl!4v1706646840656!5m2!1ses-419!2scl"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="lg:w-2/3">
                <div class="bg-white p-10 rounded-3xl shadow-2xl">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Envíanos un Mensaje</h3>
                    <p class="text-gray-500 mb-10">Completa el formulario a continuación y nos pondremos en contacto
                        contigo lo antes posible.</p>

                    <form id="contactForm" action="process_form.php" method="POST" novalidate class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="relative group">
                                <label for="nombre"
                                    class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-2">Nombre
                                    Completo</label>
                                <input type="text" id="nombre" name="nombre"
                                    class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-construtan-orange focus:ring-2 focus:ring-orange-100 transition-all"
                                    placeholder="Ej: Juan Pérez">
                                <p class="error-msg text-red-500 text-xs mt-2 hidden flex items-center"><i
                                        class="fas fa-exclamation-circle mr-1"></i> Ingresa tu nombre completo</p>
                            </div>
                            <div class="relative group">
                                <label for="telefono"
                                    class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-2">Teléfono</label>
                                <input type="tel" id="telefono" name="telefono"
                                    class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-construtan-orange focus:ring-2 focus:ring-orange-100 transition-all"
                                    placeholder="+56 9...">
                                <p class="error-msg text-red-500 text-xs mt-2 hidden flex items-center"><i
                                        class="fas fa-exclamation-circle mr-1"></i> Ingresa un teléfono válido</p>
                            </div>
                        </div>

                        <div class="relative group">
                            <label for="email"
                                class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-2">Correo
                                Electrónico</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-construtan-orange focus:ring-2 focus:ring-orange-100 transition-all"
                                placeholder="tucorreo@empresa.com">
                            <p class="error-msg text-red-500 text-xs mt-2 hidden flex items-center"><i
                                    class="fas fa-exclamation-circle mr-1"></i> Ingresa un email válido</p>
                        </div>

                        <div class="relative group">
                            <label for="mensaje"
                                class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-2">Detalles del
                                Proyecto</label>
                            <textarea id="mensaje" name="mensaje" rows="6"
                                class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:border-construtan-orange focus:ring-2 focus:ring-orange-100 transition-all"
                                placeholder="Cuéntanos: ¿Qué quieres construir? ¿Dónde? ¿Cuál es tu presupuesto estimado?"></textarea>
                            <p class="error-msg text-red-500 text-xs mt-2 hidden flex items-center"><i
                                    class="fas fa-exclamation-circle mr-1"></i> El mensaje no puede estar vacío</p>
                        </div>

                        <button type="submit"
                            class="w-full py-5 bg-gradient-to-r from-construtan-brown to-gray-800 hover:from-construtan-orange hover:to-orange-600 text-white font-bold rounded-xl transition-all duration-300 shadow-lg transform hover:-translate-y-1 tracking-wider uppercase text-sm">
                            ENVIAR CONSULTA <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Validation Script -->
<script>
    document.getElementById('contactForm').addEventListener('submit', function  (e) {
        let isValid = true;
        const inputs = this.querySelectorAll('input, textarea');  inputs.forEach(input => {
            const errorMsg = input.parentNode.querySelector('.error-msg');
            let validField = true;

            input.classList.remove('border-red-500', 'bg-red-50');
            errorMsg.classList.add('hidden');

            if (input.id === 'email') {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(input.value)) validField = false;
            } else if (input.id === 'telefono') {
                if (input.value.length < 8) validField = false;
            } else {
                if (input.value.trim() === '') validField = false;
            }

            if (!validField) {
                isValid = false;
                input.classList.add('border-red-500', 'bg-red-50');
                errorMsg.classList.remove('hidden');
            }
        });

        if (!isValid) {
            e.preventDefault();
        }
    });
</script>

<?php include 'includes/footer.php'; ?>