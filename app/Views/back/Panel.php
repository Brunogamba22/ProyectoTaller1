<div class="container mt-5">
    <h2>Bienvenido al panel</h2>
    <p>Hola, <?= session()->get('nombre') ?>. Estás logueado como perfil <?= session()->get('perfil_id') == 1 ? 'Administrador' : 'Cliente' ?>.</p>
</div>
