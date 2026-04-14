<?php
// Variables para el schema en el cuerpo
$schemaTitle        = $schemaTitle        ?? "Côte des Basques - Biarritz";
$schemaDescription  = $schemaDescription  ?? "Descubre la Côte des Basques en Biarritz: una playa icónica del surf europeo con acantilados, vistas panorámicas y fuerte tradición atlántica.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/biarritz/lugares-interes/cote-des-basques";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/cote-des-basques.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Côte des Basques",
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
    "latitude": 43.4708,
    "longitude": -1.5686
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Playa de surf internacional",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acantilados con vistas panorámicas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal desde Biarritz centro",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona natural sin urbanización directa",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/biarritz"
  ]
}
</script>