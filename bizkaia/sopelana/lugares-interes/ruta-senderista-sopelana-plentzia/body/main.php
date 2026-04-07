<main class="bg-amber-50 min-h-screen p-4 md:p-10">
  <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

  <!-- Header -->
  <header class="text-center mb-10">
    <h1 class="text-3xl md:text-4xl font-extrabold text-amber-700 mb-2">
      🚶‍♂️ Ruta Senderista Sopelana – Plentzia
    </h1>
    <p class="text-lg md:text-xl text-amber-600">
      Recorrido costero entre Sopelana y Plentzia con playas, acantilados y vistas al Cantábrico
    </p>
  </header>

  <?php /*
  <!-- Descripción -->
  <section class="max-w-3xl mx-auto mb-10 text-gray-700 text-base md:text-lg space-y-4">
    <p>
      La <strong class="text-gray-900">Ruta Senderista Sopelana – Plentzia</strong> es uno de los recorridos más atractivos de la costa vasca, uniendo <span class="font-medium">Sopelana</span> con la villa marinera de <span class="font-medium">Plentzia</span>.
    </p>
    <p>
      Durante el camino podrás disfrutar de acantilados espectaculares, la Playa de Arrietara, el Paseo Itsaslur y la desembocadura de la ría de Plentzia.
    </p>
    <p>
      Es una ruta sencilla, perfecta para senderismo, fotografía y turismo activo en Bizkaia.
    </p>
  </section> */ ?>

  <!-- Galería -->
<section aria-labelledby="galeria" class="mb-12">
  <h2 id="galeria" class="text-2xl font-bold text-amber-700 mb-4">📸 Galería de la Ruta</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <figure class="aspect-video w-full">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-sopelana-plentzia-1.jpg"
           alt="Sendero costero entre Sopelana y Plentzia"
           class="object-cover w-full h-full rounded-2xl shadow-md" loading="lazy">
      <figcaption class="mt-2 text-sm text-gray-600 text-center">Sendero costero entre Sopelana y Plentzia</figcaption>
    </figure>

    <figure class="aspect-video w-full">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-sopelana-plentzia-2.jpg"
           alt="Vistas de acantilados en la ruta Sopelana-Plentzia"
           class="object-cover w-full h-full rounded-2xl shadow-md" loading="lazy">
      <figcaption class="mt-2 text-sm text-gray-600 text-center">Vistas de acantilados en la ruta Sopelana–Plentzia</figcaption>
    </figure>

    <figure class="aspect-video w-full">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-sopelana-plentzia-3.jpg"
           alt="Paisaje costero en el recorrido Sopelana-Plentzia"
           class="object-cover w-full h-full rounded-2xl shadow-md" loading="lazy">
      <figcaption class="mt-2 text-sm text-gray-600 text-center">Paisaje costero en el recorrido Sopelana–Plentzia</figcaption>
    </figure>

    <figure class="aspect-video w-full">
      <img src="<?php echo PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/ruta-sopelana-plentzia-4.jpg"
           alt="Llegada a Plentzia desde el sendero costero"
           class="object-cover w-full h-full rounded-2xl shadow-md" loading="lazy">
      <figcaption class="mt-2 text-sm text-gray-600 text-center">Llegada a Plentzia desde el sendero costero</figcaption>
    </figure>

  </div>
</section>


  <!-- Información -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-4">ℹ️ Información de la Ruta</h2>
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Distancia</h3>
        <p>Aprox. 6 km</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Duración</h3>
        <p>Entre 1h 30m y 2h a pie</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Dificultad</h3>
        <p>Fácil – Sendero costero con ligeros desniveles</p>
      </div>
      <div class="bg-white rounded-xl p-5 shadow border-l-4 border-amber-600">
        <h3 class="font-semibold text-amber-700 mb-1">Entorno</h3>
        <p>Playas, acantilados, paseos y vistas al mar Cantábrico</p>
      </div>
    </div>
  </section>

  <!-- Actividades -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-4">🏞️ Actividades recomendadas</h2>
    <ul class="grid md:grid-cols-2 gap-4 text-gray-700">
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🚶‍♀️</span> Senderismo costero
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">📸</span> Fotografía de paisajes y playas
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🦅</span> Observación de aves y naturaleza
      </li>
      <li class="bg-white rounded-xl p-4 shadow flex items-center gap-3">
        <span class="text-2xl">🌊</span> Disfrutar de playas y vistas al Cantábrico
      </li>
    </ul>
  </section>

  <!-- Leaflet CSS/JS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  <!-- Mapa con Leaflet -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-4">🗺️ Localización</h2>
    <div id="map-ruta-sopelana-plentzia" class="w-full h-80 rounded-xl shadow"></div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var map = L.map('map-ruta-sopelana-plentzia').setView([43.3904, -2.9813], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var ruta = [
          [43.3904, -2.9813], // Sopelana
          [43.4060, -2.9500]  // Plentzia
        ];

        L.polyline(ruta, {color: ''}).addTo(map);

        L.marker([43.3904, -2.9813]).addTo(map)
          .bindPopup('<strong>Inicio: Sopelana</strong>');

        L.marker([43.4060, -2.9500]).addTo(map)
          .bindPopup('<strong>Fin: Plentzia</strong>');
      });
    </script>
  </section>

  <!-- Contacto -->
  <section class="mb-12">
    <h2 class="text-2xl font-bold text-amber-700 mb-3">📞 Información de contacto</h2>
    <ul class="space-y-2 text-gray-700">
      <li><strong>Teléfono Turismo Sopelana:</strong> 
        <a href="tel:+34944800000" class="text-amber-600 hover:underline">+34 944 80 00 00</a>
      </li>
      <li><strong>Sitio web oficial:</strong> 
        <a href="https://www.sopelana.eus" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline">
          www.sopelana.eus
        </a>
      </li>
      <li><strong>Turismo Plentzia:</strong> 
        <a href="https://www.plentzia.eus" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline">
          www.plentzia.eus
        </a>
      </li>
    </ul>
  </section>

  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
  <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
</main>
