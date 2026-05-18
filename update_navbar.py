import re

with open('resources/views/portfolio.blade.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Update Navbar
navbar_old = """            <div class="hidden md:flex space-x-8">
                <a href="#sobre-mi" class="text-gray-300 hover:text-cyan transition-colors duration-300">Sobre mí</a>
                <a href="#habilidades" class="text-gray-300 hover:text-cyan transition-colors duration-300">Habilidades</a>
                <a href="#proyectos" class="text-gray-300 hover:text-cyan transition-colors duration-300">Proyectos</a>
                <a href="#certificaciones" class="text-gray-300 hover:text-cyan transition-colors duration-300">Certificaciones</a>
                <a href="#contacto" class="text-gray-300 hover:text-cyan transition-colors duration-300">Contacto</a>
            </div>"""

navbar_new = """            <div class="hidden md:flex space-x-2 items-center">
                <a href="#sobre-mi" class="nav-link px-4 py-2 rounded-full text-sm font-medium text-gray-300 hover:text-cyan hover:bg-space-800/80 hover:shadow-[0_0_15px_rgba(0,240,255,0.4)] hover:border-cyan/50 border border-transparent transition-all duration-300 transform hover:-translate-y-0.5">Sobre mí</a>
                <a href="#tecnologias" class="nav-link px-4 py-2 rounded-full text-sm font-medium text-gray-300 hover:text-cyan hover:bg-space-800/80 hover:shadow-[0_0_15px_rgba(0,240,255,0.4)] hover:border-cyan/50 border border-transparent transition-all duration-300 transform hover:-translate-y-0.5">Tecnologías</a>
                <a href="#proyectos" class="nav-link px-4 py-2 rounded-full text-sm font-medium text-gray-300 hover:text-cyan hover:bg-space-800/80 hover:shadow-[0_0_15px_rgba(0,240,255,0.4)] hover:border-cyan/50 border border-transparent transition-all duration-300 transform hover:-translate-y-0.5">Proyectos</a>
                <a href="#habilidades-profesionales" class="nav-link px-4 py-2 rounded-full text-sm font-medium text-gray-300 hover:text-cyan hover:bg-space-800/80 hover:shadow-[0_0_15px_rgba(0,240,255,0.4)] hover:border-cyan/50 border border-transparent transition-all duration-300 transform hover:-translate-y-0.5">Habilidades</a>
                <a href="#contacto" class="nav-link px-4 py-2 rounded-full text-sm font-medium text-gray-300 hover:text-cyan hover:bg-space-800/80 hover:shadow-[0_0_15px_rgba(0,240,255,0.4)] hover:border-cyan/50 border border-transparent transition-all duration-300 transform hover:-translate-y-0.5">Contacto</a>
            </div>"""

content = content.replace(navbar_old, navbar_new)

# 2. Update Tecnologías ID
content = content.replace('<section id="habilidades" class="py-24 relative z-10 bg-space-800/40">', '<section id="tecnologias" class="py-24 relative z-10 bg-space-800/40">')

# 3. Add Scrollspy JS before </body>
scrollspy_js = """
    <!-- Scrollspy Nav JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            function updateActiveLink() {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    // Adjusted for navbar height and visual offset
                    if (window.scrollY >= (sectionTop - 150)) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    // Remove active classes
                    link.classList.remove('text-cyan', 'bg-space-800/80', 'shadow-[0_0_15px_rgba(0,240,255,0.4)]', 'border-cyan/50');
                    link.classList.add('text-gray-300', 'border-transparent');
                    
                    // Add active classes to current section
                    if (current && link.getAttribute('href') === `#${current}`) {
                        link.classList.remove('text-gray-300', 'border-transparent');
                        link.classList.add('text-cyan', 'bg-space-800/80', 'shadow-[0_0_15px_rgba(0,240,255,0.4)]', 'border-cyan/50');
                    }
                });
            }

            // Run on scroll
            window.addEventListener('scroll', updateActiveLink);
            
            // Run initially
            updateActiveLink();
        });
    </script>
"""

# Append JS just before </body>
if '</body>' in content:
    content = content.replace('</body>', scrollspy_js + '\n</body>')
else:
    content += scrollspy_js

with open('resources/views/portfolio.blade.php', 'w', encoding='utf-8') as f:
    f.write(content)

print("Navbar updated to buttons and ScrollSpy JS injected successfully.")
