<?php
// Variables reutilizables para Playa de Arrietara
$schemaTitle        = $schemaTitle        ?? "Playa de Arrietara - Sopelana";
$schemaDescription  = $schemaDescription  ?? "Explora la Playa de Arrietara en Sopelana, Bizkaia: un paraíso para surfistas, rodeado de acantilados y con ambiente joven, a pocos minutos de Bilbao.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/sopelana/lugares-interes/playa-de-arrietara";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/playa-de-arrietara-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Arrietara, s/n",
    "addressLocality" => "Sopelana",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48600",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["Place", "Beach"],
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
    "latitude": 43.3904,
    "longitude": -2.9813
  },
  "hasMap": "https://www.google.com/maps?q=43.3904,-2.9813",
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona de surf",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Escuelas de surf y alquiler de material",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso adaptado y servicios de temporada",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Chiringuitos y restaurantes",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aparcamiento cercano",
      "value": true
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/sopelana"
  ]
}
</script>
