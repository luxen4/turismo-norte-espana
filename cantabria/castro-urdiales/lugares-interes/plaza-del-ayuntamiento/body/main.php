<!-- Main Content Section (Centered) Contenido principal -->
<main class="container py-1 mx-auto max-w-7xl">  
        <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>
  <div class="bg-white rounded-2xl shadow-md p-2 md:p-1">
    <h1 class="text-xl md:text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-4">Plaza del Ayuntamiento</h1>

    <p class="mb-4 text-gray-700"><strong class="text-gray-900">La Plaza del Ayuntamiento</strong> es uno de los lugares más emblemáticos de Castro Urdiales. Situada en pleno centro histórico, esta plaza es el corazón de la vida social y cultural del municipio.</p>

    <p class="mb-4 text-gray-700">Rodeada por edificios históricos, terrazas y comercios, destaca por albergar el imponente <strong>Ayuntamiento de Castro Urdiales</strong>, un edificio de estilo neoclásico que domina visualmente el entorno.</p>

    <p class="mb-4 text-gray-700"><strong class="text-gray-900">Ubicación:</strong><br>
      Plaza del Ayuntamiento, s/n<br>
      39700 Castro Urdiales, Cantabria, España</p>

    <p class="mb-4 text-gray-700">Es un punto de encuentro habitual para residentes y turistas, especialmente durante las festividades locales, ferias y eventos culturales que tienen lugar a lo largo del año.</p>

    <div class="mb-4 text-gray-700">
      <p class="font-semibold text-gray-900 mb-2">Qué ver en la plaza:</p>
      <ul class="list-disc list-inside space-y-1">
        <li><strong>Ayuntamiento:</strong> Edificio institucional con arquitectura destacada del siglo XIX.</li>
        <li><strong>Soportales y terrazas:</strong> Ambiente animado con cafeterías y bares tradicionales.</li>
        <li><strong>Escultura conmemorativa:</strong> Elementos de arte urbano que embellecen el entorno.</li>
      </ul>
    </div>

    <div class="mb-4 text-gray-700">
      <p class="font-semibold text-gray-900 mb-2">Actividades frecuentes:</p>
      <ul class="list-disc list-inside space-y-1">
        <li>Eventos institucionales y culturales</li>
        <li>Conciertos y espectáculos al aire libre</li>
        <li>Mercadillos y ferias temáticas</li>
      </ul>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/plaza-del-ayuntamiento-1.jpg" alt="Plaza del Ayuntamiento en Castro Urdiales" class="rounded-lg shadow-sm object-cover w-full h-64">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/plaza-del-ayuntamiento-2.png" alt="Vista del Ayuntamiento de Castro Urdiales" class="rounded-lg shadow-sm object-cover w-full h-64">
    </div>
    <p class="text-center text-sm text-gray-500 mb-8">Imágenes de la Plaza del Ayuntamiento en Castro Urdiales</p>

    <p class="mb-6 text-gray-700">Visitar la Plaza del Ayuntamiento es disfrutar del ambiente local, la arquitectura y la vida cotidiana de Castro Urdiales.</p>

    <div class="mb-6 text-gray-700">
      <h5 class="text-lg font-semibold text-<?= COLOR_PAGE; ?>-700 mb-2">📞 Información de contacto</h5>
      <ul class="space-y-1">
        <li><strong>Teléfono del Ayuntamiento:</strong> +34 942 78 29 00</li>
        <li><strong>Sitio web oficial:</strong> <a href="https://www.castro-urdiales.net" target="_blank" class="text-<?= COLOR_PAGE; ?>-500 hover:underline">www.castro-urdiales.net</a></li>
      </ul>
    </div>

    <p class="mb-8 text-gray-700">La Plaza del Ayuntamiento representa el alma pública de la ciudad y es ideal para pasear, relajarse o descubrir su historia.</p>

    <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/index.php" class="inline-block px-6 py-2 border border-<?= COLOR_PAGE; ?>-600 text-<?= COLOR_PAGE; ?>-600 rounded-full hover:bg-<?= COLOR_PAGE; ?>-600 hover:text-white transition">← Volver a lugares de interés</a>
  </div>
