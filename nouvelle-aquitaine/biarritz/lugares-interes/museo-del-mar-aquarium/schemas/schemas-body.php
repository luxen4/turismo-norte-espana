<?php 
$latitude  = 43.4809;  
$longitude = -1.5636; 

// Variables para el schema – Museo del Mar / Aquarium de Biarritz
$schemaTitle       = "Museo del Mar - Aquarium de Biarritz";
$schemaDescription = "Descubre el Museo del Mar (Aquarium de Biarritz): un fascinante centro dedicado a la vida marina del Atlántico con acuarios, especies oceánicas y vistas espectaculares al mar.";
$schemaUrl         = "https://www.tu-dominio.com/biarritz/lugares-interes/museo-del-mar-aquarium"; // Cambia por la URL real
$schemaImage       = "https://www.tu-dominio.com/images/museo-del-mar-biarritz.jpg";              // Cambia por la URL real de la imagen principal
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Esplanade du Rocher de la Vierge",
    "addressLocality" => "Biarritz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64200",
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
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acuarios de vida marina del Atlántico",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Exposiciones educativas y científicas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas al océano Atlántico",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ubicación junto al Rocher de la Vierge",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/biarritz"
  ]
}
</script>