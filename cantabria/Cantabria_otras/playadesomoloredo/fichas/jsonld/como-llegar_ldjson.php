<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristDestination",
  "name": "Playa de Somo - Loredo",
  "description": "Cómo llegar a la Playa de Somo y Loredo en Ribamontán al Mar, Cantabria. Información sobre transporte, accesibilidad, aparcamiento y rutas recomendadas.",
  "url": "https://<?= $_SERVER['SERVER_NAME'] ?>/Blog_Playas2026/cantabria/somo-loredo/fichas/como-llegar-playa-de-somo-loredo-cantabria.php",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 43.4150,
    "longitude": -3.6430
  },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Ribamontán al Mar",
    "addressRegion": "Cantabria",
    "postalCode": "39709",
    "addressCountry": "ES"
  },
  "hasMap": "https://www.google.com/maps/place/Playa+de+Somo/@43.4150,-3.6430,15z",
  "publicTransportAccess": [
    {
      "@type": "BusTrip",
      "provider": {
        "@type": "Organization",
        "name": "SomoBus",
        "url": "https://www.somobus.com/"
      },
      "departureStation": "Santander",
      "arrivalStation": "Somo Playa",
      "areaServed": {
        "@type": "City",
        "name": "Ribamontán al Mar"
      }
    }
  ],
  "availableTransport": [
    {
      "@type": "TravelAction",
      "name": "Coche desde Santander",
      "target": {
        "@type": "EntryPoint",
        "urlTemplate": "https://www.google.com/maps/dir/Santander/Playa+de+Somo"
      },
      "distance": "17 km",
      "estimatedTime": "PT25M"
    },
    {
      "@type": "TravelAction",
      "name": "Coche desde Bilbao",
      "target": {
        "@type": "EntryPoint",
        "urlTemplate": "https://www.google.com/maps/dir/Bilbao/Playa+de+Somo"
      },
      "distance": "75 km",
      "estimatedTime": "PT1H10M"
    },
    {
      "@type": "TravelAction",
      "name": "Ruta a pie o en bicicleta desde Somo pueblo",
      "target": {
        "@type": "EntryPoint",
        "urlTemplate": "https://<?= $_SERVER['SERVER_NAME'] ?>/ruta-costera-somo-loredo"
      },
      "distance": "1.2 km",
      "estimatedTime": "PT15M"
    }
  ],
  "parkingFacility": [
    {
      "@type": "ParkingFacility",
      "name": "Aparcamiento gratuito cercano a Playa de Somo",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Ribamontán al Mar"
      },
      "url": "https://www.google.com/maps?q=aparcamiento+somo+cantabria"
    },
    {
      "@type": "ParkingFacility",
      "name": "Parking de pago en el centro de Somo",
      "url": "https://goo.gl/maps/exampleSomoParking"
    }
  ],
  "hasPart": [
    {
      "@type": "TrainStation",
      "name": "Estación de tren más cercana: Santander",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Santander",
        "addressRegion": "Cantabria",
        "postalCode": "39001",
        "addressCountry": "ES"
      },
      "url": "https://www.renfe.com/es/es"
    }
  ],
  "accessibility": [
    {
      "@type": "AccessibilityFeature",
      "name": "Acceso para silla de ruedas",
      "description": "Rampas y pasarelas que facilitan el acceso hasta la arena, con aseos adaptados."
    },
    {
      "@type": "AccessibilityFeature",
      "name": "Transporte público accesible",
      "description": "Autobuses equipados con rampas y espacios para silla de ruedas."
    },
    {
      "@type": "AccessibilityFeature",
      "name": "Aparcamientos adaptados",
      "description": "Plazas reservadas para personas con movilidad reducida cerca de los accesos principales."
    }
  ]
}
</script>