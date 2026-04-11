<?php
$localidad_minuscula="";
$lugar_minuscula="";
$region_minuscula="";
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/bloques/estructura/variables_comunes/defines.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gastronomía del Norte de España</title>
  <meta name="description" content="Descubre la gastronomía del norte de España: Cantabria, País Vasco y País Vasco Francés.">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

<!-- NAVBAR -->
<?php require PATH_RAIZ . "/_html/body/navbar-generico.php"; ?>

<div class="max-w-7xl mx-auto px-4 py-6">
  <div class="grid grid-cols-12 gap-6">

    <!-- 🟢 ASIDE IZQUIERDO -->
    <aside class="hidden lg:block col-span-2">
      <div class="sticky top-24 space-y-4">

        <div class="bg-white p-4 rounded shadow-sm">
          <h3 class="font-semibold mb-2">🍴 Categorías</h3>
          <ul class="text-sm text-gray-600 space-y-1">
            <li><a href="#">Platos típicos</a></li>
            <li><a href="#">Restaurantes</a></li>
            <li><a href="#">Rutas gastronómicas</a></li>
            <li><a href="#">Productos locales</a></li>
          </ul>
        </div>

        <div class="bg-white p-4 rounded shadow-sm text-center">
          <p class="text-xs text-gray-500">
            🍷 Experiencias gastronómicas
          </p>
        </div>

      </div>
    </aside>


    <!-- 🔵 MAIN -->
    <main class="col-span-12 lg:col-span-7">

      <!-- HERO -->
      <section class="mb-6">
        <h1 class="text-2xl md:text-4xl font-bold mb-3">
          🍽️ Gastronomía del Norte de España
        </h1>
        <p class="text-gray-600 text-lg">
          Descubre los sabores únicos de la costa cantábrica: tradición y producto local.
        </p>
      </section>

<!-- REGIONES -->
<section class="grid md:grid-cols-3 gap-6 mb-10">

  <!-- Cantabria -->
  <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
    <img src="/img/gastronomia/cantabria.jpg" class="rounded-t-lg">
    <div class="p-4">
      <h2 class="text-xl font-semibold mb-2">
        Cantabria
      </h2>
      <p class="text-sm text-gray-600 mb-3">
        Gastronomía tradicional basada en productos del mar Cantábrico y la montaña, con platos contundentes y sabores auténticos.
      </p>
      <a href="/cantabria/gastronomia/" class="text-blue-600 text-sm font-medium">
        Ver más →
      </a>
    </div>
  </div>

  <!-- País Vasco -->
  <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
    <img src="/img/gastronomia/pais-vasco.jpg" class="rounded-t-lg">
    <div class="p-4">
      <h2 class="text-xl font-semibold mb-2">
        País Vasco
      </h2>
      <p class="text-sm text-gray-600 mb-3">
        Referente mundial en gastronomía, famoso por sus pintxos, alta cocina y productos de gran calidad.
      </p>
      <a href="/pais-vasco/gastronomia/" class="text-blue-600 text-sm font-medium">
        Ver más →
      </a>
    </div>
  </div>

  <!-- País Vasco Francés -->
  <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
    <img src="/img/gastronomia/pais-vasco-frances.jpg" class="rounded-t-lg">
    <div class="p-4">
      <h2 class="text-xl font-semibold mb-2">
        País Vasco Francés
      </h2>
      <p class="text-sm text-gray-600 mb-3">
        Fusión única entre tradición vasca y cocina francesa, con productos locales y recetas con gran identidad.
      </p>
      <a href="/pais-vasco-frances/gastronomia/" class="text-blue-600 text-sm font-medium">
        Ver más →
      </a>
    </div>
  </div>

</section>

      <!-- PLATOS -->
      <section class="mb-10">
        <h2 class="text-2xl font-bold mb-6">🥘 Platos típicos</h2>

        <div class="grid md:grid-cols-3 gap-6">

          <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold">Cocido montañés</h3>
            <p class="text-sm text-gray-600">Plato típico de Cantabria.</p>
          </div>

          <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold">Pintxos</h3>
            <p class="text-sm text-gray-600">Icono del País Vasco.</p>
          </div>

          <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold">Axoa</h3>
            <p class="text-sm text-gray-600">Tradición vasco-francesa.</p>
          </div>

        </div>
      </section>

    </main>


    <!-- 🟡 ASIDE DERECHO -->
    <aside class="hidden lg:block col-span-3">
      <div class="sticky top-24 space-y-4">

        <div class="bg-white p-3 rounded shadow text-center">
          <p class="text-xs text-gray-500 mb-2">
            🤝 Colabora con nuestra web
          </p>

          <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039"></script>
        </div>

        <div class="bg-white p-3 rounded shadow text-center">
          <?php require PATH_RAIZ . '/_estructura/publicidad/getYourGuide/index.php'; ?>
        </div>

      </div>
    </aside>

  </div>
</div>

<!-- CTA -->
<section class="bg-blue-800 text-white py-10 text-center mt-10">
  <h2 class="text-2xl font-bold mb-3">
    Descubre rutas gastronómicas únicas
  </h2>
  <p class="mb-4">Explora sabores del norte de España</p>
  <a href="#" class="bg-yellow-400 text-black px-6 py-2 rounded font-semibold">
    Ver rutas
  </a>
</section>

<!-- FOOTER -->
<?php require PATH_RAIZ . "/_html/body/footer/footer-generico.php"; ?>

</body>
</html>





