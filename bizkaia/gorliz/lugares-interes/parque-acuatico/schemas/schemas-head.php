<?php 
$latitudeStart  = 43.42050;  // Coordenadas aprox. entrada Parque Acuático Gorliz
$longitudeStart = -2.93000; 

$latitudeEnd    = 43.42150;  // Coordenadas aprox. límite del parque
$longitudeEnd   = -2.93150; 

// Variables para el schema – Parque Acuático Gorliz
$schemaTitle       = "Parque Acuático de Gorliz";
$schemaDescription = "El Parque Acuático de Gorliz, en Bizkaia, ofrece diversión para toda la familia con piscinas, toboganes y actividades acuáticas junto a la costa vasca.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/gorliz/lugares-interes/parque-acuatico-gorliz"; 
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/parque-acuatico-gorliz.jpg"; 
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Parque Acuático de Gorliz",
    "addressLocality" => "Gorliz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48630",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WaterPark",
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
    "latitude": <?= $latitudeStart ?>,
    "longitude": <?= $longitudeStart ?>
  },
  "additionalProperty": [
    {
      "@type": "PropertyValue",
      "name": "Punto final recomendado",
      "value": "Latitud: <?= $latitudeEnd ?>, Longitud: <?= $longitudeEnd ?>"
    },
    {
      "@type": "PropertyValue",
      "name": "Atracciones principales",
      "value": "Piscinas, toboganes y juegos acuáticos"
    },
    {
      "@type": "PropertyValue",
      "name": "Duración de visita",
      "value": "Medio día a un día completo"
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/gorliz"
  ]
}
</script>
