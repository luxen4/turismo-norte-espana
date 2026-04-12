<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/deba/";
$schemaTitle = "Deba, Gipuzkoa";
$schemaDescription = "Descubre Deba, Gipuzkoa: playas, acantilados espectaculares, flysch y rutas costeras en la costa del País Vasco.";

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
      "name": "Gipuzkoa",
      "item": "https://alayag82.kesug.com/turismo-norte-espana/gipuzkoa/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Deba",
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
  "name": "Lugares de interés en Deba",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Deba",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-deba/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Flysch de Deba",
      "url": "<?= $schemaUrl ?>lugares-interes/flysch-deba/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Acantilados de Deba",
      "url": "<?= $schemaUrl ?>lugares-interes/acantilados-de-deba/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Casco histórico de Deba",
      "url": "<?= $schemaUrl ?>lugares-interes/casco-historico/"
    }
  ]
}
</script>