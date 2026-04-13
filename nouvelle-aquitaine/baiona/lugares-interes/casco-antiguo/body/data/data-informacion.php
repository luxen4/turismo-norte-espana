<?php 
$header = [
  "titulo" => "🏘️ Casco Antiguo de Baiona",
  "descripcion" => "Calles con encanto, arquitectura vasco-francesa y ambiente histórico en el corazón de Baiona"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>casco antiguo de Baiona</strong> es uno de los rincones más encantadores del suroeste de Francia, con calles estrechas, fachadas coloridas y un ambiente típico vasco-francés.",
    "Situado entre los ríos Nive y Adour, este barrio histórico invita a pasear sin rumbo y descubrir plazas, comercios tradicionales y edificios con siglos de historia.",
    "Su arquitectura combina influencias francesas y vascas, creando una identidad única que se refleja en sus balcones, contraventanas y soportales.",
    "Además, es el lugar perfecto para disfrutar de la gastronomía local, con bares y restaurantes donde degustar especialidades típicas del País Vasco francés."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/casco-antiguo-baiona-francia-1.jpg",
      "alt" => "Calles del casco antiguo de Baiona"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/arquitectura-vasco-francesa-baiona.jpg",
      "alt" => "Arquitectura vasco-francesa en Baiona"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/6gX3Z7k1z5Q",
      "titulo" => "Video del casco antiguo de Baiona"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/calles-historicas-baiona.jpg",
        "alt" => "Calles históricas de Baiona",
        "caption" => "Calles con encanto del casco antiguo",
        "fuente" => "https://www.tourisme-bayonne.com",
        "fuente_texto" => "tourisme-bayonne.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/rio-nive-baiona.jpg",
        "alt" => "Río Nive en Baiona",
        "caption" => "El río Nive atravesando el casco histórico",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/fachadas-coloridas-baiona.jpg",
        "alt" => "Fachadas coloridas en Baiona",
        "caption" => "Arquitectura típica vasco-francesa",
        "fuente" => "https://www.france.fr",
        "fuente_texto" => "france.fr"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/plazas-baiona.jpg",
        "alt" => "Plazas del casco antiguo de Baiona",
        "caption" => "Plazas y rincones con historia",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del casco antiguo de Baiona",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Baiona, Nouvelle-Aquitaine, Francia"
    ],
    [
      "icono" => "🏛️",
      "titulo" => "Tipo",
      "descripcion" => "Casco histórico con arquitectura tradicional vasco-francesa"
    ],
    [
      "icono" => "🌉",
      "titulo" => "Entorno",
      "descripcion" => "Entre los ríos Nive y Adour, con puentes y paseos fluviales"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Calles peatonales, plazas, comercios tradicionales y edificios históricos"
    ],
    [
      "icono" => "🍴",
      "titulo" => "Ambiente",
      "descripcion" => "Gran oferta gastronómica con bares y restaurantes locales"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🚶‍♂️ Actividades en el casco antiguo de Baiona",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Pasear por sus calles históricas" ],
    [ "icono" => "📸", "texto" => "Fotografiar la arquitectura y rincones con encanto" ],
    [ "icono" => "🛍️", "texto" => "Descubrir tiendas y comercios tradicionales" ],
    [ "icono" => "🍽️", "texto" => "Disfrutar de la gastronomía vasco-francesa" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-casco-antiguo-baiona",
    "centro" => [43.4936, -1.4748],
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.4936, -1.4748],
        "popup"  => "<strong>Casco antiguo de Baiona</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+33 5 59 46 09 00",
    "enlace" => "tel:+33559460900"
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
        "nombre" => "Laura G.",
        "texto"  => "Un lugar precioso lleno de vida y con mucho encanto."
    ],
    [
        "nombre" => "Javier M.",
        "texto"  => "Perfecto para pasear y descubrir rincones únicos."
    ],
    [
        "nombre" => "Ana P.",
        "texto"  => "Me encantó la mezcla de arquitectura y ambiente vasco-francés."
    ],
    [
        "nombre" => "Luis R.",
        "texto"  => "Ideal para comer bien y disfrutar del ambiente local."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4936&lon=-1.4748&zoom=10"; 
?>