<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/sonabia/";
$schemaTitle = "Sonabia, Cantabria";
$schemaDescription = "Descubre Sonabia, Cantabria: una cala salvaje entre acantilados, naturaleza virgen y el icónico Ojo del Diablo, ideal para senderismo y paisaje costero.";

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
      "name": "Sonabia",
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
  "name": "Lugares de interés en Sonabia",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Sonabia",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-sonabia/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Ojo del Diablo",
      "url": "<?= $schemaUrl ?>lugares-interes/ojo-del-diablo/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Acantilados de Sonabia",
      "url": "<?= $schemaUrl ?>lugares-interes/acantilados-de-sonabia/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Ruta de Punta Sonabia",
      "url": "<?= $schemaUrl ?>lugares-interes/punta-sonabia/"
    }
  ]
}
</script>