<!-- $lugares de Interés en Sopelana -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Playa de Arrietara',
      'slug'   => 'playa-de-arrietara',
      'imagen' => 'playa-de-arrietara-sopelana-bizkaia-1.jpg',
      'alt'    => 'Playa de Arrietara en Sopelana',
      'fuente' => 'bizkaia.eus',
      'web_imagen' => 'https://www.bizkaia.eus/playa-de-sopelana',
      'desc'   => 'Playa popular para surfistas y amantes de la naturaleza, con acantilados impresionantes.',
    ],
    [
      'nombre' => 'Mirador de Arrietara',
      'slug'   => 'mirador-de-arrietara',
      'imagen' => 'mirador-playa-arrietara-sopelana-bizkaia-1.jpg',
      'alt'    => 'Mirador de Arrietara en Sopelana',
      'fuente' => 'sopelana.eus',
      'web_imagen' => 'https://www.sopelana.eus/mirador-arrietara',
      'desc'   => 'Punto panorámico con vistas espectaculares de la costa y la playa de Sopelana.',
    ],
    [
      'nombre' => 'Ruta Senderista Sopelana - Plentzia',
      'slug'   => 'ruta-senderista-sopelana-plentzia',
      'imagen' => 'recorrido-costero-sopelana-plentzia.jpeg',
      'alt'    => 'Ruta senderista desde Sopelana a Plentzia',
      'fuente' => 'wikiloc.com',
      'web_imagen' => 'https://www.wikiloc.com/rutas-senderismo/sopelana-plentzia',
      'desc'   => 'Paseo natural entre dos municipios costeros con vistas al mar y la ría de Plentzia.',
    ],/*
    [
      'nombre' => 'Parque Kortezubi',
      'slug'   => 'parque-kortezubi',
      'imagen' => 'parque-kortezubi.jpg',
      'alt'    => 'Parque Kortezubi en Sopelana',
      'fuente' => 'sopelana.eus',
      'web_imagen' => 'https://www.sopelana.eus/parque-kortezubi',
      'desc'   => 'Zona verde con áreas de picnic, ideal para familias y actividades al aire libre.',
    ],*/
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Sopelana</h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de Sopelana.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($lugares_interes as $lugar): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/turismo-norte-espana/bizkaia/sopelana/lugares-interes/<?= $lugar['slug']; ?>/img/<?= $lugar['imagen']; ?>" 
              class="card-img-top h-64 object-cover rounded-top" 
              alt="<?= $lugar['alt']; ?>">

            <figcaption class="text-xs text-gray-500 mt-1 px-3 py-1 bg-gray-100">
              📷 Imagen de <?= $lugar['nombre']; ?> – fuente: 
              <a href="<?= $lugar['web_imagen']; ?>" class="underline hover:text-blue-600 inline-flex items-center gap-1" target="_blank" rel="noopener noreferrer">
                <?= $lugar['fuente']; ?>
              </a>
            </figcaption>
          </figure>

          <?php require(PATH_RAIZ_ESTRUCTURA_PAGINAS_LOCALIDAD . '/boton-explorar.php'); ?>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
