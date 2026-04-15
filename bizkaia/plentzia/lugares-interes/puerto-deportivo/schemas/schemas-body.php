<?php
// Variables reutilizables para Puerto Deportivo de Plentzia
$schemaTitle        = $schemaTitle        ?? "Puerto Deportivo de Plentzia - Plentzia";
$schemaDescription  = $schemaDescription  ?? "Descubre el Puerto Deportivo de Plentzia en Bizkaia: paseos por el paseo marítimo, navegación, observación de aves y fotografía de paisajes costeros.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/plentzia/lugares-interes/puerto-deportivo";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/puerto-plentzia-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Puerto Deportivo de Plentzia, s/n",
    "addressLocality" => "Plentzia",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48620",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["Place", "TouristAttraction"],
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $schemaUrl ?>"
  },
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
    "latitude": 43.4492,
    "longitude": -2.9981
  },
  "hasMap": "https://www.google.com/maps?q=43.4492,-2.9981",
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Paseos marítimos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Actividades náuticas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Observación de aves",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Fotografía de paisajes",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/plentzia"
  ]
}
</script>
