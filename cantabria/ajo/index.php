<?php  
$localidad = 'Ajo';     $localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); $lugar_minuscula='ajo';
$region = 'Cantabria';  $region_minuscula = strtolower(str_replace(' ', '-', $region));   
$country = 'España';    $country_minuscula = strtolower(str_replace(' ', '-', $country)); ?>

<?php define('DESCRIPTION', "Descubre Ajo en Cantabria: playas vírgenes, miradores, rutas y el famoso Cabo de Ajo."); ?>
<?php define('KEYWORDS_CONTENT', 'Playa de Antuerta, Ajo, playas Cantabria, surf Cantabria, naturaleza, costa de Cantabria, turismo natural, playa salvaje, Ajo, Cantabria, turismo, playas, naturaleza, rutas, Cabo de Ajo, faro') ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/localidades/constantes-localidad-generico.php";?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require PATH_RAIZ . "/_estructura/semantica/head/head-generico.php"; ?>
    </head>


<body class="bg-[url('/Blog_Playas2026/anuncios/assets/img/fondos/arenaplaya.jpg')] bg-cover bg-center text-gray-800">
  <div class="container-xxl py-5">
    <div class="row">

      <!-- Columna izquierda (principal) -->
      <div class="col-lg-8">
        <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

        <header class="mb-10">
          <div class="bg-gradient-to-r from-green-600 via-emerald-500 to-teal-400 text-white text-center p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-3 flex justify-center items-center gap-3">
              <i class="fas fa-map-marked-alt"></i> Ajo (Cantabria)
            </h1>
            <p class="text-left text-lg md:text-xl font-medium">
              Ajo es una de las joyas de la costa oriental de Cantabria, conocida por sus impresionantes acantilados, 
              el Faro de Cabo de Ajo, playas tranquilas y rutas con vistas espectaculares. 
              Un destino perfecto para desconectar en plena naturaleza.
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









<?php  /*     <!-- Columna derecha (Sidebar y Playas) -->
      <div class="col-lg-4 mt-5 mt-lg-0">
        <!-- Sección Playas -->
        <section id="playas" class="bg-white border border-gray-200 rounded-lg shadow-sm p-4 mb-4">
          <header class="text-center mb-4">
            <h5 class="text-xl font-semibold text-gray-700">🏖️ Playas de <br><strong>Ajo</strong></h5>
            <p class="text-sm text-gray-500">Playas tranquilas de la costa oriental de Cantabria.</p>
          </header>
          <div class="space-y-2">
            <a href="" class="block px-4 py-2 bg-green-50 border border-green-300 text-green-700 rounded hover:bg-green-100 transition">
              Playa de Ajo
            </a>
            <a href="lugares-interes/playas/playa-de-cuberris/index.php" class="block px-4 py-2 bg-green-50 border border-green-300 text-green-700 rounded hover:bg-green-100 transition">
              Playa de Cuberris
            </a>
            <a href="playas/playa-de-antueras/index.html" class="block px-4 py-2 bg-green-50 border border-green-300 text-green-700 rounded hover:bg-green-100 transition">
              Playa de Antueras
            </a>
          </div>
        </section>
      </div> */?>