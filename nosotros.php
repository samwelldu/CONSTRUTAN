<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<section class="relative h-80 flex items-center justify-center parallax bg-fixed"
    style="background-image: url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1920&auto=format&fit=crop');">
    <div class="absolute inset-0 bg-gray-900/60"></div>
    <div class="text-center text-white relative z-10 max-w-4xl px-4">
        <h1 class="text-4xl md:text-6xl font-display font-bold tracking-tight mb-4 animate-shine">SOBRE NOSOTROS</h1>
        <p class="mt-2 text-lg md:text-xl text-gray-200 font-light">Construyendo confianza desde hace más de 15 años</p>
    </div>
</section>

<!-- Content -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6 max-w-7xl flex flex-col md:flex-row items-center gap-16">
        <div class="md:w-1/2 order-2 md:order-1">
            <h2 class="text-4xl font-display font-bold text-gray-800 mb-6">NUESTRA HISTORIA</h2>
            <div class="w-20 h-1.5 bg-construtan-orange mb-8 rounded-full"></div>
            <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                CONSTRUTAN nace en el corazón del Litoral Central con una misión clara: <strong>profesionalizar el rubro
                    de la construcción en la zona</strong>.
            </p>
            <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                Comenzamos como un emprendimiento familiar y, gracias al esfuerzo y la recomendación de nuestros
                clientes, hoy somos un referente local. Hemos construido más de 5600 metros cuadrados, pero nuestro
                mayor logro es la confianza que nuestros vecinos depositan en nosotros.
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                Nos destacamos por utilizar proveedores locales, fomentando la economía de la zona, y por un estricto
                respeto al medio ambiente, asegurando que el desarrollo sea amigable con nuestro entorno natural.
            </p>
        </div>
        <div class="md:w-1/2 order-1 md:order-2">
            <div class="relative">
                <div class="absolute -inset-4 bg-construtan-orange/20 rounded-2xl transform rotate-3"></div>
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=800&auto=format&fit=crop"
                    alt="Equipo Construtan"
                    class="relative rounded-2xl shadow-2xl w-full transform -rotate-3 hover:rotate-0 transition duration-500">
            </div>
        </div>
    </div>
</section>

<!-- Team/Values -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-display font-bold text-gray-800">NUESTROS VALORES</h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Los pilares que sostienen cada uno de nuestros proyectos.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div
                class="bg-white p-8 rounded-2xl shadow-lg text-center hover:-translate-y-2 transition duration-300 border-b-4 border-transparent hover:border-construtan-orange">
                <div
                    class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6 text-construtan-orange">
                    <i class="fas fa-medal text-3xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800">Calidad</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Materiales certificados y mano de obra experta en cada
                    detalle.</p>
            </div>

            <div
                class="bg-white p-8 rounded-2xl shadow-lg text-center hover:-translate-y-2 transition duration-300 border-b-4 border-transparent hover:border-construtan-orange">
                <div
                    class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6 text-construtan-orange">
                    <i class="fas fa-handshake text-3xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800">Confianza</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Transparencia total en presupuestos y cumplimiento
                    estricto de plazos.</p>
            </div>

            <div
                class="bg-white p-8 rounded-2xl shadow-lg text-center hover:-translate-y-2 transition duration-300 border-b-4 border-transparent hover:border-green-500">
                <div
                    class="w-16 h-16 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-6 text-green-500">
                    <i class="fas fa-tree text-3xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800">Sustentabilidad</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Compromiso real con el manejo de residuos y cuidado del
                    entorno.</p>
            </div>

            <div
                class="bg-white p-8 rounded-2xl shadow-lg text-center hover:-translate-y-2 transition duration-300 border-b-4 border-transparent hover:border-construtan-orange">
                <div
                    class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6 text-construtan-orange">
                    <i class="fas fa-users text-3xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-800">Cercanía</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Trato directo, personalizado y comunicación constante
                    durante la obra.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>