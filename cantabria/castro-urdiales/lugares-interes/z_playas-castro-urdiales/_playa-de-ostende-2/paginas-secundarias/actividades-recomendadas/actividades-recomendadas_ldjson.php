<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristDestination",
  "name": "Playa de Ostende",
  "description": "Descubre las mejores actividades turísticas y deportivas en la Playa de Ostende en Castro Urdiales, Cantabria.",
  "image": "https://tu-dominio.com/imagenes/ostende-playa-cantabria.jpg",
  "url": "https://<?= $_SERVER['SERVER_NAME'] ?>/turismo-norte-espana/<?= $region_minuscula ?>/<?= $localidad_minuscula; ?>/fichas/playa-de-<?= $nombre_playa_minuscula . "-" . $localidad_minuscula . "-" . $region_minuscula ?>.php",
  "touristType": {
    "@type": "Audience",
    "audienceType": ["Turistas", "Surfistas", "Aventureros", "Familias"]
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "43.3866",
    "longitude": "-3.2170"
  },
  "containsPlace": [
    {
      "@type": "SportsActivityLocation",
      "name": "Zona de Surf y Paddle Surf",
      "sport": ["Surf", "Paddle Surf", "Windsurf"],
      "url": "https://escueladesurfcastro.com/"
    },
    {
      "@type": "SportsActivityLocation",
      "name": "Zonas deportivas",
      "sport": ["Vóley Playa", "Fútbol", "Yoga"],
      "url": "https://<?= $_SERVER['SERVER_NAME'] ?>/zonas-deportivas-ostende"
    },
    {
      "@type": "Event",
      "name": "Campeonato de Surf Playa de Ostende",
      "startDate": "2025-07-15",
      "endDate": "2025-07-17",
      "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
      "eventStatus": "https://schema.org/EventScheduled",
      "location": {
        "@type": "Place",
        "name": "Playa de Ostende",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Castro Urdiales",
          "addressRegion": "Cantabria",
          "addressCountry": "ES"
        }
      }
    },
    {
      "@type": "BoatTrip",
      "name": "Excursión en barco por la costa cántabra",
      "provider": {
        "@type": "Organization",
        "name": "Cantabria Boat Tours"
      },
      "departureBoatTerminal": {
        "@type": "Place",
        "name": "Puerto de Castro Urdiales"
      }
    }
  ]
}
</script>