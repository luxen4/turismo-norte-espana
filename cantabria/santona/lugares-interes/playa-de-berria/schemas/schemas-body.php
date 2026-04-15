<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle       = $schemaTitle       ?? "Playa de Berria - Santona";
$schemaDescription = $schemaDescription ?? "Descubre la Playa de Berria en Santona, Cantabria: más de 2 km de arena fina junto a las marismas del río Asón, ideal para el surf, el baño tranquilo y el senderismo costero.";
$schemaUrl         = $schemaUrl         ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/santona/lugares-interes/playa-de-berria";
$schemaImage       = $schemaImage       ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/playa-de-berria-1.jpg";
$schemaAddress     = $schemaAddress     ?? [
    "@type"          => "PostalAddress",
    "streetAddress"  => "Playa de Berria",
    "addressLocality"=> "Santona",
    "addressRegion"  => "Cantabria",
    "postalCode"     => "39740",
    "addressCountry" => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Beach",
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
    "latitude": 43.4167,
    "longitude": -3.4533
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Vigilancia y socorrismo",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duchas y baños públicos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aparcamiento gratuito",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.turismosantona.net"
  ]
}
</script>
