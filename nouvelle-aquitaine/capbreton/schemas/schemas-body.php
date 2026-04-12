<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/capbreton/";
$schemaTitle = "Capbreton, Nouvelle-Aquitaine";
$schemaDescription = "Descubre Capbreton, en Nouvelle-Aquitaine: playas atlánticas, surf, puerto pesquero y ambiente costero en el suroeste de Francia.";

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
      "name": "Francia",
      "item": "https://alayag82.kesug.com/turismo-norte-espana/francia/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Nouvelle-Aquitaine",
      "item": "https://alayag82.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Capbreton",
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
  "name": "Lugares de interés en Capbreton",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa Centrale de Capbreton",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-centrale/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Puerto de Capbreton",
      "url": "<?= $schemaUrl ?>lugares-interes/puerto/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Estacade de Capbreton",
      "url": "<?= $schemaUrl ?>lugares-interes/estacade/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Plage de la Savane",
      "url": "<?= $schemaUrl ?>lugares-interes/plage-de-la-savane/"
    }
  ]
}
</script>