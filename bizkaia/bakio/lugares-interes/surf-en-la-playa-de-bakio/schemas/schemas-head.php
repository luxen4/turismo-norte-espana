<?php 
$latitude  = 43.42970;  
$longitude = -2.81210; 

// Variables para el schema – Surf en la Playa de Bakio
$schemaTitle       = "Surf en la Playa de Bakio";
$schemaDescription = "Disfruta del surf en la Playa de Bakio, Bizkaia: uno de los principales destinos surfistas del País Vasco con olas para todos los niveles, escuelas y alquiler de material.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/bakio/actividades/surf-playa-de-bakio"; // Cambia por la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/surf-playa-de-bakio.jpg";       // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Playa de Bakio",
    "addressLocality" => "Bakio",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48130",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SportsActivityLocation",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "sport": "Surf",
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
      "name": "Escuelas de surf",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Alquiler de tablas y trajes de neopreno",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Olas para principiantes y expertos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona de duchas y servicios",
      "value": true
    }
  ],
  "sameAs": [
    "https://turismo.euskadi.eus/es/playa-de-bakio/"
  ]
}
</script>
