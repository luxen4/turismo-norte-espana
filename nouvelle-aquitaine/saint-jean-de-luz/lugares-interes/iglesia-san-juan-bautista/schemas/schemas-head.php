<?php 
$latitude  = 43.38990;  
$longitude = -1.66250; 

// Variables para el schema – Iglesia de San Juan Bautista (Saint-Jean-de-Luz)
$schemaTitle       = "Iglesia de San Juan Bautista - Saint-Jean-de-Luz";
$schemaDescription = "Descubre la Iglesia de San Juan Bautista en Saint-Jean-de-Luz, en Nouvelle-Aquitaine: un templo histórico con arquitectura vasca, retablo barroco y gran valor cultural.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/saint-jean-de-luz/lugares-interes/iglesia-san-juan-bautista"; // Cambia por la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/iglesia-san-juan-bautista-saint-jean-de-luz.jpg";       // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Rue Léon Gambetta",
    "addressLocality" => "Saint-Jean-de-Luz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64500",
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
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/saint-jean-de-luz"
  ]
}
</script>
