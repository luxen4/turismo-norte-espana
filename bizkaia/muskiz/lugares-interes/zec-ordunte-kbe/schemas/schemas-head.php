<?php 
$latitudeStart  = 43.12000;  // Coordenadas aprox. inicio del ZEC Ordunte KBE
$longitudeStart = -3.20000; 

$latitudeEnd    = 43.13500;  // Coordenadas aprox. final del recorrido
$longitudeEnd   = -3.21500; 

// Variables para el schema – ZEC Ordunte KBE
$schemaTitle       = "ZEC Ordunte KBE";
$schemaDescription = "Explora la Zona Especial de Conservación Ordunte KBE: un enclave natural protegido con gran biodiversidad, rutas de montaña y paisajes únicos en Bizkaia.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz/lugares-interes/zec-ordunte-kbe"; 
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/zec-ordunte-kbe.jpg"; 
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "ZEC Ordunte KBE",
    "addressLocality" => "Muskiz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48500",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Park",
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
      "name": "Dificultad",
      "value": "Media"
    },
    {
      "@type": "PropertyValue",
      "name": "Duración aproximada",
      "value": "3-5 horas"
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz"
  ]
}
</script>
