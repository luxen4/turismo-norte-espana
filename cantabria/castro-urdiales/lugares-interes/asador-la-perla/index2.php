<?php  
$localidad = 'Castro-Urdiales';     
$localidad_minuscula = 'castro-urdiales'; 
$lugar_minuscula = 'asador-la-perla-castro-urdiales';
$region = 'Cantabria';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Asador La Perla – Castro Urdiales, Cantabria"); ?>
<?php define('DESCRIPTION', "Visita El Asador La Perla en Castro-Urdiales, Cantabria: gastronomía local, platos tradicionales y un ambiente acogedor junto al puerto."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Asador La Perla"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Asador La Perla Castro Urdiales, gastronomía Cantabria, restaurantes en Castro Urdiales, mariscos frescos') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ . "/_html/head/etiquetas-meta.php"; ?>
  <link rel="canonical" href="<?= PATH_HREF_RAIZ_LOCALIDADES; ?>/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?= $lugar_minuscula; ?>/index.php" />
  <?php require PATH_RAIZ . "/_html/head/links-generico.php"; ?>
  <title>Asador La Perla - Castro-Urdiales, Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/asador-la-perla/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-green-700 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Asador La Perla</h1>
    <p class="text-lg">Gastronomía local y ambiente acogedor junto al puerto</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-restaurant text-green-600 mr-2"></i> Descripción y Ambiente
      </h2>
      <p class="mb-4">
        El Asador La Perla ofrece cocina tradicional cántabra y mariscos frescos en un entorno privilegiado junto al puerto de Castro-Urdiales.
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Gastronomía local de calidad</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Ambiente acogedor y familiar</p>
      <p><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Ideal para comidas turísticas y eventos especiales</p>
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
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/asador-la-perla-castro-urdiales/img/asador-la-perla-castro-urdiales-cantabria-1.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/asador-la-perla-castro-urdiales/img/asador-la-perla-castro-urdiales-cantabria-2.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/asador-la-perla-castro-urdiales/img/asador-la-perla-castro-urdiales-cantabria-3.jpg" ?>
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
        <p class="mb-2">"Excelente marisco y atención." – <strong>Ana M.</strong></p>
        <p>"Ambiente familiar y comida espectacular." – <strong>Carlos R.</strong></p>
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
    const map = L.map('map').setView([43.3830, -3.2150], 17); // Ajusta coordenadas reales del asador
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.3830, -3.2150]).addTo(map).bindPopup('Asador La Perla').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/asador-la-perla/schemas/schemas-body.php"; ?>
</body>
</html>
