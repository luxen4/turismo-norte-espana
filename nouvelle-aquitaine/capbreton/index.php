<?php $localidad = 'Capbreton'; $lugar_minuscula = 'capbreton'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/nouvelle-aquitaine/variables-generales-region.php"; ?>

<?php define('TITLE', "Capbreton – Turismo y Plage Centrale 2025"); ?>
<?php define('DESCRIPTION', "Descubre la Plage Centrale de Capbreton, en Nueva Aquitania: una playa amplia y animada, ideal para familias y amantes del surf, con paseo marítimo, restaurantes y vistas espectaculares del Atlántico."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Capbreton"); ?>
<?php define('LUGAR_MINUSCULA', 'capbreton'); ?>
<?php define('KEYWORDS_CONTENT', 'Plage Centrale, Capbreton, turismo Nueva Aquitania, playas de Las Landas, surf en Francia, costa atlántica francesa, naturaleza en Capbreton'); ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/turismo-norte-espana/".$region_minuscula."/".$lugar_minuscula."/variables-localidad.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/bloques/estructura/variables_comunes/defines.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/".$region_minuscula."/".$lugar_minuscula."/head/variables/meta_tags.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/".$region_minuscula."/".$lugar_minuscula."/head/variables/data-generico.php";  ?>

<?php require rtrim($_SERVER['DOCUMENT_ROOT']) . "/turismo-norte-espana/{$region_minuscula}/variables-generales-region.php"; ?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require PATH_RAIZ . "/_html/head/head-generico.php"; ?>
    </head>

<body class="bg-[url('/turismo-norte-espana/anuncios/assets/img/fondos/nature-cote.jpg')] bg-cover bg-center text-gray-800">
  <div class="container-xxl py-5">
    <div class="row">

      <!-- Colonne gauche (principale) -->
      <div class="col-lg-8">
        <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

        <header class="mb-10">
          <div class="bg-gradient-to-r from-blue-600 via-sky-500 to-cyan-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marker-alt"></i> Capbreton (Nouvelle Aquitaine)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Capbreton est une ville portuaire pittoresque de la côte atlantique, réputée pour ses plages, son port animé et ses vagues parfaites pour le surf.
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
