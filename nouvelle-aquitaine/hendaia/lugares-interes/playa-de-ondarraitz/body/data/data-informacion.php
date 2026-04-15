<?php 
$header = [
  "titulo" => "🏖️ Playa de Ondarraitz en Hendaia",
  "descripcion" => "Una de las playas más amplias y familiares del País Vasco francés, ideal para el baño y el surf suave"
];
?>

<?php
$intro = [
  "parrafos" => [
    "La <strong>Playa de Ondarraitz</strong>, situada en Hendaia (Hendaye), es una de las playas más extensas y seguras del País Vasco francés.",
    "Con más de 3 km de arena fina, es perfecta para familias, paseos junto al mar y actividades acuáticas.",
    "Sus aguas relativamente tranquilas la convierten en un lugar ideal tanto para el baño como para iniciarse en el surf.",
    "Desde la playa se pueden contemplar las espectaculares formaciones rocosas conocidas como <strong>Les Deux Jumeaux</strong>."
  ],
  "imagenes" => [
    [
      "src" => "https://www.shutterstock.com/image-photo/hendaye-france-june-8-tourists-260nw-788953255.jpg",
      "alt" => "Playa de Ondarraitz en Hendaia",
      "caption" => "Vista general de la playa de Hendaia",
      "fuente" => "https://www.shutterstock.com/es/search/hendaye-beach",
      "fuente_texto" => "shutterstock.com"
    ],
    [
      "src" => "https://www.jolaski.com/upload/secciones-publicas/2017/06/30/castillo-de-abbadia-las-gemelas-ruta-barco-jolaski-0x_grande.jpg",
      "alt" => "Formaciones rocosas Les Deux Jumeaux",
      "caption" => "Les Deux Jumeaux desde la playa",
      "fuente" => "https://www.jolaski.com/paseo-en-barco-castillo-de-abadia-y-rocas-gemelas",
      "fuente_texto" => "jolaski.com"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/sZJtXZrvwlQ",
    "titulo" => "Playa de Hendaia - Ondarraitz"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "img/zona-arena-mar-playa-ondarraitz-hendaia-nouvelle-aquitaine.jpg",
        "alt" => "Panorámica de la playa de Hendaia",
        "caption" => "Playa amplia y familiar",
        "fuente" => "hendaye-tourisme.fr",
        "fuente_texto" => "hendaye-tourisme.fr"
    ],
    [
        "src" => "img/atardecer-playa-ondarraitz-hendaia-nouvelle-aquitaine.jpg",
        "alt" => "Atardecer en la playa de Hendaia",
        "caption" => "Atardecer sobre el Atlántico",
        "fuente" => "wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://www.surfparaiso.com/wp-content/uploads/surf-en-hendaia-france-file.jpeg",
        "alt" => "Surf en Hendaia",
        "caption" => "Ideal para iniciación al surf",
        "fuente" => "https://www.surfparaiso.com/guia-surf/la-costa-vasca/hendaia/",
        "fuente_texto" => "surfparaiso.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información sobre la Playa de Ondarraitz",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Hendaia (Hendaye), País Vasco francés"
    ],
    [
      "icono" => "🏖️",
      "titulo" => "Tipo de playa",
      "descripcion" => "Playa extensa de arena fina, ideal para familias"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Oleaje",
      "descripcion" => "Suave a moderado, perfecto para baño y surf iniciación"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Servicios",
      "descripcion" => "Vigilancia, duchas, paseo marítimo, escuelas de surf"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏖️ Qué hacer en Ondarraitz",
  "items"  => [
    [ "icono" => "🏊", "texto" => "Bañarse en aguas tranquilas" ],
    [ "icono" => "🏄", "texto" => "Iniciarse en el surf" ],
    [ "icono" => "🚶‍♂️", "texto" => "Pasear por sus 3 km de playa" ],
    [ "icono" => "📸", "texto" => "Fotografiar Les Deux Jumeaux" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-ondarraitz",
    "centro" => [43.3717, -1.7743],
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.3717, -1.7743],
        "popup"  => "<strong>Playa de Ondarraitz</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 20 00 34",
    "enlace" => "tel:+33559200034"
  ],
  "web"      => [
    "texto" => "www.hendaye-tourisme.fr",
    "url"   => "https://www.hendaye-tourisme.fr"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Pierre L.",
        "texto"  => "Perfecta para familias, muy amplia y segura."
    ],
    [
        "nombre" => "Ane G.",
        "texto"  => "Ideal para aprender surf, olas suaves."
    ],
    [
        "nombre" => "Luis M.",
        "texto"  => "Las vistas de los Deux Jumeaux son increíbles."
    ],
    [
        "nombre" => "Clara R.",
        "texto"  => "Una de las mejores playas del País Vasco francés."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.3717&lon=-1.7743&zoom=10"; 
?>