import re

with open('resources/views/portfolio.blade.php', 'r', encoding='utf-8') as f:
    content = f.read()

habilidades_section = """    <!-- Habilidades Profesionales -->
    <section id="habilidades-profesionales" class="py-24 relative z-10 bg-space-800/40 backdrop-blur-sm">
        <div class="container mx-auto px-6">
            <div class="flex items-center gap-4 mb-16 justify-center">
                <div class="h-px w-12 bg-gradient-to-r from-transparent to-cyan"></div>
                <h2 class="text-4xl font-bold font-sans text-transparent bg-clip-text bg-gradient-to-r from-cyan to-accent text-center">Habilidades Profesionales</h2>
                <div class="h-px w-12 bg-gradient-to-l from-transparent to-accent"></div>
            </div>
            
            <p class="text-center text-gray-400 max-w-2xl mx-auto mb-16 text-lg">Competencias técnicas y transversales adquiridas como Ingeniero de Sistemas, orientadas a la resolución integral de problemas y la innovación tecnológica.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                <!-- 1. Redes -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-cyan/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-cyan/50 group-hover:shadow-[0_0_15px_rgba(0,240,255,0.4)] transition-all">
                            <i class="fas fa-network-wired text-cyan text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-cyan transition-colors">Redes</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-cyan/70 mt-1 mr-3 text-xs"></i><span>Configuración de routers (Cisco, TP-Link)</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-cyan/70 mt-1 mr-3 text-xs"></i><span>Diseño de cableado estructurado</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-cyan/70 mt-1 mr-3 text-xs"></i><span>Protocolos de enrutamiento y redes LAN/WAN</span></li>
                    </ul>
                </div>

                <!-- 2. Ciberseguridad -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-red-500/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-red-500/50 group-hover:shadow-[0_0_15px_rgba(239,68,68,0.4)] transition-all">
                            <i class="fas fa-shield-alt text-red-400 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-red-400 transition-colors">Ciberseguridad y Auditoría</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-red-400/70 mt-1 mr-3 text-xs"></i><span>Extracción de datos y análisis forense</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-red-400/70 mt-1 mr-3 text-xs"></i><span>Uso avanzado de Kali Linux</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-red-400/70 mt-1 mr-3 text-xs"></i><span>Auditoría de vulnerabilidades en sistemas web</span></li>
                    </ul>
                </div>

                <!-- 3. Metodologías e informes -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-blue-400/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-blue-400/50 group-hover:shadow-[0_0_15px_rgba(96,165,250,0.4)] transition-all">
                            <i class="fas fa-file-signature text-blue-400 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-blue-400 transition-colors leading-tight">Metodologías e Informes</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-blue-400/70 mt-1 mr-3 text-xs"></i><span>Dominio de Word, Excel y PowerPoint</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-blue-400/70 mt-1 mr-3 text-xs"></i><span>Planificación de proyectos informáticos</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-blue-400/70 mt-1 mr-3 text-xs"></i><span>Redacción de informes técnicos de ingeniería</span></li>
                    </ul>
                </div>

                <!-- 4. Diseño gráfico -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-pink-400/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-pink-400/50 group-hover:shadow-[0_0_15px_rgba(244,114,182,0.4)] transition-all">
                            <i class="fas fa-palette text-pink-400 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-pink-400 transition-colors leading-tight">Diseño Gráfico y Multimedia</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-pink-400/70 mt-1 mr-3 text-xs"></i><span>Adobe Photoshop & Illustrator</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-pink-400/70 mt-1 mr-3 text-xs"></i><span>Edición de video profesional</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-pink-400/70 mt-1 mr-3 text-xs"></i><span>Creación de infografías e interfaces visuales</span></li>
                    </ul>
                </div>

                <!-- 5. Vibecoding / IA -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-accent/30 relative overflow-hidden">
                    <div class="absolute -right-4 -top-4 w-20 h-20 bg-accent/10 rounded-full blur-2xl group-hover:bg-accent/30 transition-colors"></div>
                    <div class="flex items-center mb-6 relative z-10">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-accent/50 group-hover:shadow-[0_0_15px_rgba(139,92,246,0.4)] transition-all">
                            <i class="fas fa-robot text-accent text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-accent transition-colors leading-tight">Desarrollo por IA (Vibecoding)</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow relative z-10">
                        <li class="flex items-start"><i class="fas fa-check-circle text-accent/70 mt-1 mr-3 text-xs"></i><span>Antigravity & Open Code</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-accent/70 mt-1 mr-3 text-xs"></i><span>GitHub Copilot y automatización</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-accent/70 mt-1 mr-3 text-xs"></i><span>Creación de Agentes y Skills inteligentes</span></li>
                    </ul>
                </div>

                <!-- 6. Habilidades blandas -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-orange-400/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-orange-400/50 group-hover:shadow-[0_0_15px_rgba(251,146,60,0.4)] transition-all">
                            <i class="fas fa-users text-orange-400 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-orange-400 transition-colors">Habilidades Blandas</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-orange-400/70 mt-1 mr-3 text-xs"></i><span>Trabajo en equipo multidisciplinario</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-orange-400/70 mt-1 mr-3 text-xs"></i><span>Comunicación efectiva con personas no técnicas</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-orange-400/70 mt-1 mr-3 text-xs"></i><span>Alta adaptabilidad al cambio tecnológico</span></li>
                    </ul>
                </div>

                <!-- 7. Estadística -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-yellow-400/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-yellow-400/50 group-hover:shadow-[0_0_15px_rgba(250,204,21,0.4)] transition-all">
                            <i class="fas fa-chart-pie text-yellow-400 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-yellow-400 transition-colors leading-tight">Estadística y Probabilidades</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-yellow-400/70 mt-1 mr-3 text-xs"></i><span>Estadística descriptiva e inferencial</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-yellow-400/70 mt-1 mr-3 text-xs"></i><span>Análisis de correlación simple</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-yellow-400/70 mt-1 mr-3 text-xs"></i><span>Lógica avanzada en resolución de problemas</span></li>
                    </ul>
                </div>

                <!-- 8. Financiero -->
                <div class="glass-card p-6 group cursor-pointer hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full border-t border-green-400/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-space-900/80 flex items-center justify-center border border-white/10 group-hover:border-green-400/50 group-hover:shadow-[0_0_15px_rgba(74,222,128,0.4)] transition-all">
                            <i class="fas fa-coins text-green-400 text-xl group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h3 class="text-lg font-semibold ml-4 text-white group-hover:text-green-400 transition-colors leading-tight">Conocimiento Financiero</h3>
                    </div>
                    <ul class="text-gray-400 text-sm space-y-3 flex-grow">
                        <li class="flex items-start"><i class="fas fa-check-circle text-green-400/70 mt-1 mr-3 text-xs"></i><span>Análisis costo-beneficio de TI</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-green-400/70 mt-1 mr-3 text-xs"></i><span>Elaboración de propuestas simples</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-green-400/70 mt-1 mr-3 text-xs"></i><span>Lectura de estados intermedios y evaluación de proyectos</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>"""

# Find the start of <!-- Educación --> and the start of <!-- Contacto -->
start_index = content.find('<!-- Educación -->')
end_index = content.find('<!-- Contacto -->')

if start_index != -1 and end_index != -1:
    new_content = content[:start_index] + habilidades_section + "\n\n    " + content[end_index:]
    with open('resources/views/portfolio.blade.php', 'w', encoding='utf-8') as f:
        f.write(new_content)
    print("Successfully replaced Educación and Certificaciones sections with new Habilidades Profesionales section.")
else:
    print(f"Could not find exact boundaries: start={start_index}, end={end_index}")
