

<script>
  const urlAmigable = '/playa-de-ostende-castro-urdiales-cantabria';
  const urlReal = '/Blog_Playas2026/cantabria/playadeostende/fichas/playa-de-ostende-castro-urdiales-cantabria.php'; // usa ruta relativa, no localhost

  // Mostrar la URL actual cargada
  console.log("URL actual cargada:", window.location.href);
  console.log("Pathname:", window.location.pathname);

  // Detectar si es una recarga de página
  const navigationEntry = performance.getEntriesByType("navigation")[0] || { type: performance.navigation.type };
  const isReload = navigationEntry.type === "reload";
  console.log("¿Es recarga?:", isReload);

  // Si fue una recarga Y estamos en la URL amigable
  if (isReload && window.location.pathname === urlAmigable) {
    alert("Redirigiendo a la URL real para evitar problemas de carga.");
    window.location.replace(urlReal);
  } else {
    history.replaceState({}, '', urlReal);
        history.replaceState({}, '', urlAmigable);
  }
</script>