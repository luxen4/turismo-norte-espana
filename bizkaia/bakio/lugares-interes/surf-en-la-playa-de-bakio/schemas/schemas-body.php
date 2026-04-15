<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle        = $schemaTitle        ?? "Surf en la Playa de Bakio";
$schemaDescription  = $schemaDescription  ?? "Vive la experiencia de surfear en la Playa de Bakio, Bizkaia: una de las mecas del surf en el País Vasco, con olas perfectas para principiantes y surfistas experimentados.";
$schemaUrl          = $schemaUrl          ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/bakio/actividades/surf-playa-de-bakio";
$schemaImage        = $schemaImage        ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/surf-playa-de-bakio.jpg";
$schemaAddress      = $schemaAddress      ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Playa de Bakio",
    "addressLocality" => "Bakio",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48130",
    "addressCountry"  => "ES"
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
    "latitude": 43.42970,
    "longitude": -2.81210
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Escuelas de surf",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Alquiler de tablas y neoprenos",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Olas para todos los niveles",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Zona de duchas y vestuarios",
      "value": true
    }
  ],
  "sameAs": [
    "https://turismo.euskadi.eus/es/playa-de-bakio/"
  ]
}
</script>
