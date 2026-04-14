<?php 
$latitude  = 43.46860;  
$longitude = -1.57600; 

// Variables para el schema – Playa de la Milady (Biarritz)
$schemaTitle       = "Playa de la Milady en Biarritz";
$schemaDescription = "Descubre la Playa de la Milady en Biarritz, una amplia playa del sur de la ciudad ideal para surf, deportes acuáticos, paseos y relax junto al Atlántico.";
$schemaUrl         = "https://www.tu-dominio.com/biarritz/lugares-interes/playa-de-la-milady"; // Cambia por la URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-la-milady-biarritz.jpg";      // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Plage de la Milady",
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
      "name": "Playa amplia de arena",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Surf y deportes acuáticos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal y paseo marítimo",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zonas verdes cercanas",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/biarritz"
  ]
}
</script>