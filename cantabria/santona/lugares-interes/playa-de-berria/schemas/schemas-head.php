<?php 
$latitude  = 43.4167;  
$longitude = -3.4533; 

// Variables para el schema – Playa de Berria
$schemaTitle       = "Playa de Berria - Santona";
$schemaDescription = "Descubre la Playa de Berria en Santona, Cantabria: una extensa playa de más de 2 km de arena fina junto a las marismas del río Asón, ideal para el surf, el baño y el senderismo costero.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/santona/lugares-interes/playa-de-berria"; // Cambia por la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/playa-de-berria-1.jpg";         // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Playa de Berria",
    "addressLocality" => "Santona",
    "addressRegion"   => "Cantabria",
    "postalCode"      => "39740",
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
    "https://www.turismosantona.net"
  ]
}
</script>
