<?php 
$header = [
  "titulo" => "🏖️ Plage du Port Vieux",
  "descripcion" => "Una cala protegida en el centro de Biarritz, ideal para nadar y disfrutar del mar en un entorno familiar"
];
?>

<?php
$intro = [
  "parrafos" => [
    "La <strong>Plage du Port Vieux</strong> es una pequeña cala situada en pleno centro de Biarritz, muy apreciada por su ambiente familiar y protegido.",
    "Gracias a su forma natural, está resguardada del oleaje fuerte del Atlántico, lo que la convierte en un lugar ideal para el baño.",
    "Es una de las playas más accesibles de la ciudad, perfecta para relajarse sin alejarse del centro urbano.",
    "Su entorno combina acantilados, rocas y aguas tranquilas, ofreciendo un paisaje muy pintoresco."
  ],
  "imagenes" => [
    [
      "src" => "https://www.biarritz-tourisme.com/fileadmin/_processed_/c/5/csm_port_vieux_biarritz_01.jpg",
      "alt" => "Plage du Port Vieux en Biarritz",
      "caption" => "Cala del Port Vieux",
      "fuente" => "https://www.biarritz-tourisme.com",
      "fuente_texto" => "biarritz-tourisme.com"
    ],
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5c/Biarritz_Port_Vieux_beach.jpg",
      "alt" => "Vista de la playa Port Vieux",
      "caption" => "Playa protegida en Biarritz",
      "fuente" => "https://wikipedia.org",
      "fuente_texto" => "wikipedia.org"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/VIDEO_ID_PORT_VIEUX",
    "titulo" => "Video de la Plage du Port Vieux"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/6/6b/Biarritz_Port_Vieux_panorama.jpg",
        "alt" => "Panorámica del Port Vieux",
        "caption" => "Cala del Port Vieux",
        "fuente" => "https://wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://www.france-voyage.com/visuals/photos/port-vieux-biarritz.jpg",
        "alt" => "Playa Port Vieux con rocas",
        "caption" => "Entorno natural del Port Vieux",
        "fuente" => "https://www.france-voyage.com",
        "fuente_texto" => "france-voyage.com"
    ],
    [
        "src" => "https://www.guide-du-paysbasque.com/_bibli_rubriques/14620/port-vieux-biarritz.jpg",
        "alt" => "Vista desde los acantilados",
        "caption" => "Vista desde arriba del Port Vieux",
        "fuente" => "https://guide-du-paysbasque.com",
        "fuente_texto" => "guide-du-paysbasque.com"
    ],
    [
        "src" => "https://media.routard.com/image/100/port-vieux-biarritz.jpg",
        "alt" => "Atardecer en Port Vieux",
        "caption" => "Atardecer en la cala",
        "fuente" => "https://www.routard.com",
        "fuente_texto" => "routard.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Plage du Port Vieux",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Centro de Biarritz, País Vasco francés"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Tipo de playa",
      "descripcion" => "Cala protegida de oleaje"
    ],
    [
      "icono" => "👨‍👩‍👧‍👦",
      "titulo" => "Ambiente",
      "descripcion" => "Familiar y tranquilo"
    ],
    [
      "icono" => "🏖️",
      "titulo" => "Uso principal",
      "descripcion" => "Baño y relax"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Interés",
      "descripcion" => "Una de las playas más seguras para nadar en Biarritz"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏖️ Qué hacer en el Port Vieux",
  "items"  => [
    [ "icono" => "🏊‍♂️", "texto" => "Nadar en aguas tranquilas" ],
    [ "icono" => "🌅", "texto" => "Ver el atardecer desde la cala" ],
    [ "icono" => "📸", "texto" => "Fotografía del entorno rocoso" ],
    [ "icono" => "🚶‍♂️", "texto" => "Pasear por el centro de Biarritz" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-port-vieux",
    "centro" => [43.4832, -1.5678],
    "zoom"   => 16,
    "marker" => [
        "coords" => [43.4832, -1.5678],
        "popup"  => "<strong>Plage du Port Vieux</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 22 37 10",
    "enlace" => "tel:+33559223710"
  ],
  "web"      => [
    "texto" => "www.biarritz.fr",
    "url"   => "https://www.biarritz.fr"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Claire M.",
        "texto"  => "Perfecta para ir con niños."
    ],
    [
        "nombre" => "Lucas D.",
        "texto"  => "Agua tranquila y muy bonita cala."
    ],
    [
        "nombre" => "Sophie R.",
        "texto"  => "Muy acogedora y en pleno centro."
    ],
    [
        "nombre" => "Jean P.",
        "texto"  => "Ideal para relajarse sin oleaje fuerte."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4832&lon=-1.5678&zoom=10"; 
?>