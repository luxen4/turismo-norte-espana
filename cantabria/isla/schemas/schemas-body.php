<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/isla/";
$schemaTitle = "Isla, Cantabria";
$schemaDescription = "Descubre Isla, Cantabria: playas, acantilados, rutas y gastronomía en la costa del Cantábrico.";

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
      "name": "Cantabria",
      "item": "https://alayag82.kesug.com/turismo-norte-espana/cantabria/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Isla",
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
  "name": "Lugares de interés en Isla",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de los Barcos",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-los-barcos/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Playa del Sable",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-del-sable/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Playa de Arnadal",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-arnadal/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Acantilados de Quejo",
      "url": "<?= $schemaUrl ?>lugares-interes/acantilados-de-quejo/"
    }
  ]
}
</script>