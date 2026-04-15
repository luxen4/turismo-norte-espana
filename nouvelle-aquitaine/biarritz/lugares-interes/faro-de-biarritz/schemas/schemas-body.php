<?php
// Variables para el schema en el cuerpo
$schemaTitle        = $schemaTitle        ?? "Faro de Biarritz";
$schemaDescription  = $schemaDescription  ?? "Descubre el Faro de Biarritz en la Pointe Saint-Martin: un mirador histórico con vistas panorámicas espectaculares del Atlántico y la costa vasco-francesa.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/biarritz/lugares-interes/faro-de-biarritz";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/faro-de-biarritz.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Pointe Saint-Martin",
    "addressLocality" => "Biarritz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64200",
    "addressCountry"  => "FR"
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
    "latitude": 43.4995,
    "longitude": -1.5660
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Mirador panorámico",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso a pie con escaleras",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona de acantilados",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Punto histórico de navegación",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/biarritz"
  ]
}
</script>