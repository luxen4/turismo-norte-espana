<!-- $lugares de Interés en Capbreton -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Playa de Capbreton',
      'slug'   => 'plage-centrale-capbreton',
      'imagen' => 'plage-centrale-capbreton-nouvelle-aquitaine-1.jpg',
      'alt'    => 'Playa de Capbreton',
      'fuente' => 'capbreton.fr',
      'web_imagen' => 'https://www.capbreton.fr/plage-de-capbreton',
      'desc'   => 'Amplia playa de arena fina, ideal para surfistas y familias, con un ambiente relajado y vistas al Atlántico.',
    ],
    [
      'nombre' => 'Puerto pesquero de Capbreton',
      'slug'   => 'puerto-pesquero',
      'imagen' => 'puerto-pesquero-de-capbreton-nouvelle-aquitaine-1.png',
      'alt'    => 'Puerto pesquero y deportivo de Capbreton',
      'fuente' => 'landesatlantiquesud.com',
      'web_imagen' => 'https://www.landesatlantiquesud.com/es/capbreton/le-port-de-capbreton/',
      'desc'   => 'Puerto histórico con actividad pesquera y marina deportiva, rodeado de restaurantes y paseos marítimos.',
    ],
    [
      'nombre' => 'La Piste Cyclable Vélodyssée',
      'slug'   => 'piste-cyclable-velodyssee',
      'imagen' => 'ciclistas-piste-cyclable-velodyssee-capbreton.jpg',
      'alt'    => 'Pista ciclista Vélodyssée en Capbreton',
      'fuente' => 'seignosse-tourisme.com',
      'web_imagen' => 'https://www.seignosse-tourisme.com/fiche/la-velodyssee-de-seignosse-a-capbreton/',
      'desc'   => 'Ruta ciclista costera que pasa por Capbreton, ideal para descubrir la región en bicicleta.',
    ],
    [
      'nombre' => 'Forêt Domaniale de Capbreton',
      'slug'   => 'foret-domaniale',
      'imagen' => 'les-forets-de-labenne-par-capbreton-a-vtt.jpg',
      'alt'    => 'Bosque estatal de Capbreton',
      'fuente' => 'decathlon-outdoor.com',
      'web_imagen' => 'https://www.decathlon-outdoor.com/fr-fr/explore/france/les-forets-de-labenne-par-capbreton-a-vtt-65b1060ce59ba',
      'desc'   => 'Gran bosque de pinos cercano a la playa, perfecto para senderismo, picnic y contacto con la naturaleza.',
    ],
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Capbreton</h2>
    <p class="text-gray-600">Descubre los espacios naturales y culturales que hacen especial a Capbreton.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($lugares_interes as $lugar): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2026/nouvelle-aquitaine/capbreton/lugares-interes/<?= $lugar['slug']; ?>/img/<?= $lugar['imagen']; ?>" 
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
            <a href="/Blog_Playas2026/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/lugares-interes/<?= $lugar['slug']; ?>" class="btn btn-success btn-sm px-3 py-2 shadow-sm">
              Explorar &rarr;
            </a>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
