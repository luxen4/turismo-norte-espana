<?php 
$header = [
  "titulo" => "🏄‍♂️ Surf en la Playa de Bakio",
  "descripcion" => "Uno de los mejores destinos de surf del País Vasco, con olas constantes y un entorno natural espectacular en la costa de Bizkaia"
];
?>

<?php
$intro = [
  "parrafos" => [
    "La Playa de Bakio es uno de los destinos más populares para practicar surf en el País Vasco, gracias a su amplio arenal y a la calidad constante de sus olas.",
    "Tanto principiantes como surfistas experimentados encuentran aquí condiciones ideales durante gran parte del año.",
    "Además del surf, el entorno natural rodeado de montañas y acantilados convierte a Bakio en un lugar perfecto para disfrutar del mar Cantábrico.",
    "Muy cerca se encuentra San Juan de Gaztelugatxe, lo que permite combinar deporte y turismo en una misma visita."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5a/Bakio_beach.jpg",
      "alt" => "Playa de Bakio con surfistas",
      "caption" => "Surf en la Playa de Bakio",
      "fuente" => "https://commons.wikimedia.org",
      "fuente_texto" => "Wikimedia Commons"
    ],
    [
      "src" => "https://turismo.euskadi.eus/contenidos/h_cultura_y_patrimonio/0000010462_h5_rec_turismo/es_10462/images/bakio_playa.jpg",
      "alt" => "Olas en la Playa de Bakio",
      "caption" => "Condiciones ideales para surf",
      "fuente" => "https://turismo.euskadi.eus",
      "fuente_texto" => "turismo.euskadi.eus"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/2kQ0mQKzvVg", 
    "titulo" => "Surf en la Playa de Bakio"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://www.surf30.net/wp-content/uploads/2019/06/bakio-surf.jpg",
        "alt" => "Surfistas en Bakio",
        "caption" => "Surf en Bakio",
        "fuente" => "https://www.surf30.net",
        "fuente_texto" => "surf30.net"
    ],
    [
        "src" => "https://www.viajablog.com/wp-content/uploads/2018/09/playa-de-bakio.jpg",
        "alt" => "Vista panorámica de la playa de Bakio",
        "caption" => "Playa de Bakio",
        "fuente" => "https://www.viajablog.com",
        "fuente_texto" => "viajablog.com"
    ],
    [
        "src" => "https://www.turismovasco.com/wp-content/uploads/2022/06/bakio-surf.jpg",
        "alt" => "Olas en Bakio",
        "caption" => "Olas del Cantábrico",
        "fuente" => "https://turismovasco.com",
        "fuente_texto" => "turismovasco.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de Surf en Bakio",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Bakio - Bizkaia, País Vasco"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Tipo de playa",
      "descripcion" => "Playa abierta con olas constantes"
    ],
    [
      "icono" => "🏄‍♂️",
      "titulo" => "Nivel",
      "descripcion" => "Apta para principiantes y surfistas avanzados"
    ],
    [
      "icono" => "🏫",
      "titulo" => "Servicios",
      "descripcion" => "Escuelas de surf, alquiler de material y duchas"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Gaztelugatxe cercano, acantilados, naturaleza"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🌊 Actividades en la Playa de Bakio",
  "items"  => [
    [ "icono" => "🏄‍♂️", "texto" => "Practicar surf durante todo el año" ],
    [ "icono" => "🏖️", "texto" => "Disfrutar de la playa y el sol" ],
    [ "icono" => "📸", "texto" => "Fotografiar las olas y el paisaje costero" ],
    [ "icono" => "🚶‍♂️", "texto" => "Pasear por la costa y senderos cercanos" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-bakio",
    "centro" => [43.4282, -2.8093],
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.4282, -2.8093],
        "popup"  => "<strong>Playa de Bakio</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 946 19 40 00",
    "enlace" => "tel:+34946194000"
  ],
  "web"      => [
    "texto" => "www.bakio.eus",
    "url"   => "https://www.bakio.eus"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Iker A.",
        "texto"  => "Perfecta para aprender surf, muy buen ambiente."
    ],
    [
        "nombre" => "Laura G.",
        "texto"  => "Olas constantes y una playa preciosa."
    ],
    [
        "nombre" => "David S.",
        "texto"  => "Ideal tanto para iniciarse como para mejorar técnica."
    ],
    [
        "nombre" => "Marta P.",
        "texto"  => "Buen sitio con escuelas y alquiler de material."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4282&lon=-2.8093&zoom=10"; 
?>