<?php 
$latitude  = 43.44890;  
$longitude = -3.41520; 

// Variables para el schema – Playa de Valdearenas (Sonabia)
$schemaTitle       = "Playa de Valdearenas - Sonabia";
$schemaDescription = "Descubre la Playa de Valdearenas en Sonabia, Cantabria: amplia playa de arena fina y dorada, ideal para paseos, surf y disfrutar de la naturaleza costera.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/sonabia/lugares-interes/playa-de-valdearenas"; // Cambia por la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/playa-de-valdearenas-sonabia-1.jpg";   // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"         => "PostalAddress",
    "streetAddress" => "Camino de Valdearenas",
    "addressLocality" => "Sonabia",
    "addressRegion"   => "Cantabria",
    "postalCode"      => "39749",
    "addressCountry"  => "ES"
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
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/sonabia"
  ]
}
</script>
