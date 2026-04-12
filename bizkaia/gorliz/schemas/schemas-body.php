<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/gorliz/";
$schemaTitle = "Gorliz, Bizkaia";
$schemaDescription = "Descubre Gorliz, Bizkaia: playa familiar, naturaleza, rutas costeras y la bahía de Plentzia en la costa del País Vasco.";

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
      "name": "Gorliz",
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
  "name": "Lugares de interés en Gorliz",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Gorliz",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-gorliz/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Faro de Gorliz",
      "url": "<?= $schemaUrl ?>lugares-interes/faro-de-gorliz/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Ruta del Faro de Gorliz",
      "url": "<?= $schemaUrl ?>lugares-interes/ruta-faro-gorliz/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Bahía de Plentzia",
      "url": "<?= $schemaUrl ?>lugares-interes/bahia-de-plentzia/"
    }
  ]
}
</script>