
<div class="consultas-container">
    <div class="consultas-header">
        <h1>Gestión de Consultas</h1>
        <div class="consultas-stats">
            <div class="stat-card">
                <span class="stat-value"><?= count($consultas) ?></span>
                <span class="stat-label">Consultas Totales</span>
            </div>
            <div class="stat-card">
                <span class="stat-value"><?= count(array_filter($consultas, fn($c) => $c['respuesta'] === 'NO')) ?></span>
                <span class="stat-label">Pendientes</span>
            </div>
        </div>
    </div>

    
        <form class="consultas-filters" method="get" action="<?= base_url('listaConsultas') ?>">
            <select id="filterSelect" name="estado" class="clean-select" onchange="this.form.submit()">
                <option value="all" <?= ($estado === 'all') ? 'selected' : '' ?>>Todas las consultas</option>
                <option value="pending" <?= ($estado === 'pending') ? 'selected' : '' ?>>Pendientes</option>
                <option value="answered" <?= ($estado === 'answered') ? 'selected' : '' ?>>Respondidas</option>
            </select>
        </form>
    

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (empty($consultas)): ?>
        <div class="alert alert-info">
            <h4 class="alert-heading">No hay consultas para mostrar</h4>
            <p>Actualmente no hay consultas registradas en el sistema.</p>
        </div>
    <?php else: ?>
        <div class="consultas-table-container">
            <table class="consultas-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Mensaje</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($consultas as $consulta): ?>
                    <tr>
                        <td>
                            <div class="user-info">
                                <span class="user-name"><?= esc($consulta['nombre']) ?> <?= esc($consulta['apellido'] ?? '') ?></span>
                                <?php if (!empty($consulta['telefono'])): ?>
                                <span class="user-phone"><?= esc($consulta['telefono']) ?></span>
                                <?php endif; ?>
                            </div>
                        </td>
                        <td><?= esc($consulta['email']) ?></td>
                        <td class="consulta-message">
                            <div class="message-preview">
                                <?= esc(substr($consulta['mensaje'], 0, 50)) ?>...
                            </div>
                            <div class="message-full" style="display:none;">
                                <?= nl2br(esc($consulta['mensaje'])) ?>
                            </div>
                            <a href="#" class="toggle-message">Ver más</a>
                        </td>
                        <td>
                            <span class="status-badge <?= $consulta['respuesta'] === 'SI' ? 'answered' : 'pending' ?>">
                                <?= $consulta['respuesta'] === 'SI' ? 'Respondida' : 'Pendiente' ?>
                            </span>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <?php if ($consulta['respuesta'] === 'NO'): ?>
                                    <button onclick="window.location.href='<?= base_url('atenderConsultas/'.$consulta['id_consulta']) ?>'" 
                                            class="action-btn answer-btn" 
                                            title="Marcar como respondida">
                                        <i class="fas fa-check"></i>
                                    </button>
                                <?php else: ?>
                                    <button class="action-btn answered-btn" title="Consulta respondida">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                <?php endif; ?>
                                <button onclick="if(confirm('¿Estás seguro de eliminar esta consulta?')) { window.location.href='<?= base_url('eliminarConsulta/'.$consulta['id_consulta']) ?>' }" 
                                        class="action-btn delete-btn" 
                                        title="Eliminar consulta">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>


<script>
    // Alternar vista completa del mensaje
$(document).ready(function () {
    console.log('Toggle-message listo ');

    $('.toggle-message').on('click', function (e) {
        e.preventDefault();

        const $row = $(this).closest('.consulta-message');
        const $preview = $row.find('.message-preview');
        const $full = $row.find('.message-full');

        $preview.toggle();
        $full.toggle();

        $(this).text($full.is(':visible') ? 'Ver menos' : 'Ver más');
    });
    });
</script>