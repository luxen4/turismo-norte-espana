<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/hendaya/";
$schemaTitle = "Hendaya, Nouvelle-Aquitaine";
$schemaDescription = "Descubre Hendaya, en Nouvelle-Aquitaine: su gran playa atlántica, el puerto, el río Bidasoa y su ambiente vasco-francés junto a la frontera con España.";

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
      "name": "Hendaya",
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
  "name": "Lugares de interés en Hendaya",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Hendaya",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-hendaya/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Puerto de Hendaya",
      "url": "<?= $schemaUrl ?>lugares-interes/puerto/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Río Bidasoa",
      "url": "<?= $schemaUrl ?>lugares-interes/rio-bidasoa/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Faro de Abbadia",
      "url": "<?= $schemaUrl ?>lugares-interes/faro-abbadia/"
    }
  ]
}
</script>