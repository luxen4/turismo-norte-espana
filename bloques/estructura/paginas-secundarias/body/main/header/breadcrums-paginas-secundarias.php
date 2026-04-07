<nav aria-label="Breadcrumb">
  <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="https://Playas2026.kesug.com/">
        <span itemprop="name">Inicio</span>
      </a>
      <meta itemprop="position" content="1" />
    </li>

    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="<?= PATH_HREF_RAIZ; ?>/index.php#cantabria">
        <span itemprop="name"><?= $region; ?></span>
      </a>
      <meta itemprop="position" content="2" />
    </li>

    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="/turismo-norte-espana/cantabria/castro-urdiales/">
        <span itemprop="name"><?= $localidad; ?></span>
      </a>
      <meta itemprop="position" content="3" />
    </li>


    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a itemprop="item" href="<?= PATH_HREF_FICHAS; ?>/index.php">
        <span itemprop="name">Playa de <?= $nombre_playa; ?></span>
      </a>
      <meta itemprop="position" content="4" />
    </li>




    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <span itemprop="name"><?= $title; ?></span>
      <meta itemprop="position" content="5" />
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
.breadcrumb li + li::before {
  content: "›";
  padding: 0 0.5em;
  color: #aaa;
}</style>
