<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<section class="relative h-64 flex items-center justify-center parallax bg-fixed"
    style="background-image: url('img/100_0472.JPG');">
    <div class="absolute inset-0 bg-gray-900/70"></div>
    <div class="text-center text-white relative z-10 max-w-4xl px-4">
        <h1 class="text-3xl md:text-5xl font-display font-bold tracking-tight mb-2 animate-shine">TÉRMINOS Y CONDICIONES
        </h1>
        <p class="mt-2 text-gray-300 font-light text-sm">Actualizado:
            <?php echo date('Y'); ?>
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
        <div class="prose prose-lg text-gray-600 mx-auto">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">1. Introducción</h3>
            <p class="mb-6">
                Bienvenido al sitio web de <strong>CONSTRUTAN</strong>. Al acceder y utilizar este sitio web, usted
                acepta cumplir y estar sujeto a los siguientes términos y condiciones de uso. Si no está de acuerdo con
                alguna parte de estos términos, por favor no utilice nuestro sitio web.
            </p>

            <h3 class="text-2xl font-bold text-gray-800 mb-4">2. Servicios de Construcción</h3>
            <p class="mb-6">
                CONSTRUTAN ofrece servicios de construcción habitacional, comercial y regularizaciones. Todos los
                presupuestos entregados tienen una validez de 15 días hábiles, salvo que se especifique lo contrario,
                debido a la fluctuación de los materiales de construcción.
            </p>

            <h3 class="text-2xl font-bold text-gray-800 mb-4">3. Responsabilidades</h3>
            <p class="mb-6">
                Nos comprometemos a entregar obras de calidad cumpliendo con la normativa chilena vigente (OGUC). Sin
                embargo, el cliente es responsable de contar con el terreno apto para la construcción y los permisos
                previos que no dependan de nuestra gestión directa (como factibilidad de agua y luz).
            </p>

            <h3 class="text-2xl font-bold text-gray-800 mb-4">4. Propiedad Intelectual</h3>
            <p class="mb-6">
                Todo el contenido incluido en este sitio web, como textos, gráficos, logotipos, imágenes y videos, es
                propiedad de CONSTRUTAN y está protegido por las leyes de propiedad intelectual chilenas e
                internacionales.
            </p>

            <h3 class="text-2xl font-bold text-gray-800 mb-4">5. Política de Privacidad</h3>
            <p class="mb-6">
                La información personal recopilada a través de nuestros formularios de contacto será utilizada
                exclusivamente para responder a sus consultas y gestionar su proyecto. No compartiremos sus datos con
                terceros sin su consentimiento explícito.
            </p>

            <div class="mt-12 p-6 bg-gray-50 rounded-xl border-l-4 border-construtan-orange">
                <p class="text-sm italic">
                    Para más información o dudas legales, puede contactarnos directamente a través de nuestro <a
                        href="contacto.php" class="text-construtan-orange font-bold underline">formulario de
                        contacto</a>.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>