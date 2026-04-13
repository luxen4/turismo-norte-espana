<?php 
$header = [
  "titulo" => "🌉 Puente Saint-Esprit en Baiona",
  "descripcion" => "Histórico puente sobre el río Adour que conecta el casco antiguo de Baiona con la zona moderna"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Puente Saint-Esprit</strong> es uno de los accesos más emblemáticos a la ciudad de Baiona, cruzando el río Adour.",
    "Su origen se remonta a la Edad Media, aunque ha sido reconstruido y ampliado en diferentes épocas para adaptarse al tráfico moderno.",
    "Desde el puente se obtienen vistas muy interesantes del río, del puerto y de la silueta urbana de Baiona.",
    "Es un punto clave de conexión entre el casco histórico y los barrios más modernos de la ciudad."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puente-saint-esprit-baiona-1.jpg",
      "alt" => "Vista del Puente Saint-Esprit en Baiona"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/rio-adour-puente-saint-esprit.jpg",
      "alt" => "Río Adour bajo el Puente Saint-Esprit"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/placeholder_saint_esprit",
      "titulo" => "Video del Puente Saint-Esprit"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/vista-aerea-puente-saint-esprit.jpg",
        "alt" => "Vista aérea del puente",
        "caption" => "Puente Saint-Esprit sobre el río Adour",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/trafico-puente-saint-esprit-baiona.jpg",
        "alt" => "Tráfico en el puente",
        "caption" => "Conexión principal de la ciudad",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/rio-adour-atardecer-puente.jpg",
        "alt" => "Atardecer en el río Adour",
        "caption" => "Atardecer sobre el puente",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puente-saint-esprit-baiona-noche.jpg",
        "alt" => "Puente iluminado de noche",
        "caption" => "Vista nocturna del Puente Saint-Esprit",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Puente Saint-Esprit",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Baiona, sobre el río Adour (Nouvelle-Aquitaine, Francia)"
    ],
    [
      "icono" => "🌉",
      "titulo" => "Tipo",
      "descripcion" => "Puente urbano de conexión vial"
    ],
    [
      "icono" => "📅",
      "titulo" => "Origen",
      "descripcion" => "Estructura histórica con remodelaciones posteriores"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Interés",
      "descripcion" => "Vistas del río, acceso al casco histórico y valor urbano"
    ],
    [
      "icono" => "🚗",
      "titulo" => "Acceso",
      "descripcion" => "Paso abierto al tráfico peatonal y vehicular"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🌉 Qué hacer en el Puente Saint-Esprit",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Cruzar el puente a pie disfrutando de las vistas" ],
    [ "icono" => "📸", "texto" => "Fotografiar el río Adour y la ciudad" ],
    [ "icono" => "🌅", "texto" => "Ver el atardecer sobre el río" ],
    [ "icono" => "🏙️", "texto" => "Conectar el casco histórico con la zona moderna de Baiona" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-puente-saint-esprit-baiona",
    "centro" => [43.4950, -1.4735],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4950, -1.4735],
        "popup"  => "<strong>Puente Saint-Esprit</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 46 60 00",
    "enlace" => "tel:+33559466000"
  ],
  "web"      => [
    "texto" => "www.tourisme-bayonne.com",
    "url"   => "https://www.tourisme-bayonne.com"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Paul M.",
        "texto"  => "Un puente muy importante para la ciudad, con buenas vistas."
    ],
    [
        "nombre" => "Laura B.",
        "texto"  => "Ideal para cruzar caminando y ver el río Adour."
    ],
    [
        "nombre" => "David R.",
        "texto"  => "Conecta perfectamente las dos partes de Baiona."
    ],
    [
        "nombre" => "Sophie T.",
        "texto"  => "Muy bonito al atardecer, merece la pena pararse a verlo."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; 
?>