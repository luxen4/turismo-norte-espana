<?php 
$latitude  = 43.64520;  
$longitude = -1.44300; 

// Variables para el schema – Forêt Domaniale de Capbreton
$schemaTitle       = "Forêt Domaniale - Capbreton";
$schemaDescription = "La Forêt Domaniale de Capbreton es un espacio natural ideal para paseos, senderismo, picnic y turismo activo en familia, rodeado de naturaleza atlántica.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/capbreton/lugares-interes/foret-domaniale"; // Cambia por tu URL real
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/foret-domaniale-capbreton.jpg";       // Cambia por la imagen real
$schemaAddress     = [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Forêt Domaniale",
    "addressLocality" => "Capbreton",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "40130",
    "addressCountry"  => "FR"
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
  "touristType": [
    "Turismo activo",
    "Senderismo",
    "Turismo familiar",
    "Naturaleza y deporte"
  ],
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Senderos señalizados",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Áreas de picnic",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Entorno natural protegido",
      "value": true
    }
  ],
  "sameAs": [
    "https://www.capbreton.fr/"
  ],
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $schemaUrl ?>"
  }
}
</script>
