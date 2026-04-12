<?php

$schemaTitle       = "Sopelana, Bizkaia – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Sopelana, en Bizkaia: playas salvajes, acantilados espectaculares y uno de los mejores destinos de surf del País Vasco.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/sopelana/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/sopelana/img/sopelana.jpg";

$latitude  = 43.3815;
$longitude = -2.9880;

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
    "addressLocality": "Sopelana",
    "addressRegion": "Bizkaia",
    "postalCode": "48600",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Sopelana"
    },
    {
      "@type": "TouristAttraction",
      "name": "Acantilados de Sopelana"
    },
    {
      "@type": "TouristAttraction",
      "name": "Zonas de surf de Sopelana"
    },
    {
      "@type": "TouristAttraction",
      "name": "Miradores de Sopelana"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Sopelana",
    "https://turismo.euskadi.eus"
  ]
}
</script>