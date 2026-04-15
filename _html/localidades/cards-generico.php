<!-- $lugares de Interés en Baiona -->

<?php /*
  $lugares_interes = [
    [
      'nombre' => 'Catedral de Santa María de Baiona',
      'slug'   => 'catedral-de-santa-maria',
      'imagen' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/BayonneCatedral.JPG/330px-BayonneCatedral.JPG',
      'alt'    => 'Catedral de Santa María en Baiona',
      'fuente' => 'wikipedia',
      'web_imagen' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Bayonne-Avril_2012-8.jpg/250px-Bayonne-Avril_2012-8.jpg',
      'desc'   => 'Impresionante catedral gótica declarada Patrimonio de la Humanidad, con claustro medieval y vitrales únicos.',
    ],
    [
      'nombre' => 'Museo Vasco y de la Historia de Baiona',
      'slug'   => 'museo-vasco-historia-baiona',
      'imagen' => 'https://www.visitbayonne.com/wp-content/uploads/2024/01/musee_basque_bayonne-objets-copytvmf-1024x682.jpg.webp',
      'alt'    => 'Museo Vasco y de la Historia de Baiona',
      'fuente' => 'visitbayonne.com',
      'web_imagen' => 'https://www.visitbayonne.com/es/descubra/que-ver-y-hacer-en-bayona/visitar-bayona/el-museo-vasco-y-la-historia-de-bayona/',
      'desc'   => 'Exposición cultural sobre el País Vasco francés y la historia de Baiona, ubicado en una casa del siglo XVII.',
    ],
    [
      'nombre' => 'Puente Saint-Esprit',
      'slug'   => 'puente-saint-esprit',
      'imagen' => 'https://upload.wikimedia.org/wikipedia/commons/6/63/Rio_de_Bayonne.jpg',
      'alt'    => 'Puente Saint-Esprit en Baiona',
      'fuente' => 'wikidata.org',
      'web_imagen' => 'https://www.wikidata.org/wiki/Q17484909',
      'desc'   => 'Histórico puente que conecta los barrios de la ciudad y ofrece vistas del río Adour.',
    ],
    [
      'nombre' => 'Casco Antiguo de Baiona',
      'slug'   => 'casco-antiguo',
      'imagen' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/Baiona_-_11_-_Igrexa_de_Santa_Liberata.jpg/3840px-Baiona_-_11_-_Igrexa_de_Santa_Liberata.jpg',
      'alt'    => 'Calles del casco antiguo de Baiona',
      'fuente' => 'wikipedia.org',
      'web_imagen' => 'https://gl.wikipedia.org/wiki/Ficheiro:Baiona_-_11_-_Igrexa_de_Santa_Liberata.jpg',
      'desc'   => 'Calles empedradas llenas de casas de entramado de madera, tiendas locales y ambiente tradicional vasco-francés.',
    ],
  ]; */
?>

<?php
$ruta_csv = PATH_RAIZ . "/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/data-lugares-interes-{$localidad_minuscula}.csv";

$lugares_interes = [];

if (($handle = fopen($ruta_csv, "r")) !== false) {
    $cabeceras = fgetcsv($handle, 1000, ","); // primera fila

    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        $lugares_interes[] = array_combine($cabeceras, $data);
    }

    fclose($handle);
}
?>

<section id="lugares-interes" class="my-10">
  <div class="text-center mb-6">
    <h2 class="text-2xl font-bold text-green-700 mb-2">📍 Lugares de Interés en <?= $localidad; ?></h2>
    <p class="text-gray-600">Descubre los rincones más emblemáticos y naturales de <? $localidad; ?>.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($lugares_interes as $lugar): ?>
      <div class="col">
        <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden transition hover:shadow-md">

          <figure class="mb-0">
            <img 
              src="/turismo-norte-espana/<?= $region_minuscula; ?>/<?= $localidad_minuscula?>/lugares-interes/<?= $lugar['slug']; ?>/img/<?= $lugar['imagen']; ?>" 
              class="card-img-top h-64 object-cover rounded-top" 
              alt="<?= $lugar['alt']; ?>">

            <figcaption class="text-xs text-gray-500 mt-1 px-3 py-1 bg-gray-100">
              📷 Imagen de <?= $lugar['nombre']; ?> – fuente: 
              <a href="<?= $lugar['web_imagen']; ?>" class="underline hover:text-blue-600 inline-flex items-center gap-1" target="_blank" rel="noopener noreferrer">
                <?= $lugar['fuente']; ?>
              </a>
            </figcaption>
          </figure>

          <?php require PATH_RAIZ . '/_html/localidades/boton-explorar.php'; ?>
                
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>