<?php  
$localidad = 'Santoña';     $localidad_minuscula = 'santona'; $lugar_minuscula='santona';
$region = 'Cantabria';  $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    $country_minuscula = strtolower(str_replace(' ', '-', $country)); ?>

<?php define('DESCRIPTION', "Explora Santoña en Cantabria: famosa por sus marismas, el Monte Buciero, la playa de Berria y su rica tradición marinera. Ideal para senderismo, naturaleza y cultura pesquera."); ?>
<?php define('KEYWORDS_CONTENT', 'Santoña Cantabria, playa de Berria, Monte Buciero, marismas de Santoña, rutas de senderismo, turismo Santoña, naturaleza Cantabria') ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/constantes-localidad-generico.php";?>

<!DOCTYPE html>
<html lang="es">
<head><?php require PATH_RAIZ . "/_estructura/semantica/head/head-generico.php"; ?></head>

<body class="bg-[url('/Blog_Playas2026/anuncios/assets/img/fondos/arenaplaya.jpg')] bg-cover bg-center text-gray-800">

  <div class="container-xxl py-5">
    <div class="row">

      <!-- Columna izquierda (principal) -->
      <div class="col-lg-8">
        <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

        <header class="mb-10">
          <div class="bg-gradient-to-r from-blue-600 via-sky-500 to-cyan-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marked-alt"></i> Santoña (Cantabria)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Santoña es un destino único en la costa cántabra, rodeado de marismas y naturaleza, con 
              el Monte Buciero, la playa de Berria y una tradición pesquera que se respira en cada rincón. 
              Ideal para combinar relax, senderismo y cultura marinera.
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
