<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/muskiz/";
$schemaTitle = "Muskiz, Bizkaia";
$schemaDescription = "Descubre Muskiz, Bizkaia: playas, acantilados, naturaleza industrial y rutas costeras en la desembocadura del río Barbadún.";

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
      "name": "Muskiz",
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
  "name": "Lugares de interés en Muskiz",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de La Arena",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-la-arena/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Puerto de La Arena",
      "url": "<?= $schemaUrl ?>lugares-interes/puerto-de-la-arena/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Ría del Barbadún",
      "url": "<?= $schemaUrl ?>lugares-interes/ria-del-barbadun/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Acantilados de Muskiz",
      "url": "<?= $schemaUrl ?>lugares-interes/acantilados-de-muskiz/"
    }
  ]
}
</script>