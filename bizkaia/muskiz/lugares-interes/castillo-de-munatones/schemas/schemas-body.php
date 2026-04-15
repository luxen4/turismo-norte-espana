<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Castillo de Muñatones - Monumento Histórico en Muskiz, Bizkaia";
$schemaDescription  = $schemaDescription  ?? "El Castillo de Muñatones en Muskiz es una fortaleza histórica del siglo XV, declarada Bien de Interés Cultural y ejemplo destacado del patrimonio arquitectónico vasco.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz/lugares-interes/castillo-de-munatones";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/castillo-munatones.jpg";
$schemaAddress      = $schemaAddress      ?? [
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
    "latitude": 43.3238,
    "longitude": -3.1205
  },
  "touristType": [
    "Turismo cultural",
    "Turismo histórico",
    "Arquitectura medieval",
    "Patrimonio de Bizkaia"
  ],
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Visitas guiadas (previa reserva)",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Declarado Bien de Interés Cultural",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Fortaleza medieval",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural y paisajístico",
      "value": true
    }
  ],
  "isAccessibleForFree": false,
  "keywords": "Castillo de Muñatones, Muskiz Bizkaia, monumento histórico, patrimonio Bizkaia, arquitectura medieval, fortaleza defensiva",
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Saturday",
      "Sunday"
    ],
    "opens": "10:00",
    "closes": "14:00"
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $schemaUrl ?>"
  },
  "sameAs": [
    "https://turismo.euskadi.eus/es/monumentos/castillo-de-munatones/",
    "https://es.wikipedia.org/wiki/Castillo_de_Mu%C3%B1atones"
  ]
}
</script>
