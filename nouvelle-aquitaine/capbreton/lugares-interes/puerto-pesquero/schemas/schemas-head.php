<?php 
$latitude  = 43.64880;  
$longitude = -1.44030; 

// Variables para el schema – Plage Centrale (Capbreton)
$schemaTitle       = "Plage Centrale - Capbreton";
$schemaDescription = "Descubre la Plage Centrale de Capbreton en Nouvelle-Aquitaine, Francia: una playa amplia y familiar, ideal para el baño, el surf y paseos por el paseo marítimo.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/capbreton/lugares-interes/plage-centrale"; // Cambia por la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/plage-centrale-capbreton.jpg";      // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"         => "PostalAddress",
    "streetAddress" => "Plage Centrale",
    "addressLocality" => "Capbreton",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "40130",
    "addressCountry"  => "FR"
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
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/capbreton"
  ]
}
</script>
