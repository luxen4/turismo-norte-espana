<?php 
$latitude  = 43.4906;  
$longitude = -1.4745;  

// Variables para el schema – Puente Saint-Esprit (Baiona)
$schemaTitle       = "Puente Saint-Esprit - Baiona";
$schemaDescription = "Descubre el Puente Saint-Esprit en Baiona, Francia: un puente histórico sobre el río Nive que conecta diferentes barrios de la ciudad y ofrece vistas del casco urbano.";
$schemaUrl         = "https://playas2024.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/baiona/lugares-interes/puente-saint-esprit/index.php";
$schemaImage       = "https://playas2024.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/baiona/lugares-interes/puente-saint-esprit/img/puente-saint-esprit-baiona.jpg";
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Puente Saint-Esprit",
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
    "https://es.wikipedia.org/wiki/Bayona_(Francia)"
  ]
}
</script>