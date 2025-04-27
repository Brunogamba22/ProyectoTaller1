<!-- Footer de la página principal -->
<footer class="footer-marron bg-dark text-white pt-4 pb-3 mt-5">
  <!-- Contenedor general para centrar y aplicar márgenes -->
  <div class="container">
    <div class="row">
      
      <!--  Sección 1: nombre de la tienda -->
      <div class="col-md-4 mb-3">
        <!-- Título del footer -->
        <h5 class="titulo-footer">UMMA Calzados</h5>
        <!-- Breve descripción de la tienda -->
        <p class="texto-footer">Tu tienda de confianza para calzados cómodos y con estilo.</p>
      </div>

      <!-- Sección 2: Enlaces útiles -->
      <div class="col-md-4 mb-3">
        <!-- Subtítulo de esta columna -->
        <h6 class="subtitulo-footer">Enlaces</h6>
        <!-- Lista de enlaces rápidos a otras páginas del sitio -->
        <ul class="list-unstyled">
          <li><a href="#" class="enlace-footer">Términos y Condiciones</a></li>
          <li><a href="#" class="enlace-footer">Política de Privacidad</a></li>
          <li><a href="#" class="enlace-footer">Preguntas Frecuentes</a></li>
          <li><a href="/contacto.html" class="enlace-footer">Contacto</a></li>
        </ul>
      </div>

      <!-- Sección 3: Redes sociales -->
      <div class="col-md-4 mb-3 redes-sociales">
        <!-- Subtítulo de esta columna -->
        <h6 class="subtitulo-footer">Síguenos</h6>
        <!-- Íconos que enlazan a redes sociales de la tienda -->
        <div class="iconos-redes">
          <!-- Enlace a la página de Facebook -->
          <a href="https://www.facebook.com/people/Umma-Calzados/100071909315664/">
            <i class="fab fa-facebook-f"></i>
          </a>
          <!-- Enlace a la página de Instagram -->
          <a href="https://www.instagram.com/ucalzados/?hl=es">
            <i class="fab fa-instagram"></i>
          </a>
          <!-- Enlace a WhatsApp (falta agregar número real) -->
          <a href="#">
            <i class="fab fa-whatsapp"></i>
          </a>
        </div>
      </div>

    </div>

    <!-- Línea de separación inferior + derechos reservados -->
    <div class="text-center mt-3 border-top pt-2">
      <!-- Texto con el año actual y derechos reservados -->
      <small>&copy; <span id="year"></span> UMMA Calzados. Todos los derechos reservados.</small>
    </div>
  </div>
</footer>

<!-- Script de Bootstrap: necesario para que funcione el carrusel y otros componentes -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script para mostrar automáticamente el año actual en el footer -->
<script>
  // Se obtiene el elemento con ID "year" y se actualiza su contenido
  document.getElementById("year").textContent = new Date().getFullYear();
</script>

</body>
</html>