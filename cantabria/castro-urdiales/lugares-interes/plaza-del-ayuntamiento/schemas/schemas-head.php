<?php
// Variables para el schema
$schemaTitle = "Plaza del Ayuntamiento - Castro Urdiales";
$schemaDescription = "Descubre la Plaza del Ayuntamiento en Castro Urdiales, un lugar emblemático en el centro histórico de la ciudad que acoge eventos culturales y ofrece un entorno lleno de historia.";
$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/castro-urdiales/lugares-interes/plaza-ayuntamiento"; // Cambia por la URL real
$schemaImage = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/plaza-ayuntamiento-1.jpg"; // Cambia por la URL real de la imagen principal
$schemaAddress = [
    "@type" => "PostalAddress",
    "streetAddress" => "Plaza del Ayuntamiento, s/n",
    "addressLocality" => "Castro Urdiales",
    "addressRegion" => "Cantabria",
    "postalCode" => "39700",
    "addressCountry" => "ES"
];
$schemaContact = "+34 942 78 29 00";
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
  "telephone": "<?= $schemaContact ?>",
  "sameAs": [
    "https://www.castro-urdiales.net"
  ]
}
</script>
