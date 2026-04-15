<?php 
$latitude  = 43.4969130559984;  
$longitude = -3.615244330066511; 

// Variables para el schema – Playa de Cuberris
$schemaTitle       = "Playa de Cuberris - Ajo";
$schemaDescription = "Descubre la Playa de Cuberris en Ajo, Cantabria: una playa de arena dorada popular para el surf, rodeada de un entorno natural protegido.";
$schemaUrl         = "https://playas2024.kesug.com/turismo-norte-espana/cantabria/ajo/index.php"; // Cambia por la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/playa-de-cuberris-1.jpg";       // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"         => "PostalAddress",
    "streetAddress" => "Playa de Cuberris",
    "addressLocality" => "Ajo",
    "addressRegion"   => "Cantabria",
    "postalCode"      => "39749",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Beach",
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
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/ajo"
  ]
}
</script>
