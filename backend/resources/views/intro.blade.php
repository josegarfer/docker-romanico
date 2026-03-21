<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Románico Palentino · Carrión de los Condes</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-playfair antialiased overflow-hidden">

<div class="relative h-screen w-full overflow-hidden">

    <!-- Background image -->
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
         style="background-image: url('/images/iglesiasantiago02.jpg')"></div>

    <!-- Gradient overlay — darker at bottom for readability -->
    <div class="absolute inset-0 bg-gradient-to-b from-stone-900/55 via-stone-900/50 to-stone-900/85"></div>

    <!-- Top decorative line -->
    <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-transparent via-amber-500 to-transparent"></div>

    <!-- Content -->
    <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-6">

        <!-- Decorative ornament -->
        <div class="mb-5 flex items-center gap-4">
            <div class="h-px w-12 sm:w-20 bg-amber-500/60"></div>
            <svg class="w-9 h-9 text-amber-400" viewBox="0 0 48 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 52 L7 27 C7 10 41 10 41 27 L41 52 Z" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linejoin="round"/>
                <line x1="2" y1="52" x2="46" y2="52" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="24" y1="19" x2="24" y2="52" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <line x1="14" y1="34" x2="34" y2="34" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <line x1="24" y1="5" x2="24" y2="10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="19" y1="7" x2="29" y2="7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
            <div class="h-px w-12 sm:w-20 bg-amber-500/60"></div>
        </div>

        <!-- Location -->
        <p class="font-cinzel text-xs sm:text-sm text-amber-400 uppercase tracking-[0.4em] mb-3">
            Carrión de los Condes &middot; Palencia
        </p>

        <!-- Main title -->
        <h1 class="font-cinzel font-black text-white leading-tight mb-2"
            style="font-size: clamp(2.2rem, 7vw, 4.5rem); text-shadow: 2px 4px 24px rgba(0,0,0,0.7);">
            Románico
        </h1>
        <h1 class="font-cinzel font-black text-amber-300 leading-tight mb-6"
            style="font-size: clamp(2.2rem, 7vw, 4.5rem); text-shadow: 2px 4px 24px rgba(0,0,0,0.7);">
            Palentino
        </h1>

        <!-- Description -->
        <p class="font-playfair italic text-stone-200 max-w-xl sm:max-w-2xl mb-10 leading-relaxed"
           style="font-size: clamp(0.95rem, 2.2vw, 1.15rem);">
            Sumérgete en la riqueza del románico palentino a través de una experiencia visual y auditiva
            única. Descubre fotografías, audioguías y la historia de los monumentos medievales de Carrión de los Condes.
        </p>

        <!-- Call to action buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/login" class="btn-romanico">
                Iniciar sesión
            </a>
            <a href="/register" class="btn-romanico-outline">
                Crear cuenta
            </a>
        </div>

        <!-- Photo credit -->
        <div class="absolute bottom-6 left-0 right-0 flex flex-col items-center gap-1">
            <p class="font-cinzel text-xs text-stone-500 uppercase tracking-widest">Iglesia de Santiago · Carrión de los Condes</p>
        </div>
    </div>

    <!-- Bottom decorative line -->
    <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-transparent via-amber-500 to-transparent"></div>
</div>

</body>
</html>
