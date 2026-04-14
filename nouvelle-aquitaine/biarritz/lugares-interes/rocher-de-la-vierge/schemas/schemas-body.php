<?php
// Variables para el schema en el cuerpo (reutilizamos las del head si están definidas)
$schemaTitle       = $schemaTitle       ?? "Rocher de la Vierge - Biarritz";
$schemaDescription = $schemaDescription ?? "Descubre el Rocher de la Vierge en Biarritz, un emblemático islote rocoso unido por una pasarela metálica con vistas espectaculares al océano Atlántico.";
$schemaUrl         = $schemaUrl         ?? "https://www.tu-dominio.com/biarritz/lugares-interes/rocher-de-la-vierge";
$schemaImage       = $schemaImage       ?? "https://www.tu-dominio.com/images/rocher-de-la-vierge-biarritz.jpg";
$schemaAddress     = $schemaAddress     ?? [
    "@type"           => "PostalAddress",
    "streetAddress"   => "Rocher de la Vierge",
    "addressLocality" => "Biarritz",
    "addressRegion"   => "Nouvelle-Aquitaine",
    "postalCode"      => "64200",
    "addressCountry"  => "FR"
];

$schemaData = [
    "@context" => "https://schema.org",
    "@type"    => "TouristAttraction",
    "name"     => $schemaTitle,
    "description" => $schemaDescription,
    "url"      => $schemaUrl,
    "image"    => $schemaImage,
    "address"  => [
        "@type" => "PostalAddress",
        "streetAddress"   => $schemaAddress['streetAddress'],
        "addressLocality" => $schemaAddress['addressLocality'],
        "addressRegion"   => $schemaAddress['addressRegion'],
        "postalCode"      => $schemaAddress['postalCode'],
        "addressCountry"  => $schemaAddress['addressCountry'],
    ],
    "geo" => [
        "@type"    => "GeoCoordinates",
        "latitude" => 43.4869,
        "longitude"=> -1.5646,
    ],
    "amenityFeature" => [
        [
            "@type" => "LocationFeatureSpecification",
            "name"  => "Pasarela peatonal al islote",
            "value" => true
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name"  => "Vistas panorámicas al océano Atlántico",
            "value" => true
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name"  => "Monumento histórico de Biarritz",
            "value" => true
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name"  => "Zona de paseo y fotografía",
            "value" => true
        ]
    ],
    "sameAs" => [
        "https://www.tu-dominio.com/biarritz"
    ]
];
?>

<script type="application/ld+json">
<?= json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>