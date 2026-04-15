<?php 
$latitude  = 43.48690;  
$longitude = -1.56460; 

// Variables para el schema – Rocher de la Vierge (Biarritz)
$schemaTitle       = "Rocher de la Vierge - Biarritz";
$schemaDescription = "Descubre el Rocher de la Vierge en Biarritz, un icónico islote rocoso unido por una pasarela metálica, con vistas espectaculares al océano Atlántico.";
$schemaUrl         = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/biarritz/lugares-interes/rocher-de-la-vierge";
$schemaImage       = "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/images/rocher-de-la-vierge-biarritz.jpg";
$schemaAddress     = [
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
    "address"  => $schemaAddress,
    "geo" => [
        "@type"    => "GeoCoordinates",
        "latitude" => $latitude,
        "longitude"=> $longitude
    ],
    "amenityFeature" => [
        [
            "@type" => "LocationFeatureSpecification",
            "name"  => "Pasarela peatonal sobre el mar",
            "value" => true
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name"  => "Mirador panorámico al Atlántico",
            "value" => true
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name"  => "Monumento emblemático de Biarritz",
            "value" => true
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name"  => "Zona de paseo y fotografía",
            "value" => true
        ]
    ],
    "sameAs" => [
        "https://alayag82.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/biarritz"
    ]
];
?>

<script type="application/ld+json">
<?= json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>