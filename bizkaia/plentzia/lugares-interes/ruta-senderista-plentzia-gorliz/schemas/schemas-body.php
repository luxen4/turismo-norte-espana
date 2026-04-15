<?php
// Variables reutilizables para Ruta Senderista Plentzia - Gorliz
$schemaTitle        = $schemaTitle        ?? "Ruta Senderista Plentzia - Gorliz";
$schemaDescription  = $schemaDescription  ?? "Disfruta de la Ruta Senderista Plentzia - Gorliz en Bizkaia: sendero costero con playas, acantilados y dunas, ideal para caminatas, naturaleza y fotografía.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/plentzia/rutas/ruta-plentzia-gorliz";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/ruta-plentzia-gorliz-1.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "addressLocality" => "Plentzia",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48620",
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
    "line": "43.4492,-2.9981 43.4600,-2.9830"
  },
  "hasMap": "https://www.google.com/maps/dir/43.4492,-2.9981/43.4600,-2.9830",
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
      "name": "Acceso a playas y dunas",
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
    "https://www.plentzia.eus",
    "https://www.gorliz.eus"
  ]
}
</script>
