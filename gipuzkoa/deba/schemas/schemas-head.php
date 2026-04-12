<?php

$schemaTitle       = "Deba, Gipuzkoa – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Deba, en Gipuzkoa: playas, acantilados del flysch, rutas costeras y paisajes únicos en la costa del País Vasco.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/deba/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/deba/img/deba.jpg";

$latitude  = 43.2970;
$longitude = -2.3540;

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
    "addressLocality": "Deba",
    "addressRegion": "Gipuzkoa",
    "postalCode": "20820",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Deba"
    },
    {
      "@type": "TouristAttraction",
      "name": "Flysch de Deba"
    },
    {
      "@type": "TouristAttraction",
      "name": "Acantilados de Deba"
    },
    {
      "@type": "TouristAttraction",
      "name": "Casco histórico de Deba"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Deba",
    "https://turismo.euskadi.eus"
  ]
}
</script>