<!-- NAVBAR -->
<nav id="navbar" class="bg-blue-800 text-white fixed top-0 left-0 w-full z-50 transition-shadow duration-300">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between items-center h-16">

      <!-- Logo -->
      <div class="text-lg md:text-xl font-semibold">
        Turismo Norte
      </div>

      <!-- Menú escritorio -->
      <div class="hidden md:flex space-x-6">
        <a href="/turismo-norte-espana/" class="hover:text-yellow-300">Inicio</a>
        <a href="#" class="hover:text-yellow-300">Destinos</a>
        <a href="#" class="hover:text-yellow-300">Rutas</a>
        <a href="/turismo-norte-espana/gastronomia/" class="hover:text-yellow-300">Gastronomía</a>
        <a href="#" class="hover:text-yellow-300">Contacto</a>
      </div>

      <!-- Botón hamburguesa -->
      <div class="md:hidden">
        <button id="menu-btn" class="focus:outline-none text-2xl">
          ☰
        </button>
      </div>

    </div>
  </div>

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