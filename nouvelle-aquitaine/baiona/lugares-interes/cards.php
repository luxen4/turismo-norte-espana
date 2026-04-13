<!-- $lugares de Interés en Baiona -->

<?php
  $lugares_interes = [
    [
      'nombre' => 'Catedral de Santa María de Baiona',
      'slug'   => 'catedral-de-santa-maria',
      'imagen' => 'catedral-santa-maria.jpg',
      'alt'    => 'Catedral de Santa María en Baiona',
      'fuente' => 'patrimonionacional.fr',
      'web_imagen' => 'https://www.patrimonionacional.fr/catedral-de-santa-maria',
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
      'slug'   => 'casco-antiguo',
      'imagen' => 'casco-antiguo-baiona.jpg',
      'alt'    => 'Calles del casco antiguo de Baiona',
      'fuente' => 'baiona-tourisme.fr',
      'web_imagen' => 'https://www.baiona-tourisme.fr/casco-antiguo',
      'desc'   => 'Calles empedradas llenas de casas de entramado de madera, tiendas locales y ambiente tradicional vasco-francés.',
    ],
  ];
?>

<?php require PATH_RAIZ . '/_html/localidades/print-cards-lugares-interes.php'; ?>