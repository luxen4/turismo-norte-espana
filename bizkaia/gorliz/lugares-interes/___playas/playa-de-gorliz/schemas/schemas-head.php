<?php 
$latitude  = 43.3733;  
$longitude = -2.9962; 

// Variables para el schema – Playa de Gorliz
$schemaTitle       = "Playa de Gorliz - Gorliz";
$schemaDescription = "Descubre la Playa de Gorliz en Gorliz, bizkaia: una amplia playa de arena fina ideal para familias, surfistas y amantes de la naturaleza costera.";
$schemaUrl         = "https://www.tu-dominio.com/gorliz/lugares-interes/playa-de-gorliz"; // Cambia por la URL real
$schemaImage       = "https://www.tu-dominio.com/images/playa-de-gorliz-1.jpg";          // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"            => "PostalAddress",
    "streetAddress"    => "Paseo Marítimo, Playa de Gorliz",
    "addressLocality"  => "Gorliz",
    "addressRegion"    => "País Vasco",
    "postalCode"       => "48630",
    "addressCountry"   => "ES"
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
  "sameAs": [
    "https://www.tu-dominio.com/gorliz"
  ]
}
</script>
