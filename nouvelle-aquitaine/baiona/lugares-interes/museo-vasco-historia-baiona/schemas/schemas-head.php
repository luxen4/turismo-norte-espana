<?php
$latitude  = 43.4929;
$longitude = -1.4748;

// Variables para el schema – Museo Vasco de la Historia de Baiona
$schemaTitle       = $schemaTitle       ?? "Museo Vasco de la Historia de Baiona";
$schemaDescription = $schemaDescription ?? "Descubre el Museo Vasco de la Historia de Baiona, un espacio cultural dedicado a la historia, tradiciones y patrimonio del País Vasco francés.";
$schemaUrl         = $schemaUrl         ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/baiona/lugares-interes/museo-vasco-historia";
$schemaImage       = $schemaImage       ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/museo-vasco-baiona.jpg";

$schemaAddress     = $schemaAddress ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Museo Vasco de la Historia",
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
      "name": "Exposiciones de historia vasca",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Colecciones culturales y etnográficas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Visitas guiadas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Espacio museístico en el centro histórico",
      "value": true
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Bayona_(Francia)"
  ]
}
</script>