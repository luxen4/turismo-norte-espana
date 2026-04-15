<?php
// Variables reutilizables para Parque Natural de los Montes de Triano
$schemaTitle        = $schemaTitle        ?? "Parque Natural de los Montes de Triano";
$schemaDescription  = $schemaDescription  ?? "Visita el Parque Natural de los Montes de Triano en Muskiz, Bizkaia: un espacio natural protegido con rutas de senderismo, flora y fauna autóctona y paisajes de montaña.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz/lugares-interes/parque-natural-montes-triano";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/parque-natural-montes-triano.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Parque Natural de los Montes de Triano",
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
    "latitude": 43.3865,
    "longitude": -3.0420
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Rutas de senderismo",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Flora y fauna autóctona",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Dificultad baja-media",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duración aproximada 1-3 horas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural protegido",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz"
  ]
}
</script>
