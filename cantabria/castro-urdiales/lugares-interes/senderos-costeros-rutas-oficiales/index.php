<?php 
$region = "Cantabria"; $region_minuscula = strtolower($region); 
$localidad_minuscula = 'castro-urdiales'; $localidad_minuscula_lugar = 'senderos-costeros-rutas-oficiales'; $nombre_sub_carpeta = 'lugares-interes';
$color_page='green';
$title_head = 'Senderos Costeros y Rutas Oficiales en Castro-Urdiales';  
$lugar_minuscula_footer='Senderos Costeros y Rutas Oficiales - Castro-Urdiales'; ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/{$nombre_sub_carpeta}/previo.php"; ?>



<!DOCTYPE html>
<html lang="es">
<head>
    <?php //require rtrim($_SERVER['DOCUMENT_ROOT']) . "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/{$nombre_sub_carpeta}/previo.php"; ?>
    <?php require PATH_RAIZ_LOCALIDADES_CARPETA_HEAD. '/head-generico.php'; ?>
</head>
<body class="bg-white text-gray-900 font-sans">
  <header class="bg-<?= COLOR_PAGE; ?>-100 p-6 text-center shadow-md">
    <h1 class="text-3xl font-bold text-<?= COLOR_PAGE; ?>-800">Senderos Oficiales en Castro-Urdiales</h1>
    <p class="mt-2 text-lg text-<?= COLOR_PAGE; ?>-700">Rutas señalizadas para disfrutar con seguridad y naturaleza</p>
  </header>

  <main class="max-w-4xl mx-auto p-6 space-y-8">
    <section>
      <img src="<?= PATH_HREF_CARPETA ?>/ocio/pages/imagenes/sendero-castro-urdiales.jpg" alt="Sendero junto al mar en Castro-Urdiales" class="rounded-xl shadow w-full">
      <p class="mt-4">
        El Ayuntamiento de Castro-Urdiales ha trabajado activamente en el diseño y señalización de una red de <strong>senderos oficiales</strong>. Estas rutas están perfectamente documentadas y pensadas para recorridos seguros por la costa y el interior del municipio.
      </p>
    </section>

    <section>
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-800">Características de los senderos</h2>
      <ul class="list-disc list-inside mt-2">
        <li>Señalización clara y continua</li>
        <li>Miradores naturales con vistas al Cantábrico</li>
        <li>Áreas de descanso con bancos y sombra</li>
        <li>Paneles interpretativos sobre flora, fauna e historia</li>
        <li>Rutas accesibles para familias y personas mayores</li>
      </ul>
    </section>

    <section>
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-800">Algunas rutas destacadas</h2>
      <div class="grid md:grid-cols-2 gap-6 mt-4">
        <div class="bg-<?= COLOR_PAGE; ?>-50 p-4 rounded-xl shadow">
          <h3 class="text-lg font-semibold text-<?= COLOR_PAGE; ?>-700">Sendero Puerto - Dícido</h3>
          <p>Desde el centro histórico hasta la antigua mina de Dícido. Suave, familiar y costero.</p>
        </div>
        <div class="bg-<?= COLOR_PAGE; ?>-50 p-4 rounded-xl shadow">
          <h3 class="text-lg font-semibold text-<?= COLOR_PAGE; ?>-700">Camino a la Playa de Sonabia</h3>
          <p>Un paseo natural con vistas abiertas, ideal para los amantes del mar y la tranquilidad.</p>
        </div>
      </div>
    </section>

    <section>
      <h2 class="text-2xl font-semibold text-<?= COLOR_PAGE; ?>-800">Recomendaciones</h2>
      <p class="mt-2">
        Lleva calzado cómodo, agua y protección solar. Respeta la señalización y cuida el entorno natural. Algunos senderos tienen zonas sin sombra, así que evita las horas centrales del día en verano.
      </p>
    </section>

    <section class="mt-6 text-center">
      <a href="https://turismo.castro-urdiales.net/" target="_blank" class="inline-block bg-<?= COLOR_PAGE; ?>-600 text-white px-5 py-3 rounded-xl shadow hover:bg-<?= COLOR_PAGE; ?>-700 transition">
        Más info oficial en Turismo Castro-Urdiales
      </a>
    </section>
  </main>

      <?php require PATH_RAIZ_CARPETA_LOCALIDADES_LUGARES_INTERES. '/footer-generico.php' ?>
      <?php require PATH_RAIZ_CARPETA_LUGARES_SCHEMAS. '/schemas-body.php' ?>

</body>
</html>