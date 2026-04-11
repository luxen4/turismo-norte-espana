<?php define('LUGAR', 'Turismo y Playas 2026'); ?>
<?php define('LUGAR_MINUSCULA', strtolower(str_replace(' ', '-', LUGAR))) ?>
<?php define(
    'KEYWORDS_CONTENT', 
    'playas de España, playas del Cantábrico, turismo costero, turismo de playa, naturaleza y mar, costa de Cantabria, surf en España, rutas por la costa, vacaciones en la playa, turismo y naturaleza'
);
?>


<?php https://www.youtube.com/watch?v=0ZvtKu0XBMg
  $title = 'Playas del Cantabrico'; $lugar_minuscula= 'playas-cantabrico';
  $region_minuscula = 'cantabria';
  $localidad_minuscula = '';
  $lugar_minuscula_footer = 'Playas del Cantábrico';
  $lugar_minuscula = $lugar_minuscula_footer;
  define('COLOR_PAGE', 'orange');

  $localidad_minuscula='';

  $author_content = 'Adrián Laya García'; 
?>
<?php define('TITLE', "Turismo Norte de España}"); ?>
<?php define('DESCRIPTION', "Recorre la Ruta de la Costa Oriental en Ajo: senderos naturales, acantilados, faros y vistas panorámicas del Cantábrico en una experiencia inolvidable."); ?>


<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/_utilidades/defines.php"; ?>
<?php require PATH_RAIZ_HOME_HEAD_VARIABLES . "/meta-tags.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php require PATH_RAIZ . "/_html/head/head-generico.php"; ?>
</head>

<body>
  
  <?php require PATH_RAIZ . "/_html/body/navbar-generico.php"; ?>


    <!-- Código de AdCash (runAutoTag) -->
    <script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
    <script type="text/javascript">
    aclib.runAutoTag({
        zoneId: 'mnaewnieki', // Usa el Zone ID real que te ha dado AdCash
    });
    </script>



