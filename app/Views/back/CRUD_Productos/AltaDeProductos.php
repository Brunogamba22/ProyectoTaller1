<!-- app/Views/back/productos/altaDeProductos.php -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0">
                <!-- Encabezado con degradado -->
                <div class="card-header bg-gradient-primary text-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">
                            <i class="fas fa-plus-circle me-2"></i>Alta de Nuevo Producto
                        </h3>
                        <span class="badge bg-white text-primary">Paso 1 de 2</span>
                    </div>
                </div>
                
                <div class="card-body p-4">
                    <form id="formAltaProducto" action="<?= base_url('admin/productos/guardar') ?>" method="post" enctype="multipart/form-data">
                        <!-- Sección Información Básica -->
                        <div class="mb-4">
                            <h5 class="text-primary mb-3">
                                <i class="fas fa-info-circle me-2"></i>Información Básica
                            </h5>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nombre" class="form-label">Nombre del Producto *</label>
                                    <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" required placeholder="Ej: Zapatillas Urbanas UMMA">
                                    <small class="text-muted">Máx. 100 caracteres</small>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="codigo" class="form-label">Código SKU *</label>
                                    <input type="text" class="form-control form-control-lg" id="codigo" name="codigo" required placeholder="Ej: UMMA-ZP-2023">
                                </div>
                                
                                <div class="col-12">
                                    <label for="descripcion" class="form-label">Descripción *</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required placeholder="Describe el producto en detalle..."></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <hr class="my-4">
                        
                        <!-- Sección Precio y Stock -->
                        <div class="mb-4">
                            <h5 class="text-primary mb-3">
                                <i class="fas fa-tags me-2"></i>Precio y Disponibilidad
                            </h5>
                            
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="precio" class="form-label">Precio *</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" step="0.01" class="form-control form-control-lg" id="precio" name="precio" required min="0">
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <label for="stock" class="form-label">Stock Inicial *</label>
                                    <input type="number" class="form-control form-control-lg" id="stock" name="stock" required min="0">
                                </div>
                                
                                <div class="col-md-4">
                                    <label for="categoria" class="form-label">Categoría *</label>
                                    <select class="form-select form-select-lg" id="categoria" name="categoria" required>
                                        <option value="" selected disabled>Seleccionar...</option>
                                        <option value="calzado">Calzado</option>
                                        <option value="indumentaria">Indumentaria</option>
                                        <option value="accesorios">Accesorios</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <hr class="my-4">
                        
                        <!-- Sección Imágenes -->
                        <div class="mb-4">
                            <h5 class="text-primary mb-3">
                                <i class="fas fa-images me-2"></i>Imágenes del Producto
                            </h5>
                            
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="dropzone border rounded p-4 text-center" id="imageDropzone">
                                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                                        <h5>Arrastra las imágenes aquí</h5>
                                        <p class="text-muted">o haz clic para seleccionar</p>
                                        <input type="file" id="imagenes" name="imagenes[]" multiple accept="image/*" class="d-none">
                                        <button type="button" class="btn btn-outline-primary mt-2" onclick="document.getElementById('imagenes').click()">
                                            Seleccionar Archivos
                                        </button>
                                    </div>
                                    <div id="previewContainer" class="row mt-3 g-2"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Botones de Acción -->
                        <div class="d-flex justify-content-between mt-5">
                            <a href="<?= base_url('admin/productos') ?>" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left me-2"></i>Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="fas fa-save me-2"></i>Guardar Producto
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Script para vista previa de imágenes -->
<script>
document.getElementById('imagenes').addEventListener('change', function(e) {
    const previewContainer = document.getElementById('previewContainer');
    previewContainer.innerHTML = '';
    
    if (this.files) {
        Array.from(this.files).forEach(file => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const col = document.createElement('div');
                    col.className = 'col-md-3';
                    col.innerHTML = `
                        <div class="card">
                            <img src="${e.target.result}" class="card-img-top" style="height: 120px; object-fit: cover;">
                            <div class="card-body p-2 text-center">
                                <small class="text-muted d-block text-truncate">${file.name}</small>
                                <button type="button" class="btn btn-sm btn-outline-danger mt-1" onclick="this.parentElement.parentElement.parentElement.remove()">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    `;
                    previewContainer.appendChild(col);
                }
                reader.readAsDataURL(file);
            }
        });
    }
});
</script>