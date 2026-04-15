<?php
// Coordenadas aproximadas del Faro de Gorliz
$latitude  = 43.4145;
$longitude = -2.9430;

// Variables para el schema – Faro de Gorliz
$schemaTitle       = "Faro de Gorliz - Gorliz";
$schemaDescription = "Descubre el Faro de Gorliz en Bizkaia: un faro histórico junto al mar, rodeado de acantilados y rutas naturales para disfrutar de vistas espectaculares.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/gorliz/lugares-interes/faro-de-gorliz"; 
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/faro-de-gorliz-1.jpg";           
$schemaAddress     = [
    "@type"            => "PostalAddress",
    "streetAddress"    => "Paseo Marítimo de Gorliz",
    "addressLocality"  => "Gorliz",
    "addressRegion"    => "País Vasco",
    "postalCode"       => "48630",
    "addressCountry"   => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LandmarksOrHistoricalBuildings",
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
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/gorliz"
  ]
}
</script>