<main class="container mx-auto my-6 px-2">

  <div class="grid grid-cols-12 gap-4">

    <!-- ASIDE IZQUIERDO (2 columnas) -->
    <aside class="hidden md:block md:col-span-2">
      <div class="sticky top-4 space-y-4">
        
        <?php /*<div class="bg-gray-100 p-2 text-center rounded-lg shadow">
          <p class="text-sm">Publicidad</p>
          <div id="ad-left-1"></div>
        </div>*/ ?>

        <?php require PATH_RAIZ . "/_anuncios/amazon/publicidad-tematizada.php"; ?>


        <div class="bg-gray-100 p-2 text-center rounded-lg shadow">
          <div id="ad-left-2"></div>
        </div>

        <div class="mt-2">
          <div data-gyg-href="https://widget.getyourguide.com/default/city.frame" data-gyg-location-id="200" data-gyg-locale-code="en-US" data-gyg-widget="city" data-gyg-partner-id="VW16GKQ"></div>
        </div>

      </div>
    </aside>

    <!-- CONTENIDO CENTRAL (7 columnas) -->
    <div class="col-span-12 md:col-span-7">
      <div class="w-full">
        <section class="bg50 p-1 rounded-2xl mb-6">
          
          <header class="text-center py-1 mt-1 text-<?= COLOR_PAGE; ?>-800">
              <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight border-b border300 pb-2">
                  Turismo Norte de España
              </h1>
          </header>

          <div class="space-y-4 text800 text-base md:text-lg leading-relaxed md:leading-loose">

            <p>
              Bienvenido a nuestro blog, donde te invitamos a descubrir las 
              <span class="font-semibold text-<?= COLOR_PAGE; ?>-800">playas más impresionantes de la costa cantábrica</span>, 
              uno de los destinos más espectaculares del norte de España. 
              Desde los acantilados salvajes de Cantabria hasta las elegantes playas urbanas del País Vasco 
              y las extensas costas del suroeste de Francia, esta guía te ayudará a encontrar el lugar perfecto para tu próxima escapada.
            </p>

            <p>
              Aquí encontrarás desde 
              <span class="font-semibold text-<?= COLOR_PAGE; ?>-800">calas escondidas y tranquilas</span> 
              ideales para relajarte, hasta 
              <span class="font-semibold text-<?= COLOR_PAGE; ?>-800">playas amplias de arena dorada</span> 
              perfectas para disfrutar en familia o practicar deportes como el surf. 
              El mar Cantábrico ofrece aguas limpias, paisajes verdes únicos y una gran diversidad de entornos naturales.
            </p>

            <p>
              Además, cada destino está acompañado de su 
              <span class="font-semibold text-<?= COLOR_PAGE; ?>-800">rica gastronomía local</span>, 
              donde destacan los mariscos frescos, los pintxos y los platos tradicionales que convierten cualquier visita 
              en una experiencia completa.
            </p>

            <p>
              Explora nuestras guías por regiones —Cantabria, Bizkaia, Gipuzkoa y la costa francesa— 
              y descubre cuáles son las mejores playas según tus preferencias: naturaleza, tranquilidad, ocio o aventura.
            </p>

          </div>

        </section>

        <div class="row">
          <div class="col-12">
            <?php include PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/sumario-playas-cantabria.php'; ?>
            <div id="adcash-zone" style="width: 100%; text-align: center; margin: 1em 0;"></div>
          </div>

          <div class="col-12">
            <?php 
              $region='Bizkaia'; $region_minuscula = 'bizkaia';
              include PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/sumario-playas-bizkaia.php'; 
            ?>
          </div>

          <div class="col-12">
            <?php 
              $region='Gipuzkoa'; $region_minuscula = 'gipuzkoa';
              include PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/sumario-playas-gipuzkoa.php'; 
            ?>
          </div>

          <div class="col-12">
            <?php 
              $region='Francia'; $region_minuscula = strtolower($localidad);
              include PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/sumario-playas-nouvelle-aquitaine.php'; 
            ?>
          </div>
        </div>

      </div>
    </div>

    <!-- ASIDE DERECHO (3 columnas) -->
    <aside class="hidden md:block md:col-span-3">
      <div class="sticky top-4 space-y-4">

        <?php /*<div class="bg-gray-100 p-2 text-center rounded-lg shadow">
          <p class="text-sm">Publicidad</p>
          <div id="ad-right-1"></div>
        </div>*/ ?>

        <div class="bg-white p-2 rounded-lg shadow">
          <div data-gyg-widget="auto" data-gyg-partner-id="VW16GKQ"></div>
        </div>

      </div>
    </aside>

  </div>

</main>

    <?php // require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_BODY. '/footer-generico-playa.php'; ?>


    <?php require PATH_RAIZ . "/_html/body/footer/footer-generico.php"; ?>

    <?php //require PATH_RAIZ . "/anuncios/pop-up-index.php"; ?>
    <?php $ruta_archivo_visitas = './bloques/control/visitas.csv'; ?>
    <?php require PATH_RAIZ_BLOQUES . "/control/control-visitas.php"; ?>

    <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA_ANUNCIOS_JS . "/"; ?>
    <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>
</body>

</html>


<?php 
/*
ftpupload.net

FTP USERNAME
if0_38843592

USERNAME
if0_38843592 


PASSWORD
5HJqjWqYLP4k

http://Playas2026.kesug.com/turismo-norte-espana/
https: //Playas2026.kesug.com/turismo-norte-espana/




https://chatgpt.com/?model=auto


*/    
?>


<?php /* Para amigables URLs
    if ($_SERVER['SERVER_NAME'] == "localhost") { ?>
href="<?= PATH_HREF_RAIZ.'/'.$localidad_minuscula.'-'.$region_minuscula ?>"<?php
    } else { ?>
href= <?= PATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD ."/index.php"; }?>
class="hover:text-<?= COLOR_PAGE; ?>-600 transition-colors duration-200">
<?= $localidad; */ 
?>

