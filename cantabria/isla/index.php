<?php  
$localidad = 'Isla';     
$localidad_minuscula = strtolower(str_replace(' ', '-', $localidad)); 
$lugar_minuscula='isla';

$region = 'Cantabria';  
$region_minuscula = strtolower(str_replace(' ', '-', $region));   

$country = 'España';    
$country_minuscula = strtolower(str_replace(' ', '-', $country)); 
?>

<?php define('DESCRIPTION', "Descubre Isla en Cantabria: playas espectaculares, acantilados, gastronomía y rutas junto al mar Cantábrico."); ?>

<?php define('KEYWORDS_CONTENT', 'Isla Cantabria, turismo Isla, playas de Isla, Quejo, costa de Cantabria, turismo norte España, rutas Isla, gastronomía Cantabria, Noja Isla, acantilados Cantabria') ?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/localidades/constantes-localidad-generico.php";?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require PATH_RAIZ . "/_html/head/head-generico.php"; ?>
</head>

<body class="bg-[url('/turismo-norte-espana/anuncios/assets/img/fondos/arenaplaya.jpg')] bg-cover bg-center text-gray-800">
  
<?php require PATH_RAIZ . "/_html/body/navbar-generico.php"; ?>
  
<div class="container-xxl py-5">
  <div class="row">

    <!-- 🟢 ASIDE IZQUIERDO -->
    <aside class="col-lg-2 d-none d-lg-block">
      <div class="bg-white p-3 rounded shadow-sm mb-4">
        <h5 class="fw-bold mb-3">📍 Navegación</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="d-block py-1">Inicio</a></li>
          <li><a href="/turismo-norte-espana/#cantabria" class="d-block py-1">Playas</a></li>
          <li><a href="/turismo-norte-espana/cantabria/isla/lugares-interes/playa-de-los-barcos/" class="d-block py-1">Playas destacadas</a></li>
          <li><a href="/turismo-norte-espana/cantabria/isla/lugares-interes/rutas/" class="d-block py-1">Rutas</a></li>
        </ul>
      </div>

      <div class="bg-white p-3 rounded shadow-sm">
        <h6 class="fw-bold">🌤️ Clima</h6>
        <p class="small">
          Consulta el tiempo en Isla 
          <a href="https://www.eltiempo.es/isla-cantabria.html">Aquí</a>
        </p>
      </div>
    </aside>


    <!-- 🔵 MAIN -->
    <main class="col-lg-7 col-12">

      <?php require PATH_RAIZ . '/_estructura/semantica/componentes/breadcrums-generico.php'; ?>

      <header class="mb-6">
        <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">

          <h1 class="text-xl md:text-2xl font-semibold text-gray-800 flex items-center gap-2">
            <i class="fas fa-map-marker-alt text-green-600"></i>
            Isla <span class="text-gray-500 text-base">(Cantabria)</span>
          </h1>

          <p class="mt-2 text-sm md:text-base text-gray-600">
            Isla es uno de los destinos más populares de la costa de Cantabria, conocida por sus playas, acantilados y su excelente gastronomía.
          </p>

        </div>
      </header>

      <?php require PATH_RAIZ . "/_estructura/semantica/pages/lugares-interes-generico.php"; ?>

    </main>


    <!-- 🟡 ASIDE DERECHO -->
    <aside class="col-lg-3 col-12 mt-4 mt-lg-0">

      <div class="sticky-top" style="top: 20px;">
        
        <div class="mb-4">
          <?php require PATH_RAIZ . '/_estructura/publicidad/getYourGuide/index.php'; ?>
        </div>

        <div class="bg-white p-3 rounded shadow-sm mb-4 text-center">
          <p class="small mb-0">Espacio publicitario</p>
        </div>

        <div class="bg-white p-3 rounded shadow-sm text-center">
          <p class="small mb-0">Anuncio adicional</p>
        </div>

      </div>

    </aside>

  </div>
</div>

<?php require PATH_RAIZ . "/_html/body/footer/footer-generico.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>