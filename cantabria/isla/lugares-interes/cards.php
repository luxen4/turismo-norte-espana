<!-- Lugares de Interés en Isla -->

<?php
$lugares_interes = [
  [
    'nombre' => 'Playa de los Barcos',
    'slug'   => 'playa-de-los-barcos',
    'imagen' => 'playa-de-los-barcos-isla-cantabria.jpg',
    'alt'    => 'Playa de los Barcos en Isla',
    'fuente' => 'turismodecantabria.com',
    'web_imagen' => 'https://turismodecantabria.com/playas/playa-de-los-barcos/',
    'desc'   => 'Una de las playas más populares de Isla, con arena fina y aguas tranquilas, ideal para familias.',
  ],
  [
    'nombre' => 'Playa del Sable',
    'slug'   => 'playa-del-sable',
    'imagen' => 'playa-del-sable-isla-cantabria.jpg',
    'alt'    => 'Playa del Sable en Isla',
    'fuente' => 'escapadarural.com',
    'web_imagen' => 'https://www.escapadarural.com/que-hacer/isla/playa-del-sable',
    'desc'   => 'Playa urbana con todos los servicios, perfecta para disfrutar de un día completo junto al mar.',
  ],
  [
    'nombre' => 'Playa de Arnadal',
    'slug'   => 'playa-de-arnadal',
    'imagen' => 'playa-de-arnadal-isla-cantabria.jpg',
    'alt'    => 'Playa de Arnadal en Isla',
    'fuente' => 'cantabriarural.com',
    'web_imagen' => 'https://cantabriarural.com/playa-de-arnadal/',
    'desc'   => 'Pequeña cala rodeada de acantilados, perfecta para quienes buscan tranquilidad y naturaleza.',
  ],
  [
    'nombre' => 'Acantilados de Quejo',
    'slug'   => 'acantilados-de-quejo',
    'imagen' => 'acantilados-de-quejo-isla.jpg',
    'alt'    => 'Acantilados de Quejo',
    'fuente' => 'yendoporlavida.com',
    'web_imagen' => 'https://yendoporlavida.com/',
    'desc'   => 'Espectaculares acantilados con vistas al Cantábrico, ideales para paseos y fotografía.',
  ],
  [
    'nombre' => 'Ruta costera de Isla',
    'slug'   => 'ruta-costera-isla',
    'imagen' => 'ruta-costera-isla-cantabria.jpg',
    'alt'    => 'Ruta costera de Isla',
    'fuente' => 'wikiloc.com',
    'web_imagen' => 'https://www.wikiloc.com/',
    'desc'   => 'Ruta perfecta para caminar junto al mar, descubriendo playas, acantilados y paisajes únicos.',
  ]
];
?>

<?php 
$parrafo = "Isla es un destino costero muy completo en Cantabria, con playas para todos los gustos, acantilados espectaculares y rutas junto al mar. Desde la Playa de los Barcos hasta los acantilados de Quejo, ofrece naturaleza, relax y paisajes inolvidables.";
require PATH_RAIZ . '/_estructura/semantica/pages/paginas-localidad/print-cards-lugares-interes.php'; 
?>