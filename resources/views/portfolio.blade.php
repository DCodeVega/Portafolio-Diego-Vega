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
        
        /* Animación de flotación para iconos */
        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            25% {
                transform: translateY(-15px) rotate(3deg);
            }
            50% {
                transform: translateY(-5px) rotate(-2deg);
            }
            75% {
                transform: translateY(-10px) rotate(1deg);
            }
        }
        
        .floating-icon {
            animation: float 6s ease-in-out infinite;
            transition: all 0.3s ease;
            filter: drop-shadow(0 0 10px rgba(0, 255, 255, 0.3));
        }
        
        .floating-icon:nth-child(odd) {
            animation-duration: 7s;
        }
        
        .floating-icon:hover {
            filter: drop-shadow(0 0 20px rgba(0, 255, 255, 0.8)) brightness(1.3);
            transform: scale(1.1) !important;
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

    <!-- Hero limpio con iconos flotantes -->
    <section id="hero" class="min-h-screen relative overflow-hidden flex items-center justify-center">
        <!-- Capa de iluminación del cursor -->
        <div id="cursorLight" class="absolute inset-0 pointer-events-none" style="z-index: 5; mix-blend-mode: overlay;"></div>
        
        <!-- Fondo base -->
        <div class="absolute inset-0 bg-gradient-to-br from-dark via-dark-500 to-black pointer-events-none" style="z-index: 0;"></div>
        
        <!-- Capa de contenido principal -->
        <div class="relative container mx-auto px-6 text-center" style="z-index: 10;">
            <div class="inline-block relative">
                <p class="text-cyan text-lg -mb-2 font-medium tracking-widest uppercase relative z-10">Ingeniero de Sistemas</p>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold -mb-2 leading-tight relative z-10">
                Juan Diego <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-cyan">Vega Martinez</span> <br class="hidden md:block">
            </h1>
            
            <p class="text-gray-400 text-xl md:text-2xl max-w-2xl mx-auto mb-12 relative z-10">
                <br>Futuro ingeniero de sistemas con perfil multidisciplinario. Más allá del desarrollo web, me apasiona comprender sistemas completos, desde redes, IA, diseño y hasta lógica de negocio.
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

        <!-- Iconos flotantes dispersos - Mismo tamaño, centrado -->

        <!-- Icono 1 - code -->
        <svg class="floating-icon absolute w-12 h-12 text-cyan/25 cursor-pointer" style="top: 20%; left: 15%; transform: rotate(-15deg); z-index: 3;" viewBox="0 0 640 640">
            <path fill="currentColor" d="M64 160C64 124.7 92.7 96 128 96L512 96C547.3 96 576 124.7 576 160L576 400L512 400L512 160L128 160L128 400L64 400L64 160zM0 467.2C0 456.6 8.6 448 19.2 448L620.8 448C631.4 448 640 456.6 640 467.2C640 509.6 605.6 544 563.2 544L76.8 544C34.4 544 0 509.6 0 467.2zM281 273L250 304L281 335C290.4 344.4 290.4 359.6 281 368.9C271.6 378.2 256.4 378.3 247.1 368.9L199.1 320.9C189.7 311.5 189.7 296.3 199.1 287L247.1 239C256.5 229.6 271.7 229.6 281 239C290.3 248.4 290.4 263.6 281 272.9zM393 239L441 287C450.4 296.4 450.4 311.6 441 320.9L393 368.9C383.6 378.3 368.4 378.3 359.1 368.9C349.8 359.5 349.7 344.3 359.1 335L390.1 304L359.1 273C349.7 263.6 349.7 248.4 359.1 239.1C368.5 229.8 383.7 229.7 393 239.1z"/>
        </svg>

        <!-- Icono 2 - database -->
        <svg class="floating-icon absolute w-12 h-12 text-cyan/25 cursor-pointer" style="top: 20%; right: 15%; transform: rotate(15deg); z-index: 3;" viewBox="0 0 640 640">
            <path fill="currentColor" d="M472.3 96L96 96L96 472.3C96 491.3 103.6 509.5 117 523C130.4 536.5 148.7 544 167.7 544L472.3 544C491.3 544 509.5 536.4 523 523C536.5 509.6 544 491.3 544 472.3L544 167.7C544 148.7 536.4 130.5 523 117C509.6 103.5 491.3 96 472.3 96zM428.4 495.4C420.7 486.9 416.7 474.7 416.4 458.8L447.7 458.8C447.9 472.9 452.8 479.9 462.5 479.9C467.4 479.9 470.9 478.3 473 475.2C475 472.1 476 467.2 476 460.4C476 455 474.7 450.5 472 447C468.5 442.8 463.9 439.5 458.8 437.5L447.2 432C436.9 427.1 429.4 421.2 424.7 414.4C420.2 407.6 418 398.1 418 386C418 372.4 422 361.4 429.8 352.9C437.9 344.4 448.9 340.2 463 340.2C476.6 340.2 487.1 344.4 494.5 352.7C502 361.1 506 373 506.3 388.6L476.2 388.6C476.4 383.5 475.3 378.4 473.2 373.8C471.5 370.4 468.2 368.7 463.2 368.7C454.4 368.7 450 373.9 450 384.4C450 389.7 451.1 393.8 453.2 397C456.3 400.5 460.2 403.2 464.6 404.8L475.7 409.7C487.2 415 495.4 421.4 500.5 429.1C505.6 436.8 508.1 447.1 508.1 460.1C508.1 475.6 504.1 487.5 495.8 495.8C487.6 504.1 476.3 508.3 461.7 508.3C447.1 508.3 436.1 504.1 428.3 495.6zM327.4 495.4C319.7 486.9 315.7 474.7 315.4 458.8L346.7 458.8C346.9 472.9 351.8 479.9 361.5 479.9C366.4 479.9 369.9 478.3 371.9 475.2C373.9 472.1 374.9 467.2 374.9 460.4C374.9 455 373.6 450.5 371 447C367.5 442.8 362.9 439.5 357.8 437.5L346.2 432C335.9 427.1 328.4 421.2 323.7 414.4C319.2 407.6 317 398.1 317 386C317 372.4 321 361.4 328.8 352.9C336.9 344.4 347.9 340.2 362 340.2C375.6 340.2 386.1 344.4 393.4 352.7C401 361.1 404.9 373 405.3 388.6L375.2 388.6C375.4 383.5 374.3 378.4 372.2 373.8C370.5 370.4 367.2 368.7 362.2 368.7C353.4 368.7 349 373.9 349 384.4C349 389.7 350.1 393.8 352.2 397C355.3 400.5 359.2 403.2 363.6 404.8L374.7 409.7C386.2 415 394.4 421.4 399.5 429.1C404.6 436.8 407.1 447.1 407.1 460.1C407.1 475.6 403 487.5 394.8 495.8C386.6 504.1 375.3 508.3 360.7 508.3C346.1 508.3 335.1 504.1 327.3 495.6zM221.8 496.5C213.4 488.8 209.3 477.3 209.3 462L209.3 386.6C209.3 371.4 213.7 359.9 222.5 352C231.4 344.2 243.2 340.2 257.7 340.2C271.8 340.2 282.9 344.2 291.1 352.2C299.4 360.2 303.6 372.2 303.6 388.1L303.6 394.1L270.5 394.1L270.5 388.3C270.5 382.2 269.2 377.6 266.5 374.7C265.4 373.2 263.9 372 262.2 371.2C260.5 370.4 258.7 370 256.8 370.1C251.4 370.1 247.6 371.9 245.4 375.7C243.1 380.9 242.1 386.5 242.4 392.1L242.4 457.6C242.4 471.3 247.2 478.2 256.8 478.4C261.3 478.4 264.7 476.8 267 473.6C269.5 469.5 270.7 464.8 270.5 460L270.5 455.1L303.6 455.1L303.6 460.2C303.6 470.8 301.5 479.7 297.4 486.8C293.4 493.7 287.5 499.3 280.3 502.8C272.6 506.5 264.2 508.3 255.7 508.1C241.5 508.1 230.2 504.2 221.9 496.5z"/>
        </svg>

        <!-- Icono 3 - globe -->
        <svg class="floating-icon absolute w-12 h-12 text-cyan/25 cursor-pointer" style="top: 40%; left: 15%; transform: rotate(-25deg); z-index: 3;" viewBox="0 0 640 640">
            <path fill="currentColor" d="M482.4 221.9C517.7 213.6 544 181.9 544 144C544 99.8 508.2 64 464 64C420.6 64 385.3 98.5 384 141.5L200.2 215.1C185.7 200.8 165.9 192 144 192C99.8 192 64 227.8 64 272C64 316.2 99.8 352 144 352C156.2 352 167.8 349.3 178.1 344.4L323.7 471.8C321.3 479.4 320 487.6 320 496C320 540.2 355.8 576 400 576C444.2 576 480 540.2 480 496C480 468.3 466 443.9 444.6 429.6L482.4 221.9zM220.3 296.2C222.5 289.3 223.8 282 224 274.5L407.8 201C411.4 204.5 415.2 207.7 419.4 210.5L381.6 418.1C376.1 419.4 370.8 421.2 365.8 423.6L220.3 296.2z"/>
        </svg>

        <!-- Icono 4 - database -->
        <svg class="floating-icon absolute w-12 h-12 text-cyan/25 cursor-pointer" style="top: 40%; right: 10%; transform: rotate(20deg); z-index: 3;" viewBox="0 0 640 640">
            <path fill="currentColor" d="M288.3 61.5C308.1 50.1 332.5 50.1 352.3 61.5L528.2 163C548 174.4 560.2 195.6 560.2 218.4L560.2 421.4C560.2 444.3 548 465.4 528.2 476.8L352.3 578.5C332.5 589.9 308.1 589.9 288.3 578.5L112.5 477C92.7 465.6 80.5 444.4 80.5 421.6L80.5 218.6C80.5 195.7 92.7 174.6 112.5 163.2L288.3 61.5zM496.1 421.5L496.1 255.4L352.3 338.4L352.3 504.5L496.1 421.5z"/>
        </svg>

        <!-- Icono 5 - globe with rings -->
        <svg class="floating-icon absolute w-12 h-12 text-cyan/25 cursor-pointer" style="top: 60%; left: 15%; transform: rotate(-10deg); z-index: 3;" viewBox="0 0 640 640">
            <path fill="currentColor" d="M511.6 239C480 164.4 406.1 112 320 112C297.9 112 276.6 115.5 256.6 121.8C256.2 123.8 256 125.9 256 128L256 201.4C256 213.9 266.1 224 278.6 224C284.6 224 290.4 221.6 294.6 217.4L310.6 201.4C316.6 195.4 324.7 192 333.2 192L338.7 192C367.2 192 381.5 226.5 361.3 246.6C355.3 252.6 347.2 256 338.7 256L277.2 256C268.7 256 260.6 259.4 254.6 265.4L233.3 286.7C227.3 292.7 223.9 300.8 223.9 309.3L223.9 352C223.9 369.7 238.2 384 255.9 384L287.9 384C305.6 384 319.9 398.3 319.9 416L319.9 448C319.9 465.7 334.2 480 351.9 480L354.6 480C363.1 480 371.2 476.6 377.2 470.6L406.5 441.3C412.5 435.3 415.9 427.2 415.9 418.7L415.9 400C415.9 391.2 423.1 384 431.9 384C440.7 384 447.9 376.8 447.9 368L447.9 333.3C447.9 324.8 444.5 316.7 438.5 310.7L422.5 294.7C418.3 290.5 415.9 284.7 415.9 278.7C415.9 266.2 426 256.1 438.5 256.1L483.5 256.1C495.9 256.1 506.2 249 511.5 239.1zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320z"/>
        </svg>

        <!-- Icono 6 - file -->
        <svg class="floating-icon absolute w-12 h-12 text-cyan/25 cursor-pointer" style="top: 60%; right: 15%; transform: rotate(25deg); z-index: 3;" viewBox="0 0 640 640">
            <path fill="currentColor" d="M192 112L304 112L304 200C304 239.8 336.2 272 376 272L464 272L464 512C464 520.8 456.8 528 448 528L192 528C183.2 528 176 520.8 176 512L176 128C176 119.2 183.2 112 192 112zM352 131.9L444.1 224L376 224C362.7 224 352 213.3 352 200L352 131.9zM192 64C156.7 64 128 92.7 128 128L128 512C128 547.3 156.7 576 192 576L448 576C483.3 576 512 547.3 512 512L512 250.5C512 233.5 505.3 217.2 493.3 205.2L370.7 82.7C358.7 70.7 342.5 64 325.5 64L192 64zM248 320C234.7 320 224 330.7 224 344C224 357.3 234.7 368 248 368L392 368C405.3 368 416 357.3 416 344C416 330.7 405.3 320 392 320L248 320zM248 416C234.7 416 224 426.7 224 440C224 453.3 234.7 464 248 464L392 464C405.3 464 416 453.3 416 440C416 426.7 405.3 416 392 416L248 416z"/>
        </svg>

        <!-- Icono 7 - database with tables -->
        <svg class="floating-icon absolute w-12 h-12 text-cyan/25 cursor-pointer" style="bottom: 20%; left: 20%; transform: rotate(-20deg); z-index: 3;" viewBox="0 0 640 640">
            <path fill="currentColor" d="M568.6 179.8C568.5 179.6 568.4 179.3 568.3 179.1C568.2 178.7 568 178.3 567.8 177.9C567.6 177.7 567.5 177.4 567.3 177.2C567.1 176.9 566.8 176.6 566.6 176.3C566.4 176.1 566.1 175.9 565.8 175.7C565.5 175.5 565.2 175.2 564.9 175L468.6 119.5C467.4 118.8 466 118.4 464.6 118.4C463.2 118.4 461.8 118.8 460.6 119.5L364.3 175C364 175.2 363.7 175.4 363.4 175.7C363.1 175.9 362.9 176.1 362.6 176.3C362.3 176.6 362.1 176.9 361.9 177.2C361.7 177.4 361.5 177.6 361.4 177.9C361.2 178.3 361 178.7 360.9 179.1C360.8 179.3 360.7 179.5 360.6 179.8C360.4 180.5 360.3 181.2 360.3 181.9L360.3 287.1L280.1 333.3L280.1 127.4C280.1 126.7 280 126 279.8 125.3C279.7 125.1 279.6 124.9 279.5 124.6C279.4 124.2 279.2 123.8 279 123.4C278.9 123.1 278.6 122.9 278.5 122.7C278.3 122.4 278 122.1 277.8 121.8C277.6 121.6 277.3 121.4 277 121.2C276.7 121 276.4 120.7 276.1 120.5L179.8 65.1C178.6 64.4 177.2 64 175.8 64C174.4 64 173 64.4 171.8 65.1L75.5 120.5C75.2 120.7 74.9 120.9 74.6 121.2C74.3 121.4 74.1 121.6 73.8 121.8C73.5 122.1 73.3 122.4 73.1 122.7C72.9 123 72.7 123.2 72.5 123.4C72.3 123.8 72.1 124.2 72 124.6C71.9 124.8 71.8 125 71.7 125.3C71.5 126 71.4 126.7 71.4 127.4L71.4 457.1C71.4 458.5 71.8 459.9 72.5 461.1C73.2 462.3 74.2 463.3 75.4 464L268 574.9C268.4 575.1 268.9 575.3 269.3 575.4C269.5 575.5 269.7 575.6 269.9 575.7C271.2 576.1 272.7 576.1 274 575.7C274.2 575.6 274.4 575.5 274.6 575.5C275.1 575.3 275.6 575.2 276 574.9L468.6 464.1C469.8 463.4 470.8 462.4 471.5 461.2C472.2 460 472.6 458.6 472.6 457.2L472.6 351.9L564.8 298.8C566 298.1 567 297.1 567.7 295.8C568.4 294.5 568.8 293.2 568.8 291.8L568.8 182C568.8 181.3 568.7 180.6 568.6 179.9zM175.8 81.3L256 127.4L175.8 173.6L95.6 127.4L175.8 81.2zM264 141.3L264 342.6C230.8 361.7 204.1 377.1 183.8 388.8L183.8 187.5C217 168.4 243.7 153 264 141.3zM264 554.1L87.5 452.5L87.5 141.3C107.8 153 134.6 168.4 167.7 187.5L167.7 402.7C167.7 403 167.8 403.3 167.8 403.6C167.8 404 167.9 404.4 168 404.8C168.1 405.1 168.2 405.4 168.4 405.7C168.5 406 168.7 406.4 168.8 406.7C169 407 169.2 407.2 169.4 407.5C169.6 407.8 169.8 408.1 170.1 408.3C170.3 408.5 170.6 408.7 170.9 408.9C171.2 409.1 171.5 409.4 171.8 409.6L264 461.8L264.1 554.2zM272 447.9L192 402.6C246.7 371.1 305.5 337.3 368.3 301.1L448.4 347.2C419 364 360.2 397.5 272 447.9zM456.5 452.5L280 554.1L280 461.8C381.4 404 440.2 370.4 456.5 361L456.5 452.4zM456.5 333.4C436.2 321.8 409.4 306.4 376.3 287.3L376.3 195.9C396.6 207.6 423.4 223 456.5 242.1L456.5 333.4zM464.5 228.1L384.3 181.9L464.5 135.7L544.7 181.8L464.5 228zM472.5 333.4L472.5 242.1C505.7 223 532.5 207.6 552.8 195.9L552.8 287.3L472.5 333.5z"/>
        </svg>

        <!-- Icono 8 - wrench -->
        <svg class="floating-icon absolute w-12 h-12 text-cyan/25 cursor-pointer" style="bottom: 35%; left: 10%; transform: rotate(30deg); z-index: 3;" viewBox="0 0 640 640">
            <path fill="currentColor" d="M512.5 74.3L291.1 222C262 241.4 243.5 272.9 240.5 307.3C302.8 320.1 351.9 369.2 364.8 431.6C399.3 428.6 430.7 410.1 450.1 381L597.7 159.5C604.4 149.4 608 137.6 608 125.4C608 91.5 580.5 64 546.6 64C534.5 64 522.6 67.6 512.5 74.3zM320 464C320 402.1 269.9 352 208 352C146.1 352 96 402.1 96 464C96 467.9 96.2 471.8 96.6 475.6C98.4 493.1 86.4 512 68.8 512L64 512C46.3 512 32 526.3 32 544C32 561.7 46.3 576 64 576L208 576C269.9 576 320 525.9 320 464z"/>
        </svg>

        <!-- Icono 9 - money -->
        <svg class="floating-icon absolute w-12 h-12 text-cyan/25 cursor-pointer" style="bottom: 35%; right: 5%; transform: rotate(-25deg); z-index: 3;" viewBox="0 0 640 640">
            <path fill="currentColor" d="M119.7 263.7L150.6 294.6C156.6 300.6 164.7 304 173.2 304L194.7 304C203.2 304 211.3 307.4 217.3 313.4L246.6 342.7C252.6 348.7 256 356.8 256 365.3L256 402.8C256 411.3 259.4 419.4 265.4 425.4L278.7 438.7C284.7 444.7 288.1 452.8 288.1 461.3L288.1 480C288.1 497.7 302.4 512 320.1 512C337.8 512 352.1 497.7 352.1 480L352.1 477.3C352.1 468.8 355.5 460.7 361.5 454.7L406.8 409.4C412.8 403.4 416.2 395.3 416.2 386.8L416.2 352.1C416.2 334.4 401.9 320.1 384.2 320.1L301.5 320.1C293 320.1 284.9 316.7 278.9 310.7L262.9 294.7C258.7 290.5 256.3 284.7 256.3 278.7C256.3 266.2 266.4 256.1 278.9 256.1L313.6 256.1C326.1 256.1 336.2 246 336.2 233.5C336.2 227.5 333.8 221.7 329.6 217.5L309.9 197.8C306 194 304 189.1 304 184C304 178.9 306 174 309.7 170.3L327 153C332.8 147.2 336.1 139.3 336.1 131.1C336.1 123.9 333.7 117.4 329.7 112.2C326.5 112.1 323.3 112 320.1 112C224.7 112 144.4 176.2 119.8 263.7zM528 320C528 285.4 519.6 252.8 504.6 224.2C498.2 225.1 491.9 228.1 486.7 233.3L473.3 246.7C467.3 252.7 463.9 260.8 463.9 269.3L463.9 304C463.9 321.7 478.2 336 495.9 336L520 336C522.5 336 525 335.7 527.3 335.2C527.7 330.2 527.8 325.1 527.8 320zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320z"/>
        </svg>

        <!-- Icono 10 - folder (carpeta) -->
        <svg class="floating-icon absolute w-10 h-10 text-cyan/30 cursor-pointer" style="top: 15%; right: 22%; transform: rotate(-20deg); z-index: 3;" viewBox="0 0 384 512">
            <path fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0L304 0c35.3 0 64 28.7 64 64l0 384c0 35.3-28.7 64-64 64L80 512c-35.3 0-64-28.7-64-64L16 64zm64 0l0 304 224 0 0-304-224 0zM192 472c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32z"/>
        </svg>

        <!-- Icono 11 - GitHub -->
        <svg class="floating-icon absolute w-11 h-11 text-cyan/25 cursor-pointer" style="top: 20%; left: 25%; transform: rotate(10deg); z-index: 3;" viewBox="0 0 512 512">
            <path fill="currentColor" d="M173.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM252.8 8c-138.7 0-244.8 105.3-244.8 244 0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1 100-33.2 167.8-128.1 167.8-239 0-138.7-112.5-244-251.2-244zM105.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9s4.3 3.3 5.6 2.3c1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/>
        </svg>

        <!-- Icono 12 - Bitcoin -->
        <svg class="floating-icon absolute w-12 h-12 text-cyan/20 cursor-pointer" style="bottom: 8%; left: 5%; transform: rotate(-5deg); z-index: 3;" viewBox="0 0 448 512">
            <path fill="currentColor" d="M439.6 236.1L244 40.5C238.6 35 231.2 32 223.6 32s-15 3-20.4 8.4l-40.7 40.6 51.5 51.5c27.1-9.1 52.7 16.8 43.4 43.7l49.7 49.7c34.2-11.8 61.2 31 35.5 56.7-26.5 26.5-70.2-2.9-56-37.3l-46.3-46.3 0 121.9c25.3 12.5 22.3 41.8 9.1 55-6.4 6.4-15.2 10.1-24.3 10.1s-17.8-3.6-24.3-10.1c-17.6-17.6-11.1-46.9 11.2-56l0-123c-20.8-8.5-24.6-30.7-18.6-45L142.6 101 8.5 235.1C3 240.6 0 247.9 0 255.5s3 15 8.5 20.4L204.1 471.6c5.4 5.4 12.7 8.4 20.4 8.4s15-3 20.4-8.4L439.6 276.9c5.4-5.4 8.4-12.8 8.4-20.4s-3-15-8.4-20.4z"/>
        </svg>

        <!-- Icono 13 - key (llave) -->
        <svg class="floating-icon absolute w-10 h-10 text-cyan/30 cursor-pointer" style="top: 70%; left: 5%; transform: rotate(25deg); z-index: 3;" viewBox="0 0 512 512">
            <path fill="currentColor" d="M168 56l0 40-78.1 0c-14.3 0-25.9 11.6-25.9 25.9 0 4 .9 8 2.7 11.6l33.4 66.8c-11.4 1.8-20.2 11.7-20.2 23.7 0 13.3 10.7 24 24 24l5.6 0-13.6 136-56.2 70.3c-5 6.3-7.8 14.1-7.8 22.2 0 19.6 15.9 35.5 35.5 35.5l248.9 0c19.6 0 35.5-15.9 35.5-35.5 0-8.1-2.7-15.9-7.8-22.2L288 384 274.4 248 280 248c13.3 0 24-10.7 24-24 0-11.9-8.7-21.9-20.2-23.7l33.4-66.8c1.8-3.6 2.7-7.6 2.7-11.6 0-14.3-11.6-25.9-25.9-25.9l-78.1 0 0-40 16 0c13.3 0 24-10.7 24-24S245.3 8 232 8l-16 0 0-16c0-13.3-10.7-24-24-24S168-21.3 168-8l0 16-16 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l16 0zM325.8 279.6l8.5 85.5 47.4 59.2 4.2 5.7c9.2 13.7 14.1 29.9 14.1 46.5 0 12.7-2.8 24.8-7.9 35.5l83.1 0c20.3 0 36.8-16.5 36.8-36.8 0-7.3-2.2-14.4-6.2-20.4l-25.8-38.7 0-64 13.3-13.3c12-12 18.7-28.3 18.7-45.3L512 192c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 16-32 0 0-16c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 32c0 22.4-10.2 42.4-26.2 55.6z"/>
        </svg>

        <!-- Icono 14 - user (usuario) -->
        <svg class="floating-icon absolute w-9 h-9 text-cyan/25 cursor-pointer" style="top: 30%; left: 5%; transform: rotate(-30deg); z-index: 3;" viewBox="0 0 640 512">
            <path fill="currentColor" d="M192 64c0-35.3 28.7-64 64-64L576 0c35.3 0 64 28.7 64 64l0 224c0 35.3-28.7 64-64 64l-320 0c-35.3 0-64-28.7-64-64l0-224zM320 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm156.5 11.5C472.1 100.4 464.4 96 456 96s-16.1 4.4-20.5 11.5l-54 88.3-17.9-25.6c-4.5-6.4-11.8-10.2-19.7-10.2s-15.2 3.8-19.7 10.2l-56 80c-5.1 7.3-5.8 16.9-1.6 24.8S279.1 288 288 288l256 0c8.7 0 16.7-4.7 20.9-12.3s4.1-16.8-.5-24.3l-88-144zM144 128l0 160c0 61.9 50.1 112 112 112l192 0 0 16c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 192c0-35.3 28.7-64 64-64l80 0zM52 196l0 24c0 8.8 7.2 16 16 16l24 0c8.8 0 16-7.2 16-16l0-24c0-8.8-7.2-16-16-16l-24 0c-8.8 0-16 7.2-16 16zm16 80c-8.8 0-16 7.2-16 16l0 24c0 8.8 7.2 16 16 16l24 0c8.8 0 16-7.2 16-16l0-24c0-8.8-7.2-16-16-16l-24 0zm0 96c-8.8 0-16 7.2-16 16l0 24c0 8.8 7.2 16 16 16l24 0c8.8 0 16-7.2 16-16l0-24c0-8.8-7.2-16-16-16l-24 0z"/>
        </svg>

        <!-- Icono 15 - credit card -->
        <svg class="floating-icon absolute w-11 h-11 text-cyan/25 cursor-pointer" style="bottom: 18%; right: 5%; transform: rotate(15deg); z-index: 3;" viewBox="0 0 448 512">
            <path fill="currentColor" d="M439.8 200.5c-7.7-30.9-22.3-54.2-53.4-54.2l-40.1 0 0 47.4c0 36.8-31.2 67.8-66.8 67.8l-106.8 0c-29.2 0-53.4 25-53.4 54.3l0 101.8c0 29 25.2 46 53.4 54.3 33.8 9.9 66.3 11.7 106.8 0 26.9-7.8 53.4-23.5 53.4-54.3l0-40.7-106.7 0 0-13.6 160.2 0c31.1 0 42.6-21.7 53.4-54.2 11.2-33.5 10.7-65.7 0-108.6zM286.2 444.7a20.4 20.4 0 1 1 0-40.7 20.4 20.4 0 1 1 0 40.7zM167.8 248.1l106.8 0c29.7 0 53.4-24.5 53.4-54.3l0-101.9c0-29-24.4-50.7-53.4-55.6-35.8-5.9-74.7-5.6-106.8 .1-45.2 8-53.4 24.7-53.4 55.6l0 40.7 106.9 0 0 13.6-147 0c-31.1 0-58.3 18.7-66.8 54.2-9.8 40.7-10.2 66.1 0 108.6 7.6 31.6 25.7 54.2 56.8 54.2l36.7 0 0-48.8c0-35.3 30.5-66.4 66.8-66.4zM161.2 64.7a20.4 20.4 0 1 1 0 40.8 20.4 20.4 0 1 1 0-40.8z"/>
        </svg>

        <!-- Icono 16 - chart (gráfico) -->
        <svg class="floating-icon absolute w-8 h-8 text-cyan/30 cursor-pointer" style="top: 70%; left: 30%; transform: rotate(-35deg); z-index: 3;" viewBox="0 0 640 512">
            <path fill="currentColor" d="M320 64c-85.3 0-138.7 42.7-160 128 32-42.7 69.3-58.7 112-48 24.3 6.1 41.7 23.8 61 43.3 31.4 31.8 67.7 68.7 147 68.7 85.3 0 138.7-42.7 160-128-32 42.7-69.3 58.7-112 48-24.3-6.1-41.7-23.8-61-43.3-31.4-31.8-67.7-68.7-147-68.7zM160 256c-85.3 0-138.7 42.7-160 128 32-42.7 69.3-58.7 112-48 24.3 6.1 41.7 23.8 61 43.3 31.4 31.8 67.7 68.7 147 68.7 85.3 0 138.7-42.7 160-128-32 42.7-69.3 58.7-112 48-24.3-6.1-41.7-23.8-61-43.3-31.4-31.8-67.7-68.7-147-68.7z"/>
        </svg>

        <!-- Icono 17 - check (tilde) -->
        <svg class="floating-icon absolute w-9 h-9 text-cyan/25 cursor-pointer" style="top: 88%; left: 15%; transform: rotate(-10deg); z-index: 3;" viewBox="0 0 512 512">
            <path fill="currentColor" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64L0 400c0 44.2 35.8 80 80 80l400 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 416c-8.8 0-16-7.2-16-16L64 64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7 262.6 153.4c-12.5-12.5-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l73.4-73.4 57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"/>
        </svg>

        <!-- Icono 18 - calendar -->
        <svg class="floating-icon absolute w-10 h-10 text-cyan/30 cursor-pointer" style="top: 15%; right: 8%; transform: rotate(15deg); z-index: 3;" viewBox="0 0 512 512">
            <path fill="currentColor" d="M402.6 50.2c-5.4 1.7-11.3 1.8-16.2-.9-5.8-3.2-11.8-6.2-17.8-8.9-10.4-4.7-13.7-18.3-4.1-24.6 15-9.9 33-15.7 52.3-15.7 52.6 0 95.2 42.6 95.2 95.2 0 13.2-2.7 25.8-7.6 37.3-4.5 10.5-18.4 9.8-24.9 .4-3.8-5.5-7.8-10.8-12-16-3.5-4.4-4.5-10.2-3.8-15.8 .2-1.9 .4-3.9 .4-5.9 0-26.1-21.2-47.2-47.2-47.2-4.9 0-9.7 .8-14.2 2.2zM32.5 132.9c-6.5 9.4-20.5 10.1-24.9-.4-4.9-11.5-7.6-24.1-7.6-37.3 0-52.6 42.6-95.2 95.2-95.2 19.3 0 37.3 5.8 52.3 15.7 9.6 6.3 6.3 19.9-4.1 24.6-6.1 2.8-12 5.7-17.8 8.9-4.9 2.7-10.9 2.6-16.2 .9-4.5-1.4-9.2-2.2-14.2-2.2-26.1 0-47.2 21.2-47.2 47.2 0 2 .1 4 .4 5.9 .7 5.6-.3 11.4-3.8 15.8-4.2 5.2-8.2 10.5-12 16zM432 288a176 176 0 1 0 -352 0 176 176 0 1 0 352 0zM396.5 462.5C358.1 493.4 309.2 512 256 512s-102.1-18.6-140.5-49.5L73 505c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l42.5-42.5C50.6 390.1 32 341.2 32 288 32 164.3 132.3 64 256 64S480 164.3 480 288c0 53.2-18.6 102.1-49.5 140.5L473 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-42.5-42.5zM280 184l0 94.1 41 41c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-48-48c-4.5-4.5-7-10.6-7-17l0-104c0-13.3 10.7-24 24-24s24 10.7 24 24z"/>
        </svg>

        <!-- Icono 19 - graduation (escuela) -->
        <svg class="floating-icon absolute w-11 h-11 text-cyan/25 cursor-pointer" style="top: 35%; left: 8%; transform: rotate(-20deg); z-index: 3;" viewBox="0 0 640 512">
            <path fill="currentColor" d="M384 32l128 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L398.4 96c-5.2 25.8-22.9 47.1-46.4 57.3l0 294.7 160 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-384 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l160 0 0-294.7c-23.5-10.3-41.2-31.6-46.4-57.3L128 96c-17.7 0-32-14.3-32-32s14.3-32 32-32l128 0c14.6-19.4 37.8-32 64-32s49.4 12.6 64 32zm55.6 288L584.4 320 512 195.8 439.6 320zM512 416c-62.9 0-115.2-34-126-78.9-2.6-11 1-22.3 6.7-32.1l95.2-163.2c5-8.6 14.2-13.8 24.1-13.8s19.1 5.3 24.1 13.8l95.2 163.2c5.7 9.8 9.3 21.1 6.7 32.1-10.8 44.8-63.1 78.9-126 78.9zM126.8 195.8L54.4 320 199.3 320 126.8 195.8zM.9 337.1c-2.6-11 1-22.3 6.7-32.1l95.2-163.2c5-8.6 14.2-13.8 24.1-13.8s19.1 5.3 24.1 13.8l95.2 163.2c5.7 9.8 9.3 21.1 6.7 32.1-10.8 44.8-63.1 78.9-126 78.9S11.7 382 .9 337.1z"/>
        </svg>

        <!-- Icono 20 - briefcase (maleta) -->
        <svg class="floating-icon absolute w-10 h-10 text-cyan/30 cursor-pointer" style="top: 52%; right: 12%; transform: rotate(25deg); z-index: 3;" viewBox="0 0 512 512">
            <path fill="currentColor" d="M64 64C64 28.7 92.7 0 128 0L341.5 0c17 0 33.3 6.7 45.3 18.7l42.5 42.5c12 12 18.7 28.3 18.7 45.3l0 37.5-384 0 0-80zM0 256c0-35.3 28.7-64 64-64l384 0c35.3 0 64 28.7 64 64l0 96c0 17.7-14.3 32-32 32l-32 0 0 64c0 35.3-28.7 64-64 64l-256 0c-35.3 0-64-28.7-64-64l0-64-32 0c-17.7 0-32-14.3-32-32l0-96zM128 416l0 32 256 0 0-96-256 0 0 64zM456 272a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z"/>
        </svg>

        <!-- Icono 21 - server -->
        <svg class="floating-icon absolute w-9 h-9 text-cyan/25 cursor-pointer" style="bottom: 25%; left: 12%; transform: rotate(-15deg); z-index: 3;" viewBox="0 0 448 512">
            <path fill="currentColor" d="M171-16c-36.4 0-57.8 58.3-68.3 112L72 96c-13.3 0-24 10.7-24 24s10.7 24 24 24l24 0 0 32c0 17 3.3 33.2 9.3 48l-9.3 0 0 0-20.5 0c-15.2 0-27.5 12.3-27.5 27.5 0 3 .5 5.9 1.4 8.7l28.9 86.6C40.2 379.6 16 428.1 16 482.3 16 498.7 29.3 512 45.7 512l356.6 0c16.4 0 29.7-13.3 29.7-29.7 0-54.2-24.2-102.7-62.3-135.4l28.9-86.6c.9-2.8 1.4-5.7 1.4-8.7 0-15.2-12.3-27.5-27.5-27.5l-20.5 0 0 0-9.3 0c6-14.8 9.3-31 9.3-48l0-32 24 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-30.7 0c-10.4-53.7-31.9-112-68.3-112-9.6 0-19 3.9-27.5 8.2-8.2 4.1-18.4 7.8-25.5 7.8s-17.3-3.7-25.5-7.8C190-12.1 180.6-16 171-16zm93.7 484.4l-24.8-70.9 27.9-32.5c2.7-3.2 4.2-7.2 4.2-11.4 0-9.7-7.8-17.5-17.5-17.5l-61 0c-9.7 0-17.5 7.8-17.5 17.5 0 4.2 1.5 8.2 4.2 11.4l27.9 32.5-24.8 70.9-57-180.4 35.7 0c18.4 10.2 39.5 16 62 16s43.6-5.8 62-16l35.7 0-57 180.4zM224 256c-34.7 0-64.2-22.1-75.3-53 5.7 3.2 12.3 5 19.3 5l12.4 0c16.5 0 31.1-10.6 36.3-26.2 2.3-7 12.2-7 14.5 0 5.2 15.6 19.9 26.2 36.3 26.2l12.4 0c7 0 13.6-1.8 19.3-5-11.1 30.9-40.6 53-75.3 53z"/>
        </svg>

        <!-- Icono 22 - arrow (flecha) -->
        <svg class="floating-icon absolute w-8 h-8 text-cyan/30 cursor-pointer" style="top: 70%; right: 25%; transform: rotate(-40deg); z-index: 3;" viewBox="0 0 512 512">
            <path fill="currentColor" d="M9.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L146.7 256 9.4 118.6zM224 384l256 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-256 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/>
        </svg>

        <!-- Icono 23 - pc computer -->
        <svg class="floating-icon absolute w-10 h-10 text-cyan/25 cursor-pointer" style="bottom: 5%; right: 18%; transform: rotate(20deg); z-index: 3;" viewBox="0 0 448 512">
            <path fill="currentColor" d="M224 64c-79 0-144.7 57.3-157.7 132.7 9.3-3 19.3-4.7 29.7-4.7l16 0c26.5 0 48 21.5 48 48l0 96c0 26.5-21.5 48-48 48l-16 0c-53 0-96-43-96-96l0-64C0 100.3 100.3 0 224 0S448 100.3 448 224l0 168.1c0 66.3-53.8 120-120.1 120l-87.9-.1-32 0c-26.5 0-48-21.5-48-48s21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 0 40 0c39.8 0 72-32.2 72-72l0-20.9c-14.1 8.2-30.5 12.8-48 12.8l-16 0c-26.5 0-48-21.5-48-48l0-96c0-26.5 21.5-48 48-48l16 0c10.4 0 20.3 1.6 29.7 4.7-13-75.3-78.6-132.7-157.7-132.7z"/>
        </svg>

        <!-- Icono 24 - signal/wifi -->
        <svg class="floating-icon absolute w-9 h-9 text-cyan/25 cursor-pointer" style="top: 28%; right: 28%; transform: rotate(35deg); z-index: 3;" viewBox="0 0 512 512">
            <path fill="currentColor" d="M224 0c35.3 0 64 21.5 64 48 0 10.4-4.4 20-12 27.9-6.6 6.9-12 15.3-12 24.9 0 15 12.2 27.2 27.2 27.2l44.8 0c26.5 0 48 21.5 48 48l0 44.8c0 15 12.2 27.2 27.2 27.2 9.5 0 18-5.4 24.9-12 7.9-7.5 17.5-12 27.9-12 26.5 0 48 28.7 48 64s-21.5 64-48 64c-10.4 0-20.1-4.4-27.9-12-6.9-6.6-15.3-12-24.9-12-15 0-27.2 12.2-27.2 27.2L384 464c0 26.5-21.5 48-48 48l-56.8 0c-12.8 0-23.2-10.4-23.2-23.2 0-9.2 5.8-17.3 13.2-22.8 11.6-8.7 18.8-20.7 18.8-34 0-26.5-28.7-48-64-48s-64 21.5-64 48c0 13.3 7.2 25.3 18.8 34 7.4 5.5 13.2 13.5 13.2 22.8 0 12.8-10.4 23.2-23.2 23.2L48 512c-26.5 0-48-21.5-48-48L0 343.2c0-12.8 10.4-23.2 23.2-23.2 9.2 0 17.3 5.8 22.8 13.2 8.7 11.6 20.7 18.8 34 18.8 26.5 0 48-28.7 48-64s-21.5-64-48-64c-13.3 0-25.3 7.2-34 18.8-5.5 7.4-13.5 13.2-22.8 13.2-12.8 0-23.2-10.4-23.2-23.2L0 176c0-26.5 21.5-48 48-48l108.8 0c15 0 27.2-12.2 27.2-27.2 0-9.5-5.4-18-12-24.9-7.5-7.9-12-17.5-12-27.9 0-26.5 28.7-48 64-48z"/>
        </svg>

        <!-- Scroll indicador -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce z-20">
            <i class="fas fa-chevron-down text-cyan text-2xl"></i>
        </div>
        
        <!-- Scripts para efectos -->
        <script>
            // Efecto de luz cursor
            (function() {
                const light = document.getElementById('cursorLight');
                let mouse = { x: -1000, y: -1000 };
                let targetMouse = { x: -1000, y: -1000 };
                
                function updateLight() {
                    mouse.x += (targetMouse.x - mouse.x) * 0.1;
                    mouse.y += (targetMouse.y - mouse.y) * 0.1;
                    
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
            
            // Efecto de brillo en iconos flotantes
            (function() {
                const icons = document.querySelectorAll('.floating-icon');
                let mouse = { x: -1000, y: -1000 };
                
                document.addEventListener('mousemove', (e) => {
                    mouse.x = e.clientX;
                    mouse.y = e.clientY;
                    updateIcons();
                });
                
                function updateIcons() {
                    icons.forEach((icon) => {
                        const rect = icon.getBoundingClientRect();
                        const iconCenterX = rect.left + rect.width / 2;
                        const iconCenterY = rect.top + rect.height / 2;
                        
                        const dx = mouse.x - iconCenterX;
                        const dy = mouse.y - iconCenterY;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        
                        const maxDist = 150;
                        
                        if (dist < maxDist) {
                            const factor = (1 - dist / maxDist);
                            const scale = 1 + factor * 0.2;
                            const glow = 30 + factor * 50;
                            const brightness = 1 + factor * 0.5;
                            
                            icon.style.transform = `scale(${scale})`;
                            icon.style.filter = `drop-shadow(0 0 ${glow}px rgba(0, 255, 255, ${0.5 + factor * 0.5})) brightness(${brightness})`;
                            icon.style.opacity = 0.3 + factor * 0.7;
                        } else {
                            icon.style.transform = '';
                            icon.style.filter = '';
                            icon.style.opacity = '';
                        }
                    });
                    
                    requestAnimationFrame(updateIcons);
                }
                
                updateIcons();
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
                        <img src="/images/Gemini_Generated_Image_de_JuanDiegoVega.png" alt="Foto de perfil" class="rounded-lg shadow-2xl border-2 border-cyan/20 w-80 h-80 object-cover">
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
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=escorpiotauro2015@gmail.com" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-dark-300 text-gray-300 hover:bg-cyan hover:text-dark transition-colors" title="Enviar correo vía Gmail">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:70145646" class="w-10 h-10 flex items-center justify-center rounded-full bg-dark-300 text-gray-300 hover:bg-cyan hover:text-dark transition-colors">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="https://wa.me/59170145646" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-dark-300 text-gray-300 hover:bg-cyan hover:text-dark transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://github.com/DCodeVega" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-dark-300 text-gray-300 hover:bg-cyan hover:text-dark transition-colors">
                            <i class="fab fa-github"></i>
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
                        <img src="/images/proyectos/proyecto1.jpg" alt="Proyecto" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
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
                            <a href="https://github.com/DCodeVega" target="_blank" class="text-gray-300 hover:text-cyan text-sm"><i class="fab fa-github mr-1"></i> Código</a>
                            <a href="#" class="text-gray-300 hover:text-cyan text-sm"><i class="fas fa-external-link-alt mr-1"></i> Demo</a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2 -->
                <div class="bg-dark-300 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan/20 transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="h-48 bg-gray-800 flex items-center justify-center overflow-hidden relative">
                        <img src="/images/proyectos/proyecto2.jpg" alt="Proyecto" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
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
                            <a href="https://github.com/DCodeVega" target="_blank" class="text-gray-300 hover:text-cyan text-sm"><i class="fab fa-github mr-1"></i> Código</a>
                            <a href="#" class="text-gray-300 hover:text-cyan text-sm"><i class="fas fa-external-link-alt mr-1"></i> Demo</a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 3 -->
                <div class="bg-dark-300 rounded-xl overflow-hidden shadow-lg hover:shadow-cyan/20 transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="h-48 bg-gray-800 flex items-center justify-center overflow-hidden relative">
                        <img src="/images/proyectos/proyecto3.jpg" alt="Proyecto" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
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
                            <a href="https://github.com/DCodeVega" target="_blank" class="text-gray-300 hover:text-cyan text-sm"><i class="fab fa-github mr-1"></i> Código</a>
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
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=escorpiotauro2015@gmail.com" target="_blank" class="text-gray-300 hover:text-cyan transition-colors text-2xl" title="Gmail"><i class="fas fa-envelope"></i></a>
                        <a href="tel:70145646" class="text-gray-300 hover:text-cyan transition-colors text-2xl" title="Teléfono"><i class="fas fa-phone"></i></a>
                        <a href="https://wa.me/59170145646" target="_blank" class="text-gray-300 hover:text-cyan transition-colors text-2xl" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://github.com/DCodeVega" target="_blank" class="text-gray-300 hover:text-cyan transition-colors text-2xl" title="GitHub"><i class="fab fa-github"></i></a>
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