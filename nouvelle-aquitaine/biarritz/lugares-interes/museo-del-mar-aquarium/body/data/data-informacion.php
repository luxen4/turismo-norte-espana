<?php 
$header = [
  "titulo" => "🐠 Museo del Mar – Aquarium de Biarritz",
  "descripcion" => "Descubre el Aquarium de Biarritz: un fascinante museo marino con especies del Atlántico, tiburones, focas y exposiciones sobre la vida oceánica"
];
?>

<?php
$intro = [
  "parrafos" => [
    "El <strong>Museo del Mar – Aquarium de Biarritz</strong> es uno de los espacios más visitados de la ciudad y una referencia en divulgación marina en el País Vasco francés.",
    "Situado frente al océano Atlántico, combina acuarios espectaculares con exposiciones educativas sobre la fauna marina.",
    "Entre sus principales atractivos destacan los tiburones, las focas y las especies del golfo de Vizcaya.",
    "Es un lugar ideal para familias y para comprender mejor la riqueza del ecosistema marino del Atlántico."
  ],
  "imagenes" => [
    [
      "src" => "https://www.biarritz.fr/fileadmin/_processed_/a/8/csm_aquarium_biarritz_01.jpg",
      "alt" => "Aquarium de Biarritz",
      "caption" => "Museo del Mar – Biarritz",
      "fuente" => "https://www.biarritz.fr",
      "fuente_texto" => "biarritz.fr"
    ],
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5b/Aquarium_de_Biarritz.jpg",
      "alt" => "Tiburon en el Aquarium de Biarritz",
      "caption" => "Vida marina en el Aquarium",
      "fuente" => "https://wikipedia.org",
      "fuente_texto" => "wikipedia.org"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/4h7Q0kAquarium",
    "titulo" => "Video del Aquarium de Biarritz"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/9/9c/Aquarium_Biarritz_sharks.jpg",
        "alt" => "Tiburones en el acuario",
        "caption" => "Tiburones",
        "fuente" => "https://wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://www.france-voyage.com/visuals/photos/aquarium-biarritz-1805_w600.webp",
        "alt" => "Focas en el museo del mar",
        "caption" => "Focas del Aquarium",
        "fuente" => "https://www.france-voyage.com",
        "fuente_texto" => "france-voyage.com"
    ],
    [
        "src" => "https://www.guide-du-paysbasque.com/_bibli_rubriques/14620/aquarium-biarritz.jpg",
        "alt" => "Interior del museo del mar",
        "caption" => "Exposición marina",
        "fuente" => "https://guide-du-paysbasque.com",
        "fuente_texto" => "guide-du-paysbasque.com"
    ],
    [
        "src" => "https://media.routard.com/image/101/0/aquarium-biarritz.161010.jpg",
        "alt" => "Vista exterior del Aquarium",
        "caption" => "Fachada del Aquarium de Biarritz",
        "fuente" => "https://www.routard.com",
        "fuente_texto" => "routard.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Aquarium de Biarritz",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Frente al Rocher de la Vierge, Biarritz"
    ],
    [
      "icono" => "🐟",
      "titulo" => "Temática",
      "descripcion" => "Fauna marina del Atlántico"
    ],
    [
      "icono" => "🦈",
      "titulo" => "Atracciones",
      "descripcion" => "Tiburones, focas y peces tropicales"
    ],
    [
      "icono" => "👨‍👩‍👧‍👦",
      "titulo" => "Público",
      "descripcion" => "Ideal para familias y niños"
    ],
    [
      "icono" => "🎓",
      "titulo" => "Interés",
      "descripcion" => "Divulgación científica y educativa"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🐠 Qué hacer en el Museo del Mar",
  "items"  => [
    [ "icono" => "🦈", "texto" => "Ver tiburones en grandes acuarios" ],
    [ "icono" => "🐬", "texto" => "Observación de fauna marina" ],
    [ "icono" => "🎓", "texto" => "Aprender sobre ecosistemas marinos" ],
    [ "icono" => "📸", "texto" => "Fotografía de especies y acuarios" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-museo-mar-biarritz",
    "centro" => [43.4836, -1.5622],
    "zoom"   => 16,
    "marker" => [
        "coords" => [43.4836, -1.5622],
        "popup"  => "<strong>Museo del Mar – Aquarium de Biarritz</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 22 33 34",
    "enlace" => "tel:+33559223334"
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
        "nombre" => "Laura P.",
        "texto"  => "Muy educativo y perfecto para niños."
    ],
    [
        "nombre" => "David M.",
        "texto"  => "Los tiburones impresionan muchísimo."
    ],
    [
        "nombre" => "Claire B.",
        "texto"  => "Visita imprescindible en Biarritz."
    ],
    [
        "nombre" => "Jon S.",
        "texto"  => "Muy bien organizado y entretenido."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4836&lon=-1.5622&zoom=10"; 
?>