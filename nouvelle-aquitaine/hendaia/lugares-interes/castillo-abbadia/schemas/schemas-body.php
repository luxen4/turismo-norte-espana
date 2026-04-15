<?php
// Variables para el schema (reutiliza las del <head> si están definidas)
$schemaTitle        = $schemaTitle        ?? "Castillo de Abbadia - Hendaia";
$schemaDescription  = $schemaDescription  ?? "Descubre el Castillo de Abbadia en Hendaia, Nouvelle-Aquitaine, Francia: un impresionante castillo neogótico del siglo XIX situado sobre acantilados con vistas al océano Atlántico.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/hendaia/lugares-interes/castillo-abbadia";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/castillo-abbadia.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Route de la Corniche",
    "addressLocality" => "Hendaia",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64700",
    "addressCountry"  => "FR"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "@id": "<?= htmlspecialchars($schemaUrl) ?>#place",
  "name": "<?= htmlspecialchars($schemaTitle) ?>",
  "description": "<?= htmlspecialchars($schemaDescription) ?>",
  "url": "<?= htmlspecialchars($schemaUrl) ?>",
  "image": "<?= htmlspecialchars($schemaImage) ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= htmlspecialchars($schemaAddress['streetAddress']) ?>",
    "addressLocality": "<?= htmlspecialchars($schemaAddress['addressLocality']) ?>",
    "addressRegion": "<?= htmlspecialchars($schemaAddress['addressRegion']) ?>",
    "postalCode": "<?= htmlspecialchars($schemaAddress['postalCode']) ?>",
    "addressCountry": "<?= htmlspecialchars($schemaAddress['addressCountry']) ?>"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.3695,
    "longitude": -1.7870
  },
  "amenityFeature": [
    { "@type": "LocationFeatureSpecification", "name": "Visitas guiadas", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Entorno natural protegido", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Miradores al océano", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Acceso peatonal", "value": true }
  ],
  "sameAs": [
    "https://www.chateau-abbadia.fr/",
    "https://fr.wikipedia.org/wiki/Ch%C3%A2teau_d%27Abbadia"
  ]
}
</script>