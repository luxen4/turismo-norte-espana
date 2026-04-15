<?php 
$latitudeStart  = 43.42290;  // Coordenadas aprox. Playa de Laga (inicio)
$longitudeStart = -2.65030; 

$latitudeEnd    = 43.42440;  // Coordenadas aprox. Cabo Ogoño (final)
$longitudeEnd   = -2.65280; 

// Variables para el schema – Ruta senderista Laga - Ogoño
$schemaTitle       = "Ruta Senderista Laga - Ogoño - Ibarrangelu";
$schemaDescription = "Recorre la ruta senderista que une la Playa de Laga con el Cabo Ogoño en Ibarrangelu, Bizkaia: un itinerario espectacular dentro de la Reserva de Urdaibai, con vistas al mar Cantábrico, acantilados y naturaleza en estado puro.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/ibarrangelu/lugares-interes/ruta-senderista-laga-ogono"; // Sustituye por la URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/ruta-laga-ogono.jpg"; // Imagen representativa
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Playa de Laga - Cabo Ogoño",
    "addressLocality" => "Ibarrangelu",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48311",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HikingTrail",
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
      "name": "Punto final",
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
      "value": "2 horas (ida y vuelta)"
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/ibarrangelu"
  ]
}
</script>
