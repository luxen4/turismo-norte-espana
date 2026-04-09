<?php
// Variables reutilizables para Ruta Senderista Deba – Zumaia
$schemaTitle        = $schemaTitle        ?? "Ruta Senderista Deba – Zumaia";
$schemaDescription  = $schemaDescription  ?? "Disfruta de la Ruta Senderista Deba – Zumaia, un recorrido costero por el Geoparque de la Costa Vasca con vistas a los acantilados y formaciones de Flysch, ideal para el senderismo y la fotografía de paisajes.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/deba/rutas/ruta-deba-zumaia";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/ruta-deba-zumaia-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Paseo de la Playa, s/n",
    "addressLocality" => "Deba",
    "addressRegion"   => "Gipuzkoa",
    "postalCode"      => "20730",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristRoute",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "startLocation": {
    "@type": "Place",
    "name": "Deba",
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 43.3030,
      "longitude": -2.3510
    }
  },
  "endLocation": {
    "@type": "Place",
    "name": "Zumaia",
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 43.3120,
      "longitude": -2.2680
    }
  },
  "estimatedDuration": "PT3H30M",
  "touristType": "Senderismo",
  "sameAs": [
    "https://es.wikiloc.com/rutas-senderismo/deba-zumaia-12345678",
    "https://www.turismo.euskadi.eus/es/rutas-senderismo/deba-zumaia"
  ]
}
</script>
