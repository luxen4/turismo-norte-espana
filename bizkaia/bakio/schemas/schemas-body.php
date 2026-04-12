<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/bakio/";
$schemaTitle = "Bakio, Bizkaia";
$schemaDescription = "Descubre Bakio, Bizkaia: playas, surf, viñedos de txakoli y paisajes espectaculares en la costa del País Vasco.";

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
      "name": "Bakio",
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
  "name": "Lugares de interés en Bakio",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Bakio",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-bakio/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "San Juan de Gaztelugatxe",
      "url": "<?= $schemaUrl ?>lugares-interes/gaztelugatxe/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Miradores de Bakio",
      "url": "<?= $schemaUrl ?>lugares-interes/miradores-de-bakio/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Bodegas de Txakoli",
      "url": "<?= $schemaUrl ?>lugares-interes/bodegas-txakoli/"
    }
  ]
}
</script>