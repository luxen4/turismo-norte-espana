<?php
// Variables para el schema en el cuerpo
$schemaTitle        = $schemaTitle        ?? "Playa de Marbella - Biarritz";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de Marbella en Biarritz: una playa más tranquila y natural, rodeada de acantilados y perfecta para relajarse junto al Atlántico.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/biarritz/lugares-interes/plage-marbella";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/plage-marbella.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Plage Marbella",
    "addressLocality" => "Biarritz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64200",
    "addressCountry"  => "FR"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Beach",
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
    "latitude": 43.4750,
    "longitude": -1.5668
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Playa tranquila y poco masificada",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso por escaleras desde acantilados",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural sin urbanización directa",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas abiertas al Atlántico",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/biarritz"
  ]
}
</script>