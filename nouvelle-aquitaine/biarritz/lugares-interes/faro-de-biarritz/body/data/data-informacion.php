<?php 
$header = [
  "titulo" => "🌅 Faro de Biarritz",
  "descripcion" => "Uno de los mejores miradores de la costa vasco-francesa con vistas panorámicas al océano Atlántico"
];
?>

<?php
$intro = [
  "parrafos" => [
    "El <strong>Faro de Biarritz</strong> es uno de los lugares más emblemáticos de la ciudad, situado en la Pointe Saint-Martin.",
    "Desde su ubicación privilegiada, ofrece unas vistas espectaculares del océano Atlántico y de toda la costa vasco-francesa.",
    "Construido en el siglo XIX, sigue en funcionamiento y es un punto de referencia para navegantes.",
    "Subir sus más de 200 escalones permite disfrutar de una panorámica única entre Biarritz y Anglet."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/0/0c/Phare_de_Biarritz.jpg",
      "alt" => "Faro de Biarritz",
      "caption" => "Faro de Biarritz",
      "fuente" => "https://wikipedia.org",
      "fuente_texto" => "wikipedia.org"
    ],
    [
      "src" => "https://www.biarritz.fr/fileadmin/_processed_/c/3/csm_phare_biarritz_01_2f6d3e.jpg",
      "alt" => "Vistas desde el faro",
      "caption" => "Panorámica desde el faro",
      "fuente" => "https://www.biarritz.fr",
      "fuente_texto" => "biarritz.fr"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/3WzF9sKpK6A",
    "titulo" => "Video del Faro de Biarritz"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/7/7c/Biarritz_lighthouse_view.jpg",
        "alt" => "Vista del faro desde la costa",
        "caption" => "Faro desde la costa",
        "fuente" => "https://wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://www.france-voyage.com/visuals/photos/biarritz-lighthouse-1800_w600.webp",
        "alt" => "Faro con el océano",
        "caption" => "Faro frente al Atlántico",
        "fuente" => "https://www.france-voyage.com",
        "fuente_texto" => "france-voyage.com"
    ],
    [
        "src" => "https://www.guide-du-paysbasque.com/_bibli_rubriques/14600/phare-biarritz.jpg",
        "alt" => "Vista aérea del faro",
        "caption" => "Vista aérea del Faro de Biarritz",
        "fuente" => "https://guide-du-paysbasque.com",
        "fuente_texto" => "guide-du-paysbasque.com"
    ],
    [
        "src" => "https://media.routard.com/image/99/1/phare-biarritz.160991.jpg",
        "alt" => "Atardecer en el faro",
        "caption" => "Atardecer desde el faro",
        "fuente" => "https://www.routard.com",
        "fuente_texto" => "routard.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Faro de Biarritz",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Pointe Saint-Martin, entre Biarritz y Anglet"
    ],
    [
      "icono" => "🏗️",
      "titulo" => "Construcción",
      "descripcion" => "Siglo XIX (1834)"
    ],
    [
      "icono" => "📏",
      "titulo" => "Altura",
      "descripcion" => "Aprox. 73 metros sobre el nivel del mar"
    ],
    [
      "icono" => "👣",
      "titulo" => "Acceso",
      "descripcion" => "Subida por más de 200 escalones"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Interés",
      "descripcion" => "Mirador panorámico con vistas a Biarritz, Anglet y el océano"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "📸 Qué hacer en el Faro de Biarritz",
  "items"  => [
    [ "icono" => "👣", "texto" => "Subir al faro y disfrutar de las vistas" ],
    [ "icono" => "📸", "texto" => "Fotografía panorámica de la costa" ],
    [ "icono" => "🌅", "texto" => "Ver el atardecer sobre el Atlántico" ],
    [ "icono" => "🚶‍♂️", "texto" => "Pasear por los alrededores y acantilados" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-faro-biarritz",
    "centro" => [43.4995, -1.5660],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4995, -1.5660],
        "popup"  => "<strong>Faro de Biarritz</strong>"
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
        "nombre" => "Ana G.",
        "texto"  => "Las vistas desde arriba son impresionantes."
    ],
    [
        "nombre" => "Luis M.",
        "texto"  => "Vale la pena subir todos los escalones."
    ],
    [
        "nombre" => "Claire D.",
        "texto"  => "Un lugar perfecto para ver el atardecer."
    ],
    [
        "nombre" => "Iñigo P.",
        "texto"  => "Uno de los mejores miradores de la zona."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4995&lon=-1.5660&zoom=10"; 
?>