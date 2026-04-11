<?php 
$latitude  = 43.4989;  
$longitude = -3.5672;  

// Variables para el schema – Acantilados de Quejo
$schemaTitle       = "Acantilados de Quejo - Isla";
$schemaDescription = "Descubre los Acantilados de Quejo en Isla, Cantabria: un entorno natural espectacular con vistas al mar Cantábrico, rutas costeras y paisajes salvajes.";
$schemaUrl         = "https://playas2024.kesug.com/turismo-norte-espana/cantabria/isla/lugares-interes/acantilados-de-quejo/index.php";
$schemaImage       = "https://playas2024.kesug.com/turismo-norte-espana/cantabria/isla/lugares-interes/acantilados-de-quejo/img/acantilados-de-quejo-isla-cantabria-1.jpg";

$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Acantilados de Quejo",
    "addressLocality" => "Isla",
    "addressRegion"   => "Cantabria",
    "postalCode"      => "39195",
    "addressCountry"  => "ES"
];
?> 

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Place",
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
    "https://playas2024.kesug.com/turismo-norte-espana/cantabria/isla/index.php"
  ]
}
</script>