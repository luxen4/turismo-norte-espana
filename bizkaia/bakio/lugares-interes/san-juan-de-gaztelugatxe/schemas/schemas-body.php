<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "San Juan de Gaztelugatxe - Bakio";
$schemaDescription  = $schemaDescription  ?? "Explora San Juan de Gaztelugatxe en Bakio, Bizkaia: un islote emblemático del País Vasco con su ermita, escaleras de piedra y vistas espectaculares del mar Cantábrico.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/bakio/lugares-interes/san-juan-de-gaztelugatxe";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/san-juan-de-gaztelugatxe-bakio.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"         => "PostalAddress",
    "streetAddress" => "San Juan de Gaztelugatxe",
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
    "latitude": 43.4471,
    "longitude": -2.7801
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ermita en la cima",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Escaleras de piedra (241 peldaños)",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Miradores panorámicos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Senderos de acceso",
      "value": true
    }
  ],
  "sameAs": [
    "https://turismo.euskadi.eus/es/gaztelugatxe/"
  ]
}
</script>
