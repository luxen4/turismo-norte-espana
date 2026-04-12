<?php

$schemaTitle       = "Muskiz, Bizkaia – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Muskiz, en Bizkaia: Playa de La Arena, acantilados, la ría del Barbadún y naturaleza entre mar e industria en la costa del Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/muskiz/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/muskiz/img/muskiz.jpg";

$latitude  = 43.3195;
$longitude = -3.1170;

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
    "addressLocality": "Muskiz",
    "addressRegion": "Bizkaia",
    "postalCode": "48550",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de La Arena"
    },
    {
      "@type": "TouristAttraction",
      "name": "Ría del Barbadún"
    },
    {
      "@type": "TouristAttraction",
      "name": "Acantilados de Muskiz"
    },
    {
      "@type": "TouristAttraction",
      "name": "Puerto de La Arena"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Muskiz",
    "https://turismo.euskadi.eus"
  ]
}
</script>