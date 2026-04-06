<?php
// Variables para el schema
$schemaTitle        = $schemaTitle        ?? "Mirador del Cabo - Ajo";
$schemaDescription  = $schemaDescription  ?? "Descubre el Mirador del Cabo en Ajo, Cantabria: un enclave con vistas espectaculares al mar Cantábrico, acantilados y el Faro de Ajo.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/ajo/lugares-interes/mirador-del-cabo";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/mirador-del-cabo-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"            => "PostalAddress",
    "streetAddress"    => "Mirador del Cabo",
    "addressLocality"  => "Ajo",
    "addressRegion"    => "Cantabria",
    "postalCode"       => "39749",
    "addressCountry"   => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Place",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= $schemaAddress['streetAddress'] ?>",
    "addressLocality": "<?= $schemaAddress['addressLocality'] ?>",
    "addressRegion": "<?= $schemaAddress['addressRegion'] ?>",
    "postalCode": "<?= $schemaAddress['postalCode'] ?>",
    "addressCountry": "<?= $schemaAddress['addressCountry'] ?>"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.4980,
    "longitude": -3.6205
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso sencillo a pie",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas panorámicas al mar Cantábrico",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona junto al Faro de Ajo",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ideal para fotografía y atardeceres",
      "value": true
    }
  ],
  "sameAs": [
    "https://playas2024.kesug.com/Blog_Playas2026/cantabria/ajo/index.php"
  ]
}
</script>