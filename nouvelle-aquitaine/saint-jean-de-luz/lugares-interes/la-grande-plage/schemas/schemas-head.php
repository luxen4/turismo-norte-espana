<?php 
$latitude  = 43.38810;  
$longitude = -1.66330; 

// Variables para el schema – La Grande Plage (Saint-Jean-de-Luz)
$schemaTitle       = "La Grande Plage - Saint-Jean-de-Luz";
$schemaDescription = "Descubre La Grande Plage en Saint-Jean-de-Luz, Nouvelle-Aquitaine: una playa urbana con encanto, ideal para familias, con aguas tranquilas y vistas al Atlántico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/saint-jean-de-luz/lugares-interes/la-grande-plage"; // Cambia por la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/la-grande-plage-saint-jean-de-luz.jpg";       // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Promenade Jacques Thibaud",
    "addressLocality" => "Saint-Jean-de-Luz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64500",
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
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/saint-jean-de-luz"
  ]
}
</script>
