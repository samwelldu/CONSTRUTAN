<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSTRUTAN - Constructora Litoral Central</title>
    <meta name="description"
        content="Constructora CONSTRUTAN, expertos en construcción, regularizaciones y proyectos en el Litoral Central de Chile. Más de 5600 m2 construidos.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Oswald:wght@400;500;700&display=swap"
        rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="assets/css/output.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .nav-item {
            position: relative;
        }

        .nav-item::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #E65100;
            transition: width 0.3s;
        }

        .nav-item:hover::after {
            width: 100%;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Preloader -->
    <div id="loader-wrapper" class="loader-wrapper transition-opacity duration-700 ease-in-out">
        <div class="loader"></div>
    </div>

    <!-- Topheader -->
    <div class="bg-gradient-to-r from-construtan-brown to-gray-800 text-white py-3 text-sm hidden md:block shadow-sm">
        <div class="container mx-auto px-6 max-w-7xl flex justify-between items-center">
            <h1 class="text-xs font-light tracking-wider opacity-90 !text-white"><i
                    class="fas fa-hard-hat mr-2"></i>CONSTRUCCIÓN Y
                REGULARIZACIONES EN EL LITORAL CENTRAL</h1>
            <div class="flex space-x-6 items-center">
                <a href="mailto:contacto@construtan.cl"
                    class="hover:text-construtan-orange transition-colors duration-300 flex items-center group">
                    <i class="fas fa-envelope mr-2 text-construtan-orange group-hover:text-white transition-colors"></i>
                    contacto@construtan.cl
                </a>
                <a href="tel:+56912345678"
                    class="hover:text-construtan-orange transition-colors duration-300 flex items-center group">
                    <i class="fas fa-phone mr-2 text-construtan-orange group-hover:text-white transition-colors"></i>
                    +56 9 1234 5678
                </a>
                <div class="flex space-x-3 border-l border-gray-600 pl-6">
                    <a href="#" class="hover:text-construtan-orange transition-colors "><i
                            class="fab fa-facebook-f text-lg"></i></a>
                    <a href="#" class="hover:text-construtan-orange transition-colors "><i
                            class="fab fa-instagram text-lg"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="bg-white/95 backdrop-blur-sm shadow-md sticky top-0 z-50 transition-all duration-300" id="main-nav">
        <div class="container mx-auto px-6 max-w-7xl py-5 flex justify-between items-center">
            <!-- Logo -->
            <a href="index.php"
                class="text-3xl font-display font-bold text-construtan-brown tracking-tight flex items-center">
                <i class="fas fa-city text-construtan-orange mr-2 text-2xl"></i>
                CONSTRU<span class="text-construtan-orange">TAN</span>
            </a>

            <!-- Desktop Menu -->
            <div
                class="hidden md:flex space-x-8 lg:space-x-10 font-bold text-gray-700 uppercase text-xs lg:text-sm tracking-widest">
                <a href="index.php" class="nav-item hover:text-construtan-orange transition-colors py-2">Inicio</a>
                <a href="servicios.php"
                    class="nav-item hover:text-construtan-orange transition-colors py-2">Servicios</a>
                <a href="proyectos.php"
                    class="nav-item hover:text-construtan-orange transition-colors py-2">Proyectos</a>
                <a href="nosotros.php" class="nav-item hover:text-construtan-orange transition-colors py-2">Nosotros</a>
                <a href="regularizaciones.php"
                    class="nav-item hover:text-construtan-orange transition-colors py-2">Regularizaciones</a>
                <a href="contacto.php" class="nav-item hover:text-construtan-orange transition-colors py-2">Contacto</a>
            </div>

            <button onclick="toggleSidebar()"
                class="hidden md:inline-block px-6 py-2 bg-construtan-orange/10 text-construtan-orange font-bold rounded-full hover:bg-construtan-orange hover:text-white transition duration-300 text-sm border border-construtan-orange/20 cursor-pointer">
                COTIZAR
            </button>

            <!-- Mobile Menu Button -->
            <button onclick="toggleMobileMenu()"
                class="md:hidden text-gray-800 text-2xl focus:outline-none p-2 rounded hover:bg-gray-100">
                <i class="fas fa-bars"></i>
            </button>
        </div>


    </nav>

    <!-- Mobile Menu Sidebar (Hidden by default) -->
    <div id="mobile-menu"
        class="fixed inset-y-0 left-0 w-72 bg-white shadow-2xl transform -translate-x-full transition-transform duration-300 z-[60] overflow-y-auto block md:hidden">
        <div class="p-6">
            <div class="flex justify-between items-center mb-8 border-b border-gray-100 pb-4">
                <a href="index.php" class="text-xl font-display font-bold text-construtan-brown tracking-tight">
                    <i class="fas fa-city text-construtan-orange mr-1"></i> CONSTRU<span
                        class="text-construtan-orange">TAN</span>
                </a>
                <button onclick="toggleMobileMenu()"
                    class="text-gray-400 hover:text-construtan-orange text-2xl focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="flex flex-col space-y-4 font-bold text-gray-700">
                <a href="index.php"
                    class="block px-4 py-3 hover:bg-orange-50 hover:text-construtan-orange rounded-lg transition"><i
                        class="fas fa-home w-6 text-center mr-2 text-gray-400"></i> Inicio</a>
                <a href="servicios.php"
                    class="block px-4 py-3 hover:bg-orange-50 hover:text-construtan-orange rounded-lg transition"><i
                        class="fas fa-hammer w-6 text-center mr-2 text-gray-400"></i> Servicios</a>
                <a href="proyectos.php"
                    class="block px-4 py-3 hover:bg-orange-50 hover:text-construtan-orange rounded-lg transition"><i
                        class="fas fa-building w-6 text-center mr-2 text-gray-400"></i> Proyectos</a>
                <a href="nosotros.php"
                    class="block px-4 py-3 hover:bg-orange-50 hover:text-construtan-orange rounded-lg transition"><i
                        class="fas fa-users w-6 text-center mr-2 text-gray-400"></i> Nosotros</a>
                <a href="regularizaciones.php"
                    class="block px-4 py-3 hover:bg-orange-50 hover:text-construtan-orange rounded-lg transition"><i
                        class="fas fa-clipboard-check w-6 text-center mr-2 text-gray-400"></i> Regularizaciones</a>
                <a href="contacto.php"
                    class="block px-4 py-3 hover:bg-orange-50 hover:text-construtan-orange rounded-lg transition"><i
                        class="fas fa-envelope w-6 text-center mr-2 text-gray-400"></i> Contacto</a>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-100">
                <button onclick="toggleMobileMenu(); toggleSidebar();"
                    class="w-full py-3 bg-construtan-orange text-white font-bold rounded-lg hover:bg-orange-600 transition shadow-md">
                    COTIZAR AHORA
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Contact (Hidden by default) -->
    <div id="contact-sidebar"
        class="fixed inset-y-0 right-0 w-96 bg-white shadow-2xl transform translate-x-full transition-transform duration-300 z-[60] overflow-y-auto">
        <div class="p-8">
            <div class="flex justify-between items-center mb-10">
                <h3 class="text-2xl font-display font-bold text-construtan-brown">COTIZAR AHORA</h3>
                <button onclick="toggleSidebar()"
                    class="text-gray-400 hover:text-construtan-orange text-2xl focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <p class="text-gray-600 mb-8 text-sm leading-relaxed">
                Cuéntanos sobre tu proyecto. Nuestros expertos analizarán tu requerimiento y te contactarán a la
                brevedad.
            </p>

            <div class="space-y-6 mb-10">
                <div class="flex items-start">
                    <i class="fas fa-phone-alt text-construtan-orange mt-1 mr-3"></i>
                    <div>
                        <div class="font-bold text-gray-800">Llámanos</div>
                        <a href="tel:+56912345678" class="text-gray-500 hover:text-construtan-orange transition">+56 9
                            1234 5678</a>
                    </div>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-envelope text-construtan-orange mt-1 mr-3"></i>
                    <div>
                        <div class="font-bold text-gray-800">Escríbenos</div>
                        <a href="mailto:contacto@construtan.cl"
                            class="text-gray-500 hover:text-construtan-orange transition">contacto@construtan.cl</a>
                    </div>
                </div>
            </div>

            <div class="border-t pt-8">
                <a href="contacto.php"
                    class="block w-full py-4 bg-construtan-orange text-white text-center font-bold rounded-lg hover:bg-orange-600 transition shadow-lg mb-4">
                    IR AL FORMULARIO COMPLETO
                </a>
                <p class="text-xs text-center text-gray-400">
                    Al cotizar aceptas nuestros <a href="terminos.php"
                        class="underline hover:text-construtan-orange">Términos y Condiciones</a>.
                </p>
            </div>
        </div>
    </div>
    <!-- Sidebar Overlay -->
    <div id="sidebar-overlay" onclick="closeAllSidebars()"
        class="fixed inset-0 bg-black/50 z-[55] hidden transition-opacity duration-300 opacity-0"></div>