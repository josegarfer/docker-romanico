<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Monasterio de Santa Clara — Románico Palentino</title>
  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('romanico/css/style.css') }}">
</head>
<body>

  <!-- Navbar -->
  <nav class="romanico-nav" role="navigation" aria-label="Navegación principal">
    <div class="romanico-nav__inner">
      <a href="{{ route('dashboard') }}" class="romanico-nav__brand" aria-label="Inicio Románico Palentino">
        <svg viewBox="0 0 48 58" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M7 52 L7 27 C7 10 41 10 41 27 L41 52 Z"
                stroke="currentColor" stroke-width="2.5" fill="none" stroke-linejoin="round"/>
          <line x1="2"  y1="52" x2="46" y2="52" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
          <line x1="24" y1="19" x2="24" y2="52" stroke="currentColor" stroke-width="2"   stroke-linecap="round"/>
          <line x1="14" y1="34" x2="34" y2="34" stroke="currentColor" stroke-width="2"   stroke-linecap="round"/>
          <line x1="24" y1="5"  x2="24" y2="10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
          <line x1="19" y1="7"  x2="29" y2="7"  stroke="currentColor" stroke-width="2"   stroke-linecap="round"/>
        </svg>
        <span>Románico Palentino</span>
      </a>
      <a href="{{ route('dashboard') }}" class="romanico-nav__back" aria-label="Volver al listado de monumentos">
        &#8592; Monumentos
      </a>
    </div>
  </nav>

  <!-- Encabezado de la ficha -->
  <header class="ficha-header">
    <h1>Monasterio de Santa Clara</h1>
  </header>

  <!-- Contenido -->
  <main class="ficha-content">

    <div class="ficha-section">
      <h2>Imagen Principal</h2>
      <div class="imagen-principal">
        <img id="imagen-grande"
             src="{{ asset('romanico/images/monasteriosantaclara01.jpg') }}"
             alt="Vista del Monasterio de Santa Clara">
      </div>
    </div>

    <div class="ficha-section">
      <h2>Galería</h2>
      <div class="galeria">
        <img src="{{ asset('romanico/images/monasteriosantaclara01.jpg') }}" alt="Monasterio de Santa Clara — vista 1" onclick="cambiarImagen(this)">
        <img src="{{ asset('romanico/images/monasteriosantaclara02.jpg') }}" alt="Monasterio de Santa Clara — vista 2" onclick="cambiarImagen(this)">
        <img src="{{ asset('romanico/images/monasteriosantaclara03.jpg') }}" alt="Monasterio de Santa Clara — vista 3" onclick="cambiarImagen(this)">
      </div>
    </div>

    <div class="ficha-section">
      <h2>Audioguía</h2>
      <audio controls src="{{ asset('romanico/audios/audioguia_monasterio_de_santa_clara.mp3') }}">
        Tu navegador no soporta el elemento de audio.
      </audio>
      <img class="qr"
           src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data={{ url('/romanico/audios/audioguia_monasterio_de_santa_clara.mp3') }}"
           alt="Código QR para la audioguía del Monasterio de Santa Clara">
    </div>

  </main>

  <footer class="romanico-footer">
    Página creada por &ldquo;El Serrano&rdquo;
  </footer>

  <script>
    function cambiarImagen(img) {
      document.getElementById('imagen-grande').src = img.src;
    }
  </script>
</body>
</html>
