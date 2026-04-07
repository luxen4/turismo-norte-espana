<?php  
$localidad = 'Sonabia';     $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); $lugar_minuscula='sonabia';
$region = 'Cantabria';  $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    $country_minuscula = strtolower(str_replace(' ', '-', $country)); ?>

<?php define('DESCRIPTION', "Descubre Sonabia en Cantabria: la Playa de Sonabia, la Peña Candina y rutas costeras únicas."); ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Sonabia, Sonabia, playas Cantabria, Peña Candina, naturaleza, costa de Cantabria, turismo natural, playa salvaje, rutas, Ojo del Diablo, monte Candina') ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/constantes-localidad-generico.php";?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require PATH_RAIZ . "/_html/head/head-generico.php"; ?>
    </head>


<body class="bg-[url('/turismo-norte-espana/anuncios/assets/img/fondos/arenaplaya.jpg')] bg-cover bg-center text-gray-800">
  <div class="container-xxl py-5">
    <div class="row">

      <!-- Columna izquierda (principal) -->
      <div class="col-lg-8">
        <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

        <header class="mb-10">
          <div class="bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marked-alt"></i> Sonabia (Cantabria)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Sonabia es un pequeño paraíso costero en Cantabria, famoso por su playa salvaje,
              la imponente Peña Candina y rutas que recorren acantilados con vistas al mar Cantábrico.
              Un lugar perfecto para amantes del senderismo y la naturaleza.
            </p>
          </div>
        </header>

        <?php require PATH_RAIZ . "/_estructura/semantica/pages/lugares-interes-generico.php"; ?>
      </div>

      <div class="col-4 col-md-3 d-none d-md-block">
                <?php // require PATH_RAIZ . '/_estructura/semantica/sidebar-playa.php'; ?>
        <?php require PATH_RAIZ . '/_estructura/publicidad/getYourGuide/index.php'; ?>
      </div>

    </div>
  </div>

  <?php require PATH_RAIZ . "/_estructura/semantica/body/footer/footer-generico.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
