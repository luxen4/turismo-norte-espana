<?php 
$latitude  = 43.29850;  
$longitude = -2.35400; 

// Variables para el schema – Mirador de Sorginetxe en Deba
$schemaTitle       = "Mirador de Sorginetxe - Deba";
$schemaDescription = "Descubre el Mirador de Sorginetxe en Deba, Gipuzkoa: un balcón natural con espectaculares vistas a los acantilados y al mar Cantábrico, ideal para senderismo, naturaleza y fotografía panorámica.";
$schemaUrl         = "https://www.tu-dominio.com/deba/lugares-interes/mirador-sorginetxe"; // Sustituye por tu URL real
$schemaImage       = "https://www.tu-dominio.com/images/mirador-sorginetxe-deba.jpg";      // Sustituye por la imagen real
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Barrio Itziar, s/n",
    "addressLocality" => "Deba",
    "addressRegion"   => "Gipuzkoa",
    "postalCode"      => "20730",
    "addressCountry"  => "ES"
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
    "https://turismo.euskadi.eus/es/mirador-de-sorginetxe-deba/",
    "https://es.wikiloc.com/rutas-senderismo/deba-mirador-de-sorginetxe-12345678"
  ]
}
</script>
