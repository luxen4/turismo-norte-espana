<?php $localidad = 'Biarritz'; $lugar_minuscula = 'biarritz'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/nouvelle-aquitaine/variables-generales-region.php"; ?>

<?php define('TITLE', "Biarritz – Turismo y Naturaleza en País Vasco Francés 2025"); ?>
<?php define('DESCRIPTION', "Descubre Biarritz, famosa por sus playas, surf y ambiente cosmopolita en la costa del País Vasco Francés."); ?>
<?php define('COLOR_PAGE', "sky"); ?>
<?php define('LUGAR', "Biarritz"); ?>
<?php define('LUGAR_MINUSCULA', 'biarritz') ?>
<?php define('KEYWORDS_CONTENT', 'Biarritz, País Vasco Francés, playas, turismo, surf, costa atlántica') ?>

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
              <i class="fas fa-map-marker-alt"></i> Biarritz (Nouvelle Aquitaine)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Biarritz est une station balnéaire emblématique de la Nouvelle-Aquitaine, célèbre pour ses plages de surf, son architecture élégante et son ambiance cosmopolite.
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
