<?php
$targeta = PATH_RAIZ_LOCALIDADES . '/index.php';
$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_sneakers.php';

$region = 'Cantabria';
$region_minuscula = strtolower($region);
?>

<h2 id="<?= $region_minuscula; ?>" 
    class="text-2xl md:text-3xl font-bold text-center text-<?= COLOR_PAGE; ?>-800 mb-6">
    <?= $region; ?>
</h2>

<?php
// Definimos todas las localidades con sus playas
$localidades = [
  'Ajo' => [
    [
      'nombre' => 'Playa de Cuberris',
      'archivo' => 'playa-de-cuberris-ajo',
      'presentacion' => '🌊 La Playa de Cuberris, situada en Ajo, Cantabria, 
        es una extensa playa de arena dorada abierta al mar Cantábrico. Popular entre surfistas y bañistas,
        combina un entorno natural con servicios básicos de temporada como duchas y vigilancia. Rodeada de acantilados y con fácil acceso,
        ofrece un equilibrio perfecto entre comodidad y naturaleza.'
    ],
    [
      'nombre' => 'Playa de Antuerta',
      'archivo' => 'playa-de-antuerta-ajo',
      'presentacion' => '🌊 La Playa de Antuerta, ubicada en Ajo, Cantabria, 
        es una playa salvaje y tranquila, ideal para los amantes de la naturaleza y los paisajes vírgenes. 
        Aunque carece de servicios masivos, su belleza natural compensa cualquier carencia de infraestructuras.'
    ],
  ],
  'Castro-Urdiales' => [
    [
      'nombre' => 'Playa de Ostende',
      'archivo' => 'playa-de-ostende-castro-urdiales',
      'presentacion' => '🌊 La Playa de Ostende es una de las joyas de Castro Urdiales. Con su amplia extensión de arena dorada y aguas tranquilas,
        es ideal para disfrutar del sol y actividades acuáticas. Rodeada de acantilados y zonas verdes, destaca por sus servicios y ambiente familiar.'
    ]
  ],
  'Santoña' => [
    [
      'nombre' => 'Playa de Berria',
      'archivo' => 'playa-de-berria-santona',
      'presentacion' => '🌊 La Playa de Berria, ubicada en Santoña, es una extensa franja de arena dorada entre el monte Brusco y el Buciero.
        Ideal para surf y paseos, rodeada de marismas protegidas y con servicios completos.'
    ]
    ],
  'Sonabia' => [
    [
      'nombre' => 'Playa de Valdearenas',
      'archivo' => 'playa-de-valdearenas-sonabia',
      'presentacion' => '🌊 La Playa de Valdearenas, en el extremo oriental de Cantabria, es una playa virgen de arena fina rodeada de acantilados.
        Perfecta para quienes buscan tranquilidad y un paisaje natural impresionante.'
    ]
  ]
];
   include PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/print-sumario-generico.php'; ?>



<?php /*
$localidad_minuscula = 'playadesomoloredo';
$playa_name = 'Playa de Somo';
$localidad = 'Playa de Somo';
$archivo_name = 'somo-loredo-somo';
$presentacion = 'Somo es una popular localidad costera situada en Cantabria, al norte de España. Conocida por su extensa playa de arena dorada, la Playa de Somo es un destino destacado para los amantes del surf y las actividades acuáticas. Esta playa ofrece un ambiente vibrante y una amplia gama de servicios, incluyendo restaurantes, bares y tiendas. Además de su atractivo costero, Somo cuenta con un entorno natural impresionante, con vistas al Mar Cantábrico y a la ciudad de Santander. Es el lugar perfecto para disfrutar de la playa, el sol y una rica gastronomía basada en productos frescos del mar.';
$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_shorts_hombre.php';
include $targeta; */
?>

<?php 
/*
$localidad_minuscula = 'playadenoja';
$playa_name = 'Playa de Noja';
$localidad = 'Playa de Noja';
$archivo_name = 'noja';
$presentacion = 'Noja es un encantador municipio costero situado en la región de Cantabria, al norte de España. Conocido por sus hermosas playas de arena fina, como Playa de Ris y Playa de Trengandín, Noja es un popular destino turístico, especialmente en verano. Además de su atractivo natural, la localidad cuenta con un rico patrimonio cultural, que incluye iglesias históricas y palacetes, así como una oferta gastronómica que destaca por los mariscos y pescados frescos. 
                Es un lugar ideal para disfrutar de la naturaleza, el mar, y la tranquilidad en un entorno pintoresco.';
$publicidad = './bloques/estructura/sections_generico/Carruseles_CSV/prueba_vaqueros_hombre.php';
include $targeta; */?>

