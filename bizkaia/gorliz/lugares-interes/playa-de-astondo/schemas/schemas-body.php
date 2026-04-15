<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Playa de Astondo - Gorliz";
$schemaDescription  = $schemaDescription  ?? "Explora la Playa de Astondo en Gorliz, Bizkaia: un entorno natural tranquilo ideal para quienes buscan relax y paisajes costeros auténticos.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/gorliz/lugares-interes/playa-de-astondo";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/playa-de-astondo-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Zona Astondo, Playa de Astondo",
    "addressLocality" => "Gorliz",
    "addressRegion"   => "País Vasco",
    "postalCode"      => "48630",
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
    "latitude": 43.3750,
    "longitude": -2.9935
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural protegido",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Accesible a pie desde Gorliz",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona tranquila sin urbanización",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/gorliz"
  ]
}
</script>
