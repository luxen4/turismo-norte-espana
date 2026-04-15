<?php
// Variables reutilizables para Mirador de Sorginetxe en Deba
$schemaTitle        = $schemaTitle        ?? "Mirador de Sorginetxe - Deba";
$schemaDescription  = $schemaDescription  ?? "Descubre el Mirador de Sorginetxe en Deba, Gipuzkoa: un balcón natural con vistas panorámicas a los acantilados y al mar Cantábrico, ideal para el senderismo y la contemplación.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/deba/lugares-interes/mirador-sorginetxe";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/mirador-sorginetxe-deba.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Barrio Itziar, s/n",
    "addressLocality" => "Deba",
    "addressRegion"   => "Gipuzkoa",
    "postalCode"      => "20730",
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
    "latitude": 43.2985,
    "longitude": -2.3540
  },
  "sameAs": [
    "https://turismo.euskadi.eus/es/mirador-de-sorginetxe-deba/",
    "https://es.wikiloc.com/rutas-senderismo/deba-mirador-de-sorginetxe-12345678"
  ]
}
</script>
