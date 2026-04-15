<?php 
$latitude  = 43.47600;  
$longitude = -1.56670; 

// Variables para el schema – Côte des Basques (Biarritz)
$schemaTitle       = "Playa de la Côte des Basques";
$schemaDescription = "Descubre la Playa de la Côte des Basques en Biarritz: un icono del surf en la costa vasco-francesa, con espectaculares acantilados, vistas panorámicas y ambiente relajado junto al Atlántico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/biarritz/lugares-interes/cote-des-basques"; // Cambia por la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/cote-des-basques.jpg";              // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Côte des Basques",
    "addressLocality" => "Biarritz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64200",
    "addressCountry"  => "FR"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Beach",
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
      "name": "Playa para surf",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas a los acantilados",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso mediante escaleras",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona natural y relajada",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/biarritz"
  ]
}
</script>