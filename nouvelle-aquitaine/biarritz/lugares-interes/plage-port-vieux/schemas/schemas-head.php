<?php 
$latitude  = 43.4818;  
$longitude = -1.5666; 

// Variables para el schema – Plage du Port Vieux (Biarritz)
$schemaTitle       = "Plage du Port Vieux";
$schemaDescription = "Descubre la Plage du Port Vieux en Biarritz: una playa urbana protegida entre acantilados, ideal para el baño tranquilo y el ambiente familiar junto al centro de la ciudad.";
$schemaUrl         = "https://www.tu-dominio.com/biarritz/lugares-interes/plage-port-vieux";
$schemaImage       = "https://www.tu-dominio.com/images/plage-port-vieux.jpg";
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
      "name": "Playa protegida entre acantilados",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aguas tranquilas para baño",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso desde el centro de Biarritz",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ambiente familiar y urbano",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/biarritz"
  ]
}
</script>