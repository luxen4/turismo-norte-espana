<?php 
$latitudeStart  = 43.38650;  // Coordenadas aprox. inicio del Parque Natural de los Montes de Triano
$longitudeStart = -3.04200; 

$latitudeEnd    = 43.38900;  // Coordenadas aprox. final del recorrido dentro del parque
$longitudeEnd   = -3.04450; 

// Variables para el schema – Parque Natural de los Montes de Triano
$schemaTitle       = "Parque Natural de los Montes de Triano";
$schemaDescription = "Visita el Parque Natural de los Montes de Triano en Muskiz, Bizkaia: espacio natural protegido con rutas de senderismo, flora y fauna autóctona, y vistas a paisajes de montaña.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz/lugares-interes/parque-natural-montes-triano"; 
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/parque-natural-montes-triano.jpg"; 
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Parque Natural de los Montes de Triano",
    "addressLocality" => "Muskiz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48500",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Park",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= $schemaAddress['streetAddress'] ?>",
    "addressLocality": "<?= $schemaAddress['addressLocality'] ?>",
    "addressRegion": "<?= $schemaAddress['addressRegion'] ?>",
    "postalCode": "<?= $schemaAddress['postalCode'] ?>",
    "addressCountry": "<?= $schemaAddress['addressCountry'] ?>"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitudeStart ?>,
    "longitude": <?= $longitudeStart ?>
  },
  "additionalProperty": [
    {
      "@type": "PropertyValue",
      "name": "Punto final recomendado",
      "value": "Latitud: <?= $latitudeEnd ?>, Longitud: <?= $longitudeEnd ?>"
    },
    {
      "@type": "PropertyValue",
      "name": "Dificultad",
      "value": "Baja-Media"
    },
    {
      "@type": "PropertyValue",
      "name": "Duración aproximada",
      "value": "1-3 horas"
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz"
  ]
}
</script>
