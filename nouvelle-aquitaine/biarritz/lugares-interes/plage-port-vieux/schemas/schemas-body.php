<?php
// Variables para el schema en el cuerpo
$schemaTitle        = $schemaTitle        ?? "Plage du Port Vieux - Biarritz";
$schemaDescription  = $schemaDescription  ?? "Descubre la Plage du Port Vieux en Biarritz: una playa urbana protegida entre acantilados, ideal para el baño tranquilo y el ambiente familiar junto al centro de la ciudad.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/biarritz/lugares-interes/plage-du-port-vieux";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/plage-du-port-vieux.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Plage du Port Vieux",
    "addressLocality" => "Biarritz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64200",
    "addressCountry"  => "FR"
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
    "latitude": 43.4818,
    "longitude": -1.5666
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Playa protegida entre acantilados",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aguas tranquilas para baño",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso desde el centro de Biarritz",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ambiente familiar y urbano",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/biarritz"
  ]
}
</script>