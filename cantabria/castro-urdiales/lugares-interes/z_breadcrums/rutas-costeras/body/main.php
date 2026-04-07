<main class="container mx-auto max-w-7xl px-4 py-12">
  <div class="bg-white rounded-2xl shadow-md p-6 md:p-10">
    <header class="text-center mb-10">
      <h1 class="text-3xl md:text-4xl font-bold text600 mb-2">
        <i class="fas fa-route mr-2"></i> Rutas Costeras en <?= $localidad_minuscula; ?>
      </h1>
      <p class="text-gray-600 text-lg">
        Una escapada perfecta entre acantilados, senderos y miradores naturales en la costa de <?= $region; ?>
      </p>
    </header>

    <section class="mb-6">
      <p>
        Si estás planeando una visita a <strong><?= $localidad_minuscula; ?></strong> y te apasiona caminar entre paisajes naturales con olor a salitre, estás de suerte. Este pintoresco municipio cántabro no solo destaca por su patrimonio y playas, sino también por su red de <strong>rutas costeras</strong> que lo rodean. A continuación, te presentamos algunas de las mejores opciones para hacer senderismo junto al mar.
      </p>
    </section>

    <section class="mb-8">
      <h2 class="text-xl font-semibold text-primary mb-2"><i class="fas fa-water"></i> Acantilados de Sonabia</h2>
      <p>
        Uno de los caminos más espectaculares parte desde la <a href="<?php /* PATH_HREF_CARPETA_LOCALIDADES_REGION */ ?>/playa-de-sonabia/index.php">Playa de Sonabia</a>, donde los acantilados y el sonido del oleaje ofrecen una experiencia inolvidable. Este tramo, que bordea zonas de especial protección natural, es perfecto para avistamiento de aves y fotografía de paisaje. Se recomienda calzado adecuado y protección solar.
      </p>
    </section>

    <section class="mb-8">
      <h2 class="text-xl font-semibold text-primary mb-2"><i class="fas fa-walking"></i> De Castro a Mioño por la costa</h2>
      <p>
        Una ruta suave y accesible que conecta el centro histórico con Mioño. Ideal para familias, este recorrido pasa por zonas verdes, pasarelas de madera y ofrece panorámicas del litoral. No te pierdas el <a href="<?php /* PATH_HREF_CARPETA */?>/ocio/pages/puerto-pesquero-mina-dicido.php">puerto pesquero</a> al inicio y los restos de la <strong>mina de Dícido</strong> al final.
      </p>
    </section>

    <section class="mb-8">
      <h2 class="text-xl font-semibold text-primary mb-2"><i class="fas fa-mountain-sun"></i> Subida al Monte Cueto</h2>
      <p>
        Para quienes buscan una experiencia más deportiva, el ascenso al Monte Cueto brinda un recorrido desafiante, pero con recompensas visuales excepcionales. Desde lo alto se domina toda la bahía de Castro-Urdiales y parte de la costa oriental de Cantabria.
      </p>
    </section>

    <section class="mb-8">
      <h3 class="text-lg font-semibold text-info mb-2"><i class="fas fa-map-signs"></i> Senderos señalizados y rutas oficiales</h3>
      <p>
        El Ayuntamiento ha trabajado en señalizar varios <a href="<?= PATH_HREF_CARPETA_LUGARES_INTERES; ?>/senderos-costeros-rutas-oficiales/index.php">senderos oficiales</a> que puedes seguir con total seguridad. Están bien documentados e incluyen puntos de interés como miradores, áreas de descanso y paneles interpretativos.
      </p>
    </section>

    <section class="mb-8">
      <h3 class="text-lg font-semibold text-yellow-600 mb-2"><i class="fas fa-camera-retro"></i> Miradores y fotografía</h3>
      <p>
        Algunos de los lugares más fotogénicos son el <a href="<?= PATH_HREF_CARPETA_LUGARES_INTERES; ?>/mirador-de-cotolino/index.php">Mirador de Cotolino</a>, los acantilados de Islares o el entorno del Castillo-Faro. Si te gusta capturar atardeceres, estos rincones te regalarán luces únicas frente al Cantábrico.
      </p>
    </section>

    <section class="mb-8">
      <h2 class="text-lg font-semibold text-success mb-3"><i class="fas fa-map"></i> Listado de rutas costeras oficiales</h2>
      <div class="overflow-x-auto">
        <table class="table-auto w-full text-sm border border-gray-300">
          <thead class="bg-green-100 text-left">
            <tr>
              <th class="p-2">Ruta</th>
              <th class="p-2">Distancia</th>
              <th class="p-2">Dificultad</th>
              <th class="p-2">Duración</th>
              <th class="p-2">Inicio - Fin</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            <tr class="border-t">
              <td class="p-2 font-medium">Sendero de los Acantilados de Sonabia</td>
              <td class="p-2">4,5 km (ida)</td>
              <td class="p-2">Moderada</td>
              <td class="p-2">1h 30min</td>
              <td class="p-2">Playa de Sonabia – Punta Sonabia</td>
            </tr>
            <tr class="border-t">
              <td class="p-2 font-medium">Ruta Castro - Mioño por la costa</td>
              <td class="p-2">3,2 km</td>
              <td class="p-2">Fácil</td>
              <td class="p-2">50 min</td>
              <td class="p-2">Iglesia de Santa María – Mina de Dícido</td>
            </tr>
            <tr class="border-t">
              <td class="p-2 font-medium">Ascenso al Monte Cueto</td>
              <td class="p-2">6 km (circular)</td>
              <td class="p-2">Alta</td>
              <td class="p-2">2h 15min</td>
              <td class="p-2">Bº de Campijo – Cima – Retorno</td>
            </tr>
            <tr class="border-t">
              <td class="p-2 font-medium">Paseo de Ostende y Mirador de Cotolino</td>
              <td class="p-2">2,8 km</td>
              <td class="p-2">Fácil</td>
              <td class="p-2">45 min</td>
              <td class="p-2">Playa de Ostende – Mirador de Cotolino</td>
            </tr>
            <tr class="border-t">
              <td class="p-2 font-medium">Ruta por Islares y los acantilados del Cerdigo</td>
              <td class="p-2">5 km</td>
              <td class="p-2">Moderada</td>
              <td class="p-2">1h 40min</td>
              <td class="p-2">Islares – Punta Rebuzno</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="mt-4">
        Todas las rutas están señalizadas y cuentan con puntos de interés natural o patrimonial. Recuerda llevar agua, protección solar y consultar el tiempo antes de salir.
      </p>
    </section>

    <section class="mt-10 text-center">
      <h3 class="text-xl font-bold mb-3">🌿 ¿Quieres más rutas?</h3>
      <p>
        Descubre mapas y rutas compartidas por senderistas en:
        <br />
        <a href="<?= $url_wikiloc; ?>" class="btn btn-outline-success mt-3" target="_blank" rel="noopener noreferrer">
          <i class="fas fa-map"></i> Wikiloc: Rutas en Castro-Urdiales
        </a>
      </p>

      <p class="mt-6">
        🧭 ¿Ya conoces todo lo que ofrece esta ciudad? Mira nuestra guía completa:
        <br />
        <a href="<?php  /* PATH_HREF_CARPETA; */ ?>/ocio/pages/guia-completa-castro-urdiales.php" class="btn btn-primary mt-3">
          Ver guía de Castro-Urdiales
        </a>
      </p>
    </section>
  </div>
</main>
