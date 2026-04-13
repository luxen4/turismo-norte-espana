<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Museo Vasco de la Historia - Baiona";
$schemaDescription  = $schemaDescription  ?? "Descubre el Museo Vasco de la Historia en Baiona, un espacio cultural dedicado a la historia, la etnografía y el patrimonio del País Vasco francés.";
$schemaUrl          = $schemaUrl          ?? "https://www.tu-dominio.com/baiona/lugares-interes/museo-vasco-historia";
$schemaImage        = $schemaImage        ?? "https://www.tu-dominio.com/images/museo-vasco-historia-baiona.jpg";

$schemaAddress      = $schemaAddress ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Museo Vasco de la Historia",
    "addressLocality" => "Baiona",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64100",
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
    "latitude": 43.4929,
    "longitude": -1.4748
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Exposiciones de historia vasca",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Colecciones etnográficas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Visitas culturales guiadas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Ubicación en el centro histórico de Baiona",
      "value": true
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Bayona_(Francia)"
  ]
}
</script>