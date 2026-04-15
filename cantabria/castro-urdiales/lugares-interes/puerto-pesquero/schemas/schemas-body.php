<?php
// schemas-body.php para Puerto Pesquero de Castro Urdiales

// Definir variables con valores por defecto si no están establecidas
$lugar = $lugar ?? 'Puerto Pesquero de Castro Urdiales';
$description = $description_content ?? 'Disfruta del Puerto Pesquero de Castro Urdiales, un punto clave para la pesca, la navegación y la gastronomía local en Cantabria.';
$url = $url ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/puerto-pesquero-castro-urdiales";
$image1 = PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG . "/puerto-castro-urdiales-2.jpg";
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Place",
  "name": "<?= htmlspecialchars($lugar, ENT_QUOTES) ?>",
  "description": "<?= htmlspecialchars($description, ENT_QUOTES) ?>",
  "image": "<?= $image1 ?>",
  "url": "<?= $url ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Muelle, s/n",
    "addressLocality": "Castro Urdiales",
    "addressRegion": "Cantabria",
    "postalCode": "39700",
    "addressCountry": "ES"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.3828,
    "longitude": -3.2196
  }
}
</script>
