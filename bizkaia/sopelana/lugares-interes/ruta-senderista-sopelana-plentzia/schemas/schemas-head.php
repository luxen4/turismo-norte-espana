<?php 

$latitude  = 43.3880;  // Aproximadamente Sopelana, inicio de la ruta
$longitude = -2.9945;  // Aproximadamente Sopelana, inicio de la ruta


// Coordenadas aproximadas (inicio en Sopelana, fin en Plentzia)
$latitudeStart  = 43.3845;   // Sopelana
$longitudeStart = -2.9908;
$latitudeEnd    = 43.4060;   // Plentzia
$longitudeEnd   = -2.9500;

// Variables para el schema – Ruta Senderista
$schemaTitle       = "Ruta Senderista Sopelana - Plentzia";
$schemaDescription = "Ruta costera entre Sopelana y Plentzia: senderismo junto a acantilados, playas y vistas panorámicas del mar Cantábrico, ideal para turismo activo en Bizkaia.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/sopelana/rutas/ruta-sopelana-plentzia";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/ruta-sopelana-plentzia-1.jpg";
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "addressLocality" => "Sopelana",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48600",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Route",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "<?= $schemaAddress['addressLocality'] ?>",
    "addressRegion": "<?= $schemaAddress['addressRegion'] ?>",
    "postalCode": "<?= $schemaAddress['postalCode'] ?>",
    "addressCountry": "<?= $schemaAddress['addressCountry'] ?>"
  },
  "geo": {
    "@type": "GeoShape",
    "line": "<?= $latitudeStart ?>,<?= $longitudeStart ?> <?= $latitudeEnd ?>,<?= $longitudeEnd ?>"
  },
  "touristType": "Senderismo",
  "sameAs": [
    "https://www.sopelana.eus",
    "https://www.plentzia.eus"
  ]
}
</script>
