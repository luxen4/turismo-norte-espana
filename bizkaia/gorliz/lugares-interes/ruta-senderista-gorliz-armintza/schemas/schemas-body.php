<?php
// Variables reutilizables para Ruta Senderista Gorliz – Armintza
$latitudeStart  = 43.4230;  // Inicio de la ruta
$longitudeStart = -2.9320;

$latitudeEnd    = 43.4290;  // Final de la ruta
$longitudeEnd   = -2.9380;

$schemaTitle       = $schemaTitle       ?? "Ruta Senderista Gorliz – Armintza";
$schemaDescription = $schemaDescription ?? "Disfruta de la Ruta Senderista Gorliz – Armintza: recorrido costero panorámico, ideal para caminar, observar aves, flora autóctona y disfrutar de la naturaleza de Bizkaia.";
$schemaUrl         = $schemaUrl         ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/gorliz/lugares-interes/ruta-senderista-gorliz-armintza";
$schemaImage       = $schemaImage       ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/ruta-gorliz-armintza.jpg";
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristRoute",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "geo": {
    "@type": "GeoShape",
    "line": [
      {"latitude": <?= $latitudeStart ?>, "longitude": <?= $longitudeStart ?>},
      {"latitude": 43.4250, "longitude": -2.9345},
      {"latitude": 43.4270, "longitude": -2.9360},
      {"latitude": <?= $latitudeEnd ?>, "longitude": <?= $longitudeEnd ?>}
    ]
  },
  "estimatedDuration": "PT2H",
  "distance": "5 km",
  "difficulty": "Baja-Media",
  "touristType": "Caminantes, familias, fotógrafos",
  "hasPart": [
    {
      "@type": "Landform",
      "name": "Sendero costero",
      "description": "Recorrido junto al mar con miradores y entorno natural protegido"
    },
    {
      "@type": "Landform",
      "name": "Miradores",
      "description": "Puntos panorámicos para disfrutar del Cantábrico y de Armintza"
    }
  ],
  "additionalProperty": [
    {
      "@type": "PropertyValue",
      "name": "Inicio recomendado",
      "value": "Latitud: <?= $latitudeStart ?>, Longitud: <?= $longitudeStart ?>"
    },
    {
      "@type": "PropertyValue",
      "name": "Fin recomendado",
      "value": "Latitud: <?= $latitudeEnd ?>, Longitud: <?= $longitudeEnd ?>"
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/gorliz"
  ]
}
</script>
