<?php include 'includes/header.php'; ?>

<!-- 
    DOCUMENTACIÓN DE ETIQUETAS DE PROYECTOS:
    - Residencial: Casas, departamentos, viviendas unifamiliares. (Color: Orange)
    - Vacacional: Cabañas, segunda vivienda, turismo. (Color: Green)
    - Comercial: Locales, oficinas, retail. (Color: Blue)
    - Industrial: Galpones, bodegas. (Color: Gray)
    - Ampliación: Quinchos, segundos pisos, terrazas. (Color: Purple)
-->

<!-- Page Header -->
<section class="relative h-80 flex items-center justify-center parallax bg-fixed"
    style="background-image: url('img/100_2186.JPG');">
    <div class="absolute inset-0 bg-gray-900/60"></div>
    <div class="text-center text-white relative z-10 max-w-4xl px-4">
        <h1 class="text-4xl md:text-6xl font-display font-bold tracking-tight mb-4 animate-shine">NUESTROS PROYECTOS
        </h1>
        <p class="mt-2 text-lg md:text-xl text-gray-200 font-light">Una muestra de calidad y compromiso en el Litoral
        </p>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6 max-w-7xl">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Project 1 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg group hover:shadow-2xl transition duration-300">
                <div class="relative overflow-hidden h-72">
                    <img src="img/100_0472.JPG" alt="Casa Algarrobo" class="w-full h-full object-cover zoom-crop">
                    <div
                        class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="openProjectModal('Casa Mediterránea', 'img/100_0472.JPG', 'Construcción llave en mano de 140 m², estructura sólida con terminaciones en madera nativa. Ubicada en sector residencial de Algarrobo.', ['Residencial', 'Algarrobo', '140m2'])"
                            class="text-white font-bold border-2 border-white px-6 py-2 rounded-full uppercase tracking-wider text-sm hover:bg-white hover:text-black transition cursor-pointer">
                            Ver Detalle
                        </button>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-center mb-4">
                        <span
                            class="text-xs font-bold text-white bg-construtan-orange px-3 py-1 rounded-full uppercase tracking-wide shadow-md">Residencial</span>
                        <span class="text-gray-400 text-xs"><i class="fas fa-map-marker-alt mr-1"></i> Algarrobo</span>
                    </div>
                    <h3 class="text-xl font-display font-bold mb-3 text-gray-800">Casa Mediterránea</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Construcción llave en mano de 140 m², estructura
                        sólida.</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg group hover:shadow-2xl transition duration-300">
                <div class="relative overflow-hidden h-72">
                    <img src="img/102_0074.JPG" alt="Cabaña El Tabo" class="w-full h-full object-cover zoom-crop">
                    <div
                        class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="openProjectModal('Cabaña Rústica', 'img/102_0074.JPG', 'Hermosa cabaña de estilo rústico construida con madera impregnada y detalles en piedra local. Ideal para vacaciones.', ['Vacacional', 'El Tabo', 'Madera'])"
                            class="text-white font-bold border-2 border-white px-6 py-2 rounded-full uppercase tracking-wider text-sm hover:bg-white hover:text-black transition cursor-pointer">
                            Ver Detalle
                        </button>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-center mb-4">
                        <span
                            class="text-xs font-bold text-white bg-green-600 px-3 py-1 rounded-full uppercase tracking-wide shadow-md">Vacacional</span>
                        <span class="text-gray-400 text-xs"><i class="fas fa-map-marker-alt mr-1"></i> El Tabo</span>
                    </div>
                    <h3 class="text-xl font-display font-bold mb-3 text-gray-800">Cabaña Rústica</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Construcción en madera impregnada y piedra, 80 m².
                    </p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg group hover:shadow-2xl transition duration-300">
                <div class="relative overflow-hidden h-72">
                    <img src="img/100_3572.JPG" alt="Local San Antonio" class="w-full h-full object-cover zoom-crop">
                    <div
                        class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="openProjectModal('Proyecto Estructural', 'img/100_3572.JPG', 'Obra gruesa y terminaciones para proyecto comercial en el centro de San Antonio.', ['Comercial', 'San Antonio', 'Obra Gruesa'])"
                            class="text-white font-bold border-2 border-white px-6 py-2 rounded-full uppercase tracking-wider text-sm hover:bg-white hover:text-black transition cursor-pointer">
                            Ver Detalle
                        </button>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-center mb-4">
                        <span
                            class="text-xs font-bold text-white bg-blue-600 px-3 py-1 rounded-full uppercase tracking-wide shadow-md">Comercial</span>
                        <span class="text-gray-400 text-xs"><i class="fas fa-map-marker-alt mr-1"></i> San
                            Antonio</span>
                    </div>
                    <h3 class="text-xl font-display font-bold mb-3 text-gray-800">Proyecto Estructural</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Remodelación estructura y ampliación de superficie.
                    </p>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg group hover:shadow-2xl transition duration-300">
                <div class="relative overflow-hidden h-72">
                    <img src="img/Quinchos/102_0087.JPG" alt="Quincho Cartagena"
                        class="w-full h-full object-cover zoom-crop">
                    <div
                        class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="openProjectModal('Quincho Familiar', 'img/Quinchos/102_0087.JPG', 'Espectacular quincho con horno de barro, parrilla en obra y vigas a la vista. El lugar perfecto para compartir.', ['Ampliación', 'Cartagena', 'Quincho'])"
                            class="text-white font-bold border-2 border-white px-6 py-2 rounded-full uppercase tracking-wider text-sm hover:bg-white hover:text-black transition cursor-pointer">
                            Ver Detalle
                        </button>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-center mb-4">
                        <span
                            class="text-xs font-bold text-white bg-purple-600 px-3 py-1 rounded-full uppercase tracking-wide shadow-md">Ampliación</span>
                        <span class="text-gray-400 text-xs"><i class="fas fa-map-marker-alt mr-1"></i> Cartagena</span>
                    </div>
                    <h3 class="text-xl font-display font-bold mb-3 text-gray-800">Quincho Familiar</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Espacio de recreación con parrilla y horno de
                        barro.</p>
                </div>
            </div>
            <!-- Project 5 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg group hover:shadow-2xl transition duration-300">
                <div class="relative overflow-hidden h-72">
                    <img src="img/102_0081.JPG" alt="Casa El Quisco" class="w-full h-full object-cover zoom-crop">
                    <div
                        class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <button
                            onclick="openProjectModal('Residencia El Quisco', 'img/102_0081.JPG', 'Casa solida de 2 pisos con finas terminaciones en piedra y madera.', ['Residencial', 'El Quisco', 'Piedra'])"
                            class="text-white font-bold border-2 border-white px-6 py-2 rounded-full uppercase tracking-wider text-sm hover:bg-white hover:text-black transition cursor-pointer">
                            Ver Detalle
                        </button>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-center mb-4">
                        <span
                            class="text-xs font-bold text-white bg-construtan-orange px-3 py-1 rounded-full uppercase tracking-wide shadow-md">Residencial</span>
                        <span class="text-gray-400 text-xs"><i class="fas fa-map-marker-alt mr-1"></i> El Quisco</span>
                    </div>
                    <h3 class="text-xl font-display font-bold mb-3 text-gray-800">Residencia El Quisco</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Vivienda sólida de 2 pisos con revestimiento en
                        piedra.</p>
                </div>
            </div>

        </div>

        <div class="text-center mt-20">
            <button onclick="toggleSidebar()"
                class="inline-block px-10 py-4 border-2 border-construtan-brown text-construtan-brown font-bold rounded-full hover:bg-construtan-brown hover:text-white transition duration-300 uppercase tracking-widest text-sm cursor-pointer">
                Cotizar mi Proyecto
            </button>
        </div>
    </div>
