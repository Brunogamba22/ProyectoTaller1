<!DOCTYPE html>
<!-- Declaración del tipo de documento y idioma -->
<html lang="es">
  <head>
    <!-- Metadatos básicos -->
    <meta charset="utf-8"> <!-- Codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Configuración para diseño responsive en dispositivos móviles -->
    
    <title><?php echo $titulo; ?> Inicio - UMMA</title> <!-- Título dinámico de la pestaña del navegador -->
    
    <!-- Hojas de estilo CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> <!-- Framework Bootstrap para diseño -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> <!-- Iconos Font Awesome (para los íconos de redes) -->
    <link rel="stylesheet" href="assets/css/miEstilo.css"> <!-- Nuestros estilos personalizados -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/><!-- Animate.css: Librería para animaciones -->

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <?php if (isset($show_login_modal) && $show_login_modal): ?>
  <script>
      $(document).ready(function() {
          var myModal = new bootstrap.Modal(document.getElementById('loginModal'));
          myModal.show();
          
          // Opcional: guardar en localStorage que ya se mostró
          localStorage.setItem('modalShown', 'true');
      });
  </script>
<?php endif; ?>
  
  <!-- Apertura del cuerpo de la página con clase para el fondo -->
  <body class="fondo-elegante">