<?php
if (!defined('PATH_HREF_RAIZ_LOCALIDAD')) {
    define('PATH_HREF_RAIZ_LOCALIDAD', "/Blog_Playas2026/{$region_minuscula}/{$localidad_minuscula}");
}
?>

<?php
if (!defined('PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES')) {
    define('PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES', PATH_HREF_RAIZ_LOCALIDAD . "/lugares-interes");
}
?>

<nav aria-label="Breadcrumb" class="my-4">
  <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="flex flex-wrap space-x-1 text-base font-semibold text-gray-700">
    
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="flex items-center">
      <a itemprop="item" href="/Blog_Playas2026/" class="hover:underline hover:text-blue-600">
        <span itemprop="name">Inicio</span>
      </a>
      <meta itemprop="position" content="1" />
      <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
      </svg>
    </li>

    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="flex items-center">
      <a itemprop="item" href="/Blog_Playas2026/#<?= $region; ?>" class="hover:underline hover:text-blue-600">
        <span itemprop="name"><?= $region; ?></span>
      </a>
      <meta itemprop="position" content="2" />
      <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
      </svg>
    </li>

    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="flex items-center">
      <a itemprop="item" href="/Blog_Playas2026/<?= $region_minuscula; ?>/<?= $localidad_minuscula; ?>/" class="hover:underline hover:text-blue-600">
        <span itemprop="name"><?= $localidad; ?></span>
      </a>
      <meta itemprop="position" content="3" />
    </li>

  </ol>
</nav>


<style>
    .breadcrumb {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        padding: 0;
        font-size: 0.95rem;
    }

    .breadcrumb li+li::before {
        content: "›";
        padding: 0 0.5em;
        color: #aaa;
    }
</style>


<?php
if (!function_exists('generarNavSecundaria')) {
    function generarNavSecundaria($items = []) {
        if (empty($items)) return '';

        $html = '<nav class="d-lg-none" aria-label="Navegación secundaria">';
        $html .= '<ul class="pseudo-nav-horizontal">';

        foreach ($items as $item) {
            $slug = $item['slug'] ?? '#';
            $texto = $item['texto'] ?? '';
            $icono = $item['icono'] ?? '';
            $color = $item['color'] ?? '#2980b9';

            $href = PATH_HREF_RAIZ_LOCALIDAD_LUGARES_INTERES . '/' . ltrim($slug, '/');
            $iconoHTML = $icono ? $icono . ' ' : '';

            $html .= '<li><a href="' . htmlspecialchars($href) . '" style="color:' . htmlspecialchars($color) . ';">' 
                   . $iconoHTML . htmlspecialchars($texto) . '</a></li>';
        }

        $html .= '</ul></nav>';
        return $html;
    }
}
?>


<?php /*=  generarNavSecundaria([
    ['slug' => 'restaurantes/index.php', 'texto' => 'Restaurantes', 'icono' => '🍽️'],
    ['slug' => 'alojamientos/index.php', 'texto' => 'Alojamientos', 'icono' => '🏨'],
    ['slug' => 'rutas-costeras/index.php', 'texto' => 'Rutas', 'icono' => '🥾'],
    ['slug' => 'eventos/index.php', 'texto' => 'Eventos', 'icono' => '🎉'],
    ['slug' => 'blog/index.php', 'texto' => 'Blog', 'icono' => '📰']
]) */ ?>



<style>.pseudo-nav-horizontal {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  list-style: none;
  padding: 0.5rem 1rem;
  margin: 0;
  background-color: #f8f9fa;
  border-bottom: 1px solid #ddd;
  font-size: 0.95rem;
  gap: 1rem;
  white-space: nowrap;
}

.pseudo-nav-horizontal li {
  flex: 0 0 auto;
}

.pseudo-nav-horizontal a {
  text-decoration: none;
  font-weight: 500;
  padding: 0.25rem 0.5rem;
  display: block;
  border-radius: 4px;
}

.pseudo-nav-horizontal a:hover {
  background-color: #eaf3fb;
}
</style>



