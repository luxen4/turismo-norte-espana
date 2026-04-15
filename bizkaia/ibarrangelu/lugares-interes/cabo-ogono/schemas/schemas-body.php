<?php
// Variables reutilizables para Cabo Ogoño en Ibarrangelu
$schemaTitle        = $schemaTitle        ?? "Cabo Ogoño - Ibarrangelu";
$schemaDescription  = $schemaDescription  ?? "Explora el Cabo Ogoño en Ibarrangelu, Bizkaia: un espectacular acantilado dentro de la Reserva de Urdaibai, ideal para senderismo, fotografía y disfrutar de vistas panorámicas únicas del Cantábrico.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/ibarrangelu/lugares-interes/cabo-ogono";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/cabo-ogono.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Cabo Ogoño, s/n",
    "addressLocality" => "Ibarrangelu",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48311",
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
    "latitude": 43.4244,
    "longitude": -2.6528
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ruta de senderismo",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Miradores con vistas panorámicas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ideal para fotografía",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural protegido (Urdaibai)",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso desde Playa de Laga",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/ibarrangelu"
  ]
}
</script>
