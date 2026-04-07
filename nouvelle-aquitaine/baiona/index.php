<?php 
$localidad = 'Baiona'; // Para francés, normalmente "Bayonne" pero si usas Baiona en español, mantén aquí
$localidad_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], 
        ['n', 'n', '-'], 
        $localidad
    )
);

$region = 'Nouvelle Aquitaine';
$region_minuscula = strtolower(
    str_replace(
        ['ñ', 'Ñ', ' '], 
        ['n', 'n', '-'], 
        $region
    )
);

require rtrim($_SERVER['DOCUMENT_ROOT']) . "/turismo-norte-espana/{$region_minuscula}/variables-generales-region.php";

// Paths
define('PATH_RAIZ', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/turismo-norte-espana');
define('PATH_HREF_RAIZ', "/turismo-norte-espana");

define('PATH_RAIZ_BLOQUES', PATH_RAIZ. '/bloques'); 
define('PATH_RAIZ_BLOQUES_CONTROL', PATH_RAIZ_BLOQUES . '/control');
define('PATH_RAIZ_BLOQUES_ESTRUCTURA', PATH_RAIZ_BLOQUES. '/estructura');
define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY_MAIN', PATH_RAIZ_BLOQUES_ESTRUCTURA. '/paginas-playa/body/main');
define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO', PATH_RAIZ_BLOQUES. '/estructura/paginas-generico');

define('PATH_RAIZ_LOCALIDADES_CARPETA', rtrim($_SERVER['DOCUMENT_ROOT']) . "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}");
define('PATH_RAIZ_LOCALIDAD_LUGARES_INTERES', PATH_RAIZ_LOCALIDADES_CARPETA. "/lugares-interes");

define('PATH_HREF_RAIZ_BLOQUES', "/turismo-norte-espana/bloques");
define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_BODY', PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. '/body');
define('PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO_HEAD', PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_GENERICO. "/head");

define('SITE_VERIFICATION_CONTENT', "6fdc72f26c4563f937e32ff3def5f9d5");
define('WEB_PAGE', "website");
define('HOY', date('Y-m-d'));
define('IDIOMA_LOCAL', 'fr_FR');

define('PATH_HREF_RAIZ_LOCALIDADES', "https://playas2024.kesug.com/turismo-norte-espana/localidades");

define('PATH_RAIZ_HOME_HEAD_VARIABLES', PATH_RAIZ. '/home/head/variables');
define('PATH_DOMINIO_RAIZ_LOCALIDADES', 'https://playas2024.kesug.com/turismo-norte-espana/');
define('PATH_DOMINIO_RAIZ', 'https://playas2024.kesug.com/turismo-norte-espana/');

define('PATH_RAIZ_LOCALIDADES', PATH_RAIZ. '/localidades'); 
?>

<?php require PATH_RAIZ_LOCALIDADES . "/nouvelle-aquitaine/baiona/lugares-interes/head/variables/_meta_tagsa.php"; ?>

<?php
$description_content = 'Découvrez Baiona (Bayonne), ville historique de la Nouvelle-Aquitaine, célèbre pour son architecture basque, ses festivals et sa proximité avec l\'océan Atlantique.';
$keywords_content = 'Baiona, Bayonne, Nouvelle Aquitaine, tourisme France, patrimoine basque, festivals, côte basque';

$lugar_minuscula_footer = 'Baiona, Nouvelle Aquitaine'; 
$COLOR_PAGE='blue'; 
$lugar_minuscula='Baiona'; 
$lugar_minuscula='Baiona';

define('NAME_BLOG', "Guía Costera por el Cantábrico");
define('AUTHOR', "Adrián Laya García");
define('EMAIL_AUTHOR', " ");
?>

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
              <i class="fas fa-map-marker-alt"></i> Baiona (Nouvelle Aquitaine)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Baiona est une ville pleine d’histoire et de culture basque, connue pour ses rues pittoresques, ses festivals traditionnels et sa situation proche de l’océan Atlantique.
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
