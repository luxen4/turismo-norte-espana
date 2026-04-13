<!-- NAVBAR -->
<nav id="navbar" class="bg-blue-900 text-white fixed top-0 left-0 w-full z-50 shadow-sm">
  <div class="max-w-7xl mx-auto px-4">
    
    <div class="flex justify-between items-center h-16">

      <!-- Logo + ubicación -->
      <div class="flex flex-col leading-tight">
        <span class="text-lg md:text-xl font-semibold">
          Turismo Norte de España
        </span>
        <span class="text-xs text-blue-200">
          <i class="fas fa-map-marked-alt"></i> <?php echo $localidad; ?> · <?php echo $region; ?>
        </span>
      </div>

      <!-- Menú escritorio -->
      <div class="hidden md:flex items-center space-x-6 text-sm">
        <a href="/turismo-norte-espana/" class="hover:text-yellow-300 transition">Inicio</a>
        <a href="#" class="hover:text-yellow-300 transition">Destinos</a>
        <a href="#" class="hover:text-yellow-300 transition">Rutas</a>
        <a href="/turismo-norte-espana/gastronomia/" class="hover:text-yellow-300 transition">Gastronomía</a>
        <a href="#" class="hover:text-yellow-300 transition">Contacto</a>
      </div>

      <!-- Botón hamburguesa -->
      <div class="md:hidden">
        <button id="menu-btn" class="text-2xl focus:outline-none">
          ☰
        </button>
      </div>

    </div>

  </div>
</nav>

  <!-- Menú móvil -->
  <div id="menu" class="hidden md:hidden px-4 pb-4 bg-blue-700">
    <a href="#" class="block py-2 border-b border-blue-600">Inicio</a>
    <a href="#" class="block py-2 border-b border-blue-600">Destinos</a>
    <a href="#" class="block py-2 border-b border-blue-600">Rutas</a>
    <a href="#" class="block py-2 border-b border-blue-600">Gastronomía</a>
    <a href="#" class="block py-2">Contacto</a>
  </div>
</nav>

<!-- ESPACIADOR (IMPORTANTE) -->
<div class="h-16"></div>

<script>
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('menu');
  const navbar = document.getElementById('navbar');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });

  // sombra al hacer scroll
  window.addEventListener('scroll', () => {
    if (window.scrollY > 10) {
      navbar.classList.add('shadow-lg');
    } else {
      navbar.classList.remove('shadow-lg');
    }
  });
</script>