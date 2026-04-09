<?php
// Variables reutilizables para Playa de Santiago de Deba en Deba
$schemaTitle        = $schemaTitle        ?? "Playa de Santiago de Deba - Deba";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de Santiago de Deba en Deba, País Vasco: una playa de arena fina con oleaje moderado, perfecta para el baño, paseos y disfrutar de la naturaleza costera.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/deba/lugares-interes/playa-de-santiago-deba";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/playa-de-santiago-deba-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Paseo de Santiago, s/n",
    "addressLocality" => "Deba",
    "addressRegion"   => "País Vasco",
    "postalCode"      => "20730",
    "addressCountry"  => "ES"
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
    "latitude": 43.3071,
    "longitude": -2.3421
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal cómodo",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duchas y papeleras",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aparcamiento cercano limitado",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ideal para baño y paseos",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/deba"
  ]
}
</script>