<?php 
$latitude  = 43.3742;  // Coordenadas aproximadas para Astondoko-Hondartza
$longitude = -2.9938; 

// Variables para el schema – Playa de Astondoko
$schemaTitle       = "Playa de Astondoko - Gorliz";
$schemaDescription = "Explora la Playa de Astondoko en Gorliz, Bizkaia: una playa más salvaje y tranquila, ideal para desconectar y disfrutar de la naturaleza costera.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/gorliz/lugares-interes/playa-de-astondoko"; // Actualiza con la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/playa-de-astondoko-1.jpg";           // Imagen destacada
$schemaAddress     = [
    "@type"            => "PostalAddress",
    "streetAddress"    => "Zona Astondo, Playa de Astondoko",
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
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/gorliz"
  ]
}
</script>
