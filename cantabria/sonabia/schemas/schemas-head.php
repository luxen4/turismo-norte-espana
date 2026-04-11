<?php

$schemaTitle       = "Sonabia, Cantabria – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Sonabia, en Cantabria: una cala salvaje entre acantilados, el Ojo del Diablo y paisajes naturales únicos junto al mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/sonabia/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/sonabia/img/sonabia.jpg";

$latitude  = 43.4135;
$longitude = -3.3832;

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
    "addressLocality": "Sonabia",
    "addressRegion": "Cantabria",
    "postalCode": "39798",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Sonabia"
    },
    {
      "@type": "TouristAttraction",
      "name": "Ojo del Diablo"
    },
    {
      "@type": "TouristAttraction",
      "name": "Acantilados de Sonabia"
    },
    {
      "@type": "TouristAttraction",
      "name": "Punta de Sonabia"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Sonabia",
    "https://turismodecantabria.com"
  ]
}
</script>