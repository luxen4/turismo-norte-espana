<?php

$schemaTitle       = "Santoña, Cantabria – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Santoña, en Cantabria: marismas, playas, el Monte Buciero y el Faro del Caballo en un entorno natural único junto al mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/santona/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/santona/img/santona.jpg";

$latitude  = 43.4423;
$longitude = -3.4579;

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
    "addressLocality": "Santoña",
    "addressRegion": "Cantabria",
    "postalCode": "39740",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Berria"
    },
    {
      "@type": "TouristAttraction",
      "name": "Faro del Caballo"
    },
    {
      "@type": "TouristAttraction",
      "name": "Monte Buciero"
    },
    {
      "@type": "TouristAttraction",
      "name": "Marismas de Santoña"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Santo%C3%B1a",
    "https://turismodecantabria.com"
  ]
}
</script>