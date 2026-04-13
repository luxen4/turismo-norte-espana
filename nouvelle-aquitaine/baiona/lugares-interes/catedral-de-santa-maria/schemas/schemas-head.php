<?php
$latitude  = 43.4929;
$longitude = -1.4748;

// Variables para el schema – Casco antiguo de Baiona
$schemaTitle       = "Casco antiguo de Baiona";
$schemaDescription = "Descubre el casco antiguo de Baiona, un conjunto histórico con calles medievales, murallas y vistas al río Nive en el corazón de la ciudad.";
$schemaUrl         = "https://www.tu-dominio.com/baiona/lugares-interes/casco-antiguo";
$schemaImage       = "https://www.tu-dominio.com/images/casco-antiguo-baiona.jpg";

$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Casco antiguo de Baiona",
    "addressLocality" => "Baiona",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64100",
    "addressCountry"  => "FR"
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
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Calles medievales históricas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Murallas antiguas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas al río Nive",
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