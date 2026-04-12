<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/ibarrangelu/";
$schemaTitle = "Ibarrangelu, Bizkaia";
$schemaDescription = "Descubre Ibarrangelu, Bizkaia: playas salvajes como Laga y Laida, naturaleza en la Reserva de Urdaibai y paisajes únicos en la costa del País Vasco.";

?>

<!-- Breadcrumbs -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Inicio",
      "item": "https://alayag82.kesug.com/turismo-norte-espana/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Bizkaia",
      "item": "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Ibarrangelu",
      "item": "<?= $schemaUrl ?>"
    }
  ]
}
</script>

<!-- Página -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "<?= $schemaTitle ?>",
  "description": "<?= $schemaDescription ?>",
  "url": "<?= $schemaUrl ?>"
}
</script>

<!-- Lugares destacados -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Lugares de interés en Ibarrangelu",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Laga",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-laga/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Playa de Laida",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-laida/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Reserva de la Biosfera de Urdaibai",
      "url": "<?= $schemaUrl ?>lugares-interes/urdaibai/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Miradores de Ibarrangelu",
      "url": "<?= $schemaUrl ?>lugares-interes/miradores-ibarrangelu/"
    }
  ]
}
</script>