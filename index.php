<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative h-screen min-h-[600px] flex items-center justify-center parallax bg-fixed"
    style="background-image: url('img/PORTADA.JPG');">
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/80 to-gray-900/60 mix-blend-multiply"></div>

    <div class="container mx-auto px-4 text-center text-white relative z-10 max-w-4xl">
        <span
            class="inline-block py-1 px-3 border border-white/30 rounded-full text-xs font-bold tracking-widest mb-4 uppercase bg-white/10 backdrop-blur-sm animate-fadeIn">Excelencia
            en Construcción</span>
        <h2
            class="text-5xl md:text-7xl font-display font-bold mb-8 leading-tight drop-shadow-lg tracking-tight animate-shine">
            CONSTRUYENDO SUEÑOS <br><span
                class="text-transparent bg-clip-text bg-gradient-to-r from-construtan-orange to-orange-400">EN EL
                LITORAL</span></h2>
        <p class="text-xl md:text-2xl mb-10 font-light text-gray-200 max-w-2xl mx-auto leading-relaxed">
            Expertos en construcción, remodelación y regularización de propiedades. Más de 5600 m² construidos nos
            avalan.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="proyectos.php"
                class="px-10 py-4 bg-construtan-orange text-white font-bold rounded-full transition-all duration-300 shadow-[0_10px_20px_rgba(230,81,0,0.3)] hover:shadow-[0_15px_30px_rgba(230,81,0,0.5)] transform hover:-translate-y-1 hover:bg-orange-600 tracking-wide text-sm">
                VER PROYECTOS
            </a>
            <button onclick="toggleSidebar()"
                class="px-10 py-4 bg-transparent border-2 border-white/80 text-white font-bold rounded-full transition-all duration-300 hover:bg-white hover:text-gray-900 shadow-lg transform hover:-translate-y-1 tracking-wide text-sm cursor-pointer">
                SOLICITAR COTIZACIÓN
            </button>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section id="stats-section"
    class="py-20 bg-gradient-to-br from-construtan-brown to-gray-900 text-white relative overflow-hidden">
    <div
        class="absolute top-0 right-0 p-64 bg-construtan-orange opacity-5 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2">
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <div
            class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center divide-y md:divide-y-0 md:divide-x divide-white/10">
            <div class="p-6">
                <i
                    class="fas fa-ruler-combined text-5xl mb-6 text-construtan-orange opacity-90 inline-block transform hover:scale-110 transition duration-500"></i>
                <div class="text-6xl font-display font-bold mb-2 tracking-tight stat-number" data-target="5600"
                    data-suffix="+">0</div>
                <div class="text-gray-300 font-bold uppercase tracking-widest text-sm">Metros Cuadrados Construidos
                </div>
            </div>
            <div class="p-6">
                <i
                    class="fas fa-users text-5xl mb-6 text-construtan-orange opacity-90 inline-block transform hover:scale-110 transition duration-500"></i>
                <div class="text-6xl font-display font-bold mb-2 tracking-tight stat-number" data-target="75"
                    data-suffix="+">0</div>
                <div class="text-gray-300 font-bold uppercase tracking-widest text-sm">Clientes Satisfechos</div>
            </div>
            <div class="p-6">
                <i
                    class="fas fa-medal text-5xl mb-6 text-construtan-orange opacity-90 inline-block transform hover:scale-110 transition duration-500"></i>
                <div class="text-6xl font-display font-bold mb-2 tracking-tight stat-number" data-target="15"
                    data-suffix="+">0</div>
                <div class="text-gray-300 font-bold uppercase tracking-widest text-sm">Años de Experiencia</div>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-20">
            <span class="text-construtan-orange font-bold uppercase tracking-widest text-sm">Lo que hacemos</span>
            <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-800 mt-2 mb-6">NUESTROS SERVICIOS</h2>
            <div class="w-24 h-1.5 bg-construtan-orange mx-auto rounded-full"></div>
            <p class="mt-8 text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed font-light">
                Soluciones integrales de construcción con un estándar superior. Desde la planificación hasta la entrega
                final.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Service 1 -->
            <div
                class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 max-w-md mx-auto w-full">
                <div class="h-64 overflow-hidden relative">
                    <img src="img/102_0080.JPG" alt="Construcción" class="w-full h-full object-cover zoom-crop">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-60 group-hover:opacity-40 transition duration-300">
                    </div>
                </div>
                <div class="p-8 relative">
                    <div
                        class="absolute -top-10 right-8 w-16 h-16 bg-construtan-orange rounded-2xl flex items-center justify-center text-white text-2xl shadow-xl group-hover:rotate-6 transition duration-300">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3
                        class="text-2xl font-display font-bold mb-4 text-gray-800 group-hover:text-construtan-orange transition-colors">
                        Construcción Habitacional</h3>
                    <p class="text-gray-500 mb-6 leading-relaxed text-sm">Casas llave en mano, ampliaciones y
                        remodelaciones con los mejores materiales. Diseños personalizados para tu estilo de vida.</p>
                    <a href="servicios.php"
                        class="inline-flex items-center text-sm font-bold text-construtan-orange uppercase tracking-wide group-hover:text-orange-700 transition-colors">
                        Ver Detalles <i
                            class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Service 2 -->
            <div
                class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 max-w-md mx-auto w-full">
                <div class="h-64 overflow-hidden relative">
                    <img src="img/IMG_20150704_125148.jpg" alt="Regularizaciones"
                        class="w-full h-full object-cover zoom-crop">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-60 group-hover:opacity-40 transition duration-300">
                    </div>
                </div>
                <div class="p-8 relative">
                    <div
                        class="absolute -top-10 right-8 w-16 h-16 bg-construtan-orange rounded-2xl flex items-center justify-center text-white text-2xl shadow-xl group-hover:rotate-6 transition duration-300">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3
                        class="text-2xl font-display font-bold mb-4 text-gray-800 group-hover:text-construtan-orange transition-colors">
                        Regularizaciones</h3>
                    <p class="text-gray-500 mb-6 leading-relaxed text-sm">Tramitación expedita de permisos de
                        edificación, recepciones finales y regularizaciones ante la Dirección de Obras.</p>
                    <a href="regularizaciones.php"
                        class="inline-flex items-center text-sm font-bold text-construtan-orange uppercase tracking-wide group-hover:text-orange-700 transition-colors">
                        Ver Detalles <i
                            class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Service 3 -->
            <div
                class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 max-w-md mx-auto w-full">
                <div class="h-64 overflow-hidden relative">
                    <img src="img/100_0480.JPG" alt="Proyectos" class="w-full h-full object-cover zoom-crop">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-60 group-hover:opacity-40 transition duration-300">
                    </div>
                </div>
                <div class="p-8 relative">
                    <div
                        class="absolute -top-10 right-8 w-16 h-16 bg-construtan-orange rounded-2xl flex items-center justify-center text-white text-2xl shadow-xl group-hover:rotate-6 transition duration-300">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3
                        class="text-2xl font-display font-bold mb-4 text-gray-800 group-hover:text-construtan-orange transition-colors">
                        Comercial & Industrial</h3>
                    <p class="text-gray-500 mb-6 leading-relaxed text-sm">Infraestructura sólida para tu negocio.
                        Galpones, oficinas corporativas y locales comerciales con altos estándares.</p>
                    <a href="servicios.php"
                        class="inline-flex items-center text-sm font-bold text-construtan-orange uppercase tracking-wide group-hover:text-orange-700 transition-colors">
                        Ver Detalles <i
                            class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Environment / Rubble Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="container mx-auto px-6 max-w-7xl flex flex-col md:flex-row items-center gap-16">
        <div class="md:w-1/2 relative order-2 md:order-1">
            <div
                class="relative rounded-3xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition duration-500">
                <div class="absolute inset-0 bg-construtan-brown/10 mix-blend-multiply pointer-events-none z-10"></div>
                <img src="img/353.jpg" alt="Cuidado Medioambiente"
                    class="w-full object-cover h-[500px] zoom-crop relative">

                <!-- Floating Badge -->
                <div
                    class="absolute bottom-8 left-8 bg-white/95 backdrop-blur shadow-2xl p-6 rounded-2xl flex items-center max-w-xs border-l-4 border-green-500 z-20">
                    <div class="mr-4 text-green-500 bg-green-100 p-3 rounded-full">
                        <i class="fas fa-leaf text-2xl"></i>
                    </div>
                    <div>
                        <div class="text-xs uppercase font-bold text-gray-400 tracking-wider">Compromiso</div>
                        <div class="font-bold text-gray-800 text-lg">Punto Limpio Certificado</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:w-1/2 order-1 md:order-2">
            <span
                class="text-green-600 font-bold uppercase tracking-widest text-sm bg-green-50 px-3 py-1 rounded-full">Sustentabilidad</span>
            <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-800 mt-4 mb-6 leading-tight">CONSTRUIMOS
                RESPETANDO <br><span class="text-construtan-brown">EL ENTORNO</span></h2>
            <div class="w-20 h-1.5 bg-green-500 mb-8 rounded-full"></div>
            <p class="text-gray-600 mb-8 leading-relaxed text-lg font-light">
                En CONSTRUTAN, la responsabilidad ambiental es un pilar fundamental. Entendemos que construir en el
                Litoral exige cuidar nuestro ecosistema único.
            </p>

            <div class="space-y-6">
                <div class="flex items-start group">
                    <div
                        class="flex-shrink-0 w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center text-construtan-orange mr-5 group-hover:bg-construtan-orange group-hover:text-white transition-colors duration-300">
                        <i class="fas fa-recycle text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-lg">Gestión de Escombros</h4>
                        <p class="text-sm text-gray-500 mt-1">Traslado certificado a botaderos autorizados. Cero
                            contaminación en valles y playas.</p>
                    </div>
                </div>

                <div class="flex items-start group">
                    <div
                        class="flex-shrink-0 w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center text-construtan-orange mr-5 group-hover:bg-construtan-orange group-hover:text-white transition-colors duration-300">
                        <i class="fas fa-broom text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-lg">Limpieza de Obra</h4>
                        <p class="text-sm text-gray-500 mt-1">Mantenemos el entorno impecable durante y después de la
                            construcción para respetar a la comunidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Section -->