</main>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ . "/_html/head/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ . "/_html/head/links-generico.php"; ?>
  <title>Plaza del Ayuntamiento de Castro-Urdiales - Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/plaza-del-ayuntamiento-castro-urdiales/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-green-700 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Plaza del Ayuntamiento de Castro-Urdiales</h1>
    <p class="text-lg">El corazón histórico y social de la villa marinera</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-bank text-green-600 mr-2"></i> Historia y Descripción
      </h2>
      <p class="mb-4">
        La Plaza del Ayuntamiento de Castro-Urdiales es el punto de encuentro más emblemático de la ciudad. Rodeada de edificios históricos y porticados, es un espacio lleno de vida, ideal para disfrutar de la arquitectura local y el ambiente marinero.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Centro neurálgico del casco histórico</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Rodeada de bares, restaurantes y comercios locales</p>
      <p><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Escenario de eventos y celebraciones populares</p>
    </section>

    <?php $publicidad = PATH_BLOQUES_SECTIONS_CARRUSELES_CSV . '/prueba_sneakers.php'; ?>
    <section aria-label="Publicidad relacionada" class="mb-8">
      <div class="border border-gray-200 rounded shadow-sm bg-white p-4">
        <div class="text-center">
          <?php require $publicidad; ?>
        </div>
      </div>
    </section>

<section class="mb-10">
  <h2 class="text-2xl font-semibold mb-4 flex items-center">
    <i class="bi bi-camera-fill text-green-600 mr-2"></i> Galería de Fotos
  </h2>
  <div class="swiper mySwiper rounded-lg shadow-md">
    <div class="swiper-wrapper">
      
      <div class="swiper-slide h-72">
        <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/plaza-del-ayuntamiento-castro-urdiales/img/plaza-del-ayuntamiento-castro-urdiales-cantabria-1.jpg"?>
             class="w-full h-full object-cover rounded-md">
      </div>
      
      <div class="swiper-slide h-72">
        <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/plaza-del-ayuntamiento-castro-urdiales/img/plaza-del-ayuntamiento-castro-urdiales-cantabria-2.png"?>
             class="w-full h-full object-cover rounded-md">
      </div>
      
      <div class="swiper-slide h-72">
        <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/plaza-del-ayuntamiento-castro-urdiales/img/plaza-del-ayuntamiento-castro-urdiales-cantabria-3.jpg"?>
             class="w-full h-full object-cover rounded-md">
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-geo-alt-fill text-green-600 mr-2"></i> Ubicación
      </h2>
      <div id="map" class="h-96 rounded-lg shadow-md"></div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-cloud-sun-fill text-green-600 mr-2"></i> Tiempo en Castro-Urdiales
      </h2>
      <iframe src="https://www.eltiempo.es/ajax/widget/localidad_13721" width="100%" height="200" frameborder="0"></iframe>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-chat-dots-fill text-green-600 mr-2"></i> Opiniones
      </h2>
      <div class="bg-white p-4 rounded shadow">
        <p class="mb-2">"Un lugar lleno de vida y perfecto para tomar algo." – <strong>Ana G.</strong></p>
        <p>"Impresionante arquitectura y ambiente marinero." – <strong>Javier M.</strong></p>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-link-45deg text-green-600 mr-2"></i> Enlaces oficiales
      </h2>
      <ul class="list-disc list-inside">
        <li><a href="https://www.castro-urdiales.net" target="_blank" class="text-blue-600 hover:underline">Ayuntamiento de Castro-Urdiales</a></li>
        <li><a href="https://www.turismodecantabria.com" target="_blank" class="text-blue-600 hover:underline">Turismo de Cantabria</a></li>
      </ul>
    </section>

    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
  </main>

  <?php require PATH_RAIZ . "/_html/body/footer/footer-generico.php"; ?>

  <script>
    const map = L.map('map').setView([43.3829, -3.2170], 18);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.3829, -3.2170]).addTo(map).bindPopup('Plaza del Ayuntamiento de Castro-Urdiales').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/plaza-del-ayuntamiento-castro-urdiales/schemas/schemas-body.php"; ?>
</body>
</html>

