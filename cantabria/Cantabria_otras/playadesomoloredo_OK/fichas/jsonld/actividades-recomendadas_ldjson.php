<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristDestination",
  "name": "Playa de Somo - Loredo",
  "description": "Descubre las mejores actividades turísticas y deportivas en la Playa de Somo y Loredo en Ribamontán al Mar, Cantabria.",
  "image": "https://tu-dominio.com/imagenes/playa-de-somo-loredo-cantabria.jpg",
  "url": "https://<?= $_SERVER['SERVER_NAME'] ?>/turismo-norte-espana/<?= $region_minuscula ?>/<?= $localidad_minuscula ?>/fichas/playa-de-<?= $nombre_playa_minuscula . "-" . $localidad_minuscula . "-" . $region_minuscula ?>.php",
  "touristType": {
    "@type": "Audience",
    "audienceType": ["Turistas", "Surfistas", "Aventureros", "Familias"]
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "43.4150",      /* Ajusta latitud */
    "longitude": "-3.6430"     /* Ajusta longitud */
  },
  "containsPlace": [
    {
      "@type": "SportsActivityLocation",
      "name": "Zona de Surf y Paddle Surf",
      "sport": ["Surf", "Paddle Surf", "Windsurf"],
      "url": "https://escueladesurfsomo.com/"
    },
    {
      "@type": "SportsActivityLocation",
      "name": "Zonas deportivas",
      "sport": ["Vóley Playa", "Fútbol", "Yoga"],
      "url": "https://<?= $_SERVER['SERVER_NAME'] ?>/zonas-deportivas-somo-loredo"
    },
    {
      "@type": "Event",
      "name": "Campeonato de Surf Somo - Loredo",
      "startDate": "2025-08-10",
      "endDate": "2025-08-12",
      "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
      "eventStatus": "https://schema.org/EventScheduled",
      "location": {
        "@type": "Place",
        "name": "Playa de Somo - Loredo",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Ribamontán al Mar",
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
        "name": "Puerto de Santander"
      }
    }
  ]
}
</script>