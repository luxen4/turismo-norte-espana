<?php
// Variables reutilizables para Ruta Senderista Sopelana - Plentzia
$schemaTitle        = $schemaTitle        ?? "Ruta Senderista Sopelana - Plentzia";
$schemaDescription  = $schemaDescription  ?? "Disfruta de la Ruta Senderista Sopelana - Plentzia en Bizkaia: sendero costero con acantilados, playas y vistas del mar Cantábrico, ideal para caminatas, naturaleza y fotografía.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/sopelana/rutas/ruta-sopelana-plentzia";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/ruta-sopelana-plentzia-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "addressLocality" => "Sopelana",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48600",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["Place", "TouristAttraction", "Route"],
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
    "addressLocality": "<?= $schemaAddress['addressLocality'] ?>",
    "addressRegion": "<?= $schemaAddress['addressRegion'] ?>",
    "postalCode": "<?= $schemaAddress['postalCode'] ?>",
    "addressCountry": "<?= $schemaAddress['addressCountry'] ?>"
  },
  "geo": {
    "@type": "GeoShape",
    "line": "43.3845,-2.9908 43.4060,-2.9500"
  },
  "hasMap": "https://www.google.com/maps/dir/43.3845,-2.9908/43.4060,-2.9500",
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Senderismo costero",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vistas panorámicas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Acceso a playas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Observación de fauna y naturaleza",
      "value": true
    }
  ],
  "touristType": "Turismo activo y naturaleza",
  "sameAs": [
    "https://www.sopelana.eus",
    "https://www.plentzia.eus"
  ]
}
</script>
