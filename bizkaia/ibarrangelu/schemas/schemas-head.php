<?php

$schemaTitle       = "Ibarrangelu, Bizkaia – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Ibarrangelu, en Bizkaia: playas salvajes como Laga y Laida, naturaleza en la Reserva de Urdaibai y paisajes únicos junto al mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/ibarrangelu/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/ibarrangelu/img/ibarrangelu.jpg";

$latitude  = 43.3980;
$longitude = -2.6880;

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
    "addressLocality": "Ibarrangelu",
    "addressRegion": "Bizkaia",
    "postalCode": "48311",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Laga"
    },
    {
      "@type": "Beach",
      "name": "Playa de Laida"
    },
    {
      "@type": "TouristAttraction",
      "name": "Reserva de la Biosfera de Urdaibai"
    },
    {
      "@type": "TouristAttraction",
      "name": "Miradores de Ibarrangelu"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Ibarrangelu",
    "https://turismo.euskadi.eus"
  ]
}
</script>