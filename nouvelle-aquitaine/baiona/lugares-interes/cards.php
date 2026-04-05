<!-- $lugares de Interés en Baiona -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Catedral de Santa María de Baiona',
      'slug'   => 'catedral-santa-maria-baiona',
      'imagen' => 'catedral-santa-maria.jpg',
      'alt'    => 'Catedral de Santa María en Baiona',
      'fuente' => 'patrimonionacional.fr',
      'web_imagen' => 'https://www.patrimonionacional.fr/catedral-santa-maria-baiona',
      'desc'   => 'Impresionante catedral gótica declarada Patrimonio de la Humanidad, con claustro medieval y vitrales únicos.',
    ],
    [
      'nombre' => 'Museo Vasco y de la Historia de Baiona',
      'slug'   => 'museo-vasco-historia-baiona',
      'imagen' => 'museo-vasco-baiona.jpg',
      'alt'    => 'Museo Vasco y de la Historia de Baiona',
      'fuente' => 'baiona.fr',
      'web_imagen' => 'https://www.baiona.fr/museo-vasco-historia',
      'desc'   => 'Exposición cultural sobre el País Vasco francés y la historia de Baiona, ubicado en una casa del siglo XVII.',
    ],
    [
      'nombre' => 'Puente Saint-Esprit',
      'slug'   => 'puente-saint-esprit',
      'imagen' => 'puente-saint-esprit.jpg',
      'alt'    => 'Puente Saint-Esprit en Baiona',
      'fuente' => 'baiona-tourisme.fr',
      'web_imagen' => 'https://www.baiona-tourisme.fr/puente-saint-esprit',
      'desc'   => 'Histórico puente que conecta los barrios de la ciudad y ofrece vistas del río Adour.',
    ],
    [
      'nombre' => 'Casco Antiguo de Baiona',
      'slug'   => 'casco-antiguo-baiona',
      'imagen' => 'casco-antiguo-baiona.jpg',
      'alt'    => 'Calles del casco antiguo de Baiona',
      'fuente' => 'baiona-tourisme.fr',
      'web_imagen' => 'https://www.baiona-tourisme.fr/casco-antiguo',
      'desc'   => 'Calles empedradas llenas de casas de entramado de madera, tiendas locales y ambiente tradicional vasco-francés.',
    ],
  ];
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en Baiona</h2>
    <p class="text-gray-600">Descubre el encanto cultural e histórico de Baiona en el País Vasco francés.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($lugares_interes as $lugar): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/Blog_Playas2026/nouvelle-aquitaine/baiona/lugares-interes/<?= $lugar['slug']; ?>/img/<?= $lugar['imagen']; ?>" 
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
            <a href="/Blog_Playas2026/lugares-interes/<?= $lugar['slug']; ?>" class="btn btn-success btn-sm px-3 py-2 shadow-sm">
              Explorar &rarr;
            </a>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
