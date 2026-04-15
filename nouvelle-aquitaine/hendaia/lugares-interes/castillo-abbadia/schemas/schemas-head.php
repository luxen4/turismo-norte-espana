<?php 
$latitude  = 43.3695;   // Coordenadas del Castillo de Abbadia
$longitude = -1.7870; 

// Variables para el schema – Castillo de Abbadia (Hendaya)
$schemaTitle       = "Castillo de Abbadia - Hendaya";
$schemaDescription = "Descubre el Castillo de Abbadia en Hendaya, Nouvelle-Aquitaine, Francia: un castillo neogótico del siglo XIX situado sobre acantilados con impresionantes vistas al océano Atlántico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/hendaya/lugares-interes/castillo-abbadia";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/castillo-abbadia-hendaya.jpg";
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Route de la Corniche",
    "addressLocality" => "Hendaya",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64700",
    "addressCountry"  => "FR"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "@id": "<?= htmlspecialchars($schemaUrl) ?>#attraction",
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
  "isAccessibleForFree": false,
  "touristType": ["Amantes de la historia", "Arquitectura", "Turismo cultural"],
  "amenityFeature": [
    { "@type": "LocationFeatureSpecification", "name": "Visitas guiadas", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Entorno natural protegido", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Miradores al océano", "value": true }
  ],
  "sameAs": [
    "https://www.chateau-abbadia.fr/",
    "https://fr.wikipedia.org/wiki/Ch%C3%A2teau_d%27Abbadia"
  ]
}
</script>