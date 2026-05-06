<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juan Diego Vega - Portafolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cyan: {
                            DEFAULT: '#00FFFF',
                            50: '#E0FFFF',
                            100: '#BFFFFE',
                            200: '#80FFFF',
                            300: '#40FFFF',
                            400: '#00FFFF',
                            500: '#00CCCC',
                            600: '#009999',
                            700: '#006666',
                            800: '#003333',
                            900: '#001A1A',
                        },
                        dark: {
                            DEFAULT: '#111111',
                            50: '#333333',
                            100: '#2A2A2A',
                            200: '#222222',
                            300: '#1A1A1A',
                            400: '#111111',
                            500: '#0A0A0A',
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        .glass {
            background: rgba(17, 17, 17, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-dark text-gray-100 font-sans antialiased selection:bg-cyan selection:text-dark">
    <!-- Navegación -->
    <nav class="fixed w-full z-50 glass">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-cyan tracking-tight"> portafolio - <span class="text-white"> Ing. Juan Diego Vega Martinez</span></a>
            <div class="hidden md:flex space-x-8">
                <a href="#sobre-mi" class="text-gray-300 hover:text-cyan transition-colors">Sobre mí</a>
                <a href="#habilidades" class="text-gray-300 hover:text-cyan transition-colors">Habilidades</a>
                <a href="#proyectos" class="text-gray-300 hover:text-cyan transition-colors">Proyectos</a>
                <a href="#certificaciones" class="text-gray-300 hover:text-cyan transition-colors">Certificaciones</a>
                <a href="#contacto" class="text-gray-300 hover:text-cyan transition-colors">Contacto</a>
            </div>
            <!-- Botón móvil -->
            <button class="md:hidden text-gray-300 hover:text-cyan">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </nav>

    <!-- Hero con efecto de cursor tipo hitem3d.ai -->
    <section id="hero" class="min-h-screen relative overflow-hidden flex items-center justify-center">
        <!-- Capa de fondo con texto DIEGOVA -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none" style="z-index: 1;">
            <canvas id="bgTextCanvas" class="absolute inset-0 w-full h-full"></canvas>
        </div>
        
        <!-- Capa de iluminación del cursor -->
        <div id="cursorLight" class="absolute inset-0 pointer-events-none" style="z-index: 5; mix-blend-mode: overlay;"></div>
        
        <!-- Fondo base -->
        <div class="absolute inset-0 bg-gradient-to-br from-dark via-dark-500 to-black pointer-events-none" style="z-index: 0;"></div>
        
        <!-- Capa de contenido principal -->
        <div class="relative container mx-auto px-6 text-center" style="z-index: 10;">
            <div class="inline-block relative">
                <!-- Efecto de brillo alrededor del texto -->
                <p class="text-cyan text-lg -mb-2 font-medium tracking-widest uppercase relative z-10">Ingeniero de Sistemas en Formación</p>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold -mb-2 leading-tight relative z-10">
                Juan Diego <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-cyan">Vega</span> <br class="hidden md:block">
                Martinez
            </h1>
            
            <p class="text-gray-400 text-xl md:text-2xl max-w-2xl mx-auto mb-12 relative z-10">
                Futuro ingeniero de sistemas con perfil multidisciplinario. Más allá del desarrollo web, me apasiona comprender sistemas completos, desde redes, IA, diseño y hasta lógica de negocio.
            </p>
            
            <div class="flex flex-col md:flex-row justify-center gap-4 relative z-10 pt-4">
                <a href="#proyectos" class="px-8 py-3 bg-cyan text-dark font-semibold rounded-full hover:bg-cyan-300 transition-colors shadow-lg shadow-cyan/20">
                    Ver proyectos
                </a>
                <a href="#contacto" class="px-8 py-3 border border-cyan text-cyan font-semibold rounded-full hover:bg-cyan hover:text-dark transition-colors">
                    Contactar
                </a>
            </div>
        </div>
        
        <!-- Scroll indicador -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce z-20">
            <i class="fas fa-chevron-down text-cyan text-2xl"></i>
        </div>
        
        <!-- Scripts para el efecto avanzado -->
        <script>
            // Efecto de texto de fondo con tracking del cursor
            (function() {
                const canvas = document.getElementById('bgTextCanvas');
                const ctx = canvas.getContext('2d');
                const text = 'JUAN DIEGO';
                let width, height;
                let mouse = { x: -1000, y: -1000 };
                let targetMouse = { x: -1000, y: -1000 };
                
                function resize() {
                    width = canvas.width = window.innerWidth;
                    height = canvas.height = window.innerHeight;
                }
                
                function draw() {
                    ctx.clearRect(0, 0, width, height);
                    
                    // Fondo oscuro
                    const bgGradient = ctx.createRadialGradient(
                        width/2, height/2, 0,
                        width/2, height/2, Math.max(width, height)
                    );
                    bgGradient.addColorStop(0, '#111111');
                    bgGradient.addColorStop(1, '#000000');
                    ctx.fillStyle = bgGradient;
                    ctx.fillRect(0, 0, width, height);
                    
                    const fontSize = Math.min(width / 6, 180);
                    ctx.font = `900 ${fontSize}px Inter, sans-serif`;
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    
                    // Posición del texto
                    const centerX = width / 2;
                    const centerY = height / 2;
                    
                    // Calcular efecto de distorsión basado en mouse
                    for (let i = 0; i < text.length; i++) {
                        const charX = centerX + (i - text.length / 2) * (fontSize * 0.7);
                        const charY = centerY;
                        
                        const dx = mouse.x - charX;
                        const dy = mouse.y - charY;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        const maxDist = 400;
                        
                        let offsetX = 0;
                        let offsetY = 0;
                        let scale = 1;
                        let rotation = 0;
                        let alpha = 0.15;
                        
                        if (dist < maxDist) {
                            const factor = Math.pow(1 - dist / maxDist, 2);
                            
                            // Efecto de atracción/repulsión
                            const angle = Math.atan2(dy, dx);
                            const force = factor * 80;
                            offsetX = -Math.cos(angle) * force;
                            offsetY = -Math.sin(angle) * force;
                            
                            // Escala y rotación
                            scale = 1 + factor * 0.4;
                            rotation = factor * 0.3 * Math.sin(i * 0.5);
                            alpha = 0.15 + factor * 0.4;
                        }
                        
                        ctx.save();
                        ctx.translate(charX + offsetX, charY + offsetY);
                        ctx.rotate(rotation);
                        ctx.scale(scale, scale);
                        
                        // Gradiente de texto con efecto de luz
                        const gradient = ctx.createLinearGradient(-fontSize/2, -fontSize/2, fontSize/2, fontSize/2);
                        gradient.addColorStop(0, '#00FFFF');
                        gradient.addColorStop(0.3, '#00CCCC');
                        gradient.addColorStop(0.6, '#006666');
                        gradient.addColorStop(1, '#003333');
                        
                        ctx.fillStyle = gradient;
                        ctx.globalAlpha = alpha;
                        ctx.fillText(text[i], 0, 0);
                        
                        // Borde brillante
                        ctx.strokeStyle = '#00FFFF';
                        ctx.lineWidth = 2;
                        ctx.globalAlpha = alpha * 0.5;
                        ctx.strokeText(text[i], 0, 0);
                        
                        ctx.restore();
                    }
                }
                
                // Animación suave
                function animate() {
                    mouse.x += (targetMouse.x - mouse.x) * 0.08;
                    mouse.y += (targetMouse.y - mouse.y) * 0.08;
                    draw();
                    requestAnimationFrame(animate);
                }
                
                // Eventos
                window.addEventListener('resize', resize);
                window.addEventListener('mousemove', (e) => {
                    targetMouse.x = e.clientX;
                    targetMouse.y = e.clientY;
                });
                window.addEventListener('touchmove', (e) => {
                    if (e.touches.length > 0) {
                        targetMouse.x = e.touches[0].clientX;
                        targetMouse.y = e.touches[0].clientY;
                    }
                });
                
                // Iniciar
                resize();
                animate();
            })();
            
            // Efecto de luz mengikuti cursor
            (function() {
                const light = document.getElementById('cursorLight');
                let mouse = { x: -1000, y: -1000 };
                let targetMouse = { x: -1000, y: -1000 };
                
                function updateLight() {
                    mouse.x += (targetMouse.x - mouse.x) * 0.1;
                    mouse.y += (targetMouse.y - mouse.y) * 0.1;
                    
                    // Crear gradiente radial en la posición del mouse
                    light.style.background = `radial-gradient(
                        circle 300px at ${mouse.x}px ${mouse.y}px,
                        rgba(0, 255, 255, 0.15) 0%,
                        rgba(0, 255, 255, 0.05) 30%,
                        transparent 70%
                    )`;
                    
                    requestAnimationFrame(updateLight);
                }
                
                window.addEventListener('mousemove', (e) => {
                    targetMouse.x = e.clientX;
                    targetMouse.y = e.clientY;
                });
                
                window.addEventListener('touchmove', (e) => {
                    if (e.touches.length > 0) {
                        targetMouse.x = e.touches[0].clientX;
                        targetMouse.y = e.touches[0].clientY;
                    }
                });
                
                updateLight();
            })();
        </script>
    </section>

    <!-- Sobre mí -->
    <section id="sobre-mi" class="py-20 bg-dark-200">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <div class="relative">
                        <div class="absolute -top-4 -left-4 w-24 h-24 border-4 border-cyan opacity-30 rounded-lg"></div>
                        <img src="https://placehold.co/400x400/111/00FFFF?text=Foto+Perfil" alt="Foto de perfil" class="rounded-lg shadow-2xl border-2 border-cyan/20">
                    </div>
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold mb-6 text-cyan">Sobre mí</h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Soy un <strong>Ingeniero de Sistemas en formación</strong> con experiencia en el desarrollo de aplicaciones web modernas, diseño de redes, implementación de soluciones de inteligencia artificial y modelado matemático-financiero. Me desempeño en crear experiencias digitales atractivas y funcionales.
                    </p>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Mi objetivo es aportar valor mediante la tecnología, resolviendo problemas complejos con código limpio, diseño elegante y arquitectura escalable.
                    </p>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                        <div class="text-center p-3 bg-dark-300 rounded-lg">
                            <p class="text-cyan font-semibold">25 años</p>
                            <p class="text-gray-500 text-sm">Edad</p>
                        </div>
                        <div class="text-center p-3 bg-dark-300 rounded-lg">
                            <p class="text-cyan font-semibold">El Alto</p>
                            <p class="text-gray-500 text-sm">Ubicación</p>
                        </div>
                        <div class="text-center p-3 bg-dark-300 rounded-lg">
                            <p class="text-cyan font-semibold">Español</p>
                            <p class="text-gray-500 text-sm">Nativo</p>
                        </div>
                        <div class="text-center p-3 bg-dark-300 rounded-lg">
                            <p class="text-cyan font-semibold">30%</p>
                            <p class="text-gray-500 text-sm">Inglés</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <a href="mailto:escorpiotauro2015@gmail.com" class="w-10 h-10 flex items-center justify-center rounded-full bg-dark-300 text-gray-300 hover:bg-cyan hover:text-dark transition-colors">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:70145646" class="w-10 h-10 flex items-center justify-center rounded-full bg-dark-300 text-gray-300 hover:bg-cyan hover:text-dark transition-colors">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="https://wa.me/59170145646" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-dark-300 text-gray-300 hover:bg-cyan hover:text-dark transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Habilidades -->
    <section id="habilidades" class="py-20 bg-dark-300">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-cyan">Habilidades Técnicas</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Backend -->
                <div class="bg-dark-200 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-code text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-xl font-semibold">Backend</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">PHP (Intermedio)</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Python (Intermedio)</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Java (Intermedio)</span>
                    </div>
                </div>
                <!-- Desarrollo Web -->
                <div class="bg-dark-200 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-globe text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-xl font-semibold">Desarrollo Web</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">PHP & MySQL</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Bootstrap</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">CSS3</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Laravel 10</span>
                    </div>
                </div>
                <!-- Redes -->
                <div class="bg-dark-200 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-network-wired text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-xl font-semibold">Redes</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">TCP/IP</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">IPv4/IPv6</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Cisco</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">TP-Link</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">LAN/WLAN</span>
                    </div>
                </div>
                <!-- Git y Versionado -->
                <div class="bg-dark-200 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-code-branch text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-xl font-semibold">Control de Versiones</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Git</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">GitHub</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Branching</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Merge</span>
                    </div>
                </div>
                <!-- Diseño Gráfico -->
                <div class="bg-dark-200 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-paint-brush text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-xl font-semibold">Diseño Gráfico</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Photoshop</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Edición de Imágenes</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Diseño UI</span>
                    </div>
                </div>
                <!-- Otros -->
                <div class="bg-dark-200 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-tools text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-xl font-semibold">Otros</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Peritaje Forense</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">QGIS</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Ofimática</span>
                        <span class="px-3 py-1 bg-dark-400 rounded-full text-sm text-gray-300">Metodologías</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Proyectos -->
    <section id="proyectos" class="py-20 bg-dark-200">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-cyan">Proyectos Destacados</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Proyecto 1 -->
                <div class="bg-dark-300 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan/20 transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="h-48 bg-gray-800 flex items-center justify-center overflow-hidden relative">
                        <img src="https://placehold.co/600x400/111/00FFFF?text=Proyecto+Web" alt="Proyecto" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent opacity-60"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-cyan mb-2">Sistema de Gestión Empresarial</h3>
                        <p class="text-gray-400 text-sm mb-4">Aplicación web para la gestión de inventarios, ventas y reportes en tiempo real.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-dark-400 rounded text-xs text-cyan">Laravel</span>
                            <span class="px-2 py-1 bg-dark-400 rounded text-xs text-cyan">Livewire</span>
                            <span class="px-2 py-1 bg-dark-400 rounded text-xs text-cyan">Tailwind</span>
                            <span class="px-2 py-1 bg-dark-400 rounded text-xs text-cyan">MySQL</span>
                        </div>
                        <div class="flex gap-4">
                            <a href="#" class="text-gray-300 hover:text-cyan text-sm"><i class="fab fa-github mr-1"></i> Código</a>
                            <a href="#" class="text-gray-300 hover:text-cyan text-sm"><i class="fas fa-external-link-alt mr-1"></i> Demo</a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2 -->
                <div class="bg-dark-300 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan/20 transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="h-48 bg-gray-800 flex items-center justify-center overflow-hidden relative">
                        <img src="https://placehold.co/600x400/111/00FFFF?text=IoT" alt="Proyecto" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent opacity-60"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-cyan mb-2">Red de Sensores IoT</h3>
                        <p class="text-gray-400 text-sm mb-4">Sistema de monitoreo ambiental en tiempo real usando Raspberry Pi y MQTT.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-dark-400 rounded text-xs text-cyan">Python</span>
                            <span class="px-2 py-1 bg-dark-400 rounded text-xs text-cyan">Docker</span>
                            <span class="px-2 py-1 bg-dark-400 rounded text-xs text-cyan">MQTT</span>
                            <span class="px-2 py-1 bg-dark-400 rounded text-xs text-cyan">Raspberry Pi</span>
                        </div>
                        <div class="flex gap-4">
                            <a href="#" class="text-gray-300 hover:text-cyan text-sm"><i class="fab fa-github mr-1"></i> Código</a>
                            <a href="#" class="text-gray-300 hover:text-cyan text-sm"><i class="fas fa-external-link-alt mr-1"></i> Demo</a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 3 -->
                <div class="bg-dark-300 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan/20 transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="h-48 bg-gray-800 flex items-center justify-center overflow-hidden relative">
                        <img src="https://placehold.co/600x400/111/00FFFF?text=IA" alt="Proyecto" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent opacity-60"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-cyan mb-2">Modelo de Predicción de Ventas</h3>
                        <p class="text-gray-400 text-sm mb-4">Algoritmo de machine learning para forecasting de ventas con series temporales.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-dark-400 rounded text-xs text-cyan">Python</span>
                            <span class="px-2 py-1 bg-dark-400 rounded text-xs text-cyan">TensorFlow</span>
                            <span class="px-2 py-1 bg-dark-400 rounded text-xs text-cyan">Pandas</span>
                            <span class="px-2 py-1 bg-dark-400 rounded text-xs text-cyan">Docker</span>
                        </div>
                        <div class="flex gap-4">
                            <a href="#" class="text-gray-300 hover:text-cyan text-sm"><i class="fab fa-github mr-1"></i> Código</a>
                            <a href="#" class="text-gray-300 hover:text-cyan text-sm"><i class="fas fa-external-link-alt mr-1"></i> Demo</a>
                        </div>
                    </div>
                </div>

                <!-- Añadir más proyectos segúnsea necesario -->
            </div>
        </div>
    </section>

    <!-- Educación -->
    <section id="educacion" class="py-20 bg-dark-300">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-cyan">Educación</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <!-- Universidad -->
                <div class="bg-dark-200 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-cyan/20 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-graduation-cap text-cyan text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white">Universidad Pública de El Alto</h3>
                        <p class="text-gray-400 text-sm">2021 - Actualmente</p>
                        <p class="text-cyan text-sm font-medium">Ingeniería de Sistemas</p>
                        <p class="text-gray-500 text-xs mt-2">Mención: Informática y Comunicaciones</p>
                    </div>
                </div>
                <!-- Colegio -->
                <div class="bg-dark-200 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-cyan/20 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-school text-cyan text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white">Colegio Mercedes Elio de Rivero</h3>
                        <p class="text-gray-400 text-sm">2019</p>
                        <p class="text-cyan text-sm font-medium">Bachiller en Humanidades</p>
                        <p class="text-gray-500 text-xs mt-2">Graduado con honores académicos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificaciones y Cursos -->
    <section id="certificaciones" class="py-20 bg-dark-200">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-cyan">Cursos y Certificaciones</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Redes y Conectividad -->
                <div class="bg-dark-300 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-wifi text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-lg font-semibold">Fundamentos de Redes</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-2">
                        <li><i class="fas fa-check text-cyan mr-2"></i>Configuración de routers Cisco y TP-Link</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Cableado estructurado</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Diagnóstico y solución de problemas</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Protocolos TCP/IP, IPv4/IPv6</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Seguridad básica de redes</li>
                    </ul>
                </div>

                <!-- Desarrollo Web con PHP y MySQL -->
                <div class="bg-dark-300 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-code text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-lg font-semibold">Desarrollo Web PHP & MySQL</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-2">
                        <li><i class="fas fa-check text-cyan mr-2"></i>Aplicaciones web dinámicas</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Diseño frontend con Bootstrap y CSS3</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Programación con PHP y Java</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Integración con bases de datos</li>
                    </ul>
                </div>

                <!-- Laravel 10 -->
                <div class="bg-dark-300 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fab fa-laravel text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-lg font-semibold">Desarrollo con Laravel 10</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-2">
                        <li><i class="fas fa-check text-cyan mr-2"></i>Backend con Laravel (MVC)</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Estructura ordenada de aplicaciones</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Implementación de funcionalidades</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Rutas, controladores y modelos</li>
                    </ul>
                </div>

                <!-- Git y GitHub -->
                <div class="bg-dark-300 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fab fa-git-alt text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-lg font-semibold">Git y GitHub</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-2">
                        <li><i class="fas fa-check text-cyan mr-2"></i>Control de versiones</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Estrategias de branching</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Gestión de merge</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Publicación de repositorios</li>
                    </ul>
                </div>

                <!-- Backend -->
                <div class="bg-dark-300 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-server text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-lg font-semibold">Backend</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-2">
                        <li><i class="fas fa-check text-cyan mr-2"></i>PHP (Intermedio)</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Python (Intermedio)</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Java (Intermedio)</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Lógica de programación</li>
                    </ul>
                </div>

                <!-- Peritaje Forense -->
                <div class="bg-dark-300 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-search text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-lg font-semibold">Peritaje Informático Forense</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-2">
                        <li><i class="fas fa-check text-cyan mr-2"></i>Metodologías de auditoría</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Análisis forense de evidencias</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Adquisición de evidencias electrónicas</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Recuperación de archivos eliminados</li>
                    </ul>
                </div>

                <!-- Diseño Gráfico -->
                <div class="bg-dark-300 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-palette text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-lg font-semibold">Diseño Gráfico y Multimedia</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-2">
                        <li><i class="fas fa-check text-cyan mr-2"></i>Photoshop (Intermedio-Avanzado)</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Edición de imágenes (Avanzado)</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Diseño de interfaces UI (Intermedio)</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Creación de contenido visual</li>
                    </ul>
                </div>

                <!-- GIS -->
                <div class="bg-dark-300 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-map-marked-alt text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-lg font-semibold">Sistemas de Información Geográfica</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-2">
                        <li><i class="fas fa-check text-cyan mr-2"></i>Manejo de QGIS</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Datos geoespaciales</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Generación de mapas temáticos</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Capas de información geográfica</li>
                    </ul>
                </div>

                <!-- Ofimática y Metodologías -->
                <div class="bg-dark-300 p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-briefcase text-cyan text-2xl mr-3 group-hover:scale-110 transition-transform"></i>
                        <h3 class="text-lg font-semibold">Ofimática y Metodologías</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-2">
                        <li><i class="fas fa-check text-cyan mr-2"></i>Word, Excel, PowerPoint (Intermedio-Avanzado)</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Modelos de planificación y ejecución</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Ciclos de vida del desarrollo</li>
                        <li><i class="fas fa-check text-cyan mr-2"></i>Gestión de proyectos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="py-20 bg-dark-200">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-cyan">Contacto</h2>
            <div class="max-w-3xl mx-auto">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-400 mb-2">Nombre</label>
                            <input type="text" id="nombre" class="w-full px-4 py-3 bg-dark-300 border border-gray-700 rounded-lg focus:border-cyan focus:ring-1 focus:ring-cyan text-gray-100 placeholder-gray-600 transition-colors" placeholder="Tu nombre">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-400 mb-2">Correo electrónico</label>
                            <input type="email" id="email" class="w-full px-4 py-3 bg-dark-300 border border-gray-700 rounded-lg focus:border-cyan focus:ring-1 focus:ring-cyan text-gray-100 placeholder-gray-600 transition-colors" placeholder="tu@email.com">
                        </div>
                    </div>
                    <div>
                        <label for="asunto" class="block text-sm font-medium text-gray-400 mb-2">Asunto</label>
                        <input type="text" id="asunto" class="w-full px-4 py-3 bg-dark-300 border border-gray-700 rounded-lg focus:border-cyan focus:ring-1 focus:ring-cyan text-gray-100 placeholder-gray-600 transition-colors" placeholder="Asunto de tu mensaje">
                    </div>
                    <div>
                        <label for="mensaje" class="block text-sm font-medium text-gray-400 mb-2">Mensaje</label>
                        <textarea id="mensaje" rows="5" class="w-full px-4 py-3 bg-dark-300 border border-gray-700 rounded-lg focus:border-cyan focus:ring-1 focus:ring-cyan text-gray-100 placeholder-gray-600 transition-colors" placeholder="Escribe tu mensaje aquí..."></textarea>
                    </div>
                    <button type="submit" class="w-full md:w-auto px-8 py-3 bg-cyan text-dark font-semibold rounded-lg hover:bg-cyan-400 transition-colors shadow-lg shadow-cyan/20">
                        Enviar mensaje
                    </button>
                </form>

                <div class="mt-12 text-center">
                    <p class="text-gray-400 mb-4">También puedes contactarme en:</p>
                    <div class="flex justify-center gap-6">
                        <a href="mailto:escorpiotauro2015@gmail.com" class="text-gray-300 hover:text-cyan transition-colors text-2xl"><i class="fas fa-envelope"></i></a>
                        <a href="tel:70145646" class="text-gray-300 hover:text-cyan transition-colors text-2xl"><i class="fas fa-phone"></i></a>
                    </div>
                    <div class="mt-6 p-4 bg-dark-300 rounded-lg inline-block">
                        <p class="text-gray-400 text-sm"><i class="fas fa-map-marker-alt text-cyan mr-2"></i>El Alto, La Paz, Bolivia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-dark-500 text-center text-gray-500 text-sm border-t border-gray-800">
        <p>&copy; 2026 Juan Diego Vega Martinez. Todos los derechos reservados.</p>
    </footer>
</body>
</html>