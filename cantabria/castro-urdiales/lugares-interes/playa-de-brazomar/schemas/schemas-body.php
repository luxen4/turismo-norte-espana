<?php
$schemaTitle = $schemaTitle ?? "Playa de Brazomar - Castro Urdiales";
$schemaDescription = $schemaDescription ?? "Descubre la Playa de Brazomar en Castro Urdiales, una playa urbana de arena dorada y aguas tranquilas, perfecta para el turismo familiar y actividades acuáticas.";
$schemaUrl = $schemaUrl ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/castro-urdiales/lugares-interes/playa-de-brazomar";
$schemaImage = $schemaImage ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/playa-de-brazomar-1.jpg";
$schemaAddress = $schemaAddress ?? [
    "@type" => "PostalAddress",
    "streetAddress" => "Paseo Marítimo de Brazomar",
    "addressLocality" => "Castro Urdiales",
    "addressRegion" => "Cantabria",
    "postalCode" => "39700",
    "addressCountry" => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>",
  "image": "<?= $schemaImage ?>",
  "isAccessibleForFree": true,
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $schemaUrl ?>"
  },
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
    "latitude": 43.3842,
    "longitude": -3.2165
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duchas y baños públicos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Accesibilidad para personas con movilidad reducida",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Alquiler de hamacas y sombrillas",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Chiringuitos y bares",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona para deportes acuáticos",
      "value": true
    }
  ],
  "sameAs": [
    "https://es.wikipedia.org/wiki/Castro-Urdiales",
    "https://www.turismodecantabria.com/descubrela/103-playas/497-playa-de-brazomar"
  ]
}
</script>
