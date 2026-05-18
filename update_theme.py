import re

with open('resources/views/portfolio.blade.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Update Fonts and Tailwind Config
head_end = content.find('</head>')
head_content = """
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cyan: {
                            DEFAULT: '#00F0FF',
                            50: '#E0FDFF',
                            100: '#BFFBFF',
                            200: '#80F7FF',
                            300: '#40F3FF',
                            400: '#00F0FF',
                            500: '#00C0CC',
                            600: '#009099',
                            700: '#006066',
                            800: '#003033',
                            900: '#00181A',
                        },
                        space: {
                            DEFAULT: '#0B0D17',
                            900: '#05060B',
                            800: '#0B0D17',
                            700: '#15192B',
                            600: '#202640',
                            500: '#2D3559',
                        },
                        accent: {
                            DEFAULT: '#8B5CF6',
                            purple: '#6D28D9',
                            pink: '#DB2777'
                        }
                    },
                    fontFamily: {
                        sans: ['Archivo', 'sans-serif'],
                        body: ['Space Grotesk', 'sans-serif'],
                    },
                    backgroundImage: {
                        'cosmic': 'radial-gradient(circle at center, #15192B 0%, #05060B 100%)',
                        'nebula': 'linear-gradient(to right bottom, rgba(139, 92, 246, 0.1), rgba(0, 240, 255, 0.05))',
                    }
                }
            }
        }
    </script>
    <style>
        body { background-color: #05060B; }
        .glass {
            background: rgba(11, 13, 23, 0.6);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0, 240, 255, 0.1);
        }
        .glass-card {
            background: rgba(21, 25, 43, 0.4);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(139, 92, 246, 0.2);
            border-radius: 16px;
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            border-color: rgba(0, 240, 255, 0.4);
            box-shadow: 0 10px 30px -10px rgba(0, 240, 255, 0.2);
            transform: translateY(-5px);
        }
        
        /* Efecto de Estrellas */
        .stars, .twinkling {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            width: 100%; height: 100%;
            display: block;
        }
        .stars {
            background: #000 url('https://raw.githubusercontent.com/frontendweb3/space-background/main/stars.png') repeat top center;
            z-index: 0;
        }
        .twinkling {
            background: transparent url('https://raw.githubusercontent.com/frontendweb3/space-background/main/twinkling.png') repeat top center;
            z-index: 1;
            animation: move-twink-back 200s linear infinite;
        }
        @keyframes move-twink-back {
            from {background-position: 0 0;}
            to {background-position: -10000px 5000px;}
        }

        /* Planetas CSS */
        .planet {
            position: absolute;
            border-radius: 50%;
            z-index: 2;
            animation: float-planet 15s ease-in-out infinite;
        }
        .planet-1 {
            width: 150px; height: 150px;
            top: 20%; right: 10%;
            background: radial-gradient(circle at 30% 30%, #8B5CF6, #2D3559, #05060B);
            box-shadow: 0 0 40px rgba(139, 92, 246, 0.4), inset -20px -20px 40px rgba(0,0,0,0.8);
        }
        .planet-2 {
            width: 80px; height: 80px;
            bottom: 30%; left: 15%;
            background: radial-gradient(circle at 30% 30%, #00F0FF, #006066, #05060B);
            box-shadow: 0 0 30px rgba(0, 240, 255, 0.3), inset -10px -10px 20px rgba(0,0,0,0.8);
            animation-duration: 20s;
            animation-delay: -5s;
        }
        
        @keyframes float-planet {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        /* Anillos del planeta */
        .planet-1::after {
            content: '';
            position: absolute;
            top: 50%; left: 50%;
            width: 250px; height: 60px;
            border-radius: 50%;
            border: 8px solid rgba(255,255,255,0.1);
            border-bottom-color: rgba(139, 92, 246, 0.5);
            border-right-color: rgba(139, 92, 246, 0.3);
            transform: translate(-50%, -50%) rotate(-20deg);
            box-shadow: 0 0 15px rgba(139, 92, 246, 0.2);
        }
        
        h1, h2, h3, h4 { font-family: 'Archivo', sans-serif; }
    </style>
"""

content = re.sub(r'<link rel="preconnect" href="https://fonts\.googleapis\.com">.*?</style>', head_content, content, flags=re.DOTALL)

# 2. Body and Nav
content = content.replace('<body class="bg-dark text-gray-100 font-sans antialiased selection:bg-cyan selection:text-dark">', 
                          '<body class="bg-space-900 text-gray-100 font-body antialiased selection:bg-accent selection:text-white relative overflow-x-hidden">\n    <!-- Fondo Espacial Fijo -->\n    <div class="fixed inset-0 z-[-1] pointer-events-none">\n        <div class="stars"></div>\n        <div class="twinkling"></div>\n        <div class="absolute inset-0 bg-nebula mix-blend-screen opacity-50"></div>\n    </div>')

content = content.replace('<a href="#" class="text-2xl font-bold text-cyan tracking-tight"> portafolio - <span class="text-white"> Ing. Juan Diego Vega Martinez</span></a>',
                          '<a href="#" class="text-2xl font-bold font-sans tracking-tight flex items-center gap-2"><i class="fas fa-meteor text-cyan"></i><span class="text-white">Juan Diego</span><span class="text-accent">Vega</span></a>')

content = content.replace('transition-colors">', 'transition-colors duration-300">')

# 3. Hero Section Rewrite
hero_pattern = r'<!-- Hero limpio con iconos flotantes -->.*?</section>'
hero_replacement = """<!-- Hero Espacial -->
    <section id="hero" class="min-h-screen relative overflow-hidden flex items-center justify-center">
        <!-- Capa de iluminación del cursor -->
        <div id="cursorLight" class="absolute inset-0 pointer-events-none" style="z-index: 5; mix-blend-mode: screen;"></div>
        
        <!-- Planetas CSS Decorativos -->
        <div class="planet planet-1"></div>
        <div class="planet planet-2"></div>
        
        <!-- Capa de contenido principal -->
        <div class="relative container mx-auto px-6 text-center" style="z-index: 10;">
            <div class="inline-block relative mb-4">
                <span class="px-4 py-1.5 rounded-full border border-cyan/30 bg-cyan/10 text-cyan text-sm font-medium tracking-widest uppercase backdrop-blur-md">
                    Ingeniero de Sistemas
                </span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight font-sans">
                Explorando el <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan to-accent">Universo Digital</span>
            </h1>
            
            <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 font-light leading-relaxed">
                Desarrollador apasionado por crear ecosistemas tecnológicos, desde la profundidad del backend hasta la brillantez de la interfaz de usuario.
            </p>
            
            <div class="flex flex-col md:flex-row justify-center gap-6 pt-4">
                <a href="#proyectos" class="px-8 py-3.5 bg-gradient-to-r from-accent to-accent-purple text-white font-semibold rounded-full hover:shadow-[0_0_20px_rgba(139,92,246,0.5)] transition-all duration-300 transform hover:-translate-y-1">
                    <i class="fas fa-rocket mr-2"></i> Iniciar Misión
                </a>
                <a href="#contacto" class="px-8 py-3.5 border border-cyan/50 text-cyan font-semibold rounded-full hover:bg-cyan/10 transition-all duration-300 backdrop-blur-sm cursor-pointer">
                    Establecer Contacto
                </a>
            </div>
        </div>

        <!-- Scroll indicador -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce z-20">
            <i class="fas fa-chevron-down text-cyan text-2xl"></i>
        </div>
        
        <!-- Script para efecto del cursor -->
        <script>
            (function() {
                const light = document.getElementById('cursorLight');
                let mouse = { x: -1000, y: -1000 };
                let targetMouse = { x: -1000, y: -1000 };
                
                function updateLight() {
                    mouse.x += (targetMouse.x - mouse.x) * 0.1;
                    mouse.y += (targetMouse.y - mouse.y) * 0.1;
                    
                    light.style.background = `radial-gradient(
                        circle 300px at ${mouse.x}px ${mouse.y}px,
                        rgba(0, 240, 255, 0.15) 0%,
                        rgba(139, 92, 246, 0.05) 30%,
                        transparent 70%
                    )`;
                    
                    requestAnimationFrame(updateLight);
                }
                
                window.addEventListener('mousemove', (e) => {
                    targetMouse.x = e.clientX;
                    targetMouse.y = e.clientY;
                });
                
                updateLight();
            })();
        </script>
    </section>"""
content = re.sub(hero_pattern, hero_replacement, content, flags=re.DOTALL)

# 4. Update section backgrounds to be transparent or glass so the space shows through
content = content.replace('bg-dark-200', 'bg-space-800/60 backdrop-blur-sm')
content = content.replace('bg-dark-300', 'bg-space-700/60 backdrop-blur-sm')
content = content.replace('bg-dark-400', 'bg-space-600/80')
content = content.replace('bg-dark-500', 'bg-space-900/90')

# Update Cards to glass-card
content = content.replace('bg-space-800/60 backdrop-blur-sm p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group', 'glass-card p-6 group cursor-pointer')
content = content.replace('bg-space-700/60 backdrop-blur-sm p-6 rounded-xl border border-gray-800 hover:border-cyan transition-colors group', 'glass-card p-6 group cursor-pointer')
content = content.replace('bg-space-700/60 backdrop-blur-sm rounded-xl overflow-hidden shadow-lg hover:shadow-cyan/20 transition-all duration-300 transform hover:-translate-y-2 group', 'glass-card overflow-hidden group cursor-pointer')

# Make sure buttons have cursor pointer
content = content.replace('class="w-full md:w-auto', 'class="w-full md:w-auto cursor-pointer')

with open('resources/views/portfolio.blade.php', 'w', encoding='utf-8') as f:
    f.write(content)

print("Updated portfolio.blade.php successfully")