</section>

<!-- Project Modal -->
<div id="project-modal" class="fixed inset-0 z-[70] hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Overlay -->
        <div class="fixed inset-0 bg-black/80 transition-opacity" aria-hidden="true" onclick="closeProjectModal()">
        </div>

        <!-- Modal Panel -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div
            class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full scale-95 opacity-0 duration-300 ease-out">

            <div class="relative">
                <button onclick="closeProjectModal()"
                    class="absolute top-4 right-4 bg-white/20 hover:bg-white text-white hover:text-gray-800 rounded-full w-10 h-10 flex items-center justify-center transition focus:outline-none z-10 backdrop-blur-sm">
                    <i class="fas fa-times text-xl"></i>
                </button>
                <img id="modal-image" src="" alt="Project" class="w-full h-[500px] object-cover">
            </div>

            <div class="p-8 md:p-10">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                    <h3 class="text-3xl font-display font-bold text-gray-900" id="modal-title">Project Title</h3>
                    <div id="modal-tags" class="mt-4 md:mt-0 flex flex-wrap">
                        <!-- Tags will be injected here -->
                    </div>
                </div>

                <p class="text-gray-600 text-lg leading-relaxed mb-8" id="modal-description">
                    Description goes here.
                </p>

                <div class="flex justify-end">
                    <button onclick="toggleSidebar(); closeProjectModal();"
                        class="px-8 py-3 bg-construtan-orange text-white font-bold rounded-full hover:bg-orange-600 transition shadow-lg">
                        COTIZAR ESTE ESTILO
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>