<?php /* https://proyecto-final.kesug.com/ Para copiarle*/?>
<?php /*

Las Arenas
Ereaga
Arrigunaga
Muriola,
PLentzia
Gorliz
Armintza
Aritzatxu
Laidatxu
Toña
Ea
Ogella
Isuntza
Karraspio
Arrigorri

Meter la consulta al tiempo

Barinatxe
Arriatera-Atxabiribil
Bakio
Laida
Laga











<article class="prose max-w-none">
  <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
    🧥 Las mejores chaquetas militares de Cotosen para 2025
  </h1>

  <p class="mb-4 text-gray-700">
    Si buscas <strong>chaquetas militares resistentes, cómodas y con estilo</strong>,
    Cotosen es una de las tiendas más populares para este tipo de ropa. 
    Aquí te presentamos una selección de las mejores chaquetas para este 2025, 
    ideales para <em>outdoor, montaña y uso urbano</em>.
  </p>

  <!-- Producto 1 -->
  <section class="border border-gray-200 p-4 rounded-lg mb-6 shadow-sm bg-white">
    <h2 class="text-xl font-semibold mb-2">1. Chaqueta táctica con múltiples bolsillos</h2>
    <img src="https://cdn.cotosen.com/product1.jpg" alt="Chaqueta táctica Cotosen" class="rounded-lg mb-3 shadow">
    <p class="mb-3 text-sm text-gray-600">
      Perfecta para actividades al aire libre, fabricada con materiales impermeables
      y con gran capacidad de almacenamiento en sus bolsillos.
    </p>
    <a href="https://mylead.global/stl/TU-ENLACE-AFILIADO" 
       target="_blank" 
       rel="nofollow sponsored" 
       class="inline-block px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
       🔗 Ver en Cotosen
    </a>
  </section>

  <!-- Producto 2 -->
  <section class="border border-gray-200 p-4 rounded-lg mb-6 shadow-sm bg-white">
    <h2 class="text-xl font-semibold mb-2">2. Chaqueta militar ligera de camuflaje</h2>
    <img src="https://cdn.cotosen.com/product2.jpg" alt="Chaqueta camuflaje Cotosen" class="rounded-lg mb-3 shadow">
    <p class="mb-3 text-sm text-gray-600">
      Una opción más ligera para climas templados. Su diseño de camuflaje
      la hace ideal para senderismo, airsoft o simplemente para un look urbano.
    </p>
    <a href="https://mylead.global/stl/TU-ENLACE-AFILIADO" 
       target="_blank" 
       rel="nofollow sponsored" 
       class="inline-block px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
       🔗 Comprar en Cotosen
    </a>
  </section>

  <!-- Producto 3 -->
  <section class="border border-gray-200 p-4 rounded-lg mb-6 shadow-sm bg-white">
    <h2 class="text-xl font-semibold mb-2">3. Chaqueta térmica para invierno</h2>
    <img src="https://cdn.cotosen.com/product3.jpg" alt="Chaqueta invierno Cotosen" class="rounded-lg mb-3 shadow">
    <p class="mb-3 text-sm text-gray-600">
      Diseñada para bajas temperaturas, con interior térmico y exterior
      resistente al viento. Ideal para quienes no quieren renunciar al estilo
      en invierno.
    </p>
    <a href="https://mylead.global/stl/TU-ENLACE-AFILIADO" 
       target="_blank" 
       rel="nofollow sponsored" 
       class="inline-block px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
       🔗 Ver oferta en Cotosen
    </a>
  </section>

  <p class="mt-6 text-gray-700">
    👉 Recuerda que todos los productos se envían directamente desde la tienda oficial 
    de Cotosen y puedes aprovechar descuentos especiales con tu compra online.
  </p>
</article>








*/