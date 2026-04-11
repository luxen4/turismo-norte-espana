<?php

$schemaTitle       = "Isla, Cantabria – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Isla, en Cantabria: playas como el Sable o Los Barcos, acantilados y paisajes naturales en la costa del mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/isla/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/isla/img/isla-cantabria.jpg";

$latitude  = 43.4995;
$longitude = -3.5675;

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
    "addressLocality": "Isla",
    "addressRegion": "Cantabria",
    "postalCode": "39195",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de los Barcos"
    },
    {
      "@type": "Beach",
      "name": "Playa del Sable"
    },
    {
      "@type": "Beach",
      "name": "Playa de Arnadal"
    },
    {
      "@type": "TouristAttraction",
      "name": "Acantilados de Quejo"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Isla_(Arnuero)",
    "https://turismodecantabria.com"
  ]
}
</script>