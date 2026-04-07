<?php

$schemaTitle       = "Ajo, Cantabria – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Ajo, en Cantabria: playas, acantilados, el Faro de Ajo y naturaleza en estado puro en la costa del mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/ajo/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/ajo/img/ajo-cantabria.jpg";

$latitude  = 43.4930;
$longitude = -3.6080;

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
    "addressLocality": "Ajo",
    "addressRegion": "Cantabria",
    "postalCode": "39170",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Antuerta"
    },
    {
      "@type": "Beach",
      "name": "Playa de Cuberris"
    },
    {
      "@type": "TouristAttraction",
      "name": "Mirador del Cabo"
    },
    {
      "@type": "TouristAttraction",
      "name": "Faro de Ajo"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Ajo_(Cantabria)",
    "https://turismodecantabria.com"
  ]
}
</script>