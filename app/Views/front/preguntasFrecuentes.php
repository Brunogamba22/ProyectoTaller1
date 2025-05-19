  <!-- Hero Section -->
    <section class="hero-section-faq">
        <div class="container text-center">
            <h1><i class="fas fa-question-circle me-2"></i>Preguntas Frecuentes</h1>
            <p class="lead">Encuentra respuestas a las preguntas más comunes</p>
        </div>
    </section>

    <!-- Contenido Principal -->
    <div class="container my-5">
        <div class="faq-container">
           
            <div class="accordion" id="faqAccordion">
                <h3 class="faq-category"><i class="fas fa-shopping-cart me-2"></i>Compras y Pagos</h3>
                
                <div class="faq-item">
                    <div class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq1">
                        ¿Qué métodos de pago aceptan?
                    </div>
                    <div id="faq1" class="collapse faq-answer" data-bs-parent="#faqAccordion">
                        Aceptamos tarjetas de crédito/débito (Visa, MasterCard), PayPal y transferencias bancarias.
                    </div>
                </div>

                <h3 class="faq-category"><i class="fas fa-truck me-2"></i>Envíos y Entregas</h3>
                
                <div class="faq-item">
                    <div class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq2">
                        ¿Cuánto tarda el envío de mi pedido?
                    </div>
                    <div id="faq2" class="collapse faq-answer" data-bs-parent="#faqAccordion">
                        El tiempo de envío varía según la ubicación. Generalmente entre 2-5 días hábiles.
                    </div>
                </div>
            </div>

            <div class="faq-contact">
                <p class="mb-0"><i class="fas fa-info-circle me-2"></i>¿No encontraste lo que buscabas? <a href="<?= base_url('Contacto') ?>">Contáctanos</a> y te ayudaremos.</p>
            </div>
        </div>
    </div>
