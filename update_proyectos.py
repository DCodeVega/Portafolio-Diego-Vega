import re

with open('resources/views/portfolio.blade.php', 'r', encoding='utf-8') as f:
    content = f.read()

proyectos_section = """    <!-- Proyectos -->
    <section id="proyectos" class="py-24 relative z-10 bg-space-800/60 backdrop-blur-sm">
        <div class="container mx-auto px-6">
            <div class="flex items-center gap-4 mb-16 justify-center">
                <div class="h-px w-12 bg-gradient-to-r from-transparent to-cyan"></div>
                <h2 class="text-4xl font-bold font-sans text-transparent bg-clip-text bg-gradient-to-r from-cyan to-accent text-center">Proyectos Destacados</h2>
                <div class="h-px w-12 bg-gradient-to-l from-transparent to-accent"></div>
            </div>

            <!-- Proyectos Completados -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Proyecto 1 -->
                <div class="glass-card overflow-hidden group flex flex-col h-full" onclick="openProjectModal('project1')">
                    <div class="h-56 bg-space-900 flex items-center justify-center overflow-hidden relative cursor-pointer">
                        <img src="/images/proyectos/proyecto1.jpg" onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop'" alt="Proyecto" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-space-900 via-transparent to-transparent opacity-90"></div>
                        <!-- Overlay on hover -->
                        <div class="absolute inset-0 bg-cyan/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="px-4 py-2 bg-space-900/80 rounded-full text-white font-medium border border-cyan/50 backdrop-blur-md transform translate-y-4 group-hover:translate-y-0 transition-all duration-300"><i class="fas fa-search-plus mr-2"></i>Ver Detalles</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-cyan transition-colors">Sistema de Gestión Empresarial</h3>
                        <p class="text-gray-400 text-sm mb-6 flex-grow">Plataforma integral para control de inventarios, ventas y analítica de datos en tiempo real.</p>
                        
                        <!-- Tecnologías (Iconos) -->
                        <div class="flex flex-wrap items-center gap-3 mb-6">
                            <i class="fab fa-laravel text-2xl text-[#FF2D20]" title="Laravel"></i>
                            <i class="fab fa-vuejs text-2xl text-[#4FC08D]" title="Vue/Livewire"></i>
                            <i class="fas fa-wind text-2xl text-[#06B6D4]" title="Tailwind CSS"></i>
                            <i class="fas fa-database text-2xl text-[#00758F]" title="MySQL"></i>
                        </div>
                        
                        <div class="flex gap-4 mt-auto pt-4 border-t border-white/10">
                            <a href="https://github.com/DCodeVega" target="_blank" onclick="event.stopPropagation()" class="text-gray-400 hover:text-white transition-colors" title="Código Fuente"><i class="fab fa-github text-xl"></i></a>
                            <button class="ml-auto text-cyan hover:text-cyan-400 text-sm font-medium flex items-center gap-1">Demo <i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2 -->
                <div class="glass-card overflow-hidden group flex flex-col h-full" onclick="openProjectModal('project2')">
                    <div class="h-56 bg-space-900 flex items-center justify-center overflow-hidden relative cursor-pointer">
                        <img src="/images/proyectos/proyecto2.jpg" onerror="this.src='https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=2070&auto=format&fit=crop'" alt="Proyecto IoT" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-space-900 via-transparent to-transparent opacity-90"></div>
                        <div class="absolute inset-0 bg-cyan/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="px-4 py-2 bg-space-900/80 rounded-full text-white font-medium border border-cyan/50 backdrop-blur-md transform translate-y-4 group-hover:translate-y-0 transition-all duration-300"><i class="fas fa-search-plus mr-2"></i>Ver Detalles</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-cyan transition-colors">Red de Sensores IoT</h3>
                        <p class="text-gray-400 text-sm mb-6 flex-grow">Sistema de monitoreo ambiental en tiempo real mediante dispositivos edge y protocolos ligeros.</p>
                        
                        <!-- Tecnologías (Iconos) -->
                        <div class="flex flex-wrap items-center gap-3 mb-6">
                            <i class="fab fa-python text-2xl text-[#3776AB]" title="Python"></i>
                            <i class="fab fa-docker text-2xl text-[#2496ED]" title="Docker"></i>
                            <i class="fas fa-network-wired text-2xl text-[#5A5A5A]" title="MQTT/Redes"></i>
                            <i class="fab fa-raspberry-pi text-2xl text-[#C51A4A]" title="Raspberry Pi"></i>
                        </div>
                        
                        <div class="flex gap-4 mt-auto pt-4 border-t border-white/10">
                            <a href="https://github.com/DCodeVega" target="_blank" onclick="event.stopPropagation()" class="text-gray-400 hover:text-white transition-colors" title="Código Fuente"><i class="fab fa-github text-xl"></i></a>
                            <button class="ml-auto text-cyan hover:text-cyan-400 text-sm font-medium flex items-center gap-1">Demo <i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 3 -->
                <div class="glass-card overflow-hidden group flex flex-col h-full" onclick="openProjectModal('project3')">
                    <div class="h-56 bg-space-900 flex items-center justify-center overflow-hidden relative cursor-pointer">
                        <img src="/images/proyectos/proyecto3.jpg" onerror="this.src='https://images.unsplash.com/photo-1555949963-aa79dcee981c?q=80&w=2070&auto=format&fit=crop'" alt="Machine Learning" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-space-900 via-transparent to-transparent opacity-90"></div>
                        <div class="absolute inset-0 bg-cyan/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="px-4 py-2 bg-space-900/80 rounded-full text-white font-medium border border-cyan/50 backdrop-blur-md transform translate-y-4 group-hover:translate-y-0 transition-all duration-300"><i class="fas fa-search-plus mr-2"></i>Ver Detalles</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-cyan transition-colors">Modelo ML Predictivo</h3>
                        <p class="text-gray-400 text-sm mb-6 flex-grow">Algoritmo de machine learning para forecasting de ventas empleando redes neuronales recurrentes.</p>
                        
                        <div class="flex flex-wrap items-center gap-3 mb-6">
                            <i class="fab fa-python text-2xl text-[#3776AB]" title="Python"></i>
                            <i class="fas fa-brain text-2xl text-[#FF6F00]" title="TensorFlow/ML"></i>
                            <i class="fas fa-chart-line text-2xl text-[#150458]" title="Pandas"></i>
                        </div>
                        
                        <div class="flex gap-4 mt-auto pt-4 border-t border-white/10">
                            <a href="https://github.com/DCodeVega" target="_blank" onclick="event.stopPropagation()" class="text-gray-400 hover:text-white transition-colors" title="Código Fuente"><i class="fab fa-github text-xl"></i></a>
                            <button class="ml-auto text-cyan hover:text-cyan-400 text-sm font-medium flex items-center gap-1">Demo <i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyectos en Desarrollo -->
            <div class="flex items-center gap-4 mb-12 justify-center mt-12">
                <div class="h-px w-8 bg-gradient-to-r from-transparent to-accent"></div>
                <h3 class="text-3xl font-bold font-sans text-white text-center">En Desarrollo <span class="text-accent">(Próximamente)</span></h3>
                <div class="h-px w-8 bg-gradient-to-l from-transparent to-accent"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Proyecto Dev 1 -->
                <div class="glass-card overflow-hidden group flex flex-col h-full border-accent/30" onclick="openProjectModal('project4')">
                    <div class="h-56 bg-space-900 flex items-center justify-center overflow-hidden relative cursor-pointer">
                        <div class="absolute inset-0 bg-space-900/60 z-10 flex flex-col items-center justify-center backdrop-blur-[2px] transition-all duration-300 group-hover:backdrop-blur-sm">
                            <i class="fas fa-tools text-4xl text-accent mb-2"></i>
                            <span class="text-white font-medium tracking-widest uppercase text-sm border border-accent/50 px-3 py-1 rounded-full bg-space-900/80 mt-2 transform group-hover:scale-105 transition-transform"><i class="fas fa-search-plus mr-2"></i>Ver Avance</span>
                        </div>
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=2070&auto=format&fit=crop" alt="En Desarrollo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out opacity-40">
                    </div>
                    <div class="p-6 flex flex-col flex-grow relative">
                        <div class="absolute -top-4 right-6 bg-accent text-white text-xs font-bold px-3 py-1 rounded-full shadow-[0_0_10px_rgba(139,92,246,0.6)]">WIP</div>
                        <h3 class="text-xl font-bold text-gray-200 mb-2 group-hover:text-accent transition-colors">App Móvil E-Commerce</h3>
                        <p class="text-gray-500 text-sm mb-6 flex-grow">Aplicación multiplataforma para la gestión de tiendas virtuales con integración de pasarelas de pago.</p>
                        
                        <div class="flex flex-wrap items-center gap-3 mb-6 opacity-60">
                            <i class="fab fa-react text-2xl text-[#61DAFB]" title="React Native"></i>
                            <i class="fab fa-node-js text-2xl text-[#339933]" title="Node.js"></i>
                            <i class="fas fa-database text-2xl text-[#47A248]" title="MongoDB"></i>
                        </div>
                        
                        <div class="flex gap-4 mt-auto pt-4 border-t border-white/5 justify-between">
                            <button class="w-full text-accent/80 hover:text-accent text-sm font-medium flex items-center justify-center gap-2" disabled>
                                <i class="fas fa-hard-hat"></i> En Desarrollo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>"""

