<?php
// Variables reutilizables para Ruta Senderista Gorliz – Armintza
$schemaTitle        = $schemaTitle        ?? "Ruta Senderista Gorliz – Armintza";
$schemaDescription  = $schemaDescription  ?? "Disfruta de la Ruta Senderista Gorliz – Armintza en Bizkaia: un recorrido costero panorámico ideal para caminar, observar aves y flora autóctona, y contemplar la naturaleza.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/gorliz/lugares-interes/ruta-senderista-gorliz-armintza";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/ruta-gorliz-armintza.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Gorliz – Armintza",
    "addressLocality" => "Gorliz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48600",
    "addressCountry"  => "ES"
];
$latitudeStart      = 43.4230;
$longitudeStart     = -2.9320;
$latitudeEnd        = 43.4290;
$longitudeEnd       = -2.9380;
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristRoute",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "startLocation": {
    "@type": "Place",
    "name": "Inicio Ruta: Gorliz",
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": <?= $latitudeStart ?>,
      "longitude": <?= $longitudeStart ?>
    },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?= $schemaAddress['streetAddress'] ?>",
      "addressLocality": "<?= $schemaAddress['addressLocality'] ?>",
      "addressRegion": "<?= $schemaAddress['addressRegion'] ?>",
      "postalCode": "<?= $schemaAddress['postalCode'] ?>",
      "addressCountry": "<?= $schemaAddress['addressCountry'] ?>"
    }
  },
  "endLocation": {
    "@type": "Place",
    "name": "Final Ruta: Armintza",
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": <?= $latitudeEnd ?>,
      "longitude": <?= $longitudeEnd ?>
    }
  },
  "estimatedDuration": "PT2H",
  "distance": "5 km",
  "touristType": "Caminantes, familias, fotógrafos",
  "hasPart": [
    {
      "@type": "Landform",
      "name": "Sendero costero",
      "description": "Recorrido junto al mar con miradores y naturaleza protegida"
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/gorliz"
  ]
}
</script>
