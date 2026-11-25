<?php //   <!-- Structured Data (Schema.org) --> ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "WebPage",
    "name": "Playa de Deba - Información y Turismo",
    "description": "Explora la Playa de Deba, una hermosa playa en la costa vasca ideal para el surf, el senderismo y la relajación en un entorno natural impresionante.",
    "url": "<?= PATH_DOMINIO_RAIZ; ?>/playadedeba/fichas/fichaplayadedeba.php",
    "mainEntity": {
        "@type": "Place",
        "name": "Playa de Deba",
        "description": "La Playa de Deba es una playa pintoresca situada en el País Vasco, conocida por su ambiente tranquilo, olas aptas para surfistas y senderos naturales cercanos.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Deba",
            "addressRegion": "Gipuzkoa",
            "addressCountry": "España"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 43.3167,
            "longitude": -2.2167
        },
        "image": "https://example.com/path/to/deba-image.jpg",
        "url": "<?= PATH_DOMINIO_RAIZ; ?>/playadedeba/fichas/fichaplayadedeba.php"
    }
}
</script>

<script>
    //alert("Entro");
</script>