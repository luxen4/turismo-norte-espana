<?php 
$latitude  = 43.47500;  
$longitude = -1.56680; 

// Variables para el schema – Plage Marbella (Biarritz)
$schemaTitle       = "Playa de Marbella";
$schemaDescription = "Descubre la Playa de Marbella en Biarritz: una playa tranquila y natural, rodeada de acantilados, ideal para relajarse junto al Atlántico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/biarritz/lugares-interes/plage-marbella"; // Cambia por la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/plage-marbella.jpg";              // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Plage Marbella",
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
      "name": "Playa tranquila",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso por escaleras desde acantilados",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural poco urbanizado",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas al océano Atlántico",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/biarritz"
  ]
}
</script>