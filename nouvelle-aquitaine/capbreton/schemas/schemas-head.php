<?php

$schemaTitle       = "Capbreton, Nouvelle-Aquitaine – Turismo en la costa atlántica de Francia";
$schemaDescription = "Descubre Capbreton, en Nouvelle-Aquitaine: playas atlánticas, surf, puerto pesquero y naturaleza en la costa suroeste de Francia.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/capbreton/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/capbreton/img/capbreton.jpg";

$latitude  = 43.6427;
$longitude = -1.4337;

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
    "addressLocality": "Capbreton",
    "addressRegion": "Nouvelle-Aquitaine",
    "postalCode": "40130",
    "addressCountry": "FR"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa Centrale de Capbreton"
    },
    {
      "@type": "TouristAttraction",
      "name": "Puerto de Capbreton"
    },
    {
      "@type": "TouristAttraction",
      "name": "Estacade de Capbreton"
    },
    {
      "@type": "TouristAttraction",
      "name": "Plage de la Savane"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Capbreton",
    "https://www.capbreton.fr"
  ]
}
</script>