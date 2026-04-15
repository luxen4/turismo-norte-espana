<?php
// Variables reutilizables para Plage Centrale de Capbreton
$schemaTitle        = $schemaTitle        ?? "Plage Centrale - Capbreton";
$schemaDescription  = $schemaDescription  ?? "Descubre la Plage Centrale en Capbreton, Landes: una playa urbana ideal para surfistas, familias y amantes del ambiente costero.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/capbreton/lugares-interes/plage-centrale";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/plage-centrale-capbreton.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Plage Centrale",
    "addressLocality" => "Capbreton",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "40130",
    "addressCountry"  => "FR"
];

// Coordenadas aproximadas de Plage Centrale, Capbreton
$latitude  = 43.6490;
$longitude = -1.3575;
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["Place", "Beach"],
  "name": "<?= htmlspecialchars($schemaTitle, ENT_QUOTES, 'UTF-8') ?>",
  "description": "<?= htmlspecialchars($schemaDescription, ENT_QUOTES, 'UTF-8') ?>",
  "url": "<?= htmlspecialchars($schemaUrl, ENT_QUOTES, 'UTF-8') ?>",
  "image": "<?= htmlspecialchars($schemaImage, ENT_QUOTES, 'UTF-8') ?>",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= htmlspecialchars($schemaUrl, ENT_QUOTES, 'UTF-8') ?>"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= htmlspecialchars($schemaAddress['streetAddress'], ENT_QUOTES, 'UTF-8') ?>",
    "addressLocality": "<?= htmlspecialchars($schemaAddress['addressLocality'], ENT_QUOTES, 'UTF-8') ?>",
    "addressRegion": "<?= htmlspecialchars($schemaAddress['addressRegion'], ENT_QUOTES, 'UTF-8') ?>",
    "postalCode": "<?= htmlspecialchars($schemaAddress['postalCode'], ENT_QUOTES, 'UTF-8') ?>",
    "addressCountry": "<?= htmlspecialchars($schemaAddress['addressCountry'], ENT_QUOTES, 'UTF-8') ?>"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "hasMap": "https://www.google.com/maps?q=<?= $latitude ?>,<?= $longitude ?>",
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
    "https://www.tourisme-capbreton.fr/",
    "https://es.wikipedia.org/wiki/Capbreton"
  ]
}
</script>
