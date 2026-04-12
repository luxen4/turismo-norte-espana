<?php

$schemaTitle       = "Bakio, Bizkaia – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Bakio, en Bizkaia: playas, surf, acantilados y el cercano San Juan de Gaztelugatxe en la costa del mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/bakio/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/bakio/img/bakio.jpg";

$latitude  = 43.4282;
$longitude = -2.8093;

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
    "addressLocality": "Bakio",
    "addressRegion": "Bizkaia",
    "postalCode": "48130",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Bakio"
    },
    {
      "@type": "TouristAttraction",
      "name": "San Juan de Gaztelugatxe"
    },
    {
      "@type": "TouristAttraction",
      "name": "Miradores de Bakio"
    },
    {
      "@type": "TouristAttraction",
      "name": "Bodegas de Txakoli"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Bakio",
    "https://turismo.euskadi.eus"
  ]
}
</script>