modal_code = """
    <!-- Project Modal Overlay -->
    <div id="projectModal" class="fixed inset-0 z-[100] flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-space-900/90 backdrop-blur-md" onclick="closeProjectModal()"></div>
        
        <!-- Modal Content -->
        <div class="relative w-11/12 max-w-6xl h-[85vh] md:h-[75vh] glass-card border border-cyan/30 flex flex-col md:flex-row overflow-hidden transform scale-95 transition-transform duration-300" id="modalContainer">
            <!-- Close button -->
            <button onclick="closeProjectModal()" class="absolute top-4 right-4 z-50 w-10 h-10 flex items-center justify-center rounded-full bg-space-900/80 text-white hover:text-cyan hover:bg-space-700 transition-colors border border-white/10 shadow-lg">
                <i class="fas fa-times text-xl"></i>
            </button>

            <!-- Left: Carousel (75%) -->
            <div class="w-full md:w-3/4 h-1/2 md:h-full relative bg-black flex items-center justify-center group overflow-hidden">
                <img id="modalImage" src="" alt="Vista del Proyecto" class="w-full h-full object-cover opacity-100 transition-opacity duration-500">
                
                <!-- Overlay gradient for bottom -->
                <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-space-900 to-transparent pointer-events-none"></div>

                <!-- Controls -->
                <button onclick="prevModalImage()" class="absolute left-4 w-12 h-12 flex items-center justify-center rounded-full bg-space-900/70 text-white hover:bg-cyan/80 hover:text-space-900 transition-all opacity-0 md:group-hover:opacity-100 backdrop-blur-sm border border-white/10 focus:opacity-100">
                    <i class="fas fa-chevron-left text-xl"></i>
                </button>
                <button onclick="nextModalImage()" class="absolute right-4 w-12 h-12 flex items-center justify-center rounded-full bg-space-900/70 text-white hover:bg-cyan/80 hover:text-space-900 transition-all opacity-0 md:group-hover:opacity-100 backdrop-blur-sm border border-white/10 focus:opacity-100">
                    <i class="fas fa-chevron-right text-xl"></i>
                </button>
                
                <!-- Dots -->
                <div class="absolute bottom-6 flex gap-2 z-20" id="modalDots">
                    <!-- Dots injected by JS -->
                </div>
            </div>

            <!-- Right: Details (25%) -->
            <div class="w-full md:w-1/4 h-1/2 md:h-full bg-space-800/95 p-6 flex flex-col border-t md:border-t-0 md:border-l border-white/10 overflow-y-auto">
                <h3 id="modalTitle" class="text-xl md:text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan to-accent mb-4 font-sans leading-tight"></h3>
                
                <div class="mb-6 flex flex-wrap gap-2" id="modalTechs">
                    <!-- Tech badges injected by JS -->
                </div>

                <div class="flex-grow">
                    <h4 class="text-white font-semibold mb-3 flex items-center gap-2 text-sm uppercase tracking-wider"><i class="fas fa-image text-cyan"></i> Detalles de la vista:</h4>
                    <p id="modalDescription" class="text-gray-300 text-sm leading-relaxed mb-6 p-4 rounded-lg bg-space-900/50 border border-white/5"></p>
                    
                    <h4 class="text-white font-semibold mb-2 flex items-center gap-2 text-sm uppercase tracking-wider"><i class="fas fa-satellite-dish text-accent"></i> Estado actual:</h4>
                    <p id="modalStatus" class="text-gray-400 text-sm italic bg-space-900/30 px-3 py-2 rounded-lg"></p>
                </div>

                <div class="mt-6 pt-6 border-t border-white/10 flex gap-3" id="modalActions">
                    <!-- Actions injected by JS -->
                </div>
            </div>
        </div>
    </div>

    <!-- Project Data & JS -->
    <script>
        const projectData = {
            'project1': {
                title: 'Sistema de Gestión Empresarial',
                techs: ['Laravel 10', 'Vue.js', 'Tailwind', 'MySQL'],
                status: 'Completado - En Producción',
                linkCode: 'https://github.com/DCodeVega',
                linkDemo: '#',
                images: [
                    { src: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070', desc: 'Panel de Control Principal (Dashboard) con gráficos en tiempo real analizando el volumen de ventas y el estado del inventario global.' },
                    { src: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015', desc: 'Vista detallada del módulo de Análisis Financiero. Permite exportar reportes dinámicos usando integraciones de bibliotecas gráficas.' },
                    { src: 'https://images.unsplash.com/photo-1555099962-4199c345e5dd?q=80&w=2070', desc: 'Sistema de código backend desarrollado en Laravel. Implementa autenticación robusta y una API RESTful para conectar con la app móvil.' }
                ]
            },
            'project2': {
                title: 'Red de Sensores IoT',
                techs: ['Python', 'Docker', 'MQTT', 'Raspberry Pi'],
                status: 'Completado - Operativo',
                linkCode: 'https://github.com/DCodeVega',
                linkDemo: '#',
                images: [
                    { src: 'https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=2070', desc: 'Placa madre del controlador central Raspberry Pi manejando múltiples nodos de sensores de humedad y temperatura.' },
                    { src: 'https://images.unsplash.com/photo-1558346490-a72e53ae2d4f?q=80&w=2070', desc: 'Interfaz del bróker MQTT monitorizando el flujo continuo de paquetes de datos a través de la red local.' },
                    { src: 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070', desc: 'Terminal de ciberseguridad configurada para encriptar todos los datos transferidos hacia el clúster de base de datos.' }
                ]
            },
            'project3': {
                title: 'Modelo ML Predictivo',
                techs: ['Python', 'TensorFlow', 'Pandas'],
                status: 'Finalizado (Versión 1.2)',
                linkCode: 'https://github.com/DCodeVega',
                linkDemo: '#',
                images: [
                    { src: 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?q=80&w=2070', desc: 'Líneas de código del entrenamiento de la red neuronal empleando TensorFlow sobre un dataset procesado de 50GB.' },
                    { src: 'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?q=80&w=2076', desc: 'Visualización de datos resultante: curvas de predicción cruzadas con los datos históricos de ventas.' },
                    { src: 'https://images.unsplash.com/photo-1518186285589-2f7649de83e0?q=80&w=2074', desc: 'Servidor local donde el modelo emite predicciones a través de un endpoint API expuesto para consumidores externos.' }
                ]
            },
            'project4': {
                title: 'App Móvil E-Commerce (WIP)',
                techs: ['React Native', 'Node.js', 'MongoDB'],
                status: 'En Desarrollo (Fase Beta)',
                linkCode: '#',
                linkDemo: '#',
                images: [
                    { src: 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=2070', desc: 'Estructura inicial del frontend responsivo de la aplicación. Interfaces y flujos de usuario (wireframes) en programación.' },
                    { src: 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=2070', desc: 'Testing en dispositivos físicos y emuladores para asegurar el rendimiento fluido en componentes nativos.' },
                    { src: 'https://images.unsplash.com/photo-1607082349566-187342175e2f?q=80&w=2070', desc: 'Integración en progreso de las pasarelas de pago utilizando APIs bancarias encriptadas.' }
                ]
            }
        };

        let currentProject = null;
        let currentImageIndex = 0;

        function openProjectModal(projectId) {
            currentProject = projectData[projectId];
            currentImageIndex = 0;
            
            if (!currentProject) return;

            // Populate static texts
            document.getElementById('modalTitle').innerText = currentProject.title;
            document.getElementById('modalStatus').innerText = currentProject.status;
            
            // Populate techs
            const techsContainer = document.getElementById('modalTechs');
            techsContainer.innerHTML = '';
            currentProject.techs.forEach(tech => {
                techsContainer.innerHTML += `<span class="px-2 py-1 bg-space-600/80 rounded border border-cyan/30 text-xs text-cyan tracking-wide">${tech}</span>`;
            });

            // Populate actions based on project status
            const actionsContainer = document.getElementById('modalActions');
            if (projectId === 'project4') {
                actionsContainer.innerHTML = `
                    <button class="w-full px-4 py-2 bg-space-600 text-gray-400 font-semibold rounded cursor-not-allowed flex items-center justify-center gap-2">
                        <i class="fas fa-hard-hat"></i> En Desarrollo
                    </button>
                `;
            } else {
                actionsContainer.innerHTML = `
                    <a href="${currentProject.linkCode}" target="_blank" class="flex-1 px-4 py-2 border border-cyan/50 text-cyan text-center font-semibold rounded hover:bg-cyan/10 transition-colors flex items-center justify-center gap-2">
                        <i class="fab fa-github"></i> Código
                    </a>
                    <a href="${currentProject.linkDemo}" target="_blank" class="flex-1 px-4 py-2 bg-gradient-to-r from-accent to-accent-purple text-white text-center font-semibold rounded hover:shadow-[0_0_15px_rgba(139,92,246,0.5)] transition-all flex items-center justify-center gap-2">
                        Demo <i class="fas fa-external-link-alt text-xs"></i>
                    </a>
                `;
            }

            // Update image and description
            updateModalImage();

            // Show modal with animation
            const modal = document.getElementById('projectModal');
            const container = document.getElementById('modalContainer');
            modal.classList.remove('hidden');
            // Small delay to allow display:block to apply before animating opacity
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                container.classList.remove('scale-95');
            }, 10);
            
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            const container = document.getElementById('modalContainer');
            
            modal.classList.add('opacity-0');
            container.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto'; // Restore scrolling
            }, 300);
        }

        function updateModalImage() {
            const imgEl = document.getElementById('modalImage');
            const descEl = document.getElementById('modalDescription');
            const dotsContainer = document.getElementById('modalDots');
            
            // Fade out
            imgEl.style.opacity = '0.3';
            
            setTimeout(() => {
                const imgData = currentProject.images[currentImageIndex];
                imgEl.src = imgData.src;
                descEl.innerText = imgData.desc;
                
                // Update dots
                dotsContainer.innerHTML = '';
                currentProject.images.forEach((_, idx) => {
                    const activeClass = idx === currentImageIndex ? 'bg-cyan w-6' : 'bg-white/40 w-2 hover:bg-white/80';
                    dotsContainer.innerHTML += `<div class="h-2 rounded-full cursor-pointer transition-all duration-300 ${activeClass}" onclick="goToModalImage(${idx})"></div>`;
                });
                
                // Fade in
                imgEl.style.opacity = '1';
            }, 200);
        }

        function nextModalImage() {
            currentImageIndex = (currentImageIndex + 1) % currentProject.images.length;
            updateModalImage();
        }

        function prevModalImage() {
            currentImageIndex = (currentImageIndex - 1 + currentProject.images.length) % currentProject.images.length;
            updateModalImage();
        }

        function goToModalImage(idx) {
            currentImageIndex = idx;
            updateModalImage();
        }
    </script>
"""

# Replace the existing Proyectos section
start_pattern = r'<!-- Proyectos -->.*?<section id="proyectos".*?>'
end_pattern = r'</section>\s*<!-- Educación -->'

# Because regex match with dotall can be tricky with many sections, we do string replacement
start_index = content.find('<!-- Proyectos -->')
end_index = content.find('<!-- Educación -->')

if start_index != -1 and end_index != -1:
    new_content = content[:start_index] + proyectos_section + "\n\n" + content[end_index:]
    
    # Add Modal HTML & JS before </body>
    body_end_index = new_content.rfind('</body>')
    if body_end_index != -1:
        new_content = new_content[:body_end_index] + modal_code + "\n" + new_content[body_end_index:]
    
    with open('resources/views/portfolio.blade.php', 'w', encoding='utf-8') as f:
        f.write(new_content)
    print("Successfully replaced Proyectos section and injected Modal.")
else:
    print("Could not find Proyectos or Educacion section boundaries.")
