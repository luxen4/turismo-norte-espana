<?php 
$header = [
  "titulo" => "⛪ Catedral de Santa María de Baiona",
  "descripcion" => "Imponente catedral gótica en el corazón histórico de Baiona, símbolo del patrimonio vasco-francés"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Catedral de Santa María de Baiona</strong> es uno de los monumentos más emblemáticos de la ciudad, situada en pleno casco histórico.",
    "De estilo gótico, su construcción comenzó en el siglo XIII y destaca por su impresionante arquitectura, sus altas bóvedas y sus coloridas vidrieras.",
    "Declarada Patrimonio Mundial por la UNESCO como parte del Camino de Santiago en Francia, es un lugar de gran valor histórico y espiritual.",
    "Además de su interior, merece la pena recorrer su claustro, uno de los más grandes de Francia, y disfrutar del ambiente histórico que la rodea."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/catedral-santa-maria-baiona-1.jpg",
      "alt" => "Vista exterior de la Catedral de Santa María de Baiona"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/interior-catedral-santa-maria-baiona.jpg",
      "alt" => "Interior de la Catedral de Santa María de Baiona"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/2P5VQYpW6lQ",
      "titulo" => "Video de la Catedral de Santa María de Baiona"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/fachada-catedral-baiona.jpg",
        "alt" => "Fachada de la Catedral de Baiona",
        "caption" => "Fachada gótica de la catedral",
        "fuente" => "https://www.tourisme-bayonne.com",
        "fuente_texto" => "tourisme-bayonne.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/claustro-catedral-baiona.jpg",
        "alt" => "Claustro de la Catedral de Baiona",
        "caption" => "Claustro histórico de la catedral",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/vidrieras-catedral-baiona.jpg",
        "alt" => "Vidrieras de la Catedral de Baiona",
        "caption" => "Vidrieras con gran valor artístico",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/vista-nocturna-catedral-baiona.jpg",
        "alt" => "Catedral de Baiona iluminada",
        "caption" => "Vista nocturna de la catedral",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Catedral de Santa María",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Centro histórico de Baiona, Nouvelle-Aquitaine (Francia)"
    ],
    [
      "icono" => "🏛️",
      "titulo" => "Estilo",
      "descripcion" => "Arquitectura gótica medieval"
    ],
    [
      "icono" => "📅",
      "titulo" => "Construcción",
      "descripcion" => "Desde el siglo XIII con ampliaciones posteriores"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Interés",
      "descripcion" => "Patrimonio UNESCO, vidrieras, claustro y arte religioso"
    ],
    [
      "icono" => "🎟️",
      "titulo" => "Acceso",
      "descripcion" => "Entrada libre al templo, acceso al claustro según horarios"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "⛪ Qué hacer en la Catedral de Baiona",
  "items"  => [
    [ "icono" => "🏛️", "texto" => "Visitar el interior y admirar su arquitectura gótica" ],
    [ "icono" => "🖼️", "texto" => "Observar las vidrieras y detalles artísticos" ],
    [ "icono" => "🌿", "texto" => "Pasear por su claustro histórico" ],
    [ "icono" => "📸", "texto" => "Fotografiar uno de los monumentos más icónicos de Baiona" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-catedral-baiona",
    "centro" => [43.4935, -1.4740],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4935, -1.4740],
        "popup"  => "<strong>Catedral de Santa María de Baiona</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 59 58 35",
    "enlace" => "tel:+33559595835"
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
        "nombre" => "Laura M.",
        "texto"  => "Una catedral impresionante, tanto por fuera como por dentro."
    ],
    [
        "nombre" => "Javier T.",
        "texto"  => "El claustro es precioso y muy tranquilo."
    ],
    [
        "nombre" => "Sophie D.",
        "texto"  => "Un lugar lleno de historia, imprescindible en Baiona."
    ],
    [
        "nombre" => "Miguel A.",
        "texto"  => "Las vidrieras son espectaculares, merece la visita."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; 
?>