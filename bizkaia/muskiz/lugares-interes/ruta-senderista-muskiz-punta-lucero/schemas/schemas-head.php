<?php 
$latitudeStart  = 43.38120;  // Coordenadas aprox. inicio de la ruta en Muskiz
$longitudeStart = -3.03850; 

$latitudeEnd    = 43.38390;  // Coordenadas aprox. Punta Lucero (final)
$longitudeEnd   = -3.04120; 

// Variables para el schema – Ruta senderista Muskiz - Punta Lucero
$schemaTitle       = "Ruta Senderista Muskiz - Punta Lucero";
$schemaDescription = "Recorre la ruta senderista que va desde Muskiz hasta Punta Lucero, Bizkaia: un itinerario espectacular con vistas al Cantábrico, acantilados y naturaleza en estado puro en la costa vasca.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz/lugares-interes/ruta-senderista-punta-lucero"; 
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/ruta-muskiz-punta-lucero.jpg"; 
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Muskiz - Punta Lucero",
    "addressLocality" => "Muskiz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48500",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HikingTrail",
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
      "name": "Punto final",
      "value": "Latitud: <?= $latitudeEnd ?>, Longitud: <?= $longitudeEnd ?>"
    },
    {
      "@type": "PropertyValue",
      "name": "Dificultad",
      "value": "Media"
    },
    {
      "@type": "PropertyValue",
      "name": "Duración aproximada",
      "value": "2-3 horas (ida y vuelta)"
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz"
  ]
}
</script>
