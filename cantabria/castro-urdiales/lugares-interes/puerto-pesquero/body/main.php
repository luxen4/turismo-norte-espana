<main class="container mx-auto max-w-7xl px-2 py-4">
        <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>
  <article itemscope itemtype="https://schema.org/TouristAttraction" class="bg-white rounded-2xl shadow-md p-4 md:p-6">
    <h1 itemprop="name" class="text-xl md:text-2xl font-semibold text-<?= COLOR_PAGE; ?>-700 mb-4">
      <i class="fas fa-anchor text-<?= COLOR_PAGE; ?>-600"></i> Puerto de Castro Urdiales
    </h1>

    <p class="mb-4 text-gray-700" itemprop="description">
      <strong class="text-gray-900">Puerto de Castro Urdiales</strong> es un vibrante <strong>puerto pesquero y deportivo</strong> ubicado en la <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/" class="text-<?= COLOR_PAGE; ?>-500 underline hover:text-<?= COLOR_PAGE; ?>-700">costa de Cantabria</a>. Punto clave para la economía local y un lugar popular para paseos y actividades marítimas.
    </p>

    <p class="mb-4 text-gray-700">Este puerto fusiona <strong>tradición marinera</strong> con instalaciones modernas para embarcaciones. Ideal para residentes, turistas y amantes del mar Cantábrico.</p>

    <section class="mb-4 text-gray-700">
      <p class="text-gray-900 font-semibold mb-1">
        <i class="fas fa-map-marker-alt text-red-500"></i> Dirección:
      </p>
      <p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
        <span itemprop="streetAddress">Muelle, s/n</span><br>
        <span itemprop="postalCode">39700</span> <span itemprop="addressLocality">Castro Urdiales</span>, Cantabria, España
      </p>
    </section>

    <p class="mb-4 text-gray-700">
      El puerto ofrece <strong>restaurantes con mariscos frescos</strong>, zonas de pesca y acceso a <a href="#excursiones" class="text-<?= COLOR_PAGE; ?>-500 hover:underline">excursiones en barco</a> por la costa.
    </p>

    <section class="mb-4 text-gray-700">
      <h2 class="text-lg font-semibold text-<?= COLOR_PAGE; ?>-700 mb-2">
        <i class="fas fa-star text-yellow-500"></i> Elementos destacados
      </h2>
      <ul class="list-disc list-inside space-y-1">
        <li><strong>Muelle histórico:</strong> centro de la actividad pesquera.</li>
        <li><strong>Zona de embarque:</strong> excursiones y deportes náuticos.</li>
        <li><strong>Restaurantes:</strong> gastronomía cántabra frente al mar.</li>
      </ul>
    </section>

    <section id="excursiones" class="mb-4 text-gray-700">
      <h2 class="text-lg font-semibold text-<?= COLOR_PAGE; ?>-700 mb-2">
        <i class="fas fa-ship text-blue-500"></i> Actividades y servicios
      </h2>
      <ul class="list-disc list-inside space-y-1">
        <li>Paseos en barco y <strong>pesca deportiva</strong></li>
        <li>Degustaciones en <a href="https://www.google.com/search?q=restaurantes+puerto+castro+urdiales" target="_blank" class="text-<?= COLOR_PAGE; ?>-500 hover:underline">restaurantes locales</a></li>
        <li>Festivales y eventos marítimos</li>
      </ul>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-6">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-pesquero-castro-urdiales-1.jpg" alt="Puerto de Castro Urdiales con barcos pesqueros" itemprop="photo" class="rounded-lg shadow-sm object-cover w-full h-64">
      <img src="<?= PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG; ?>/puerto-castro-urdiales-2.jpg" alt="Vista panorámica del Puerto de Castro Urdiales" class="rounded-lg shadow-sm object-cover w-full h-64">
    </div>
    <p class="text-center text-sm text-gray-500 mb-8">Imágenes del Puerto de Castro Urdiales</p>

    <section class="mb-6 text-gray-700">
      <h3 class="text-lg font-semibold text-<?= COLOR_PAGE; ?>-700 mb-2">
        <i class="fas fa-info-circle text-<?= COLOR_PAGE; ?>-500"></i> Información de contacto
      </h3>
      <ul class="space-y-1">
        <li><strong>Teléfono:</strong> <a href="tel:+34942859065" class="text-<?= COLOR_PAGE; ?>-600 hover:underline">+34 942 85 90 65</a></li>
        <li><strong>Web:</strong> <a href="https://www.turismocastrourdiales.net" target="_blank" class="text-<?= COLOR_PAGE; ?>-500 hover:underline">www.turismocastrourdiales.net</a></li>
      </ul>
    </section>

    <p class="mb-8 text-gray-700">
      <strong>¿Te apasiona el mar?</strong> Entonces este lugar es ideal para disfrutar de la cultura marinera, la naturaleza y el sabor auténtico del norte de España.
    </p>

    <a href="<?= PATH_HREF_RAIZ_LOCALIDAD; ?>/index.php" class="inline-block px-6 py-2 border border-<?= COLOR_PAGE; ?>-600 text-<?= COLOR_PAGE; ?>-600 rounded-full hover:bg-<?= COLOR_PAGE; ?>-600 hover:text-white transition">
      ← Volver a lugares de interés
    </a>
  </article>
