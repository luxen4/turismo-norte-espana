<?php 
$latitude  = 43.4980;  
$longitude = -3.6205;  

// Variables para el schema – Mirador del Cabo
$schemaTitle       = "Mirador del Cabo - Ajo";
$schemaDescription = "Descubre el Mirador del Cabo en Ajo, Cantabria: un enclave con vistas espectaculares al mar Cantábrico, acantilados y el Faro de Ajo.";
$schemaUrl         = "https://playas2024.kesug.com/Blog_Playas2026/cantabria/ajo/lugares-interes/mirador-del-cabo/index.php";
$schemaImage       = "https://playas2024.kesug.com/Blog_Playas2026/cantabria/ajo/lugares-interes/mirador-del-cabo/img/mirador-del-cabo-ajo-cantabria-1.jpg";

$schemaAddress     = [
    "@type"            => "PostalAddress",
    "streetAddress"    => "Mirador del Cabo",
    "addressLocality"  => "Ajo",
    "addressRegion"    => "Cantabria",
    "postalCode"       => "39749",
    "addressCountry"   => "ES"
];
?> 

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
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
    "<?= $schemaUrl ?>"
  ]
}
</script>