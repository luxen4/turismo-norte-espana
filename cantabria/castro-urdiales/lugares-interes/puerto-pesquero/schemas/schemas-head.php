<?php
// schemas-head.php para Puerto Pesquero de Castro Urdiales

// Definir variables con valores por defecto si no están establecidas
$lugar = $lugar ?? 'Puerto Pesquero de Castro Urdiales';
$description = $description_content ?? 'Descubre el Puerto Pesquero de Castro Urdiales, un lugar emblemático de la costa cántabra con tradición marinera, gastronomía y actividades náuticas.';
$url = $url ?? "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/puerto-pesquero-castro-urdiales";
$image1 = PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG . "/puerto-castro-urdiales-1.jpg";
$image2 = PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG . "/puerto-castro-urdiales-2.jpg";
$image3 = PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES_IMG . "/puerto-castro-urdiales-3.jpg";
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "<?= htmlspecialchars($lugar, ENT_QUOTES) ?>",
  "description": "<?= htmlspecialchars($description, ENT_QUOTES) ?>",
  "image": [
    "<?= $image1 ?>",
    "<?= $image2 ?>",
    "<?= $image3 ?>"
  ],
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
  },
  "telephone": "+34 942 85 90 65",
  "sameAs": [
    "https://www.turismodecantabria.com/",
    "https://www.castrourdiales.es/"
  ]
}
</script>
