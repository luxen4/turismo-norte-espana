<?php
// Variables reutilizables para ZEC Ordunte KBE (ajusta valores según el lugar)
$schemaTitle        = $schemaTitle        ?? "ZEC Ordunte KBE";
$schemaDescription  = $schemaDescription  ?? "Descubre la ZEC Ordunte KBE: un espacio natural protegido entre Bizkaia y Burgos, con gran biodiversidad, rutas de montaña, flora y fauna autóctona.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz/lugares-interes/zec-ordunte-kbe";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/zec-ordunte-kbe.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "ZEC Ordunte KBE",
    "addressLocality" => "Muskiz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48500",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Park",
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
    "latitude": 43.1200,
    "longitude": -3.2000
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Rutas de montaña",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Bosques y humedales",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Fauna protegida",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Paisajes panorámicos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona Especial de Conservación",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz"
  ]
}
</script>
