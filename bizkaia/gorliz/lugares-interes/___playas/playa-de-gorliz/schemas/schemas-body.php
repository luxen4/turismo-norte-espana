<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Playa de Gorliz - Gorliz";
$schemaDescription  = $schemaDescription  ?? "Descubre la Playa de Gorliz en Gorliz, bizkaia: una amplia playa de arena fina ideal para familias, surfistas y amantes de la naturaleza costera.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/gorliz/lugares-interes/playa-de-gorliz";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/playa-de-gorliz-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"         => "PostalAddress",
    "streetAddress" => "Paseo Marítimo, Playa de Gorliz",
    "addressLocality" => "Gorliz",
    "addressRegion"   => "País Vasco",
    "postalCode"      => "48630",
    "addressCountry"  => "ES"
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
    "latitude": 43.3733,
    "longitude": -2.9962
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso peatonal",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duchas y baños públicos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aparcamiento amplio",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Chiringuitos disponibles",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.tu-dominio.com/gorliz"
  ]
}
</script>
