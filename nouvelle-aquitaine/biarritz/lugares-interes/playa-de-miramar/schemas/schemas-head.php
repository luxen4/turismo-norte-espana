<?php 
$latitude  = 43.48190;  
$longitude = -1.55350; 

// Variables para el schema – Playa de Miramar (Biarritz)
$schemaTitle       = "Playa de Miramar - Biarritz";
$schemaDescription = "Descubre la Playa de Miramar en Biarritz: una playa elegante situada entre el centro urbano y el Faro, ideal para el baño, el relax y las vistas al océano Atlántico.";
$schemaUrl         = "https://www.tu-dominio.com/biarritz/lugares-interes/playa-de-miramar"; // Cambia por la URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-miramar-biarritz.jpg";      // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Plage de Miramar",
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
      "name": "Playa urbana tranquila",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas al Faro de Biarritz",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Servicios y duchas en temporada",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/biarritz"
  ]
}
</script>