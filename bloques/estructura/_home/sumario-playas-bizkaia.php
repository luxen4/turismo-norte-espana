<?php 
$targeta = PATH_RAIZ_LOCALIDADES.'/index.php';
$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';

$region = 'Bizkaia'; 
$region_minuscula = strtolower($region);
?>

<h2 id="<?= $region; ?>" class="text-2xl md:text-3xl font-bold text-center text-<?= COLOR_PAGE; ?>-800 mb-6"><?= $region; ?></h2>

<?php
// Definimos todas las localidades con sus playas
$localidades = [
  'Bakio' => [
    [
      'playa_name' => 'Playa de Bakio',
      'archivo_name' => 'playa-de-bakio-bakio',
      'presentacion' => 'La Playa de Bakio, situada en Bakio, Bizkaia, es una playa amplia y muy conocida de la costa vasca, con arena dorada y un oleaje que atrae a numerosos surfistas durante todo el año. Rodeada de montañas y paisajes verdes, cuenta con un paseo marítimo, bares, restaurantes y servicios de temporada como duchas y socorristas. Es un punto ideal para quienes buscan una combinación de naturaleza, ocio y deportes acuáticos.'
    ]
  ],
  'Gorliz' => [
    [
      'playa_name' => 'Playa de Astondo',
      'archivo_name' => 'playa-de-astondo-gorliz',
      'presentacion' => '🌿 La Playa de Astondo, es una playa natural situada junto a Gorliz, Bizkaia. Destaca por su entorno salvaje, sus vistas espectaculares y la tranquilidad que ofrece. Es ideal para pasear, desconectar y explorar la costa vasca más auténtica.'
    ]
  ],
  'Ibarrangelu' => [
    [
      'playa_name' => 'Playa de Laga',
      'archivo_name' => 'playa-de-laga-ibarrangelu',
      'presentacion' => '🌿 La Playa de Laga, ubicada en Ibarrangelu, Bizkaia, es una playa virgen y tranquila dentro de la Reserva de la Biosfera de Urdaibai. Destaca por su entorno natural protegido, aguas limpias y olas apreciadas por surfistas. Con acceso sencillo y sin masificaciones, Laga es perfecta para disfrutar de la costa vasca en un entorno salvaje y relajante.'
    ]
  ],
  'Muskiz' => [
    [
      'playa_name' => 'Playa de La Arena',
      'archivo_name' => 'playa-de-la-arena-muskiz',
      'presentacion' => 'La Playa de La Arena, situada entre Muskiz (Bizkaia) y el límite con Cantabria, es una extensa playa de arena fina con fuerte tradición surfera. Ideal para familias, cuenta con todos los servicios necesarios, accesos cómodos y está rodeada de rutas costeras y espacios naturales.'
    ]
  ],
  'Sopelana' => [
    [
      'playa_name' => 'Playa de Arrietara',
      'archivo_name' => 'playa-de-arrietara-sopelana',
      'presentacion' => '🌿 La Playa de Arrietara, situada en Sopelana (Bizkaia), es una playa popular entre surfistas y familias, con arena fina, buen acceso y servicios. Está rodeada de espacios naturales ideales para pasear y disfrutar de la costa vasca.'
    ]
  ],
  'Plentzia' => [
    [
      'playa_name' => 'Playa de Plentzia',
      'archivo_name' => 'playa-de-plentzia-plentzia',
      'presentacion' => '🌿 La Playa de Plentzia, situada en Bizkaia, es una extensa y tranquila playa de arena fina, perfecta para familias y paseos. Cuenta con servicios completos, fácil acceso y está protegida del oleaje fuerte, ideal para nadar y disfrutar del paisaje natural de la costa vasca.'
    ]
  ],
];

// Pintamos cada localidad y sus playas
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

