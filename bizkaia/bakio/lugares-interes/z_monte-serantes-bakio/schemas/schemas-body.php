<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Monte Serantes - Bakio";
$schemaDescription  = $schemaDescription  ?? "Explora el Monte Serantes en Bakio, Bizkaia: un enclave natural perfecto para el senderismo, con vistas panorámicas del mar Cantábrico y la costa vasca.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/bakio/lugares-interes/monte-serantes";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/monte-serantes-bakio.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Monte Serantes",
    "addressLocality" => "Bakio",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48130",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
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
    "latitude": 43.3549,
    "longitude": -3.1163
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Rutas de senderismo señalizadas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Miradores panorámicos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Áreas de descanso y naturaleza",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Observación de fauna y flora",
      "value": true
    }
  ],
  "sameAs": [
    "https://turismo.euskadi.eus/es/"
  ]
}
</script>
