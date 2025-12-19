<!-- Formulario de Login -->
<div class="form-container">
    <h2>Iniciar Sesión</h2>
    <form id="loginForm" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="form-group" id="email-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="tu@email.com">
            <div id="email-error">Por favor introduce un email válido</div>
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Tu contraseña">
            <div class="error-message" id="password-error">Por favor introduce tu contraseña</div>
        </div>

        <div class="checkbox-group">
            <input type="checkbox" id="stay-connected" name="stay-connected">
            <label for="stay-connected">Quiero seguir conectado</label>
        </div>

        <button type="submit">Iniciar Sesión</button>

        <div class="form-footer">
            ¿No tienes cuenta? <a href="/POONicoM/public/form-signup.php" id="go-to-signup">Regístrate</a>
        </div>
    </form>
</div>