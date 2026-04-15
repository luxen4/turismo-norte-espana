<?php
// Variables reutilizables para el Centro de Interpretación de Urdaibai en Ibarrangelu
$schemaTitle        = $schemaTitle        ?? "Centro de Interpretación de Urdaibai - Ibarrangelu";
$schemaDescription  = $schemaDescription  ?? "Visita el Centro de Interpretación de Urdaibai en Ibarrangelu, Bizkaia: un espacio de educación ambiental y observación de aves dentro de la Reserva de la Biosfera de Urdaibai.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/ibarrangelu/lugares-interes/centro-interpretacion-urdaibai";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/centro-interpretacion-urdaibai.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Orueta, s/n",
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
    "latitude": 43.3789,
    "longitude": -2.6501
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Observación de aves",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Exposiciones educativas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Mirador sobre marismas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Centro de visitantes",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso adaptado",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/ibarrangelu",
    "https://www.birdcenter.org"
  ]
}
</script>
