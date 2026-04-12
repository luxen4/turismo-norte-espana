<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/plentzia/";
$schemaTitle = "Plentzia, Bizkaia";
$schemaDescription = "Descubre Plentzia, Bizkaia: su playa, su casco histórico y su bahía, un entorno tranquilo en la costa del País Vasco junto al mar Cantábrico.";

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
      "name": "Plentzia",
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
  "name": "Lugares de interés en Plentzia",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Plentzia",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-plentzia/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Casco histórico de Plentzia",
      "url": "<?= $schemaUrl ?>lugares-interes/casco-historico/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Bahía de Plentzia",
      "url": "<?= $schemaUrl ?>lugares-interes/bahia-de-plentzia/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Puerto de Plentzia",
      "url": "<?= $schemaUrl ?>lugares-interes/puerto-plentzia/"
    }
  ]
}
</script>