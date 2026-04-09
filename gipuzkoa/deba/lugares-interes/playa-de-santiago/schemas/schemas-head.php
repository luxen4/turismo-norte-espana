<?php 
$latitude  = 43.30710;  
$longitude = -2.34210; 

// Variables para el schema – Playa de Santiago de Deba
$schemaTitle       = "Playa de Santiago de Deba - Deba";
$schemaDescription = "Descubre la Playa de Santiago de Deba en Deba, País Vasco: una playa de arena fina con oleaje moderado, perfecta para el baño, paseos y disfrutar de la naturaleza costera.";
$schemaUrl         = "https://www.tu-dominio.com/deba/lugares-interes/playa-de-santiago-deba"; // Sustituye por tu URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-santiago-deba-1.jpg";          // Sustituye por la imagen real
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Paseo de Santiago, s/n",
    "addressLocality" => "Deba",
    "addressRegion"   => "País Vasco",
    "postalCode"      => "20730",
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
    "https://www.tu-dominio.com/deba"
  ]
}
</script>

