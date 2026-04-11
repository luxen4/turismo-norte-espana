<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/castro-urdiales/";
$schemaTitle = "Castro Urdiales, Cantabria";
$schemaDescription = "Descubre Castro Urdiales, Cantabria: playas, casco histórico, rutas costeras y patrimonio junto al mar Cantábrico.";

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
      "name": "Castro Urdiales",
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
  "name": "Lugares de interés en Castro Urdiales",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Ostende",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-ostende/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Playa de Brazomar",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-brazomar/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Castillo de Santa Ana",
      "url": "<?= $schemaUrl ?>lugares-interes/castillo-de-santa-ana/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Iglesia de Santa María de la Asunción",
      "url": "<?= $schemaUrl ?>lugares-interes/iglesia-de-santa-maria/"
    }
  ]
}
</script>