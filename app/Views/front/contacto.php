<!-- Sección de Contacto -->
<section class="contacto-section text-center my-5">
  <div class="container">
    <!-- Título principal de la sección de contacto -->
    <h2 class="mb-3">Contacto</h2>

    <!-- Texto de introducción invitando a los usuarios a contactar -->
    <p class="lead link-dorado">
      ¿Querés saber más? ¿Tenés una duda, sugerencia o propuesta?<br>
      ¡Escribinos! Siempre estamos atentos.
    </p>
  </div>
</section>

<!-- Formulario de contacto -->
<div class="container" style="max-width: 700px;">
  <!-- Tarjeta que contiene el formulario -->
  <div class="card contacto-card p-4 shadow mb-5 animate__animated animate__fadeInUp">
    <!-- Formulario (por ahora sin funcionalidad, solo estructura) -->
    <form>
      <!-- Campo para ingresar el nombre -->
      <div class="mb-3">
        <!-- Label: etiqueta que indica qué debe poner el usuario en el campo -->
        <label for="nombre" class="form-label">Nombre</label>
        <!-- Input: campo de texto para escribir el nombre -->
        <!-- Atributos:
             - type="text" => campo de texto
             - class="form-control" => diseño de Bootstrap para inputs
             - id="nombre" => se asocia con el label
             - placeholder => texto que aparece como guía dentro del input
             - required => obliga a completar este campo antes de enviar -->
        <input type="text" class="form-control" id="nombre" placeholder="Tu nombre completo" required>
      </div>

      <!-- Campo para ingresar el email -->
      <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <!-- Input de tipo email, valida que lo ingresado tenga formato de correo -->
        <input type="email" class="form-control" id="email" placeholder="tunombre@correo.com" required>
      </div>

      <!-- Campo para ingresar el mensaje -->
      <div class="mb-3">
        <label for="mensaje" class="form-label">Mensaje</label>
        <!-- Textarea: campo de varias líneas para escribir mensajes largos -->
        <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribí tu mensaje acá..." required></textarea>
      </div>

      <!-- Botón para enviar el formulario -->
      <!-- Atributos:
           - type="submit" => indica que al hacer clic intenta enviar el formulario
           - class="btn btn-dorado w-100 mt-3" => estilos personalizados -->
      <button type="submit" class="btn btn-dorado w-100 mt-3">Enviar mensaje</button>
    </form>
  </div>
</div>

<!-- Sección de otros medios de contacto -->
<section class="otros-medios text-center mb-5">
  <div class="container">
    <!-- Título de la sección -->
    <h5 class="text-dorado">O contactanos por otros medios:</h5>

    <!-- Datos de contacto extra -->
     <!-- correo -->
    <p class="text-beige">
      <strong>Correo:</strong> 
      <a href="https://www.instagram.com/ucalzados/" target="_blank" class="link-dorado">Umma@hotmail.com</a>
    </p>
    <p class="text-beige">
      <strong>Instagram:</strong> 
      <!-- Enlace que abre en una nueva pestaña (target="_blank") -->
      <a href="https://www.instagram.com/ucalzados/" target="_blank" class="link-dorado">@umma</a>
    </p>
    <p class="text-beige">
      <strong>WhatsApp:</strong> 
      <a href="https://www.whatsapp.com/catalog/5493756408787/?app_absent=0" target="_blank" class="link-dorado">+54 9 11 2345-6789</a>
    </p>
  </div>
</section>

<!-- Sección con el mapa de Google Maps -->
<div class="container my-5">
  <!-- Título del mapa -->
  <h4 class="text-center mb-4 text-dorado">¿Querés visitarnos?</h4>

  <!-- Contenedor para el mapa, ratio 16:9 responsivo -->
  <div class="ratio ratio-16x9 rounded overflow-hidden shadow">
    <!-- iFrame de Google Maps embebido -->
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3552.8583274522034!2d-56.009963!3d-28.0518017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94566972bd1cf441%3A0x29e5c90523b96058!2sUMMA%20Calzados!5e0!3m2!1ses-419!2sar!4v1713974465021!5m2!1ses-419!2sar" 
      width="100%" 
      height="300" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>
