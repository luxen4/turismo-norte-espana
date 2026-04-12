<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/biarritz/";
$schemaTitle = "Biarritz, Nouvelle-Aquitaine";
$schemaDescription = "Descubre Biarritz, en Nouvelle-Aquitaine: playas atlánticas, surf, acantilados y elegancia costera en uno de los destinos más icónicos del sur de Francia.";

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
      "name": "Biarritz",
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
  "name": "Lugares de interés en Biarritz",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Grande Plage de Biarritz",
      "url": "<?= $schemaUrl ?>lugares-interes/grande-plage/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Rocher de la Vierge",
      "url": "<?= $schemaUrl ?>lugares-interes/rocher-de-la-vierge/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Phare de Biarritz",
      "url": "<?= $schemaUrl ?>lugares-interes/faro-biarritz/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Cité de l’Océan",
      "url": "<?= $schemaUrl ?>lugares-interes/cite-de-locean/"
    }
  ]
}
</script>