<?php  
$localidad = 'Castro-Urdiales';     
$localidad_minuscula = 'castro-urdiales'; 
$lugar_minuscula = 'castillo-de-santa-ana-castro-urdiales';
$region = 'Cantabria';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('TITLE', "Castillo de Santa Ana – Castro Urdiales, Cantabria"); ?>
<?php define('DESCRIPTION', "Visita el Castillo de Santa Ana en Castro Urdiales, Cantabria: historia, vistas panorámicas del puerto y la costa, un lugar imprescindible para turistas."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Castillo de Santa Ana"); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define('KEYWORDS_CONTENT', 'Castillo de Santa Ana Castro Urdiales, turismo histórico Cantabria, castillos en Cantabria, mirador puerto Castro Urdiales') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_html/lugares-interes/variables-generico.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ . "/_html/head/etiquetas-meta.php"; ?>
  <?php require PATH_RAIZ . "/_html/head/links-generico.php"; ?>
  <title>Castillo de Santa Ana - Castro-Urdiales, Cantabria</title>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/castillo-de-santa-ana-castro-urdiales/schemas/schemas-head.php"; ?>
</head>

<body class="bg-gray-50 text-gray-800">
  
  <header class="bg-green-700 text-white p-6 text-center">
    <h1 class="text-3xl font-bold">Castillo de Santa Ana</h1>
    <p class="text-lg">Historia, vistas panorámicas del puerto y la costa</p>
  </header>

  <main class="max-w-4xl mx-auto px-4 py-1">  
    <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold mb-4 flex items-center">
        <i class="bi bi-bank text-green-600 mr-2"></i> Descripción y Ambiente
      </h2>
      <p class="mb-4">
        El Castillo de Santa Ana es un lugar histórico emblemático en Castro-Urdiales. Ofrece vistas espectaculares del puerto y la costa, ideal para paseos culturales y fotografías. 
      </p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Patrimonio histórico y cultural</p>
      <p class="mb-4"><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Mirador panorámico del puerto</p>
      <p><i class="bi bi-check-circle-fill text-green-600 mr-1"></i> Ideal para visitas turísticas y paseos al aire libre</p>
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
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/castillo-de-santa-ana-castro-urdiales/img/castillo-de-santa-ana-castro-urdiales-cantabria-1.jpg" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/castillo-de-santa-ana-castro-urdiales/img/castillo-de-santa-ana-castro-urdiales-cantabria-2.png" ?>
                 class="w-full h-full object-cover rounded-md">
          </div>
          <div class="swiper-slide h-72">
            <img src=<?= PATH_HREF_CARPETA_LUGARES_INTERES . "/castillo-de-santa-ana-castro-urdiales/img/castillo-de-santa-ana-castro-urdiales-cantabria-1.jpg" ?>
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
        <p class="mb-2">"Un lugar histórico con vistas impresionantes." – <strong>María G.</strong></p>
        <p>"Perfecto para disfrutar de la historia y la fotografía." – <strong>Javier T.</strong></p>
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
    const map = L.map('map').setView([43.3830, -3.2150], 17); // Ajusta coordenadas del castillo
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    L.marker([43.3830, -3.2150]).addTo(map).bindPopup('Castillo de Santa Ana').openPopup();
  </script>

  <script>
    new Swiper('.mySwiper', {
      loop: true,
      pagination: { el: '.swiper-pagination', clickable: true },
    });
  </script>

  <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/castillo-de-santa-ana-castro-urdiales/schemas/schemas-body.php"; ?>
</body>
</html>
