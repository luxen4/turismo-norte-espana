<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristDestination",
  "name": "Playa de Ostende",
  "description": "Cómo llegar a la Playa de Ostende en Castro Urdiales, Cantabria. Información sobre transporte, accesibilidad, aparcamiento y rutas recomendadas.",
  "url": "https://<?= $_SERVER['SERVER_NAME'] ?>/turismo-norte-espana/cantabria/playadeostende/fichas/como-llegar-playa-de-ostende-cantabria.php",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.459388,
    "longitude": -3.859125
  },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Castro Urdiales",
    "addressRegion": "Cantabria",
    "postalCode": "39700",
    "addressCountry": "ES"
  },
  "hasMap": "https://www.google.com/maps/place/Playa+de+Ostende/@43.459388,-3.8591253,15z",
  "publicTransportAccess": [
    {
      "@type": "BusTrip",
      "provider": {
        "@type": "Organization",
        "name": "Bizkaibus",
        "url": "https://www.bizkaibus.eus/"
      },
      "departureStation": "Bilbao",
      "arrivalStation": "Ostende Playa",
      "areaServed": {
        "@type": "City",
        "name": "Castro Urdiales"
      }
    }
  ],
  "availableTransport": [
    {
      "@type": "TravelAction",
      "name": "Coche desde Santander",
      "target": {
        "@type": "EntryPoint",
        "urlTemplate": "https://www.google.com/maps/dir/Santander/Playa+de+Ostende"
      },
      "distance": "75 km",
      "estimatedTime": "PT50M"
    },
    {
      "@type": "TravelAction",
      "name": "Coche desde Bilbao",
      "target": {
        "@type": "EntryPoint",
        "urlTemplate": "https://www.google.com/maps/dir/Bilbao/Playa+de+Ostende"
      },
      "distance": "35 km",
      "estimatedTime": "PT30M"
    },
    {
      "@type": "TravelAction",
      "name": "Ruta a pie o en bicicleta desde el centro de Castro Urdiales",
      "target": {
        "@type": "EntryPoint",
        "urlTemplate": "https://<?= $_SERVER['SERVER_NAME'] ?>/ruta-costera-ostende"
      },
      "distance": "1.5 km",
      "estimatedTime": "PT20M"
    }
  ],
  "parkingFacility": [
    {
      "@type": "ParkingFacility",
      "name": "Aparcamiento gratuito cercano a Playa de Ostende",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Castro Urdiales"
      },
      "url": "https://www.google.com/maps?q=aparcamiento+ostende+castro+urdiales"
    },
    {
      "@type": "ParkingFacility",
      "name": "Parking de pago en Avda. de la Playa",
      "url": "https://goo.gl/maps/LiEF9N97XWj6Gw9o6"
    }
  ],
  "hasPart": [
    {
      "@type": "TrainStation",
      "name": "Estación de tren más cercana: Bilbao-Abando",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Bilbao",
        "addressRegion": "País Vasco",
        "postalCode": "48008",
        "addressCountry": "ES"
      },
      "url": "https://www.renfe.com/es/es/cercanias/cercanias-bilbao"
    }
  ],
  "accessibility": [
    {
      "@type": "AccessibilityFeature",
      "name": "Acceso para silla de ruedas",
      "description": "La Playa de Ostende dispone de rampas de acceso, pasarelas hasta la arena, y aseos adaptados."
    },
    {
      "@type": "AccessibilityFeature",
      "name": "Transporte público accesible",
      "description": "Autobuses Bizkaibus equipados con rampas y espacios para silla de ruedas."
    },
    {
      "@type": "AccessibilityFeature",
      "name": "Aparcamientos adaptados",
      "description": "Plazas reservadas para personas con movilidad reducida cerca del acceso principal."
    }
  ]
}
</script>