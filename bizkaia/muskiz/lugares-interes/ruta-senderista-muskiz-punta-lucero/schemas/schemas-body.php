<?php
// Variables reutilizables para Ruta Muskiz – Punta Lucero
$schemaTitle        = $schemaTitle        ?? "Ruta senderista Muskiz - Punta Lucero";
$schemaDescription  = $schemaDescription  ?? "Recorre la ruta senderista que va desde Muskiz hasta Punta Lucero, Bizkaia: un itinerario con vistas al Cantábrico, acantilados y naturaleza en estado puro en la costa vasca.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz/lugares-interes/ruta-senderista-punta-lucero";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/ruta-muskiz-punta-lucero.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Muskiz - Punta Lucero",
    "addressLocality" => "Muskiz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48500",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HikingTrail",
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
    "latitude": 43.3812,
    "longitude": -3.0385
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Inicio en Muskiz",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Final en Punta Lucero",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Dificultad media",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duración aproximada 2-3 horas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural protegido (costa vasca)",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz"
  ]
}
</script>
