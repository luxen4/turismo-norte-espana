<?php 
$latitude  = 42.1900;   // Coordenadas aproximadas de A Ladeira, Baiona
$longitude = -8.8540; 

// Variables para el schema – Playa de A Ladeira (Baiona)
$schemaTitle       = "Playa de A Ladeira - Baiona";
$schemaDescription = "Descubre la Playa de A Ladeira en Baiona, Galicia, España: una playa tranquila ideal para familias, baños y paseos en un entorno natural gallego.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/baiona/lugares-interes/playas/a-ladeira";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/a-ladeira-baiona.jpg";
$schemaAddress     = [
    "@type"         => "PostalAddress",
    "streetAddress" => "Playa de A Ladeira",
    "addressLocality" => "Baiona",
    "addressRegion"   => "Galicia",
    "postalCode"      => "36300",
    "addressCountry"  => "ES"
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
  "touristType": ["Familias", "Naturaleza", "Baño"],
  "amenityFeature": [
    { "@type": "LocationFeatureSpecification", "name": "Duchas y servicios", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Acceso peatonal", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Aparcamiento cercano", "value": true }
  ],
  "sameAs": [
    "https://www.turismobaiona.com/",
    "https://es.wikipedia.org/wiki/Baiona"
  ]
}
</script>
