<?php 
$targeta = PATH_RAIZ_LOCALIDADES.'/index.php';
$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';

$region = 'Gipuzkoa'; 
$region_minuscula = strtolower($region);
?>

<h2 id="<?= $region_minuscula; ?>" class="text-2xl md:text-3xl font-bold text-center text-<?= COLOR_PAGE; ?>-800 mb-6"><?= $region; ?></h2>

<?php
// Localidades con sus playas
$localidades = [
  'Deba' => [
    [
      'playa_name' => 'Playa de Santiago',
      'archivo_name' => 'santiago-deba',
      'presentacion' => 'La Playa de Santiago, ubicada en Deba, Gipuzkoa, es una playa de arena fina y aguas limpias, ideal para familias y amantes del surf. Con accesos cómodos y servicios en temporada, esta playa ofrece un entorno natural privilegiado con vistas al mar Cantábrico y senderos costeros para explorar.'
    ]
  ],
  // 👇 aquí podrás añadir más localidades y sus playas
  // 'Zarautz' => [
  //   [
  //     'playa_name' => 'Playa de Zarautz',
  //     'archivo_name' => 'zarautz-playa',
  //     'presentacion' => 'La Playa de Zarautz, conocida como la “Reina de las Playas” del Cantábrico, es extensa y popular entre surfistas y familias...'
  //   ]
  // ],
];

foreach ($localidades as $localidad => $playas): 
    $localidad_minuscula = strtolower($localidad);
    require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php'; 
?>
    <div class="container my-4">
      <div class="row">
        <?php foreach ($playas as $playa): 
          $playa_name = $playa['playa_name'];
          $playa_name_minuscula = strtolower(str_replace(' ', '-', $playa_name));
          $archivo_name = $playa['archivo_name'];
          $presentacion = $playa['presentacion'];
          $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS = "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/{$localidad_minuscula}";
        ?>
          <div class="col-12 col-md-12 mb-4">
            <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
<?php endforeach; ?>

<div class="row">
  <div class="col-12 text-center">  
      <?php require $publicidad; ?>
  </div>
</div>
