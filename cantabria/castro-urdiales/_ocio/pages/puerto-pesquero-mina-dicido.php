<?php $region = "Cantabria"; $region_minuscula = strtolower($region); $localidad_minuscula = 'castro-urdiales'; ?>
<?php define('PATH_HREF_CARPETA', "/Blog_Playas2026/{$region_minuscula}/{$localidad_minuscula}");?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Puerto Pesquero y Mina de Dícido | Ruta por Castro-Urdiales</title>
  <meta name="description" content="Descubre el histórico puerto pesquero de Castro-Urdiales y los restos de la Mina de Dícido: una ruta suave y accesible con historia, naturaleza y vistas costeras.">
  <meta name="author" content=<?= AUTHOR; ?> />
  <meta name="robots" content="index, follow" />

  <!-- Open Graph -->
  <meta property="og:title" content="Puerto Pesquero y Mina de Dícido | Ruta escénica en Castro-Urdiales" />
  <meta property="og:description" content="Explora una ruta entre el centro de Castro y Mioño pasando por el puerto pesquero y los restos de la Mina de Dícido." />
  <meta property="og:image" content="https://tusitio.com/imagenes/puerto-mina-dicido.jpg" />
  <meta property="og:url" content="https://tusitio.com/puerto-mina-dicido.php" />
  <meta property="og:type" content="article" />

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800 font-sans leading-relaxed">
  <header class="bg-teal-100 p-6 shadow-md">
    <div class="max-w-4xl mx-auto text-center">
      <h1 class="text-3xl md:text-4xl font-bold text-teal-800">Puerto Pesquero y Mina de Dícido</h1>
      <p class="mt-2 text-lg text-teal-700">Una ruta accesible entre historia, costa y paisajes naturales</p>
    </div>
  </header>

  <main class="max-w-4xl mx-auto p-6 space-y-8">
    <section>
      <img src="<?= PATH_HREF_CARPETA ?>/ocio/pages/imagenes/cantabria._castro_urdiales._revista_viajeros.jpg" alt="Puerto Pesquero de Castro-Urdiales" class="rounded-xl shadow w-full" />
      <h2 class="text-2xl font-semibold text-teal-700 mt-4">El Puerto Pesquero</h2>
      <p class="mt-2">
        El puerto pesquero de <strong>Castro-Urdiales</strong> es uno de los rincones con más encanto del centro histórico. Antiguamente vital para la economía local, hoy ofrece un ambiente marinero ideal para comenzar la ruta. Disfruta del paseo junto a los barcos, el castillo-faro y el romper de las olas en los espigones.
      </p>
    </section>

    <section>
      <img src="<?= PATH_HREF_CARPETA ?>/ocio/pages/imagenes/minas-de-dicido-castro-urdiales.jpg" alt="Restos de la Mina de Dícido en Mioño" class="rounded-xl shadow w-full mt-6" />
      <h2 class="text-2xl font-semibold text-teal-700 mt-4">La Mina de Dícido</h2>
      <p class="mt-2">
        En la otra punta de la ruta, encontrarás los <strong>restos industriales de la Mina de Dícido</strong>, un espacio de valor histórico que recuerda el pasado minero de la zona. El cargadero de mineral, en ruinas, crea una imagen poderosa frente al mar.
      </p>
    </section>

    <section>
      <h2 class="text-2xl font-semibold text-teal-700 mt-4">Ruta recomendada</h2>
      <p class="mt-2">
        La ruta entre ambos puntos es <strong>suave, accesible y familiar</strong>. Incluye pasarelas de madera, zonas verdes, vistas al Cantábrico y múltiples bancos para descansar. Ideal para caminar sin prisas.
      </p>
      <ul class="list-disc list-inside mt-2">
        <li>Distancia aproximada: 4 km (ida)</li>
        <li>Dificultad: Baja</li>
        <li>Duración: 1 h 15 min caminando</li>
      </ul>
    </section>

    <section>
      <h2 class="text-2xl font-semibold text-teal-700 mt-4">Consejos</h2>
      <p class="mt-2">
        Lleva agua, calzado cómodo y cámara de fotos. Ideal al atardecer o por la mañana. En verano, evita las horas de mayor calor.
      </p>
    </section>
  </main>

  <footer class="bg-teal-100 text-center p-4 mt-12 text-sm text-teal-800">
    &copy; 2025 Turismo y Playas 2026 – Guía Costera por el Cantábrico - Adrián Laya García
  </footer>
</body>
</html>
