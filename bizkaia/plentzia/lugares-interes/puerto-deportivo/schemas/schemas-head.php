<?php 
$latitude  = 43.4492;  // Coordenadas aproximadas del puerto
$longitude = -2.9981;

// Variables para el schema – Puerto Deportivo de Plentzia
$schemaTitle       = "Puerto Deportivo de Plentzia - Plentzia";
$schemaDescription = "Descubre el Puerto Deportivo de Plentzia en Bizkaia: paseos por el paseo marítimo, actividades náuticas, observación de aves y fotografía de paisajes costeros.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/plentzia/lugares-interes/puerto-deportivo";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/puerto-plentzia-1.jpg";
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Puerto Deportivo de Plentzia, s/n",
    "addressLocality" => "Plentzia",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48620",
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
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/plentzia"
  ]
}
</script>
