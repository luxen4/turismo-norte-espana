<?php 
// Coordenadas aproximadas (inicio en Plentzia, fin en Gorliz)
$latitudeStart  = 43.4492;   // Plentzia
$longitudeStart = -2.9981;
$latitudeEnd    = 43.4600;   // Gorliz
$longitudeEnd   = -2.9830;

// Variables para el schema – Ruta Senderista Plentzia-Gorliz
$schemaTitle       = "Ruta Senderista Plentzia - Gorliz";
$schemaDescription = "Ruta costera entre Plentzia y Gorliz: senderismo junto a playas, acantilados y dunas, con vistas panorámicas del mar Cantábrico, ideal para turismo activo en Bizkaia.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/plentzia/rutas/ruta-plentzia-gorliz";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/ruta-plentzia-gorliz-1.jpg";
$schemaAddress     = [
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
  "@type": "Route",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "<?= $schemaAddress['addressLocality'] ?>",
    "addressRegion": "<?= $schemaAddress['addressRegion'] ?>",
    "postalCode": "<?= $schemaAddress['postalCode'] ?>",
    "addressCountry": "<?= $schemaAddress['addressCountry'] ?>"
  },
  "geo": {
    "@type": "GeoShape",
    "line": "<?= $latitudeStart ?>,<?= $longitudeStart ?> <?= $latitudeEnd ?>,<?= $longitudeEnd ?>"
  },
  "touristType": "Senderismo",
  "sameAs": [
    "https://www.plentzia.eus",
    "https://www.gorliz.eus"
  ]
}
</script>
