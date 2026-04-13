<?php
// Variables para el schema (reutiliza las del <head> si están definidas)
$schemaTitle        = $schemaTitle        ?? "Playa de A Ladeira - Baiona";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de A Ladeira en Baiona, Galicia, España: una playa tranquila ideal para familias, baños y paseos en la naturaleza gallega.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/baiona/lugares-interes/playa-de-a-ladeira";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/a-ladeira-baiona.jpg";

$schemaAddress      = $schemaAddress ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Playa de A Ladeira",
    "addressLocality" => "Baiona",
    "addressRegion"   => "Galicia",
    "postalCode"      => "36300",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Place",
  "@id": "<?= htmlspecialchars($schemaUrl) ?>#place",
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
    "latitude": 42.1189,
    "longitude": -8.8466
  },
  "amenityFeature": [
    { "@type": "LocationFeatureSpecification", "name": "Arena fina y tranquila", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Zona de baño protegida", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Paseo marítimo cercano", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Entorno natural junto al río Miñor", "value": true }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Baiona_(España)"
  ]
}
</script>