<?php /*
$localidad_minuscula = 'playadeberria';
$playa_name = 'Playa de Berria';
$localidad = 'Playa de Berria';
$archivo_name = 'berria-santona';
$presentacion = 'La Playa de Berria, ubicada en Santona, Cantabria, es un hermoso tramo de arena dorada que se extiende por casi 2 kilómetros entre el Monte Buciero y el estuario de Treto. Con sus aguas cristalinas y su entorno natural protegido, es un destino perfecto para quienes buscan disfrutar del surf, paseos relajantes, o simplemente conectar con la naturaleza.<br>Esta playa, de gran valor ecológico, es un paraíso tanto para los amantes del mar como para aquellos que buscan un rincón tranquilo en la costa cantábrica.';
include $targeta; */?>


<?php /*
$localidad_minuscula = 'playadelaredo';
$playa_name = 'Playa de Laredo';
$localidad = 'Playa de Laredo';
$archivo_name = 'laredo';
$presentacion = 'La Playa de Laredo, también conocida como La Salvé, es una de las joyas de la costa cántabra. Con sus más de 4 kilómetros de arena fina y dorada, es el destino perfecto para disfrutar del sol, el mar y actividades al aire libre. Esta amplia playa ofrece un entorno ideal tanto para familias como para amantes de los deportes acuáticos, con su mar tranquilo y un paseo marítimo lleno de vida.<br> Ven y descubre por qué la Playa de Laredo es uno de los destinos más apreciados del norte de España.';
include $targeta; */?>

<?php /*
$localidad_minuscula = 'playadeisla';
$playa_name = 'Playa de Isla';
$localidad = 'Playa de Isla';
$archivo_name = 'isla';
$presentacion = 'La Playa de Isla, ubicada en la encantadora localidad de Isla en Cantabria, es un paraíso natural que combina belleza y tranquilidad. Con su extensa franja de arena dorada y aguas cristalinas, es el lugar ideal para relajarse y disfrutar del sol. Su entorno virgen, rodeado de dunas y vegetación, ofrece un refugio perfecto para quienes buscan escapar del bullicio. Ideal tanto para familias como para los amantes de la naturaleza, la Playa de Isla es un destino que promete unas vacaciones inolvidables.';
include $targeta; */?>


<?php /*
$localidad_minuscula = 'playadesuances';
$playa_name = 'Playa de Suances';
$localidad = 'Playa de Suances';
$archivo_name = 'suances';
$presentacion = 'La Playa de Suances, situada en el corazón de Cantabria, es un rincón costero que combina la belleza natural con un ambiente acogedor.<br> Conocida por su arena dorada y sus aguas limpias, esta playa es un destino perfecto para disfrutar de un día en familia o practicar deportes acuáticos. Rodeada de impresionantes paisajes y con un paseo marítimo lleno de vida, Suances ofrece una experiencia costera única, donde la tranquilidad y la diversión se encuentran a partes iguales.';
include 'index.php'; */?>

<?php  /*
$localidad_minuscula = 'playadesardinero';
$playa_name = 'Playa del Sardinero, Santander';
$localidad = 'Playa del Sardinero, Santander';
$archivo_name = 'playa-de-sardinero';
$presentacion = 'La Playa de Santander, ubicada en la ciudad del mismo nombre en Cantabria, es una de las playas urbanas más emblemáticas del norte de España. Con su extensa franja de arena dorada y aguas tranquilas, es el lugar ideal para disfrutar de un día de sol y mar. Además de su belleza natural, ofrece un vibrante paseo marítimo con una variedad de restaurantes, bares y tiendas. Perfecta para familias, bañistas y quienes buscan disfrutar del surf, la Playa de Santander combina el encanto de una playa clásica con la comodidad de la proximidad urbana.';
include 'index.php'; */?>

<?php
/*
$localidad_minuscula = 'castrourdiales';
$playa_name = 'Castro Urdiales';
$localidad = 'Castro Urdiales';
$archivo_name = 'playa-de-castrourdiales';
$presentacion = 'La realidad histórica es que Castro Urdiales tiene una fundación romana documentada en el año 74 a.C.,
                  cuando fue establecida como "Flaviobriga" por el emperador Vespasiano. Esta ciudad romana se convirtió
                  en un importante puerto y centro comercial debido a su estratégica ubicación costera.'; 
include 'index.php';*/?>




