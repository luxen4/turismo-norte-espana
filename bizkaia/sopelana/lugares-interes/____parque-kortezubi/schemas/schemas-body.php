<?php
// Variables reutilizables para Mirador de Arrietara
$schemaTitle        = $schemaTitle        ?? "Mirador de Arrietara - Sopelana";
$schemaDescription  = $schemaDescription  ?? "Disfruta del Mirador de Arrietara en Sopelana, Bizkaia: vistas panorámicas de la Playa de Arrietara, los acantilados y el mar Cantábrico, ideal para senderismo y fotografía.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/sopelana/lugares-interes/mirador-de-arrietara";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/mirador-de-arrietara-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Mirador de Arrietara, s/n",
    "addressLocality" => "Sopelana",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48600",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["Place", "TouristAttraction"],
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $schemaUrl ?>"
  },
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
    "latitude": 43.3840,
    "longitude": -2.9910
  },
  "hasMap": "https://www.google.com/maps?q=43.3840,-2.9910",
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas panorámicas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Sendero accesible",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Fotografía y observación de aves",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona de descanso",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/sopelana"
  ]
}
</script>
