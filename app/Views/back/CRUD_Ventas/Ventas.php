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
            <form method="get" action="<?= base_url('admin/ventas') ?>" class="d-inline">
                <input type="text" id="searchInput" name="busqueda" placeholder="Buscar ventas..." value="<?= esc($busqueda ?? '') ?>">
                <input type="hidden" name="filtro" value="<?= esc($filtro ?? 'all') ?>">
                <button type="submit" class="visually-hidden">Buscar</button>
            </form>
            <i class="fas fa-search"></i>
        </div>
        <div class="filter-options">
            <form method="get" action="<?= base_url('admin/ventas') ?>" class="d-inline">
                <input type="hidden" name="busqueda" value="<?= esc($busqueda ?? '') ?>">
                <select id="filterSelect" name="filtro" onchange="this.form.submit()">
                    <option value="all" <?= ($filtro == 'all') ? 'selected' : '' ?>>Todas las ventas</option>
                    <option value="today" <?= ($filtro == 'today') ? 'selected' : '' ?>>Hoy</option>
                    <option value="week" <?= ($filtro == 'week') ? 'selected' : '' ?>>Esta semana</option>
                    <option value="month" <?= ($filtro == 'month') ? 'selected' : '' ?>>Este mes</option>
                </select>
            </form>
        </div>
    </div>

    <div class="ventas-table-container">
        <table class="ventas-table">
            <thead>
                <tr>
                    <th>N° ORDEN</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Productos</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Subtotal</th>
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
                    <td><?= array_sum(array_column($venta['detalles'], 'cantidad')) ?></td>
                    <td class="total-amount">$<?= number_format($venta['total_venta'], 2) ?></td>
                    <td>
                        $<?= number_format(array_sum(array_column($venta['detalles'], 'subtotal')), 2) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="ventas-pagination">
        <?php if (isset($pagina) && $pagina > 1): ?>
            <a class="pagination-btn" href="<?= base_url('admin/ventas') . '?filtro=' . $filtro . '&page=' . ($pagina - 1) ?>"><i class="fas fa-chevron-left"></i> Anterior</a>
        <?php endif; ?>
        <div class="page-numbers">
            <?php if (isset($totalPaginas)): ?>
                <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                    <a class="page-number <?= ($i == $pagina) ? 'active' : '' ?>" href="<?= base_url('admin/ventas') . '?filtro=' . $filtro . '&page=' . $i ?>"><?= $i ?></a>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
        <?php if (isset($pagina) && isset($totalPaginas) && $pagina < $totalPaginas): ?>
            <a class="pagination-btn" href="<?= base_url('admin/ventas') . '?filtro=' . $filtro . '&page=' . ($pagina + 1) ?>">Siguiente <i class="fas fa-chevron-right"></i></a>
        <?php endif; ?>
    </div>
</div>