</main>



<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/carga-variables-generico-lugares-interes.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ . "/_html/head/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ . "/_html/head/links-generico.php"; ?>
  <title>Puerto Pesquero de Castro Urdiales - Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/puerto-pesquero-castro-urdiales/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-green-700 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Puerto Pesquero de Castro Urdiales</h1>
    <p class="text-lg">Tradición marinera y encanto costero en Cantabria</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-map-fill text-green-600 mr-2"></i> Descripción del Puerto
      </h2>
      <p class="mb-4">
        El Puerto Pesquero de Castro Urdiales es el corazón marinero de esta villa cántabra. 
        Rodeado de casas coloridas y presidido por la iglesia de Santa María y el castillo-faro, 
        es un lugar perfecto para pasear, observar barcos de pesca y disfrutar de la gastronomía local en sus terrazas.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Zona ideal para fotografía y paseos</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Acceso peatonal y ambiente tradicional</p>
      <p><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Amplia oferta de bares y restaurantes cercanos</p>
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
      <div class="swiper-slide">
        <div class="w-full aspect-[16/9] overflow-hidden">
          <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/puerto-pesquero-castro-urdiales/img/puerto-pesquero-castro-urdiales-cantabria-1.jpg"?>" 
               class="w-full h-full object-cover rounded-md" alt="Puerto Pesquero Castro Urdiales 1">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="w-full aspect-[16/9] overflow-hidden">
          <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/puerto-pesquero-castro-urdiales/img/puerto-pesquero-castro-urdiales-cantabria-2.png"?>" 
               class="w-full h-full object-cover rounded-md" alt="Puerto Pesquero Castro Urdiales 2">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="w-full aspect-[16/9] overflow-hidden">
          <img src="<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/puerto-pesquero-castro-urdiales/img/puerto-pesquero-castro-urdiales-cantabria-1.jpg"?>" 
               class="w-full h-full object-cover rounded-md" alt="Puerto Pesquero Castro Urdiales 3">
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>


    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-geo-alt-fill text-green-600 mr-2"></i> Mapa del Puerto
      </h2>
      <div id="map" class="h-96 rounded-lg shadow-md"></div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-cloud-sun-fill text-green-600 mr-2"></i> Tiempo en Castro Urdiales
      </h2>
      <iframe src="https://www.eltiempo.es/ajax/widget/localidad_20286" width="100%" height="200" frameborder="0"></iframe>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-chat-dots-fill text-green-600 mr-2"></i> Opiniones
      </h2>
      <div class="bg-white p-4 rounded shadow">
        <p class="mb-2">"El puerto es precioso, lleno de vida y buen ambiente." – <strong>Lucía G.</strong></p>
        <p>"Perfecto para pasear y tomar algo frente al mar." – <strong>Javier P.</strong></p>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-link-45deg text-green-600 mr-2"></i> Enlaces oficiales
      </h2>
      <ul class="list-disc list-inside">
        <li><a href="https://www.castrourdiales.es/" target="_blank" class="text-blue-600 hover:underline">Ayuntamiento de Castro Urdiales</a></li>
        <li><a href="https://www.turismodecantabria.com" target="_blank" class="text-blue-600 hover:underline">Turismo de Cantabria</a></li>
      </ul>
    </section>

    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
  </main>

  <?php require PATH_RAIZ . "/_estructura/semantica/body/footer/footer-generico.php"; ?>

  <script>
    const map = L.map('map').setView([43.3828, -3.2196], 15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.3828, -3.2196]).addTo(map).bindPopup('Puerto Pesquero de Castro Urdiales').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/puerto-pesquero-castro-urdiales/schemas/schemas-body.php"; ?>

</body>

</html>
