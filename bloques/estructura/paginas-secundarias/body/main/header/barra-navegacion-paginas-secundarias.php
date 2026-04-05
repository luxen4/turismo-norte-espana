

<script src="https://cdn.tailwindcss.com"></script>

<header>
  <!-- Barra de navegación -->
  <nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo / Nombre de la Playa -->
        <div class="flex-shrink-0">
          <a href="/playadeostende/" class="text-xl font-bold text-sky-700 hover:text-sky-900">🌊 Playa de Ostende</a>
        </div>


  <?php define('PATH_HREF_FICHAS', "/Blog_Playas2026/{$region}/{$localidad_minuscula}"); ?>
  <?php $archivo_playa = 'index.php'; ?>

        <!-- Ítems de navegación -->
        <div class="hidden md:flex space-x-6">
          <a href="/Blog_Playas2026/index.php" class="text-gray-700 hover:text-sky-700">Inicio</a>
          <a href="<?= PATH_HREF_FICHAS . '/' . $archivo_playa ?>#galeria_imagenes" class="text-gray-700 hover:text-sky-700">Galería</a>
          <a href="<?= PATH_HREF_FICHAS . '/' . $archivo_playa ?>#como_llegar" class="text-gray-700 hover:text-sky-700">Cómo llegar</a>
          <a href="<?= PATH_HREF_FICHAS . '/' . $archivo_playa ?>#servicios" class="text-gray-700 hover:text-sky-700">Servicios</a>
          <a href="<?= PATH_HREF_FICHAS . '/' . $archivo_playa ?>#actividades" class="text-gray-700 hover:text-sky-700">Actividades</a>
          <a href="<?= PATH_HREF_FICHAS . '/' . $archivo_playa ?>#eventos_festividades" class="text-gray-700 hover:text-sky-700">Agenda</a>
          <a href="<?= PATH_HREF_FICHAS . '/' . $archivo_playa ?>#faqs_consejos" class="text-gray-700 hover:text-sky-700">FAQ</a>
          <a href="<?= PATH_HREF_FICHAS . '/' . $archivo_playa ?>#faqs_consejos" class="text-gray-700 hover:text-sky-700">Consejos</a>
          <a href="/Blog_Playas2026/index.php" class="text-gray-700 hover:text-sky-700">Otras playas</a>
        </div>

        <!-- Botón menú hamburguesa -->
        <div class="md:hidden">
          <button id="menu-btn" class="text-sky-700 focus:outline-none text-2xl">
            ☰
          </button>
        </div>
      </div>
    </div>

    <!-- Menú móvil -->
    <div id="mobile-menu" class="hidden md:hidden bg-white px-4 pb-4">
      <a href="/playadeostende/" class="block py-2 text-gray-700 hover:text-sky-700">Inicio</a>
      <a href="#galeria" class="block py-2 text-gray-700 hover:text-sky-700">Galería</a>
      <a href="#ubicacion" class="block py-2 text-gray-700 hover:text-sky-700">Cómo llegar</a>
      <a href="#servicios" class="block py-2 text-gray-700 hover:text-sky-700">Servicios</a>
      <a href="#actividades" class="block py-2 text-gray-700 hover:text-sky-700">Actividades</a>
      <a href="/playadeostende/eventos.php" class="block py-2 text-gray-700 hover:text-sky-700">Agenda</a>
      <a href="/playadeostende/faqs.php" class="block py-2 text-gray-700 hover:text-sky-700">FAQ</a>
      <a href="/playadeostende/consejos.php" class="block py-2 text-gray-700 hover:text-sky-700">Consejos</a>
      <a href="/cantabria/" class="block py-2 text-gray-700 hover:text-sky-700">Otras playas</a>
    </div>
  </nav>
</header>


<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>





