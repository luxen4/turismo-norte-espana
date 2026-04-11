<?php

$schemaUrl = "https://alayag82.kesug.com/turismo-norte-espana/cantabria/santona/";
$schemaTitle = "Santoña, Cantabria";
$schemaDescription = "Descubre Santoña, Cantabria: marismas, playas, el Monte Buciero y naturaleza en uno de los entornos más ricos del norte de España.";

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
      "name": "Santoña",
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
  "name": "Lugares de interés en Santoña",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Playa de Berria",
      "url": "<?= $schemaUrl ?>lugares-interes/playa-de-berria/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Monte Buciero",
      "url": "<?= $schemaUrl ?>lugares-interes/monte-buciero/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Faro del Caballo",
      "url": "<?= $schemaUrl ?>lugares-interes/faro-del-caballo/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Marismas de Santoña",
      "url": "<?= $schemaUrl ?>lugares-interes/marismas-de-santona/"
    }
  ]
}
</script>