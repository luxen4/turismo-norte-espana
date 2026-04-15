<?php
// Variables reutilizables para Playa de Laga en Ibarrangelu
$schemaTitle        = $schemaTitle        ?? "Playa de Laga - Ibarrangelu";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de Laga en Ibarrangelu, Bizkaia: una playa virgen dentro de la Reserva de Urdaibai, ideal para el surf, el senderismo y disfrutar de la naturaleza del País Vasco.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/ibarrangelu/lugares-interes/playa-de-laga";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/playa-de-laga.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Barrio Laga, s/n",
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
    "latitude": 43.4229,
    "longitude": -2.6503
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aparcamiento cercano",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural protegido (Urdaibai)",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ideal para surfistas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zonas de picnic próximas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Servicios en temporada (duchas, socorristas)",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/ibarrangelu"
  ]
}
</script>
