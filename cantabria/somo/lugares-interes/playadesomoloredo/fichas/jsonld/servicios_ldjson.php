<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristDestination",
  "name": "Playa de Ostende",
  "description": "Playa equipada con chiringuitos, alquiler de material deportivo, baños públicos y aparcamiento. Ideal para disfrutar del turismo costero en Castro Urdiales, Cantabria.",
  "touristType": {
    "@type": "Audience",
    "audienceType": ["Turistas", "Familias", "Surfistas", "Viajeros gastronómicos"]
  },
  "location": {
    "@type": "Place",
    "name": "Playa de Ostende",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Castro Urdiales",
      "addressRegion": "Cantabria",
      "addressCountry": "ES"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 43.459388,
      "longitude": -3.859125
    }
  },
  "amenityFeature": [
    {
      "@type": "LocationFeatureSpecification",
      "name": "Chiringuitos y Restaurantes",
      "description": "Restaurantes frente al mar que ofrecen gastronomía cántabra como mariscos, rabas y sidra.",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Alquiler de equipamiento",
      "description": "Sombrillas, tumbonas, tablas de surf, paddle surf y kayaks.",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Duchas y Baños Públicos",
      "description": "Instalaciones higiénicas para mayor comodidad y accesibilidad.",
      "value": true
    },
    {
      "@type": "LocationFeatureSpecification",
      "name": "Aparcamiento cercano",
      "description": "Zonas gratuitas y de pago, con plazas adaptadas para personas con movilidad reducida.",
      "value": true
    }
  ],
  "image": [
    "https://<?= $_SERVER['SERVER_NAME'] ?>/assets/img/servicios/chiringuitos.jpg",
    "https://<?= $_SERVER['SERVER_NAME'] ?>/assets/img/servicios/alquiler.jpg",
    "https://<?= $_SERVER['SERVER_NAME'] ?>/assets/img/servicios/duchas.jpg",
    "https://<?= $_SERVER['SERVER_NAME'] ?>/assets/img/servicios/aparcamiento.jpg"
  ]
}
</script>