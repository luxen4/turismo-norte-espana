<?php

$schemaTitle       = "Gorliz, Bizkaia – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Gorliz, en Bizkaia: playa familiar, rutas costeras, el Faro de Gorliz y la bahía de Plentzia en la costa del mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/gorliz/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/gorliz/img/gorliz.jpg";

$latitude  = 43.4145;
$longitude = -2.9330;

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
    "addressLocality": "Gorliz",
    "addressRegion": "Bizkaia",
    "postalCode": "48630",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Gorliz"
    },
    {
      "@type": "TouristAttraction",
      "name": "Faro de Gorliz"
    },
    {
      "@type": "TouristAttraction",
      "name": "Ruta del Faro de Gorliz"
    },
    {
      "@type": "TouristAttraction",
      "name": "Bahía de Plentzia"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Gorliz",
    "https://turismo.euskadi.eus"
  ]
}
</script>