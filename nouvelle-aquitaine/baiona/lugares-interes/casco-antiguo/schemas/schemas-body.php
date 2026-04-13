<?php
// Variables para el schema en el cuerpo
$schemaTitle        = $schemaTitle        ?? "Casco antiguo de Baiona";
$schemaDescription  = $schemaDescription  ?? "Descubre el casco antiguo de Baiona, un conjunto histórico medieval con calles empedradas, murallas y encanto vasco-francés junto al Atlántico.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/baiona/lugares-interes/casco-antiguo";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/casco-antiguo-baiona-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type" => "PostalAddress",
    "streetAddress" => "Casco antiguo de Baiona",
    "addressLocality" => "Baiona",
    "addressRegion" => "Nouvelle-Aquitaine",
    "postalCode" => "64100",
    "addressCountry" => "FR"
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
    "latitude": 43.4929,
    "longitude": -1.4748
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Calles medievales empedradas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Murallas históricas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Arquitectura vasco-francesa",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona peatonal turística",
      "value": true
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Bayona_(Francia)"
  ]
}
</script>