<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Playa Port Vieux - Biarritz";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa Port Vieux en Biarritz: una cala protegida en el centro de la ciudad, ideal para el baño tranquilo, el relax y un ambiente familiar junto al Atlántico.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/biarritz/lugares-interes/port-vieux";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/port-vieux-biarritz.jpg";
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
    "latitude": 43.4817,
    "longitude": -1.5690
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Cala protegida entre acantilados",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aguas tranquilas para el baño",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso urbano directo",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ambiente familiar y relajado",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/biarritz"
  ]
}
</script>