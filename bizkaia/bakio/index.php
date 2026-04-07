<?php $localidad = 'Bakio'; $lugar_minuscula = 'bakio'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/bizkaia/variables-generales-region.php";?>

<?php define('TITLE', "Bakio – Turismo y Naturaleza en Bizkaia 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Playa de Bakio, en Bizkaia: un arenal amplio ideal para surfistas y familias, rodeado de montañas verdes y cercano a San Juan de Gaztelugatxe."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Bakio"); ?>
<?php define('LUGAR_MINUSCULA', 'bakio') ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Bakio, Bizkaia, surf, turismo Bizkaia, playas del País Vasco, San Juan de Gaztelugatxe, naturaleza Bizkaia') ?>

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
          <div class="bg-gradient-to-r from-blue-600 via-sky-500 to-cyan-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-water"></i> Playa de Bakio (Bizkaia)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              La Playa de Bakio es uno de los arenales más icónicos de Bizkaia, perfecta para el surf y para disfrutar de
              un día en familia. Su ubicación, rodeada de montañas y a pocos minutos de San Juan de Gaztelugatxe,
              la convierte en un lugar imprescindible.
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
