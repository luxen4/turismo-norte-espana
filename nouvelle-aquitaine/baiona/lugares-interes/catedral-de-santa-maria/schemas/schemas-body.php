<?php
$schemaTitle       = $schemaTitle       ?? "Catedral de Santa María de Baiona";
$schemaDescription = $schemaDescription ?? "Descubre la Catedral de Santa María de Baiona, un emblemático templo gótico con vistas al casco histórico y al río Nive, en el corazón de la ciudad.";
$schemaUrl         = $schemaUrl         ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/baiona/lugares-interes/catedral-santa-maria";
$schemaImage       = $schemaImage       ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/catedral-santa-maria-baiona.jpg";

$schemaAddress     = $schemaAddress ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Catedral de Santa María",
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
    "latitude": 43.4929,
    "longitude": -1.4748
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Patrimonio histórico gótico",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas al casco antiguo",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso a pie desde el centro histórico",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno cultural y turístico",
      "value": true
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Bayona_(Francia)"
  ]
}
</script>