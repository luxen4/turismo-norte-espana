<?php

$schemaTitle       = "Plentzia, Bizkaia – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Plentzia, en Bizkaia: playa, casco histórico, bahía y puerto en un entorno tranquilo junto al mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/plentzia/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/plentzia/img/plentzia.jpg";

$latitude  = 43.4040;
$longitude = -2.9500;

?>

<!-- Schema.org JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristDestination",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Plentzia",
    "addressRegion": "Bizkaia",
    "postalCode": "48620",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Plentzia"
    },
    {
      "@type": "TouristAttraction",
      "name": "Casco histórico de Plentzia"
    },
    {
      "@type": "TouristAttraction",
      "name": "Bahía de Plentzia"
    },
    {
      "@type": "TouristAttraction",
      "name": "Puerto de Plentzia"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Plentzia",
    "https://turismo.euskadi.eus"
  ]
}
</script>