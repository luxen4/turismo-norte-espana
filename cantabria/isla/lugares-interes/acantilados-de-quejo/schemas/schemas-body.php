<?php
// Variables para el schema en el cuerpo
$schemaTitle        = $schemaTitle        ?? "Acantilados de Quejo - Isla, Cantabria";
$schemaDescription  = $schemaDescription  ?? "Descubre los Acantilados de Quejo en Isla, Cantabria: un entorno natural de acantilados, rutas costeras y vistas espectaculares al mar Cantábrico.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/isla/lugares-interes/acantilados-de-quejo/";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/acantilados-de-quejo-isla.jpg";

$schemaAddress      = $schemaAddress      ?? [
    "@type" => "PostalAddress",
    "streetAddress" => "Acantilados de Quejo",
    "addressLocality" => "Isla (Arnuero)",
    "addressRegion" => "Cantabria",
    "postalCode" => "39195",
    "addressCountry" => "ES"
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
    "latitude": 43.4989,
    "longitude": -3.5672
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Senderos costeros señalizados",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas panorámicas al mar Cantábrico",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural de acantilados",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal desde Isla",
      "value": true
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Isla_(Arnuero)",
    "https://turismodecantabria.com"
  ]
}
</script>