
    <!-- Contenido principal -->
    <main class="container my-5 py-4">
        <div class="row">
            <!-- Lista de productos en el carrito -->
            <div class="col-lg-8 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header ">
                        <h2 class="h4 mb-0"><i class="fas fa-shopping-cart me-2"></i>Tu Carrito</h2>
                    </div>
                    
                    <div class="card-body">
                        <!-- Mensaje cuando el carrito está vacío -->
                        <div class="empty-cart-message text-center py-5" style="display: none;">
                            <i class="fas fa-shopping-cart fa-4x text-muted mb-3"></i>
                            <h3 class="h5">Tu carrito está vacío</h3>
                            <p class="text-muted mb-4">Agrega productos para comenzar a comprar</p>
                            <a href="productos.html" class="btn btn-dorado">Ver productos</a>
                        </div>

                        <!-- Lista de productos (ejemplo con 2 productos) -->
                        <div class="cart-items">
                            <!-- Producto 1 -->
                            <div class="row align-items-center mb-4 border-bottom pb-3">
                                <div class="col-md-2">
                                    <img src="assets/img/Zapatillas/Zapa1.avif" alt="Zapato deportivo" class="img-fluid rounded">
                                </div>
                                <div class="col-md-5">
                                    <h3 class="h6 mb-1">Zapato Deportivo UMMA Runner</h3>
                                    <p class="small text-muted mb-1">Talla: 42 | Color: Negro</p>
                                    <p class="mb-0">Disponible</p>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <button class="btn btn-outline-marron btn-sm decrement">-</button>
                                        <input type="text" class="form-control form-control-sm text-center quantity" value="1">
                                        <button class="btn btn-outline-marron btn-sm increment">+</button>
                                    </div>
                                </div>
                                <div class="col-md-2 text-end">
                                    <p class="mb-1 fw-bold">$12,999</p>
                                    <button class="btn btn-link btn-sm text-danger p-0 remove-item">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </button>
                                </div>
                            </div>

                            <!-- Producto 2 -->
                            <div class="row align-items-center mb-4 border-bottom pb-3">
                                <div class="col-md-2">
                                    <img src="assets/img/Buzos/Buzo1.webp" alt="Buzo con capucha" class="img-fluid rounded">
                                </div>
                                <div class="col-md-5">
                                    <h3 class="h6 mb-1">Buzo con Capucha UMMA</h3>
                                    <p class="small text-muted mb-1">Talla: M | Color: Gris</p>
                                    <p class="mb-0">Disponible</p>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <button class="btn btn-outline-marron btn-sm decrement">-</button>
                                        <input type="text" class="form-control form-control-sm text-center quantity" value="2">
                                        <button class="btn btn-outline-marron btn-sm increment">+</button>
                                    </div>
                                </div>
                                <div class="col-md-2 text-end">
                                    <p class="mb-1 fw-bold">$8,499</p>
                                    <button class="btn btn-link btn-sm text-danger p-0 remove-item">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resumen del pedido -->
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 sticky-top" style="top: 20px;">
                    <div class="card-header ">
                        <h2 class="h4 mb-0"><i class="fas fa-receipt me-2"></i>Resumen</h2>
                    </div>
                    
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal (3 productos)</span>
                            <span>$29,997</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Envío</span>
                            <span>$1,200</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Descuento</span>
                            <span class="text-success">-$1,500</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold mb-4">
                            <span>Total</span>
                            <span>$29,697</span>
                        </div>

                        <button class="btn btn-dorado w-100 mb-3 py-2 fw-bold">
                            <i class="fas fa-credit-card me-2"></i>Pagar ahora
                        </button>

                        <div class="text-center">
                            <p class="small text-muted">o</p>
                            <button class="btn btn-outline-marron w-100">
                                <i class="fas fa-shopping-bag me-2"></i>Seguir comprando
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

