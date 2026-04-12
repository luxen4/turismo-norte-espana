<?php

$schemaTitle       = "Baiona, Nouvelle-Aquitaine – Turismo en la costa del suroeste de Francia";
$schemaDescription = "Descubre Baiona, en Nouvelle-Aquitaine: casco histórico, río Nive, arquitectura vasco-francesa y su encanto junto al Atlántico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/baiona/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/baiona/img/baiona.jpg";

$latitude  = 43.4929;
$longitude = -1.4748;

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
    "addressLocality": "Baiona",
    "addressRegion": "Nouvelle-Aquitaine",
    "postalCode": "64100",
    "addressCountry": "FR"
  },
  "containsPlace": [
    {
      "@type": "TouristAttraction",
      "name": "Casco histórico de Baiona"
    },
    {
      "@type": "TouristAttraction",
      "name": "Río Nive"
    },
    {
      "@type": "TouristAttraction",
      "name": "Catedral de Santa María de Baiona"
    },
    {
      "@type": "TouristAttraction",
      "name": "Murallas de Baiona"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Bayona_(Francia)",
    "https://www.tourisme-bayonne.com"
  ]
}
</script>