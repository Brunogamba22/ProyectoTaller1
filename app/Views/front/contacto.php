<!-- Sección de Contacto-->
<section class="contacto-umma" style="background-color:  #C8A97E; padding: 4rem 0;">
  <div class="container">
    <!-- Cabecera con efecto especial -->
    <div class="text-center mb-5">
      <h2 class="titulo-seccion" style="color: var(--marron-oscuro); font-weight: 700; position: relative; display: inline-block;">
        <span style="position: relative; z-index: 2; padding: 0 1.5rem;">Contacto</span>
        <span style="position: absolute; bottom: 8px; left: 0; width: 100%; height: 12px; background-color: var(--dorado); opacity: 0.3; z-index: 1;"></span>
      </h2>
      <p class="lead" style="color: var(--marron-medio); font-size: 1.25rem; max-width: 700px; margin: 1rem auto; font-weight: 600;">
        ¿Querés saber más? ¿Tenés una duda, sugerencia o propuesta?<br>
        <span style="color: var(--marron-medio); font-weight: 600;">¡Escribinos! Siempre estamos atentos.</span>
      </p>
    </div>

    <div class="row g-4">
      <!-- Columna del formulario -->
      <div class="col-lg-7">
        <div class="card formulario-contacto" style="border: none; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(62, 39, 35, 0.1); height: 100%;">
          <div class="card-header" style="background: linear-gradient(135deg, var(--marron-oscuro) 0%, var(--dorado) 100%); padding: 1.5rem; color: white;">
            <h4 style="margin: 0; font-weight: 600;">Envíanos tu mensaje</h4>
          </div>
          <div class="card-body" style="padding: 2rem; background-color: white;">
            <form>
              <div class="col-md-6">
                <div class="form-group-enhanced">
                  <label for="nombre" class="form-label-enhanced">Nombre</label>
                    <div class="input-group-enhanced">
                      <span class="input-group-icon">
                        <i class="bi bi-person-fill"></i>
                      </span>
                      <input type="text" class="form-control-enhanced" id="nombre" placeholder="Ej: María">
                    </div>
                </div>
              </div>

              <div class="col-12">
                <div class="form-group-enhanced">
                  <label for="email" class="form-label-enhanced">Email</label>
                    <div class="input-group-enhanced">
                      <span class="input-group-icon">
                        <i class="bi bi-envelope-fill"></i>
                      </span>
                      <input type="email" class="form-control-enhanced" id="email" placeholder="Ej: ejemplo@correo.com">
                    </div>
                </div>
              </div>

              <div class="mb-4">
                <label for="mensaje" class="form-label" style="color: var(--marron-medio); font-weight: 500;">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribí tu mensaje acá..." style="border-color: var(--beige); min-height: 120px;"></textarea>
              </div>

              <button type="submit" class="btn btn-enviar" style="background-color: var(--dorado); color: var(--texto-oscuro); font-weight: 600; border: none; border-radius: 8px; padding: 0.75rem; width: 100%; transition: all 0.3s ease;">
                Enviar mensaje <i class="bi bi-send-fill ms-2"></i>
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- Columna de información de contacto -->
      <div class="col-lg-5">
        <div class="card h-100" style="border: none; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(62, 39, 35, 0.1);">
          <div class="card-header" style="background: linear-gradient(135deg, var(--marron-oscuro) 0%, var(--dorado) 100%); padding: 1.5rem; color: white;">
            <h4 style="margin: 0; font-weight: 600;">Otros medios de contacto</h4>
          </div>
          <div class="card-body" style="padding: 2rem; background-color: white; height: 100%;">
            <div class="contacto-info" style="height: 100%; display: flex; flex-direction: column;">
              <!-- Información de contacto -->
              <div class="mb-4">
                <h5 style="color: var(--marron-medio); border-bottom: 1px solid var(--beige); padding-bottom: 0.5rem; margin-bottom: 1.5rem;">Redes y contacto</h5>
                
                <div class="d-flex align-items-center mb-3">
                  <div class="icono-contacto" style="width: 40px; height: 40px; background-color: var(--beige); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                    <i class="bi bi-envelope" style="color: var(--marron-claro);"></i>
                  </div>
                  <div>
                    <p style="margin: 0; color: var(--marron-medio); font-weight: 500;">Correo:</p>
                    <a href="mailto:Umma@hotmail.com" style="color: var(--dorado); text-decoration: none;">Umma@hotmail.com</a>
                  </div>
                </div>

                <div class="d-flex align-items-center mb-3">
                  <div class="icono-contacto" style="width: 40px; height: 40px; background-color: var(--beige); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                    <i class="bi bi-instagram" style="color: var(--marron-claro);"></i>
                  </div>
                  <div>
                    <p style="margin: 0; color: var(--marron-medio); font-weight: 500;">Instagram:</p>
                    <a href="https://www.instagram.com/ucalzados/" target="_blank" style="color: var(--dorado); text-decoration: none;">@umma</a>
                  </div>
                </div>

                <div class="d-flex align-items-center mb-3">
                  <div class="icono-contacto" style="width: 40px; height: 40px; background-color: var(--beige); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                    <i class="bi bi-whatsapp" style="color: var(--marron-claro);"></i>
                  </div>
                  <div>
                    <p style="margin: 0; color: var(--marron-medio); font-weight: 500;">WhatsApp:</p>
                    <a href="https://wa.me/5491123456789" target="_blank" style="color: var(--dorado); text-decoration: none;">+54 9 11 2345-6789</a>
                  </div>
                </div>
              </div>

              <!-- Información de ubicación -->
              <div class="mt-auto">
                <h5 style="color: var(--marron-medio); border-bottom: 1px solid var(--beige); padding-bottom: 0.5rem; margin-bottom: 1.5rem;">Visítanos</h5>
                <div class="d-flex align-items-start mb-3">
                  <div class="icono-contacto" style="width: 40px; height: 40px; background-color: var(--beige); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                    <i class="bi bi-geo-alt" style="color: var(--marron-claro);"></i>
                  </div>
                  <div>
                    <p style="margin: 0; color: var(--marron-medio); font-weight: 500;">Dirección:</p>
                    <p style="margin: 0; color: var(--marron-claro);">Barrio 40 viviendas rnza12, casa 2, W3342 Gotor, Virasoro, Corrientes</p>
                  </div>
                </div>

                <!-- Mapa -->
                <div class="ratio ratio-16x9 rounded overflow-hidden mt-3" style="border: 1px solid var(--beige);">
                  <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3552.8583274522034!2d-56.009963!3d-28.0518017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94566972bd1cf441%3A0x29e5c90523b96058!2sUMMA%20Calzados!5e0!3m2!1ses-419!2sar!4v1713974465021!5m2!1ses-419!2sar" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>