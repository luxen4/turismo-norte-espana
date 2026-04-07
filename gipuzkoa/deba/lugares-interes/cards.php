<!-- $lugares de Interés en Deba -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Playa de Santiago',
      'slug'   => 'playa-de-santiago-deba',
      'imagen' => 'playa-de-santiago-deba-gipuzkoa-1.jpg',
      'alt'    => 'Playa de Deba en Deba',
      'fuente' => 'gipuzkoa.eus',
      'web_imagen' => 'https://www.gipuzkoa.eus/playa-de-deba',
      'desc'   => 'Playa amplia y de arena fina, muy popular entre familias y surfistas, con un entorno natural privilegiado.',
    ],
    
    [
      'nombre'     => 'Mirador de Sorginetxe',
      'slug'       => 'mirador-de-sorginetxe-deba',
      'imagen'     => 'mirador-de-sorginetxe-deba-gipuzkoa-1.jpg',
      'alt'        => 'Mirador de Sorginetxe en Deba',
      'fuente'     => 'deba.eus',
      'web_imagen' => 'https://www.deba.eus/mirador-sorginetxe',
      'desc'       => 'Mirador natural con espectaculares vistas de la costa y los acantilados de Deba, perfecto para senderismo y fotografía.',
    ],

    [
      'nombre' => 'Ruta Senderista Deba - Zumaia',
      'slug'   => 'ruta-senderista-deba-zumaia-deba',
      'imagen' => 'ruta-senderista-deba-zumaia-1.jpg',
      'alt'    => 'Ruta senderista entre Deba y Zumaia',
      'fuente' => 'wikiloc.com',
      'web_imagen' => 'https://www.wikiloc.com/rutas-senderismo/deba-zumaia',
      'desc'   => 'Camino costero con vistas impresionantes al Flysch y la costa guipuzcoana, ideal para senderistas.',
    ]/*,
    [
      'nombre' => 'Parque Zelaieta',
      'slug'   => 'parque-zelaieta',
      'imagen' => 'parque-zelaieta.jpg',
      'alt'    => 'Parque Zelaieta en Deba',
      'fuente' => 'deba.eus',
      'web_imagen' => 'https://www.deba.eus/parque-zelaieta',
      'desc'   => 'Parque urbano con zonas verdes, áreas infantiles y espacios para pasear y relajarse.',
    ],*/
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Deba</h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de Deba.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($lugares_interes as $lugar): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/turismo-norte-espana/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?= $lugar['slug']; ?>/img/<?= $lugar['imagen']; ?>" 
              class="card-img-top h-64 object-cover rounded-top" 
              alt="<?= $lugar['alt']; ?>">

            <figcaption class="text-xs text-gray-500 mt-1 px-3 py-1 bg-gray-100">
              📷 Imagen de <?= $lugar['nombre']; ?> – fuente: 
              <a href="<?= $lugar['web_imagen']; ?>" class="underline hover:text-blue-600 inline-flex items-center gap-1" target="_blank" rel="noopener noreferrer">
                <?= $lugar['fuente']; ?>
              </a>
            </figcaption>
          </figure>

          <div class="card-body p-4">
            <h5 class="card-title text-lg font-semibold text-green-800"><?= $lugar['nombre']; ?></h5>
            <p class="card-text text-muted small mb-3"><?= $lugar['desc']; ?></p>
            <?= $lugar_minuscula; ?>
            <?php 
// Determinar la URL según entorno
if ($_SERVER['SERVER_NAME'] == "localhost") {
    $url_lugar = "/turismo-norte-espana/".$region_minuscula."/".$localidad_minuscula."/lugares-interes/" . $lugar['slug'];
} else {
    $url_lugar = "lugares-interes/". $lugar['slug']. "/index.php";
}
?>

<a href="<?= $url_lugar; ?>" 
   class="btn btn-success btn-sm px-3 py-2 shadow-sm hover:text-<?= COLOR_PAGE; ?>-600 transition-colors duration-200">
    Explorar &rarr;
</a>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>