<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/bizkaia/sopelana/";
$schemaTitle = "Sopelana, Bizkaia";
$schemaDescription = "Descubre Sopelana, Bizkaia: sus playas salvajes, acantilados espectaculares y uno de los mejores destinos de surf de la costa del País Vasco.";

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
      "name": "Sopelana",
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
  "name": "Lugares de interés en Sopelana",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Sopelana",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-sopelana/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Acantilados de Sopelana",
      "url": "<?= $schemaUrl ?>lugares-interes/acantilados-de-sopelana/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Zonas de surf de Sopelana",
      "url": "<?= $schemaUrl ?>lugares-interes/surf-sopelana/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Miradores de Sopelana",
      "url": "<?= $schemaUrl ?>lugares-interes/miradores-sopelana/"
    }
  ]
}
</script>