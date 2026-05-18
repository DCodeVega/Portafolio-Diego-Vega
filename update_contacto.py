import re

with open('resources/views/portfolio.blade.php', 'r', encoding='utf-8') as f:
    content = f.read()

contacto_section = """    <!-- Contacto -->
    <section id="contacto" class="py-24 relative z-10 bg-space-900/80 backdrop-blur-md border-t border-white/5">
        <div class="container mx-auto px-6">
            <div class="flex items-center gap-4 mb-16 justify-center">
                <div class="h-px w-12 bg-gradient-to-r from-transparent to-cyan"></div>
                <h2 class="text-4xl font-bold font-sans text-transparent bg-clip-text bg-gradient-to-r from-cyan to-accent text-center">Transmisión de Contacto</h2>
                <div class="h-px w-12 bg-gradient-to-l from-transparent to-accent"></div>
            </div>

            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-12">
                
                <!-- Columna Izquierda: Información -->
                <div class="md:col-span-5 flex flex-col justify-center space-y-8">
                    <div class="glass-card p-8 border border-cyan/20 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-cyan/10 rounded-full blur-3xl group-hover:bg-cyan/20 transition-all duration-500"></div>
                        <h3 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                            <i class="fas fa-satellite-dish text-cyan"></i> 
                            Establecer Conexión
                        </h3>
                        <p class="text-gray-400 text-sm leading-relaxed mb-8">
                            ¿Tienes un proyecto en mente o necesitas auditoría técnica? Abre un canal de comunicación seguro y responderé a la brevedad posible.
                        </p>

                        <div class="space-y-6">
                            <!-- Email -->
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=escorpiotauro2015@gmail.com" target="_blank" class="flex items-center gap-4 p-4 rounded-xl bg-space-800/50 border border-white/5 hover:border-cyan/50 hover:bg-cyan/10 transition-all group/item">
                                <div class="w-12 h-12 rounded-full bg-space-900 flex items-center justify-center text-gray-400 group-hover/item:text-cyan group-hover/item:shadow-[0_0_15px_rgba(0,240,255,0.3)] transition-all">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Correo Seguro</p>
                                    <p class="text-sm text-gray-300">escorpiotauro2015@gmail.com</p>
                                </div>
                            </a>

                            <!-- WhatsApp -->
                            <a href="https://wa.me/59170145646" target="_blank" class="flex items-center gap-4 p-4 rounded-xl bg-space-800/50 border border-white/5 hover:border-green-400/50 hover:bg-green-400/10 transition-all group/item">
                                <div class="w-12 h-12 rounded-full bg-space-900 flex items-center justify-center text-gray-400 group-hover/item:text-green-400 group-hover/item:shadow-[0_0_15px_rgba(74,222,128,0.3)] transition-all">
                                    <i class="fab fa-whatsapp text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">WhatsApp</p>
                                    <p class="text-sm text-gray-300">+591 70145646</p>
                                </div>
                            </a>

                            <!-- Ubicacion -->
                            <div class="flex items-center gap-4 p-4 rounded-xl bg-space-800/50 border border-white/5">
                                <div class="w-12 h-12 rounded-full bg-space-900 flex items-center justify-center text-accent">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Coordenadas Base</p>
                                    <p class="text-sm text-gray-300">El Alto, La Paz, Bolivia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha: Formulario -->
                <div class="md:col-span-7">
                    <div class="glass-card p-8 border-t border-accent/30 h-full relative">
                        <h3 class="text-xl font-bold text-gray-200 mb-6 flex items-center gap-2">
                            <i class="fas fa-terminal text-accent text-sm"></i> Terminal de Mensajería
                        </h3>
                        
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="nombre" class="text-xs font-semibold text-cyan uppercase tracking-widest pl-1">Identidad (Nombre)</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-user text-gray-500"></i>
                                        </div>
                                        <input type="text" id="nombre" class="w-full pl-11 pr-4 py-3 bg-space-900/80 border border-gray-700 rounded-lg focus:border-cyan focus:ring-1 focus:ring-cyan text-gray-100 placeholder-gray-600 transition-all outline-none" placeholder="Tu nombre...">
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <label for="email" class="text-xs font-semibold text-cyan uppercase tracking-widest pl-1">Frecuencia (Email)</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-at text-gray-500"></i>
                                        </div>
                                        <input type="email" id="email" class="w-full pl-11 pr-4 py-3 bg-space-900/80 border border-gray-700 rounded-lg focus:border-cyan focus:ring-1 focus:ring-cyan text-gray-100 placeholder-gray-600 transition-all outline-none" placeholder="correo@dominio.com">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="space-y-2">
                                <label for="asunto" class="text-xs font-semibold text-cyan uppercase tracking-widest pl-1">Vector de Ataque (Asunto)</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-heading text-gray-500"></i>
                                    </div>
                                    <input type="text" id="asunto" class="w-full pl-11 pr-4 py-3 bg-space-900/80 border border-gray-700 rounded-lg focus:border-cyan focus:ring-1 focus:ring-cyan text-gray-100 placeholder-gray-600 transition-all outline-none" placeholder="Motivo de la transmisión">
                                </div>
                            </div>
                            
                            <div class="space-y-2">
                                <label for="mensaje" class="text-xs font-semibold text-cyan uppercase tracking-widest pl-1">Carga Útil (Mensaje)</label>
                                <textarea id="mensaje" rows="5" class="w-full px-4 py-3 bg-space-900/80 border border-gray-700 rounded-lg focus:border-cyan focus:ring-1 focus:ring-cyan text-gray-100 placeholder-gray-600 transition-all outline-none resize-none" placeholder="Escribe tu mensaje aquí..."></textarea>
                            </div>
                            
                            <button type="submit" class="w-full py-4 bg-gradient-to-r from-cyan to-blue-600 text-white font-bold rounded-lg hover:shadow-[0_0_20px_rgba(0,240,255,0.4)] hover:scale-[1.02] transition-all flex items-center justify-center gap-3 group">
                                <span>Emitir Transmisión</span>
                                <i class="fas fa-paper-plane group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-10 bg-[#070b19] text-center border-t border-white/5 relative z-10 overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-1/2 h-px bg-gradient-to-r from-transparent via-cyan to-transparent opacity-50"></div>
        <div class="container mx-auto px-6 relative">
            <h4 class="text-2xl font-bold text-white mb-6 font-sans">Juan Diego Vega Martinez</h4>
            <div class="flex justify-center gap-6 mb-8">
                <a href="https://github.com/DCodeVega" target="_blank" class="w-10 h-10 rounded-full glass border border-white/10 flex items-center justify-center text-gray-400 hover:text-cyan hover:border-cyan transition-all transform hover:-translate-y-1">
                    <i class="fab fa-github text-lg"></i>
                </a>
                <a href="https://wa.me/59170145646" target="_blank" class="w-10 h-10 rounded-full glass border border-white/10 flex items-center justify-center text-gray-400 hover:text-green-400 hover:border-green-400 transition-all transform hover:-translate-y-1">
                    <i class="fab fa-whatsapp text-lg"></i>
                </a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=escorpiotauro2015@gmail.com" target="_blank" class="w-10 h-10 rounded-full glass border border-white/10 flex items-center justify-center text-gray-400 hover:text-cyan hover:border-cyan transition-all transform hover:-translate-y-1">
                    <i class="fas fa-envelope text-lg"></i>
                </a>
            </div>
            <p class="text-gray-500 text-sm tracking-widest uppercase">
                &copy; 2026 INGENIERÍA DE SISTEMAS. Todos los derechos reservados.
            </p>
        </div>
    </footer>"""

start_index = content.find('<!-- Contacto -->')
end_index = content.find('<!-- Project Modal Overlay -->')

if start_index != -1 and end_index != -1:
    new_content = content[:start_index] + contacto_section + "\n\n    " + content[end_index:]
    with open('resources/views/portfolio.blade.php', 'w', encoding='utf-8') as f:
        f.write(new_content)
    print("Successfully replaced Contacto and Footer sections.")
else:
    print(f"Could not find exact boundaries: start={start_index}, end={end_index}")
