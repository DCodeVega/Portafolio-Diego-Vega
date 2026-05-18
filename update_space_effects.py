import re
import random

with open('resources/views/portfolio.blade.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Generate pure CSS stars
def generate_stars(n, size, color, max_x=3000, max_y=3000):
    stars = []
    for _ in range(n):
        x = random.randint(0, max_x)
        y = random.randint(0, max_y)
        stars.append(f"{x}px {y}px {color}")
    return ", ".join(stars)

stars_small = generate_stars(900, 1, '#FFF')
stars_medium = generate_stars(300, 2, '#FFF')
stars_large = generate_stars(100, 3, '#FFF')

new_style = f"""
    <style>
        body {{ background-color: #05060B; overflow-x: hidden; }}
        .glass {{
            background: rgba(11, 13, 23, 0.6);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0, 240, 255, 0.1);
        }}
        .glass-card {{
            background: rgba(21, 25, 43, 0.4);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(139, 92, 246, 0.2);
            border-radius: 16px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 10;
        }}
        .glass-card:hover {{
            border-color: rgba(0, 240, 255, 0.4);
            box-shadow: 0 10px 30px -10px rgba(0, 240, 255, 0.2);
            transform: translateY(-5px);
        }}
        
        /* Efecto de Estrellas Parallax Puro CSS */
        #stars, #stars2, #stars3 {{
            position: absolute;
            top: 0; left: 0;
            background: transparent;
        }}
        #stars {{
            width: 1px; height: 1px;
            box-shadow: {stars_small};
            animation: animStar 150s linear infinite;
        }}
        #stars::after {{
            content: " "; position: absolute; top: 3000px;
            width: 1px; height: 1px; box-shadow: {stars_small};
        }}
        #stars2 {{
            width: 2px; height: 2px;
            box-shadow: {stars_medium};
            animation: animStar 100s linear infinite;
        }}
        #stars2::after {{
            content: " "; position: absolute; top: 3000px;
            width: 2px; height: 2px; box-shadow: {stars_medium};
        }}
        #stars3 {{
            width: 3px; height: 3px;
            box-shadow: {stars_large};
            animation: animStar 50s linear infinite;
        }}
        #stars3::after {{
            content: " "; position: absolute; top: 3000px;
            width: 3px; height: 3px; box-shadow: {stars_large};
        }}
        
        @keyframes animStar {{
            from {{ transform: translateY(0px) }}
            to {{ transform: translateY(-3000px) }}
        }}

        /* Estrellas Fugaces */
        .shooting-star {{
            position: absolute;
            width: 4px; height: 4px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 0 0 4px rgba(255,255,255,0.1), 0 0 0 8px rgba(255,255,255,0.1), 0 0 20px rgba(255,255,255,1);
            animation: shooting 4s linear infinite;
            opacity: 0;
            z-index: 2;
        }}
        .shooting-star::before {{
            content: '';
            position: absolute;
            top: 50%; transform: translateY(-50%);
            width: 150px; height: 1px;
            background: linear-gradient(90deg, #fff, transparent);
        }}
        .ss-1 {{ top: 10%; left: 80%; animation-delay: 0s; }}
        .ss-2 {{ top: 40%; left: 60%; animation-delay: 2s; }}
        .ss-3 {{ top: 70%; left: 90%; animation-delay: 1.5s; }}
        .ss-4 {{ top: 20%; left: 40%; animation-delay: 3.5s; }}
        
        @keyframes shooting {{
            0% {{ transform: translateX(0) translateY(0) rotate(-45deg); opacity: 1; }}
            100% {{ transform: translateX(-1000px) translateY(1000px) rotate(-45deg); opacity: 0; }}
        }}

        /* Nebulosas CSS */
        .nebula {{
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.4;
            z-index: 1;
            pointer-events: none;
        }}
        .nebula-1 {{ top: 10%; left: -10%; width: 500px; height: 500px; background: #8B5CF6; animation: pulse-nebula 20s infinite alternate; }}
        .nebula-2 {{ top: 40%; right: -10%; width: 600px; height: 600px; background: #00F0FF; animation: pulse-nebula 25s infinite alternate-reverse; }}
        .nebula-3 {{ top: 80%; left: 20%; width: 400px; height: 400px; background: #DB2777; animation: pulse-nebula 15s infinite alternate; }}

        @keyframes pulse-nebula {{
            0% {{ transform: scale(1); opacity: 0.2; }}
            100% {{ transform: scale(1.1); opacity: 0.5; }}
        }}

        /* Planetas CSS */
        .planet {{
            position: absolute;
            border-radius: 50%;
            z-index: 2;
            animation: float-planet 15s ease-in-out infinite;
        }}
        /* Planetas del Hero */
        .planet-1 {{
            width: 150px; height: 150px;
            top: 15%; right: 10%;
            background: radial-gradient(circle at 30% 30%, #8B5CF6, #2D3559, #05060B);
            box-shadow: 0 0 40px rgba(139, 92, 246, 0.4), inset -20px -20px 40px rgba(0,0,0,0.8);
        }}
        .planet-1::after {{
            content: ''; position: absolute; top: 50%; left: 50%;
            width: 250px; height: 60px; border-radius: 50%;
            border: 8px solid rgba(255,255,255,0.1);
            border-bottom-color: rgba(139, 92, 246, 0.5);
            border-right-color: rgba(139, 92, 246, 0.3);
            transform: translate(-50%, -50%) rotate(-20deg);
            box-shadow: 0 0 15px rgba(139, 92, 246, 0.2);
        }}
        .planet-2 {{
            width: 80px; height: 80px;
            bottom: 25%; left: 15%;
            background: radial-gradient(circle at 30% 30%, #00F0FF, #006066, #05060B);
            box-shadow: 0 0 30px rgba(0, 240, 255, 0.3), inset -10px -10px 20px rgba(0,0,0,0.8);
            animation-duration: 20s; animation-delay: -5s;
        }}
        
        /* Planetas Nuevos Esparcidos */
        .planet-3 {{
            width: 120px; height: 120px;
            top: 120vh; left: 5%;
            background: radial-gradient(circle at 30% 30%, #F59E0B, #92400E, #05060B);
            box-shadow: 0 0 40px rgba(245, 158, 11, 0.4), inset -20px -20px 40px rgba(0,0,0,0.8);
            animation-duration: 25s; animation-delay: -2s;
        }}
        .planet-4 {{
            width: 200px; height: 200px;
            top: 250vh; right: -5%;
            background: radial-gradient(circle at 30% 30%, #DB2777, #831843, #05060B);
            box-shadow: 0 0 60px rgba(219, 39, 119, 0.3), inset -30px -30px 60px rgba(0,0,0,0.9);
            animation-duration: 30s;
        }}
        .planet-4::after {{
            content: ''; position: absolute; top: 50%; left: 50%;
            width: 320px; height: 80px; border-radius: 50%;
            border: 4px solid rgba(255,255,255,0.05);
            border-top-color: rgba(219, 39, 119, 0.6);
            border-left-color: rgba(219, 39, 119, 0.4);
            transform: translate(-50%, -50%) rotate(15deg);
            box-shadow: 0 0 20px rgba(219, 39, 119, 0.3);
        }}
        .planet-5 {{
            width: 60px; height: 60px;
            top: 380vh; left: 20%;
            background: radial-gradient(circle at 30% 30%, #10B981, #065F46, #05060B);
            box-shadow: 0 0 25px rgba(16, 185, 129, 0.4), inset -10px -10px 20px rgba(0,0,0,0.8);
            animation-duration: 18s; animation-delay: -10s;
        }}
        .planet-6 {{
            width: 100px; height: 100px;
            top: 480vh; right: 15%;
            background: radial-gradient(circle at 30% 30%, #3B82F6, #1E3A8A, #05060B);
            box-shadow: 0 0 35px rgba(59, 130, 246, 0.4), inset -15px -15px 30px rgba(0,0,0,0.8);
            animation-duration: 22s; animation-delay: -7s;
        }}
        
        @keyframes float-planet {{
            0%, 100% {{ transform: translateY(0) rotate(0deg); }}
            50% {{ transform: translateY(-30px) rotate(5deg); }}
        }}
        
        h1, h2, h3, h4 {{ font-family: 'Archivo', sans-serif; }}
        
        /* Contenedor relativo global para que los elementos no afecten el layout */
        .space-container {{ position: relative; overflow: visible; z-index: 1; }}
    </style>
"""

# Replace the style block
content = re.sub(r'<style>.*?</style>', new_style, content, flags=re.DOTALL)

# Update the Fixed Background DIV in the body
old_bg = '''    <!-- Fondo Espacial Fijo -->
    <div class="fixed inset-0 z-[-1] pointer-events-none">
        <div class="stars"></div>
        <div class="twinkling"></div>
        <div class="absolute inset-0 bg-nebula mix-blend-screen opacity-50"></div>
    </div>'''

new_bg = '''    <!-- Fondo Espacial Fijo y Elementos Esparcidos -->
    <div class="fixed inset-0 z-[-1] pointer-events-none overflow-hidden" style="height: 100vh;">
        <!-- Estrellas Parallax -->
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        
        <!-- Nebulosas Estáticas/Pulsantes -->
        <div class="nebula nebula-1"></div>
        <div class="nebula nebula-2"></div>
        <div class="nebula nebula-3"></div>
        
        <!-- Estrellas Fugaces -->
        <div class="shooting-star ss-1"></div>
        <div class="shooting-star ss-2"></div>
        <div class="shooting-star ss-3"></div>
        <div class="shooting-star ss-4"></div>
        
        <!-- Nebulosa de fondo global -->
        <div class="absolute inset-0 bg-nebula mix-blend-screen opacity-50"></div>
    </div>
    
    <!-- Contenedor absoluto para elementos esparcidos en toda la altura de la pagina -->
    <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden" style="height: 600vh;">
        <div class="planet planet-3"></div>
        <div class="planet planet-4"></div>
        <div class="planet planet-5"></div>
        <div class="planet planet-6"></div>
    </div>
'''
content = content.replace(old_bg, new_bg)

with open('resources/views/portfolio.blade.php', 'w', encoding='utf-8') as f:
    f.write(content)

print("Space effects successfully updated!")
