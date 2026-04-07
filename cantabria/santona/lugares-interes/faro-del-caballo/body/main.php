
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ . "/_html/head/etiquetas-meta.php"; ?>
  <link rel="canonical" href="<?= PATH_HREF_RAIZ_LOCALIDADES; ?>/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?= $lugar_minuscula; ?>/index.php" />
  <?php require PATH_RAIZ . "/_html/head/links-generico.php"; ?>
  <title>Faro del Caballo - Santoña, Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/faro-del-caballo-santona/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-blue-800 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Faro del Caballo</h1>
    <p class="text-lg">Escaleras al paraíso costero</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-tree-fill text-blue-700 mr-2"></i> Descripción
      </h2>
      <p class="mb-4">
        El Faro del Caballo, en el acantilado sur del monte Buciero, es uno de los lugares más emblemáticos de Santoña. Para llegar hay que descender más de 600 escalones tallados en la roca, lo que lo convierte en una experiencia única. Las vistas sobre el mar Cantábrico y la costa son impresionantes.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-blue-700 mr-1"></i> Acceso por escaleras históricas</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-blue-700 mr-1"></i> Vistas panorámicas del litoral</p>
      <p><i class="bi bi-check-circle-fill text-blue-700 mr-1"></i> Zona de gran interés paisajístico</p>
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
        <i class="bi bi-camera-fill text-blue-700 mr-2"></i> Galería de Fotos
      </h2>
      <div class="swiper mySwiper rounded-lg shadow-md">
        <div class="swiper-wrapper">
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/faro-del-caballo-santona/img/faro-del-caballo-santona-cantabria-1.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/faro-del-caballo-santona/img/faro-del-caballo-santona-cantabria-2.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/faro-del-caballo-santona/img/faro-del-caballo-santona-cantabria-3.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-geo-alt-fill text-blue-700 mr-2"></i> Ubicación
      </h2>
      <div id="map" class="h-96 rounded-lg shadow-md"></div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-cloud-sun-fill text-blue-700 mr-2"></i> Tiempo en Santoña
      </h2>
      <iframe src="https://www.eltiempo.es/ajax/widget/localidad_13726" width="100%" height="200" frameborder="0"></iframe>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-chat-dots-fill text-blue-700 mr-2"></i> Opiniones
      </h2>
      <div class="bg-white p-4 rounded shadow">
        <p class="mb-2">"El descenso es duro, pero merece la pena." – <strong>Marta G.</strong></p>
        <p>"Las vistas desde el faro son espectaculares." – <strong>Pedro S.</strong></p>
      </div>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-link-45deg text-blue-700 mr-2"></i> Enlaces oficiales
      </h2>
      <ul class="list-disc list-inside">
        <li><a href="https://www.turismodecantabria.com" target="_blank" class="text-blue-600 hover:underline">Turismo de Cantabria</a></li>
        <li><a href="https://www.santona.es" target="_blank" class="text-blue-600 hover:underline">Ayuntamiento de Santoña</a></li>
      </ul>
    </section>

    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-google-maps.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/anuncios/anuncios-fade-in.php'; ?>
    <?php require PATH_RAIZ_LOCALIDADES_ESTRUCTURA_BODY_MAIN . '/enlace-lugares-interes.php'; ?>
  </main>

  <?php require PATH_RAIZ . "/_estructura/semantica/body/footer/footer-generico.php"; ?>

  <script>
    const map = L.map('map').setView([43.4435, -3.4532], 16); // Coordenadas aproximadas del Faro del Caballo
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.4435, -3.4532]).addTo(map).bindPopup('Faro del Caballo').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/faro-del-caballo-santona/schemas/schemas-body.php"; ?>
</body>
</html>
