<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle = $schemaTitle ?? "Playa de Ostende - Castro Urdiales";
$schemaDescription = $schemaDescription ?? "Explora la Playa de Ostende en Castro Urdiales, una extensa playa de arena dorada y aguas tranquilas, ideal para nadar, practicar deportes acuáticos y disfrutar del paisaje cántabro.";
$schemaUrl = $schemaUrl ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/castro-urdiales/lugares-interes/playa-de-ostende";
$schemaImage = $schemaImage ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/playa-de-ostende-1.jpg";
$schemaAddress = $schemaAddress ?? [
    "@type" => "PostalAddress",
    "streetAddress" => "Avenida de la Playa",
    "addressLocality" => "Castro Urdiales",
    "addressRegion" => "Cantabria",
    "postalCode" => "39700",
    "addressCountry" => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Place",
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
    "latitude": 43.3879,
    "longitude": -3.2131
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duchas y baños públicos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Accesible para personas con movilidad reducida",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Chiringuitos y bares",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.turismocastrourdiales.net"
  ]
}
</script>
