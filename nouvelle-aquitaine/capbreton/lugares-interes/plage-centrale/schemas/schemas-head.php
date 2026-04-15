<?php 
$latitude  = 43.6556;   // Coordenadas aproximadas de Plage Centrale, Capbreton
$longitude = -1.3683; 

// Variables para el schema
$schemaTitle       = "Plage Centrale - Capbreton";
$schemaDescription = "Descubre la Plage Centrale en Capbreton, Nouvelle-Aquitaine, Francia: una playa ideal para surfistas, paseos marítimos y disfrutar del encanto de la costa atlántica francesa.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/capbreton/lugares-interes/playas/plage-centrale";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/plage-centrale-capbreton.jpg";
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Plage Centrale",
    "addressLocality" => "Capbreton",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "40130",
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
  "address": <?= json_encode($schemaAddress, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>,
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "hasMap": "https://www.google.com/maps?q=<?= $latitude ?>,<?= $longitude ?>",
  "isAccessibleForFree": true,
  "touristType": [
    { "@type": "Audience", "audienceType": "Surfistas" },
    { "@type": "Audience", "audienceType": "Amantes de la naturaleza" },
    { "@type": "Audience", "audienceType": "Turistas en busca de tranquilidad" }
  ],
  "amenityFeature": [
    { "@type": "LocationFeatureSpecification", "name": "Duchas y servicios", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Acceso peatonal", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Aparcamiento cercano", "value": true }
  ],
  "sameAs": [
    "https://www.capbreton.fr/",
    "https://es.wikipedia.org/wiki/Capbreton"
  ]
}
</script>
