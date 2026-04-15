<?php 
$latitudeStart  = 43.38900;  // Coordenadas aprox. inicio del Paseo Itsaslur
$longitudeStart = -3.04500; 

$latitudeEnd    = 43.39050;  // Coordenadas aprox. final del recorrido
$longitudeEnd   = -3.04650; 

// Variables para el schema – Paseo Itsaslur
$schemaTitle       = "Paseo Itsaslur";
$schemaDescription = "Disfruta del Paseo Itsaslur en Muskiz, Bizkaia: recorrido peatonal a lo largo de la costa y entornos naturales protegidos, ideal para caminar y observar fauna y flora.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz/lugares-interes/paseo-itsaslur"; 
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/paseo-itsaslur.jpg"; 
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Paseo Itsaslur",
    "addressLocality" => "Muskiz",
    "addressRegion"   => "Bizkaia",
    "postalCode"      => "48500",
    "addressCountry"  => "ES"
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Park",
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
      "name": "Punto final recomendado",
      "value": "Latitud: <?= $latitudeEnd ?>, Longitud: <?= $longitudeEnd ?>"
    },
    {
      "@type": "PropertyValue",
      "name": "Dificultad",
      "value": "Baja"
    },
    {
      "@type": "PropertyValue",
      "name": "Duración aproximada",
      "value": "1 hora"
    }
  ],
  "sameAs": [
    "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/muskiz"
  ]
}
</script>
