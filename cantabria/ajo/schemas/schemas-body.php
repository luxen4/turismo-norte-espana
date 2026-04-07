<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/ajo/";
$schemaTitle = "Ajo, Cantabria";
$schemaDescription = "Descubre Ajo, Cantabria: playas, acantilados, rutas y naturaleza en la costa del Cantábrico.";

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
      "name": "Ajo",
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
  "name": "Lugares de interés en Ajo",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Antuerta",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-antuerta/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Playa de Cuberris",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-cuberris/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Mirador del Cabo",
      "url": "<?= $schemaUrl ?>lugares-interes/mirador-del-cabo/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Faro de Ajo",
      "url": "<?= $schemaUrl ?>lugares-interes/faro-de-ajo/"
    }
  ]
}
</script>