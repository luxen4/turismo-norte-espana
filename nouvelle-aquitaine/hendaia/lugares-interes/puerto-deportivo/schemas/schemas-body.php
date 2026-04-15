<?php
// Variables para el schema en el cuerpo
$schemaTitle        = $schemaTitle        ?? "Puerto Deportivo de Hendaya – Náutica y Ocio en la Costa Vasca Francesa";
$schemaDescription  = $schemaDescription  ?? "El Puerto Deportivo de Hendaya ofrece amarre para embarcaciones, actividades náuticas y zonas de ocio con vistas al mar Cantábrico. Ideal para paseos, gastronomía y turismo marítimo.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/hendaya/lugares-interes/puerto-deportivo";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/puerto-hendaya.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Quai de la Marina, s/n",
    "addressLocality" => "Hendaya",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64700",
    "addressCountry"  => "FR"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Marina",
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
    "latitude": 43.3731,
    "longitude": -1.7962
  },
  "touristType": [
    "Turismo náutico",
    "Ocio familiar",
    "Paseos marítimos",
    "Fotografía y naturaleza"
  ],
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Amarre para embarcaciones",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Restaurantes y cafeterías",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zonas de paseo y observación",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Mantenimiento y servicios náuticos",
      "value": true
    }
  ],
  "isAccessibleForFree": true,
  "keywords": "Puerto Deportivo Hendaya, Hendaya Francia, turismo náutico, paseo marítimo, ocio familiar, costa atlántica, amarre embarcaciones",
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "08:00",
    "closes": "20:00"
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $schemaUrl ?>"
  },
  "sameAs": [
    "https://www.tourisme-hendaye.fr/",
    "https://es.wikipedia.org/wiki/Hendaya#Puerto_deportivo"
  ]
}
</script>
