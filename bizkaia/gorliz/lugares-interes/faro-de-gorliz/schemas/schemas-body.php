<?php
// Variables principales (defínelas antes de incluir este archivo)
$schemaTitle       = $schemaTitle       ?? LUGAR . " - " . LOCALIDAD;
$schemaDescription = $schemaDescription ?? DESCRIPTION;
$schemaUrl         = $schemaUrl         ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/{$LOCALIDAD_MINUSCULA}/lugares-interes/{$LUGAR_MINUSCULA}";
$schemaImage       = $schemaImage       ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/{$LUGAR_MINUSCULA}-1.jpg";
$schemaAddress     = $schemaAddress     ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Zona " . LUGAR,
    "addressLocality" => LOCALIDAD,
    "addressRegion"   => REGION,
    "postalCode"      => "48630",
    "addressCountry"  => "ES"
];
$latitude = $latitude ?? 0;
$longitude = $longitude ?? 0;
$amenityFeature = $amenityFeature ?? [
    [
        "@type" => "LocationFeatureSpecification",
        "name"  => "Entorno natural protegido",
        "value" => true
    ],
    [
        "@type" => "LocationFeatureSpecification",
        "name"  => "Accesible a pie desde " . LOCALIDAD,
        "value" => true
    ],
    [
        "@type" => "LocationFeatureSpecification",
        "name"  => "Zona tranquila sin urbanización",
        "value" => true
    ]
];
?>

<!-- JSON-LD Schema.org estilo Place -->
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
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "amenityFeature": <?= json_encode($amenityFeature, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>,
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/<?= LOCALIDAD_MINUSCULA ?>"
  ]
}
</script>
