<?php
// Variables para el schema del Mirador de Cotolino
$schemaTitle = "Mirador de Cotolino - Castro Urdiales";
$schemaDescription = "El Mirador de Cotolino en Castro Urdiales es un punto panorámico ideal para contemplar el mar Cantábrico, disfrutar de paseos tranquilos y admirar espectaculares atardeceres.";
$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/castro-urdiales/lugares-interes/mirador-de-cotolino"; // Cambia por la URL real
$schemaImage = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/mirador-de-cotolino-1.jpg"; // Imagen principal del mirador
$schemaAddress = [
    "@type" => "PostalAddress",
    "streetAddress" => "Mirador de Cotolino",
    "addressLocality" => "Castro Urdiales",
    "addressRegion" => "Cantabria",
    "postalCode" => "39700",
    "addressCountry" => "ES"
];
$schemaContact = "+34 942 85 90 65";
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
    "https://www.turismocastrourdiales.net"
  ]
}
</script>
