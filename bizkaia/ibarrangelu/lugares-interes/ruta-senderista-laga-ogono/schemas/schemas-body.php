<?php
// Variables reutilizables para Ruta Laga – Ogoño en Ibarrangelu
$schemaTitle        = $schemaTitle        ?? "Ruta senderista Laga - Ogoño - Ibarrangelu";
$schemaDescription  = $schemaDescription  ?? "Recorre la ruta senderista que une la Playa de Laga con el Cabo Ogoño en Ibarrangelu, Bizkaia: un itinerario espectacular dentro de la Reserva de Urdaibai, con acantilados, vistas al Cantábrico y naturaleza en estado puro.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/ibarrangelu/lugares-interes/ruta-senderista-laga-ogono";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/ruta-laga-ogono.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Playa de Laga - Cabo Ogoño",
    "addressLocality" => "Ibarrangelu",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48311",
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
    "latitude": 43.4229,
    "longitude": -2.6503
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Inicio en Playa de Laga",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Final en Cabo Ogoño",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Dificultad media",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duración aproximada 2 horas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural protegido (Urdaibai)",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/ibarrangelu"
  ]
}
</script>
