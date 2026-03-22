<x-app-layout>

    <x-slot name="header">
        <div class="text-center">
            <h1 class="font-cinzel text-xl sm:text-2xl font-bold text-amber-100 tracking-widest uppercase">
                Románico Palentino
            </h1>
            <p class="font-playfair text-amber-400 italic text-sm mt-1">
                Carrión de los Condes &middot; Guía visual y auditiva
            </p>
        </div>
    </x-slot>

    <!-- Intro section -->
    <div class="max-w-3xl mx-auto px-4 pt-10 pb-6 text-center">
        <div class="flex items-center justify-center gap-4 mb-6">
            <div class="h-px flex-1 max-w-16 bg-amber-600/50"></div>
            <svg class="w-7 h-7 text-amber-600" viewBox="0 0 48 58" fill="none">
                <path d="M7 52 L7 27 C7 10 41 10 41 27 L41 52 Z" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linejoin="round"/>
                <line x1="2" y1="52" x2="46" y2="52" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="24" y1="19" x2="24" y2="52" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <line x1="14" y1="34" x2="34" y2="34" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <line x1="24" y1="5" x2="24" y2="10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="19" y1="7" x2="29" y2="7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
            <div class="h-px flex-1 max-w-16 bg-amber-600/50"></div>
        </div>
        <p class="font-playfair text-stone-600 text-lg italic leading-relaxed">
            Descubre la riqueza arquitectónica del románico palentino a través de fotografías,
            audioguías y códigos QR de cada monumento.
        </p>
        <div class="h-px max-w-24 mx-auto bg-amber-600/40 mt-6"></div>
    </div>

    <!-- Monuments Grid -->
    <div class="max-w-6xl mx-auto px-4 pb-12 grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- ── SANTA MARÍA DEL CAMINO ── -->
        <div class="card-monumento group">
            <div class="relative overflow-hidden h-64">
                <img src="/romanico/images/iglesiasantamaria01.jpg"
                     alt="Iglesia de Santa María del Camino"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/20 to-transparent"></div>
                <h2 class="absolute bottom-4 left-4 right-4 font-cinzel text-lg font-bold text-white leading-snug drop-shadow-lg">
                    Iglesia de Santa María del Camino
                </h2>
            </div>
            <div class="p-6">
                <p class="font-playfair text-stone-600 italic leading-relaxed mb-5">
                    Uno de los templos románicos más emblemáticos del Camino de Santiago en Tierra de Campos.
                </p>
                <a href="/romanico/santa_maria/index.html" class="btn-romanico text-xs">
                    Ver ficha completa
                </a>

                <!-- Audio -->
                <div class="mt-6 pt-5 border-t border-stone-100">
                    <h3 class="font-cinzel text-xs font-bold text-amber-700 uppercase tracking-widest mb-3 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"/>
                        </svg>
                        Audioguía
                    </h3>
                    <audio controls class="w-full rounded-lg"
                           src="/romanico/audios/audioguia_de_la_iglesia_de_santa_maria_del_camino.mp3"></audio>
                </div>

                <!-- QR -->
                <div class="mt-5 flex items-center gap-4">
                    <span class="font-cinzel text-xs text-stone-400 uppercase tracking-widest">Código QR</span>
                    <img class="w-24 h-24 border-2 border-amber-200 rounded-lg shadow-sm"
                         src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ url('/romanico/audios') }}/audioguia_de_la_iglesia_de_santa_maria_del_camino.mp3"
                         alt="QR Audioguía Santa María" />
                </div>
            </div>
        </div>

        <!-- ── IGLESIA DE SANTIAGO ── -->
        <div class="card-monumento group">
            <div class="relative overflow-hidden h-64">
                <img src="/romanico/images/iglesiasantiago01.jpg"
                     alt="Iglesia de Santiago"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/20 to-transparent"></div>
                <h2 class="absolute bottom-4 left-4 right-4 font-cinzel text-lg font-bold text-white leading-snug drop-shadow-lg">
                    Iglesia de Santiago
                </h2>
            </div>
            <div class="p-6">
                <p class="font-playfair text-stone-600 italic leading-relaxed mb-5">
                    Famosa por su imponente fachada esculpida y su iconografía del Maestro de Carrión.
                </p>
                <a href="/romanico/santiago/index.html" class="btn-romanico text-xs">
                    Ver ficha completa
                </a>

                <!-- Audio -->
                <div class="mt-6 pt-5 border-t border-stone-100">
                    <h3 class="font-cinzel text-xs font-bold text-amber-700 uppercase tracking-widest mb-3 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"/>
                        </svg>
                        Audioguía
                    </h3>
                    <audio controls class="w-full rounded-lg"
                           src="/romanico/audios/audioguia_iglesia_de_santiago.mp3"></audio>
                </div>

                <!-- QR -->
                <div class="mt-5 flex items-center gap-4">
                    <span class="font-cinzel text-xs text-stone-400 uppercase tracking-widest">Código QR</span>
                    <img class="w-24 h-24 border-2 border-amber-200 rounded-lg shadow-sm"
                         src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ url('/romanico/audios') }}/audioguia_iglesia_de_santiago.mp3"
                         alt="QR Audioguía Santiago" />
                </div>
            </div>
        </div>

        <!-- ── MONASTERIO DE SANTA CLARA ── -->
        <div class="card-monumento group">
            <div class="relative overflow-hidden h-64">
                <img src="/romanico/images/monasteriosantaclara01.jpg"
                     alt="Monasterio de Santa Clara"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/20 to-transparent"></div>
                <h2 class="absolute bottom-4 left-4 right-4 font-cinzel text-lg font-bold text-white leading-snug drop-shadow-lg">
                    Monasterio de Santa Clara
                </h2>
            </div>
            <div class="p-6">
                <p class="font-playfair text-stone-600 italic leading-relaxed mb-5">
                    Conjunto monástico de gran importancia histórica con elementos románicos y góticos.
                </p>
                <a href="/romanico/santa_clara/index.html" class="btn-romanico text-xs">
                    Ver ficha completa
                </a>

                <!-- Audio -->
                <div class="mt-6 pt-5 border-t border-stone-100">
                    <h3 class="font-cinzel text-xs font-bold text-amber-700 uppercase tracking-widest mb-3 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"/>
                        </svg>
                        Audioguía
                    </h3>
                    <audio controls class="w-full rounded-lg"
                           src="/romanico/audios/audioguia_monasterio_de_santa_clara.mp3"></audio>
                </div>

                <!-- QR -->
                <div class="mt-5 flex items-center gap-4">
                    <span class="font-cinzel text-xs text-stone-400 uppercase tracking-widest">Código QR</span>
                    <img class="w-24 h-24 border-2 border-amber-200 rounded-lg shadow-sm"
                         src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ url('/romanico/audios') }}/audioguia_monasterio_de_santa_clara.mp3"
                         alt="QR Audioguía Santa Clara" />
                </div>
            </div>
        </div>

        <!-- ── MONASTERIO DE SAN ZOILO ── -->
        <div class="card-monumento group">
            <div class="relative overflow-hidden h-64">
                <img src="/romanico/images/monasteriosanzoilo01.jpg"
                     alt="Monasterio de San Zoilo"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-stone-900/20 to-transparent"></div>
                <h2 class="absolute bottom-4 left-4 right-4 font-cinzel text-lg font-bold text-white leading-snug drop-shadow-lg">
                    Monasterio de San Zoilo
                </h2>
            </div>
            <div class="p-6">
                <p class="font-playfair text-stone-600 italic leading-relaxed mb-5">
                    Uno de los monasterios más relevantes de la zona y antiguo centro de cultura y acogida.
                </p>
                <a href="/romanico/san_zoilo/index.html" class="btn-romanico text-xs">
                    Ver ficha completa
                </a>

                <!-- Audio -->
                <div class="mt-6 pt-5 border-t border-stone-100">
                    <h3 class="font-cinzel text-xs font-bold text-amber-700 uppercase tracking-widest mb-3 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"/>
                        </svg>
                        Audioguía
                    </h3>
                    <audio controls class="w-full rounded-lg"
                           src="/romanico/audios/audioguia_monasterio_de_san_zoilo.mp3"></audio>
                </div>

                <!-- QR -->
                <div class="mt-5 flex items-center gap-4">
                    <span class="font-cinzel text-xs text-stone-400 uppercase tracking-widest">Código QR</span>
                    <img class="w-24 h-24 border-2 border-amber-200 rounded-lg shadow-sm"
                         src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ url('/romanico/audios') }}/audioguia_monasterio_de_san_zoilo.mp3"
                         alt="QR Audioguía San Zoilo" />
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="bg-stone-900 border-t-2 border-amber-700/50 text-stone-400 text-center py-6">
        <p class="font-playfair text-sm italic">
            Página creada por <span class="text-amber-400 font-semibold">"El Serrano"</span>
            de Villanueva del Conde (Salamanca)
        </p>
    </footer>

</x-app-layout>
