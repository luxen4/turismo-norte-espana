<?php 
$header = [
  "titulo" => "🏛️ Museo Vasco de la Historia de Baiona",
  "descripcion" => "Un viaje por la historia y la cultura vasca en pleno corazón de Baiona"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Museo Vasco de la Historia de Baiona</strong> es uno de los espacios culturales más importantes del País Vasco francés.",
    "Ubicado en una casa tradicional junto al río Nive, el museo ofrece una completa visión de la historia, tradiciones y modo de vida del pueblo vasco.",
    "En su interior se pueden descubrir exposiciones sobre la vida rural, la pesca, la artesanía y las costumbres locales a lo largo de los siglos.",
    "Es una visita imprescindible para comprender la identidad cultural de la región y su estrecha relación con el entorno atlántico."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/museo-vasco-baiona-1.jpg",
      "alt" => "Entrada al Museo Vasco de Baiona"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/interior-museo-vasco-baiona.jpg",
      "alt" => "Exposición en el Museo Vasco de Baiona"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/6mXn7F8kW2U",
      "titulo" => "Video del Museo Vasco de Baiona"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/fachada-museo-vasco-baiona.jpg",
        "alt" => "Fachada del museo",
        "caption" => "Edificio tradicional del museo junto al río",
        "fuente" => "https://www.musee-basque.com",
        "fuente_texto" => "musee-basque.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/objetos-tradicionales-museo-baiona.jpg",
        "alt" => "Objetos tradicionales vascos",
        "caption" => "Colección etnográfica vasca",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/sala-exposiciones-museo-baiona.jpg",
        "alt" => "Sala del museo",
        "caption" => "Espacios dedicados a la historia y cultura vasca",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/rio-nive-museo-baiona.jpg",
        "alt" => "Entorno del museo junto al río Nive",
        "caption" => "Ubicación privilegiada junto al río",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Museo Vasco de Baiona",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Centro histórico de Baiona, junto al río Nive"
    ],
    [
      "icono" => "🏛️",
      "titulo" => "Tipo",
      "descripcion" => "Museo etnográfico y cultural"
    ],
    [
      "icono" => "📚",
      "titulo" => "Contenido",
      "descripcion" => "Historia, tradiciones, vida rural y cultura vasca"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Interés",
      "descripcion" => "Uno de los museos más importantes del País Vasco francés"
    ],
    [
      "icono" => "🎟️",
      "titulo" => "Acceso",
      "descripcion" => "Entrada de pago con horarios según temporada"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏛️ Qué hacer en el Museo Vasco",
  "items"  => [
    [ "icono" => "📚", "texto" => "Descubrir la historia y cultura vasca" ],
    [ "icono" => "🖼️", "texto" => "Recorrer sus exposiciones permanentes y temporales" ],
    [ "icono" => "📸", "texto" => "Fotografiar el edificio y su entorno junto al río" ],
    [ "icono" => "🎓", "texto" => "Aprender sobre tradiciones y modos de vida del País Vasco" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-museo-vasco-baiona",
    "centro" => [43.4925, -1.4745],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4925, -1.4745],
        "popup"  => "<strong>Museo Vasco de la Historia de Baiona</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 59 08 98",
    "enlace" => "tel:+33559590898"
  ],
  "web"      => [
    "texto" => "www.musee-basque.com",
    "url"   => "https://www.musee-basque.com"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Ane G.",
        "texto"  => "Muy interesante para conocer la cultura vasca en profundidad."
    ],
    [
        "nombre" => "Pierre L.",
        "texto"  => "Exposiciones muy completas y bien organizadas."
    ],
    [
        "nombre" => "Lucía R.",
        "texto"  => "Perfecto para una visita cultural en Baiona."
    ],
    [
        "nombre" => "David M.",
        "texto"  => "El edificio y su ubicación junto al río son preciosos."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; 
?>