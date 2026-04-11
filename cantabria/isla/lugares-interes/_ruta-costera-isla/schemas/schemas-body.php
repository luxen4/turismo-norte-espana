<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Playa de Cuberris - Ajo";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de Cuberris en Ajo, Cantabria: una playa de arena dorada popular para el surf, rodeada de un entorno natural protegido.";
$schemaUrl          = $schemaUrl          ?? "https://playas2024.kesug.com/turismo-norte-espana/cantabria/ajo/lugares-interes/playa-de-cuberris/index.php";
$schemaImage        = $schemaImage        ?? "https://playas2024.kesug.com/turismo-norte-espana/cantabria/ajo/lugares-interes/playa-de-cuberris/img/playa-de-cuberris-ajo-cantabria-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"         => "PostalAddress",
    "streetAddress" => "Playa de Cuberris",
    "addressLocality" => "Ajo",
    "addressRegion"   => "Cantabria",
    "postalCode"      => "39749",
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
    "latitude": 43.5210,
    "longitude": -3.7590
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duchas públicas disponibles",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aparcamiento junto a la playa",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Chiringuito en temporada alta",
      "value": true
    }
  ],
  "sameAs": [
    "https://playas2024.kesug.com/turismo-norte-espana/cantabria/ajo/index.php"
  ]
}
</script>

