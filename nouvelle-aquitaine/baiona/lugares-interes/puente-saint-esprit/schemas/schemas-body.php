<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Puente Saint-Esprit - Baiona";
$schemaDescription  = $schemaDescription  ?? "Descubre el Puente Saint-Esprit en Baiona, Francia: un puente histórico sobre el río Nive que conecta la ciudad con el barrio de Saint-Esprit y ofrece vistas únicas del entorno urbano y fluvial.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/baiona/lugares-interes/puente-saint-esprit";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/puente-saint-esprit-baiona.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"         => "PostalAddress",
    "streetAddress" => "Puente Saint-Esprit",
    "addressLocality" => "Baiona",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64100",
    "addressCountry"  => "FR"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Bridge",
  "@id": "<?= htmlspecialchars($schemaUrl) ?>#bridge",
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
    "latitude": 43.4906,
    "longitude": -1.4745
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas al río Nive",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Conexión entre barrios históricos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno urbano histórico",
      "value": true
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Bayona_(Francia)",
    "https://www.tourisme-bayonne.com"
  ]
}
</script>