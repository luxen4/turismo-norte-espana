<?php
// Variables para el schema en el head
$schemaTitle       = $schemaTitle       ?? "Puerto Deportivo de Hendaya – Ocio y Náutica en la Costa Atlántica";
$schemaDescription = $schemaDescription ?? "Descubre el Puerto Deportivo de Hendaya en Francia: amarre para embarcaciones, actividades náuticas, restaurantes y zonas de paseo con vistas al mar Cantábrico.";
$schemaUrl         = $schemaUrl         ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/hendaya/lugares-interes/puerto-deportivo";
$schemaImage       = $schemaImage       ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/puerto-hendaya.jpg";
$schemaAddress     = $schemaAddress     ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Quai de la Marina, s/n",
    "addressLocality" => "Hendaya",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64700",
    "addressCountry"  => "FR"
];
$latitude  = 43.3731;
$longitude = -1.7962;
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Marina",
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
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Amarre para embarcaciones",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Restaurantes y cafeterías",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zonas de paseo y observación",
      "value": true
    }
  ],
  "isAccessibleForFree": true,
  "keywords": "Puerto Deportivo Hendaya, Hendaya Francia, turismo náutico, paseo marítimo, ocio familiar, costa atlántica, amarre embarcaciones",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $schemaUrl ?>"
  },
  "sameAs": [
    "https://www.tourisme-hendaye.fr/",
    "https://es.wikipedia.org/wiki/Hendaya#Puerto_deportivo"
  ]
}
</script>
