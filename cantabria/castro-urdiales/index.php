<?php  
$localidad = 'Castro-Urdiales';     $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); $lugar_minuscula='castro-urdiales';
$region = 'Cantabria';  $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    $country_minuscula = strtolower(str_replace(' ', '-', $country)); ?>

<?php define('DESCRIPTION', "Descubre Castro-Urdiales en Cantabria: playas urbanas, puerto pesquero, patrimonio histórico y un ambiente marinero único."); ?>
<?php define('KEYWORDS_CONTENT', 'Castro-Urdiales, Cantabria, Playa de Ostende, puerto pesquero, patrimonio histórico, turismo Cantabria, costa de Cantabria, castillo-faro, iglesia de Santa María, paseo marítimo, gastronomía marinera') ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/constantes-localidad-generico.php";?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require PATH_RAIZ . "/_html/head/head-generico.php"; ?>
    </head>


<body class="bg-[url('/turismo-norte-espana/anuncios/assets/img/fondos/puerto-marinero.jpg')] bg-cover bg-center text-gray-800">
  <div class="container-xxl py-5">
    <div class="row">

      <!-- Columna izquierda (principal) -->
      <div class="col-lg-8">
        <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

        <header class="mb-10">
          <div class="bg-gradient-to-r from-blue-700 via-sky-600 to-cyan-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marked-alt"></i> Castro-Urdiales (Cantabria)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Castro-Urdiales combina historia, mar y gastronomía en un entorno único. 
              Su puerto pesquero, el Castillo-Faro, la iglesia gótica de Santa María, 
              el paseo marítimo y sus playas hacen de este municipio uno de los destinos más atractivos del norte de España.
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
