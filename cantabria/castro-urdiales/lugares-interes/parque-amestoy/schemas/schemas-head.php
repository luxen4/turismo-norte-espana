<?php
// Variables para el schema
$schemaTitle = "Parque Amestoy - Castro Urdiales";
$schemaDescription = "Disfruta del Parque Amestoy en Castro Urdiales, un espacio verde urbano ideal para pasear y relajarse, con áreas de juegos y zonas ajardinadas.";
$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/castro-urdiales/lugares-interes/parque-amestoy"; // Cambia por la URL real
$schemaImage = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/parque-amestoy-1.jpg"; // Cambia por la URL real de la imagen principal
$schemaAddress = [
    "@type" => "PostalAddress",
    "streetAddress" => "Avenida Amestoy, s/n",
    "addressLocality" => "Castro Urdiales",
    "addressRegion" => "Cantabria",
    "postalCode" => "39700",
    "addressCountry" => "ES"
];
$schemaContact = "+34 942 85 90 65"; // Si tienes otro contacto para el parque, cámbialo
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
