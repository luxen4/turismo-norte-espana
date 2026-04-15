<?php 
$latitude  = 43.34460;  
$longitude = -3.06140; 

// Variables para el schema – Monte Serantes en Bakio
$schemaTitle       = "Monte Serantes - Bakio";
$schemaDescription = "Explora el Monte Serantes en Bakio, Bizkaia: una cima emblemática con rutas de senderismo, vistas panorámicas de la costa vasca y un entorno natural único.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/bakio/lugares-interes/monte-serantes"; // Cambia por la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/monte-serantes-bakio.jpg";      // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Monte Serantes",
    "addressLocality" => "Bakio",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48130",
    "addressCountry"  => "ES"
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
      "name": "Rutas de senderismo",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas panorámicas de la costa",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural",
      "value": true
    }
  ],
  "sameAs": [
    "https://turismo.euskadi.eus/es/monte-serantes/"
  ]
}
</script>
