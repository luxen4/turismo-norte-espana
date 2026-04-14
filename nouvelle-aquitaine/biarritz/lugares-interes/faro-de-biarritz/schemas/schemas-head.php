<?php 
$latitude  = 43.49950;  
$longitude = -1.56600; 

// Variables para el schema – Faro de Biarritz
$schemaTitle       = "Faro de Biarritz";
$schemaDescription = "Descubre el Faro de Biarritz en la Pointe Saint-Martin: un emblemático faro histórico con vistas panorámicas impresionantes del océano Atlántico y la costa vasco-francesa.";
$schemaUrl         = "https://www.tu-dominio.com/biarritz/lugares-interes/faro-de-biarritz"; // Cambia por la URL real
$schemaImage       = "https://www.tu-dominio.com/images/faro-de-biarritz.jpg";              // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Pointe Saint-Martin",
    "addressLocality" => "Biarritz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64200",
    "addressCountry"  => "FR"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
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
      "name": "Mirador panorámico",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso por escaleras",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona de acantilados",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Faro histórico activo",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/biarritz"
  ]
}
</script>