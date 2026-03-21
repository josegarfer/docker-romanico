<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Románico Palentino') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-playfair text-stone-900 antialiased">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">

            <!-- Background image -->
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                 style="background-image: url('/images/iglesiasantiago02.jpg')"></div>
            <!-- Overlay -->
            <div class="absolute inset-0 bg-stone-900/75"></div>
            <!-- Top decorative line -->
            <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-amber-500 to-transparent"></div>

            <!-- Logo / Branding -->
            <div class="relative z-10 mb-6 flex flex-col items-center gap-2 text-center">
                <a href="/" class="flex flex-col items-center gap-2 group">
                    <x-application-logo class="w-14 h-14 text-amber-400 group-hover:text-amber-300 transition-colors duration-200" />
                    <span class="font-cinzel text-base font-bold text-amber-100 tracking-[0.3em] uppercase group-hover:text-amber-300 transition-colors duration-200">
                        Románico Palentino
                    </span>
                    <span class="font-playfair text-xs text-amber-400 italic">Carrión de los Condes</span>
                </a>
            </div>

            <!-- Form Card -->
            <div class="relative z-10 w-full sm:max-w-md px-6 py-8 bg-stone-50/95 backdrop-blur-sm shadow-2xl overflow-hidden sm:rounded-xl border border-amber-200/60">
                {{ $slot }}
            </div>

            <!-- Bottom decorative line -->
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-amber-500 to-transparent"></div>
        </div>
    </body>
</html>