<section class="py-24 bg-gray-900 text-white text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/dark-matter.png')] opacity-30">
    </div>
    <div class="container mx-auto px-6 max-w-5xl relative z-10">
        <h2 class="text-4xl font-display font-bold mb-4 text-white">NUESTRA ESENCIA</h2>
        <p class="text-gray-400 mb-12 max-w-xl mx-auto">Conoce más sobre nuestra filosofía de trabajo y nuestro equipo.
        </p>

        <div
            class="aspect-w-16 aspect-h-9 w-full bg-gray-800 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] border border-gray-700 relative group cursor-pointer">
            <!-- Placeholder for Video -->
            <img src="img/100_1668.JPG"
                class="w-full h-full object-cover opacity-50 group-hover:opacity-70 transition duration-500 zoom-crop">

            <div class="absolute inset-0 flex items-center justify-center">
                <div
                    class="w-24 h-24 bg-construtan-orange rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300 animate-pulse">
                    <i class="fas fa-play text-white text-3xl ml-2"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-gradient-to-r from-construtan-orange to-orange-600 text-center relative">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
    <div class="container mx-auto px-4 relative z-10 max-w-4xl">
        <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-8 tracking-tight drop-shadow-md">¿LISTO
            PARA INICIAR TU PROYECTO?</h2>
        <p class="text-white/90 mb-10 text-xl font-light max-w-2xl mx-auto">
            Cuéntanos tus ideas y nosotros las convertiremos en una realidad sólida y duradera. Presupuesto gratis en 24
            horas.
        </p>
        <button onclick="toggleSidebar()"
            class="inline-block px-12 py-5 bg-white text-construtan-orange font-bold rounded-full hover:bg-gray-100 transition duration-300 shadow-xl hover:shadow-2xl text-lg transform hover:-translate-y-1 cursor-pointer">
            CONTACTAR AHORA
        </button>
    </div>
</section>

<?php include 'includes/footer.php'; ?>