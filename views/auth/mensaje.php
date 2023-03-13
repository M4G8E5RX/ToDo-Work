<div class="contenedor mensaje">
    <?php include_once __DIR__ .'/../templates/nombre-sitio.php'; ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">En un momento serás redirigido para iniciar sesión...</p>
    </div> <!--.contenedor-sm -->
    <script>
        setTimeout(() => {
            window.location.href = "/";
        }, 3000);
    </script>
</div>