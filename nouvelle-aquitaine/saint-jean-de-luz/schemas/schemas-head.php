<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/francia/nouvelle-aquitaine/saint-jean-de-luz/";
$schemaTitle = "Saint-Jean-de-Luz, Nouvelle-Aquitaine";
$schemaDescription = "Descubre Saint-Jean-de-Luz, en Nouvelle-Aquitaine: su bahía, puerto pesquero, casco histórico y su encanto vasco-francés junto al Atlántico.";

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
      "name": "Saint-Jean-de-Luz",
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
  "name": "Lugares de interés en Saint-Jean-de-Luz",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Saint-Jean-de-Luz",
      "url": "<?= $schemaUrl ?>lugares-interes/playa/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Puerto de Saint-Jean-de-Luz",
      "url": "<?= $schemaUrl ?>lugares-interes/puerto/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Casco histórico",
      "url": "<?= $schemaUrl ?>lugares-interes/casco-historico/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Bahía de Saint-Jean-de-Luz",
      "url": "<?= $schemaUrl ?>lugares-interes/bahia/"
    }
  ]
}
</script>