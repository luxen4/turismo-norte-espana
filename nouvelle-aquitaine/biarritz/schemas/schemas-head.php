<?php

$schemaTitle       = "Biarritz, Nouvelle-Aquitaine – Turismo en la costa del suroeste de Francia";
$schemaDescription = "Descubre Biarritz, en Nouvelle-Aquitaine: playas atlánticas, surf, acantilados y elegancia costera en uno de los destinos más icónicos del País Vasco francés.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/biarritz/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/biarritz/img/biarritz.jpg";

$latitude  = 43.4832;
$longitude = -1.5586;

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
    "addressLocality": "Biarritz",
    "addressRegion": "Nouvelle-Aquitaine",
    "postalCode": "64200",
    "addressCountry": "FR"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Grande Plage de Biarritz"
    },
    {
      "@type": "TouristAttraction",
      "name": "Rocher de la Vierge"
    },
    {
      "@type": "TouristAttraction",
      "name": "Faro de Biarritz"
    },
    {
      "@type": "TouristAttraction",
      "name": "Cité de l’Océan"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Biarritz",
    "https://www.biarritz.fr"
  ]
}
</script>