<!-- Footer -->
<footer class="bg-gray-900 text-white pt-24 pb-12 border-t-4 border-construtan-orange relative overflow-hidden">
    <!-- Background element -->
    <div
        class="absolute top-0 right-0 p-40 bg-white opacity-5 transform rotate-45 translate-x-10 -translate-y-10 rounded-full blur-3xl">
    </div>

    <div class="container mx-auto px-6 max-w-7xl grid grid-cols-1 md:grid-cols-4 gap-12 mb-16 relative z-10">
        <!-- Brand -->
        <div class="md:col-span-1">
            <h3 class="text-3xl font-display font-bold mb-6 text-white tracking-wide">CONSTRU<span
                    class="text-construtan-orange">TAN</span></h3>
            <p class="text-gray-400 mb-6 text-sm leading-relaxed">
                Elevando el estándar de la construcción en el Litoral Central. Compromiso, sustentabilidad y diseño en
                cada metro cuadrado.
            </p>
            <div class="flex space-x-3">
                <a href="#"
                    class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-white hover:bg-construtan-orange hover:text-white transition-all duration-300 shadow-lg border border-gray-700 hover:border-construtan-orange"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="#"
                    class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-white hover:bg-construtan-orange hover:text-white transition-all duration-300 shadow-lg border border-gray-700 hover:border-construtan-orange"><i
                        class="fab fa-instagram"></i></a>
                <a href="#"
                    class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-white hover:bg-green-500 hover:text-white transition-all duration-300 shadow-lg border border-gray-700 hover:border-green-500"><i
                        class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <!-- Links 1 -->
        <div>
            <h4 class="text-lg font-display font-bold mb-6 text-white border-b-2 border-gray-800 pb-2 inline-block">
                Nuestros Servicios</h4>
            <ul class="space-y-3 text-gray-400 text-sm">
                <li><a href="servicios.php" class="hover:text-construtan-orange transition-colors flex items-center"><i
                            class="fas fa-chevron-right text-xs mr-2 text-gray-600"></i> Construcción Habitacional</a>
                </li>
                <li><a href="servicios.php" class="hover:text-construtan-orange transition-colors flex items-center"><i
                            class="fas fa-chevron-right text-xs mr-2 text-gray-600"></i> Proyectos Comerciales</a></li>
                <li><a href="servicios.php" class="hover:text-construtan-orange transition-colors flex items-center"><i
                            class="fas fa-chevron-right text-xs mr-2 text-gray-600"></i> Ampliaciones</a></li>
                <li><a href="regularizaciones.php"
                        class="hover:text-construtan-orange transition-colors flex items-center"><i
                            class="fas fa-chevron-right text-xs mr-2 text-gray-600"></i> Regularizaciones DOM</a></li>
            </ul>
        </div>

        <!-- Links 2 -->
        <div>
            <h4 class="text-lg font-display font-bold mb-6 text-white border-b-2 border-gray-800 pb-2 inline-block">
                Empresa</h4>
            <ul class="space-y-3 text-gray-400 text-sm">
                <li><a href="nosotros.php" class="hover:text-construtan-orange transition-colors flex items-center"><i
                            class="fas fa-chevron-right text-xs mr-2 text-gray-600"></i> Sobre Nosotros</a></li>
                <li><a href="proyectos.php" class="hover:text-construtan-orange transition-colors flex items-center"><i
                            class="fas fa-chevron-right text-xs mr-2 text-gray-600"></i> Portafolio</a></li>
                <li><a href="contacto.php" class="hover:text-construtan-orange transition-colors flex items-center"><i
                            class="fas fa-chevron-right text-xs mr-2 text-gray-600"></i> Cotizar</a></li>
                <li><a href="#" class="hover:text-construtan-orange transition-colors flex items-center"><i
                            class="fas fa-chevron-right text-xs mr-2 text-gray-600"></i> Políticas</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="text-lg font-display font-bold mb-6 text-white border-b-2 border-gray-800 pb-2 inline-block">
                Contacto</h4>
            <ul class="space-y-5 text-gray-400 text-sm">
                <li class="flex items-start">
                    <i class="fas fa-map-marker-alt mt-1 mr-3 text-construtan-orange text-lg"></i>
                    <span class="leading-relaxed">Av. Isidoro Dubournais, El Quisco<br>Litoral Central, Chile</span>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-phone-alt mr-3 text-construtan-orange text-lg"></i>
                    <span class="font-bold text-white tracking-wider">+56 9 1234 5678</span>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-envelope mr-3 text-construtan-orange text-lg"></i>
                    <span class="hover:text-white transition-colors cursor-pointer">contacto@construtan.cl</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="border-t border-gray-800 relative z-10">
        <div
            class="container mx-auto px-6 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500">
            <p>&copy; <?php echo date('Y'); ?> <strong class="text-gray-400">CONSTRUTAN</strong>. Expertos en
                Construcción.</p>
            <div class="mt-4 md:mt-0 space-x-6">
                <a href="#" class="hover:text-white">Privacidad</a>
                <a href="#" class="hover:text-white">Términos</a>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/main.js"></script>
</body>

</html>