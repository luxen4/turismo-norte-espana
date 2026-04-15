<?php
// Variables reutilizables para Playa de Bakio
$schemaTitle        = $schemaTitle        ?? "Playa de Bakio - Bizkaia";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de Bakio en Bizkaia: una extensa playa del litoral vasco, ideal para surfistas, familias y amantes del paisaje atlántico.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/bakio/lugares-interes/playa-de-bakio";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/playa-de-bakio-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Bakio Playa, s/n",
    "addressLocality" => "Bakio",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48130",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["Place", "Beach"],
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
    "latitude": 43.4249,
    "longitude": -2.8075
  },
  "hasMap": "https://www.google.com/maps?q=43.4249,-2.8075",
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona de surf",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso para personas con movilidad reducida",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duchas y vestuarios",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Socorristas en temporada",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aparcamiento cercano",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/bakio"
  ]
}
</script>
