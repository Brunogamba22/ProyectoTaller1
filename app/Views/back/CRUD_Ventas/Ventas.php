
<div class="ventas-container">
    <div class="ventas-header">
        <h1>Reporte de Ventas</h1>
        <div class="ventas-stats">
            <div class="stat-card">
                <span class="stat-value"><?= count($ventas) ?></span>
                <span class="stat-label">Ventas Totales</span>
            </div>
            <div class="stat-card">
                <span class="stat-value">$<?= number_format($totalVentas, 2) ?></span>
                <span class="stat-label">Ingresos Totales</span>
            </div>
        </div>
    </div>

    <div class="ventas-filters">
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Buscar ventas...">
            <i class="fas fa-search"></i>
        </div>
        <div class="filter-options">
            <select id="filterSelect">
                <option value="all">Todas las ventas</option>
                <option value="today">Hoy</option>
                <option value="week">Esta semana</option>
                <option value="month">Este mes</option>
            </select>
        </div>
    </div>

    <div class="ventas-table-container">
        <table class="ventas-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Productos</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ventas as $venta): ?>
                <tr>
                    <td><?= $venta['id'] ?></td>
                    <td><?= date('d/m/Y H:i', strtotime($venta['fecha_venta'])) ?></td>
                    <td>
                        <div class="user-info">
                            <span class="user-name"><?= $venta['nombre_usuario'] ?></span>
                            <span class="user-email"><?= $venta['email_usuario'] ?></span>
                        </div>
                    </td>
                    <td>
                        <div class="product-list">
                            <?php foreach ($venta['detalles'] as $detalle): ?>
                            <span class="product-item"><?= $detalle['nombre_producto'] ?> (x<?= $detalle['cantidad'] ?>)</span>
                            <?php endforeach; ?>
                        </div>
                    </td>
                    <td><?= array_reduce($venta['detalles'], function($carry, $item) { return $carry + $item['cantidad']; }, 0) ?></td>
                    <td class="total-amount">$<?= number_format($venta['total_venta'], 2) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="ventas-pagination">
        <button class="pagination-btn" id="prevPage"><i class="fas fa-chevron-left"></i> Anterior</button>
        <div class="page-numbers">
            <span class="page-number active">1</span>
            <span class="page-number">2</span>
            <span class="page-number">3</span>
            <span class="page-dots">...</span>
            <span class="page-number">8</span>
        </div>
        <button class="pagination-btn" id="nextPage">Siguiente <i class="fas fa-chevron-right"></i></button>
    </div>
</div>
