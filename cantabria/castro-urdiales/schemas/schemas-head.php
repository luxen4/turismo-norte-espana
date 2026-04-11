<?php

$schemaTitle       = "Castro Urdiales, Cantabria – Turismo en la costa del norte de España";
$schemaDescription = "Descubre Castro Urdiales, en Cantabria: playas, casco histórico, el Castillo de Santa Ana y rutas costeras junto al mar Cantábrico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/castro-urdiales/";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/castro-urdiales/img/castro-urdiales.jpg";

$latitude  = 43.3828;
$longitude = -3.2200;

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
    "addressLocality": "Castro Urdiales",
    "addressRegion": "Cantabria",
    "postalCode": "39700",
    "addressCountry": "ES"
  },
  "containsPlace": [
    {
      "@type": "Beach",
      "name": "Playa de Ostende"
    },
    {
      "@type": "Beach",
      "name": "Playa de Brazomar"
    },
    {
      "@type": "TouristAttraction",
      "name": "Castillo de Santa Ana"
    },
    {
      "@type": "TouristAttraction",
      "name": "Iglesia de Santa María de la Asunción"
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Castro-Urdiales",
    "https://turismodecantabria.com"
  ]
}
</script>