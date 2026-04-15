<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Iglesia de San Juan Bautista - Saint-Jean-de-Luz";
$schemaDescription  = $schemaDescription  ?? "Visita la Iglesia de San Juan Bautista en Saint-Jean-de-Luz, un emblemático templo del País Vasco Francés con rica historia y arquitectura tradicional.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/saint-jean-de-luz/lugares-interes/iglesia-san-juan-bautista";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/iglesia-san-juan-bautista-saint-jean-de-luz.jpg";
$schemaAddress      = $schemaAddress      ?? [
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
  "@type": "Place",
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
    "latitude": 43.3899,
    "longitude": -1.6625
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Arquitectura religiosa vasca",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Retablo barroco del siglo XVII",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso para visitas turísticas",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/saint-jean-de-luz"
  ]
}
</script>
