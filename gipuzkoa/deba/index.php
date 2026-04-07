<?php  
$localidad = 'Deba';     $localidad_minuscula = 'deba'; $lugar_minuscula='deba';
$region = 'Gipuzkoa';  $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    $country_minuscula = strtolower(str_replace(' ', '-', $country)); ?>
<?php define('TITLE', "Deba – Turismo, Naturaleza y Costa en Gipuzkoa 2025"); ?>
<?php define('DESCRIPTION', "Descubre Deba, en la costa de Gipuzkoa: playas tranquilas, acantilados espectaculares, rutas de senderismo y un encantador casco histórico junto al mar Cantábrico."); ?>
<?php define('COLOR_PAGE', "emerald"); ?>
<?php define('LUGAR', "Deba"); ?>
<?php define('LUGAR_MINUSCULA', 'deba'); ?>
<?php define('KEYWORDS_CONTENT', 'Deba, Gipuzkoa, turismo Gipuzkoa, costa vasca, playas del País Vasco, senderismo Gipuzkoa, naturaleza Cantábrica, Geoparque de la Costa Vasca'); ?>
<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/turismo-norte-espana/".$region_minuscula."/".$lugar_minuscula."/variables-localidad.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/".$region_minuscula."/".$lugar_minuscula."/head/variables/meta_tags.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/".$region_minuscula."/".$lugar_minuscula."/head/variables/data-generico.php";  ?>


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
              <i class="fas fa-water"></i> Deba (Gipuzkoa)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Deba combina mar y montaña en un entorno único. Sus playas, los acantilados del Geoparque de la Costa Vasca y su
              pintoresco casco histórico hacen de esta localidad un destino ideal para quienes buscan naturaleza y cultura.
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
