<?php
// Variables para el schema en el body
$schemaTitle       = "Corniche Basque – Paseos y Vistas en Hendaia";
$schemaDescription = "La Corniche Basque en Hendaia es un paseo costero con impresionantes vistas al mar Cantábrico, acantilados y la costa vasca-francesa. Ideal para caminar, hacer deporte o disfrutar de la naturaleza.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/hendaya/lugares-interes/corniche-basque";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/corniche-basque-hendaya.jpg";
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Corniche Basque, s/n",
    "addressLocality" => "Hendaya",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64700",
    "addressCountry"  => "FR"
];
$latitude  = 43.3692;
$longitude = -1.7985;
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
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
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Paseos panorámicos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona para deporte y running",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Observación de la costa y acantilados",
      "value": true
    }
  ],
  "isAccessibleForFree": true,
  "touristType": [
    "Turismo de naturaleza",
    "Turismo costero",
    "Turismo activo"
  ],
  "keywords": "Corniche Basque, Hendaia, paseo costero, turismo Francia, acantilados, costa vasca, vistas panorámicas",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $schemaUrl ?>"
  },
  "sameAs": [
    "https://www.tourisme-hendaye.fr/",
    "https://es.wikipedia.org/wiki/Hendaya#Corniche_Basque"
  ]
}
</script>
