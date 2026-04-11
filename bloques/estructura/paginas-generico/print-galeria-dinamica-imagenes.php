<!-- Galería dinámica imágenes con lightbox -->
<section aria-labelledby="galeria" class="mb-12">
  <h2 id="galeria" class="text-2xl font-bold text-<?= COLOR_PAGE; ?>-700 mb-4">📸 Galería de Imágenes</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <?php foreach($galeria_imagenes as $img): ?>
      <figure class="w-full overflow-hidden rounded-2xl shadow-lg">
        <img src="<?= $img['src'] ?>"
             alt="<?= $img['alt'] ?>"
             class="w-full h-auto object-contain cursor-pointer transform transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl"
             loading="lazy"
             onclick="openLightbox('<?= $img['src'] ?>', '<?= htmlspecialchars($img['caption']) ?>')">
        <figcaption class="mt-2 text-sm text-gray-600 text-center">
          <?= $img['caption'] ?> <br>
          <span class="text-xs">Fuente: 
            <?php if($img['fuente']): ?>
              <a href="<?= $img['fuente'] ?>" target="_blank" rel="noopener noreferrer" class="text-<?= COLOR_PAGE; ?>-600 hover:underline">
                <?= $img['fuente_texto'] ?>
              </a>
            <?php else: ?>
              <?= $img['fuente_texto'] ?>
            <?php endif; ?>
          </span>
        </figcaption>
      </figure>
    <?php endforeach; ?>
  </div>
</section>

<!-- Lightbox modal con fondo suave -->
<div id="lightbox" class="fixed inset-0 bg-gray-900 bg-opacity-40 backdrop-blur-sm flex items-center justify-center hidden z-50">
  <div class="relative">
    <!-- Botón de cerrar -->
    <button onclick="closeLightbox()" class="absolute top-2 right-2 text-white text-2xl font-bold hover:text-red-500">&times;</button>
    <!-- Imagen -->
    <img id="lightbox-img" class="max-w-full max-h-[80vh] rounded-lg shadow-2xl">
    <!-- Pie de página / caption -->
    <div id="lightbox-caption" class="mt-2 text-center text-white text-lg"></div>
  </div>
</div>

<script>/*
  function openLightbox(src, caption) {
    const lightbox = document.getElementById('lightbox');
    const img = document.getElementById('lightbox-img');
    const captionEl = document.getElementById('lightbox-caption');
    img.src = src;
    captionEl.textContent = caption;
    lightbox.classList.remove('hidden');
  }

  function closeLightbox() {
    document.getElementById('lightbox').classList.add('hidden');
  }

  // Evitar que al hacer clic en la imagen dentro del lightbox se cierre
  document.getElementById('lightbox-img').addEventListener('click', function(event){
    event.stopPropagation();
  });

  // Cerrar al hacer clic fuera de la imagen
  document.getElementById('lightbox').addEventListener('click', closeLightbox);*/
</script>
