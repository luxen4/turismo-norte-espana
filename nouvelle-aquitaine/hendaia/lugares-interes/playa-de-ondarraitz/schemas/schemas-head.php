<?php 

// Variables para el schema – Playa de Ondarraitz (Hendaya)
$schemaTitle       = "Playa de Ondarraitz - Hendaya";
$schemaDescription = "Descubre la Playa de Ondarraitz en Hendaya, Nouvelle-Aquitaine, Francia: un destino ideal para surf, naturaleza y tranquilidad en la costa vasco-francesa.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/hendaya/lugares-interes/playas/ondarraitz";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/ondarraitz-hendaya.jpg";
$schemaAddress     = [
    "@type"         => "PostalAddress",
    "streetAddress" => "Playa de Ondarraitz",
    "addressLocality" => "Hendaya",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64700",
    "addressCountry"  => "FR"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Beach",
  "@id": "<?= htmlspecialchars($schemaUrl) ?>#beach",
  "name": "<?= htmlspecialchars($schemaTitle) ?>",
  "description": "<?= htmlspecialchars($schemaDescription) ?>",
  "url": "<?= htmlspecialchars($schemaUrl) ?>",
  "image": "<?= htmlspecialchars($schemaImage) ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= htmlspecialchars($schemaAddress['streetAddress']) ?>",
    "addressLocality": "<?= htmlspecialchars($schemaAddress['addressLocality']) ?>",
    "addressRegion": "<?= htmlspecialchars($schemaAddress['addressRegion']) ?>",
    "postalCode": "<?= htmlspecialchars($schemaAddress['postalCode']) ?>",
    "addressCountry": "<?= htmlspecialchars($schemaAddress['addressCountry']) ?>"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "isAccessibleForFree": true,
  "touristType": ["Surfistas", "Amantes de la naturaleza", "Tranquilidad"],
  "amenityFeature": [
    { "@type": "LocationFeatureSpecification", "name": "Duchas y servicios", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Acceso peatonal", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Aparcamiento cercano", "value": true }
  ],
  "sameAs": [
    "https://www.tourisme-hendaye.fr/",
    "https://es.wikipedia.org/wiki/Hendaya"
  ]
}
</script>
