<?php 
$latitude  = 43.48170;  
$longitude = -1.56900; 

// Variables para el schema – Port Vieux (Biarritz)
$schemaTitle       = "Playa Port Vieux - Biarritz";
$schemaDescription = "Descubre la Playa Port Vieux en Biarritz: una cala protegida en pleno centro urbano, ideal para el baño tranquilo, el descanso y disfrutar de un entorno familiar junto al Atlántico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/biarritz/lugares-interes/port-vieux"; // Cambia por la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/port-vieux-biarritz.jpg";      // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Plage du Port Vieux",
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
      "name": "Cala protegida entre acantilados",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aguas tranquilas para el baño",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso urbano directo",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ambiente familiar y relajado",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/biarritz"
  ]
}
</script>