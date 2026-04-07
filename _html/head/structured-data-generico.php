<!-- Structured Data (Schema.org) -->
<script type="application/ld+json">
{ 
    "@context": "https://schema.org/",
    "@type": "TouristDestination",
    "name": "Playa de <?= $localidad; ?> - Información y Turismo",
    "description": "<?= $descripcion; ?>",
    "url": "<?= $url; ?>",
    "mainEntity": {
        "@type": "Place",
        "name": "Playa de <?= $localidad; ?>",
        "description": "<?= $descripcion; ?>",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "<?= $mainEntity_addressLocality; ?>",
            "addressRegion": "<?= $mainEntity_addressRegion; ?>",
            "addressCountry": "<?= $mainEntity_addressCountry; ?>"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": <?= $mainEntity_geo_latitude; ?>,
            "longitude": <?= $mainEntity_geo_longitude; ?>
        },
        "image": "<?= $mainEntity_image; ?>",
        "url": "<?= $mainEntity_url; ?>"
    }
}
</script>
