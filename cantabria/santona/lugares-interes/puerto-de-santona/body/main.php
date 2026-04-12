<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ . "/_html/head/etiquetas-meta.php"; ?>
  <link rel="canonical" href="<?= PATH_HREF_RAIZ_LOCALIDADES; ?>/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?= $lugar_minuscula; ?>/index.php" />
  <?php require PATH_RAIZ . "/_html/head/links-generico.php"; ?>
  <title>Puerto de Santoña - Santoña, Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/puerto-de-santona-santona/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-blue-800 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Puerto de Santoña</h1>
    <p class="text-lg">Tradición marítima y paseo costero</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-tree-fill text-blue-700 mr-2"></i> Descripción
      </h2>
      <p class="mb-4">
        El Puerto de Santoña es un puerto pesquero activo en Cantabria, con una gran tradición marítima. Ofrece paseos por el muelle, restaurantes de marisco fresco y vistas panorámicas al mar Cantábrico.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-blue-700 mr-1"></i> Actividad pesquera y marítima</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-blue-700 mr-1"></i> Paseos marítimos y miradores</p>
      <p><i class="bi bi-check-circle-fill text-blue-700 mr-1"></i> Zona con restaurantes y turismo gastronómico</p>
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
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/puerto-de-santona/img/puerto-de-santona-santona-cantabria-1.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/puerto-de-santona/img/puerto-de-santona-2.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/puerto-de-santona/img/puerto-de-santona-3.jpg" ?>
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
        <p class="mb-2">"Un puerto lleno de vida y gastronomía." – <strong>Laura M.</strong></p>
        <p>"Pasear por el muelle es una experiencia única." – <strong>Carlos P.</strong></p>
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

  <?php require PATH_RAIZ . "/_html/body/footer/footer-generico.php"; ?>

  <script>
    const map = L.map('map').setView([43.4500, -3.4500], 16); // Coordenadas aproximadas del Puerto de Santoña
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.4500, -3.4500]).addTo(map).bindPopup('Puerto de Santoña').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/puerto-de-santona-santona/schemas/schemas-body.php"; ?>
</body>
</html>
