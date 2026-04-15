<?php 
$latitude  = 43.32380;  
$longitude = -3.12050;  

// Variables para el schema – Castillo de Muñatones (Bizkaia)
$schemaTitle       = "Castillo de Muñatones - Muskiz, Bizkaia";
$schemaDescription = "El Castillo de Muñatones en Muskiz es una fortaleza histórica que data del siglo XV, símbolo del patrimonio cultural y arquitectónico vasco.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz/lugares-interes/castillo-de-munatones"; // Sustituye con tu URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/castillo-de-munatones.jpg";             // Sustituye con tu imagen real
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Barrio San Julián, s/n",
    "addressLocality" => "Muskiz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48550",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LandmarksOrHistoricalBuildings",
  "name": "<?= $schemaTitle ?>",
  "alternateName": "Castillo de los Muñatones",
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
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "foundingDate": "1450",
  "isAccessibleForFree": true,
  "keywords": "Castillo de Muñatones, Muskiz, Bizkaia, monumentos históricos, turismo cultural, patrimonio País Vasco",
  "touristType": "Turismo cultural e histórico",
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Saturday",
      "Sunday"
    ],
    "opens": "10:00",
    "closes": "18:00"
  },
  "sameAs": [
    "https://es.wikipedia.org/wiki/Castillo_de_Mu%C3%B1atones",
    "https://turismo.euskadi.eus/es/castillo-de-munatones/",
    "https://es.wikiloc.com/rutas-senderismo/muskiz-castillo-de-munatones-12345678"
  ],
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $schemaUrl ?>"
  }
}
</script>
