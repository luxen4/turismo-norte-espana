<?php 
$latitude  = 43.29520;  
$longitude = -2.35540; 

// Variables para el schema – Ermita de San Telmo en Deba
$schemaTitle       = "Ermita de San Telmo - Deba";
$schemaDescription = "Descubre la Ermita de San Telmo en Deba, Gipuzkoa: un templo emblemático junto a la costa vasca, famoso por sus vistas al Cantábrico y su valor histórico-cultural.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/deba/lugares-interes/ermita-san-telmo"; // Sustituye por tu URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/ermita-san-telmo-deba.jpg";      // Sustituye por la imagen real
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Monte Itziar, s/n",
    "addressLocality" => "Deba",
    "addressRegion"   => "Gipuzkoa",
    "postalCode"      => "20730",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LandmarksOrHistoricalBuildings",
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
    "https://turismo.euskadi.eus/es/ermita-de-san-telmo-deba/",
    "https://es.wikipedia.org/wiki/Ermita_de_San_Telmo_(Zumaia)"
  ]
}
</script>
