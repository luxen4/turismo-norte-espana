<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_utilidades/constantes-localidad-generico.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ . "/_html/head/head-generico.php"; ?>
</head>

<body class="bg-[url('/turismo-norte-espana/anuncios/assets/img/fondos/arenaplaya.jpg')] bg-cover bg-center text-gray-800">

  <?php require PATH_RAIZ . "/_html/body/navbar-generico.php"; ?>

  <div class="container-xxl py-5">
    <div class="row">

      <!-- 🟢 ASIDE IZQUIERDO (2 columnas) -->
      <aside class="col-lg-2 d-none d-lg-block">
        <div class="bg-white p-3 rounded shadow-sm mb-4">
          <h5 class="fw-bold mb-3">📍 Navegación</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="d-block py-1">Inicio</a></li>
            <li><a href="/turismo-norte-espana/#<?= $region_minuscula; ?>" class="d-block py-1">Playas</a></li>
            <li><a href="/turismo-norte-espana/<?= $region_minuscula; ?>/rutas/" class="d-block py-1">Rutas</a></li>
            <li><a href="/turismo-norte-espana/<?= $region_minuscula; ?>/miradores/" class="d-block py-1">Miradores</a></li>
          </ul>
        </div>

        <div class="bg-white p-3 rounded shadow-sm">
          <h6 class="fw-bold">🌤️ Clima</h6>
          <p class="small">Consulta el tiempo en <?= $localidad; ?> <a href="https://www.eltiempo.es/<?= $localidad_minuscula; ?>.html">Aquí</a></p>
        </div>
      </aside>


      <!-- 🔵 CONTENIDO PRINCIPAL (7 columnas) -->
      <main class="col-lg-7 col-12">

        <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

        <header class="mb-6">
          <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">

            <h1 class="text-xl md:text-2xl font-semibold text-gray-800 flex items-center gap-2">
              <i class="fas fa-map-marker-alt text-green-600"></i>
              <?= $localidad; ?> <span class="text-gray-500 text-base">(<?= $region; ?>)</span>
            </h1>

            <p class="mt-2 text-sm md:text-base text-gray-600">
              <?= $localidad; ?> es una de las joyas de la costa de <?= $region; ?>, conocida por sus acantilados, playas y paisajes naturales.
            </p>

          </div>
        </header>

        <?php require PATH_RAIZ . "/_estructura/semantica/pages/lugares-interes-generico.php"; ?>

      </main>


      <!-- 🟡 ASIDE DERECHO (3 columnas - PUBLICIDAD) -->
      <aside class="col-lg-3 col-12 mt-4 mt-lg-0">

        <div class="sticky-top" style="top: 20px;">

          <div class="mb-4">
            <?php require PATH_RAIZ . '/_estructura/publicidad/getYourGuide/index.php'; ?>
          </div>

          <?php /*
          <div class="bg-white p-3 rounded shadow-sm mb-4 text-center">
            <p class="small mb-0">Espacio publicitario</p>
          </div>

          <div class="bg-white p-3 rounded shadow-sm text-center">
            <p class="small mb-0">Anuncio adicional</p>
          </div> */ ?>

        </div>

      </aside>

    </div>
  </div>

  <?php require PATH_RAIZ . "/_html/body/footer/footer-generico.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>









<?php  /*     <!-- Columna derecha (Sidebar y Playas) -->
      <div class="col-lg-4 mt-5 mt-lg-0">
        <!-- Sección Playas -->
        <section id="playas" class="bg-white border border-gray-200 rounded-lg shadow-sm p-4 mb-4">
          <header class="text-center mb-4">
            <h5 class="text-xl font-semibold text-gray-700">🏖️ Playas de <br><strong><?= $localidad_minuscula; ?></strong></h5>
            <p class="text-sm text-gray-500">Playas tranquilas de la costa oriental de Cantabria.</p>
          </header>
          <div class="space-y-2">
            <a href="" class="block px-4 py-2 bg-green-50 border border-green-300 text-green-700 rounded hover:bg-green-100 transition">
              Playa de <?= $localidad_minuscula; ?>
            </a>
            <a href="lugares-interes/playas/playa-de-cuberris/index.php" class="block px-4 py-2 bg-green-50 border border-green-300 text-green-700 rounded hover:bg-green-100 transition">
              Playa de Cuberris
            </a>
            <a href="playas/playa-de-antueras/index.html" class="block px-4 py-2 bg-green-50 border border-green-300 text-green-700 rounded hover:bg-green-100 transition">
              Playa de Antueras
            </a>
          </div>
        </section>
      </div> */ ?>