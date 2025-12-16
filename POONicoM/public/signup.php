<!-- Formulario de Signup -->
<div class="form-container">
    <h2>Crear Cuenta</h2>
    <form id="signupForm" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="form-group" id="username-group" style="display: none;">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Nombre">
            <div id="name-error">Por favor introduce tu nombre</div>
        </div>

        <div class="form-group" id="username-group" style="display: none;">
            <label for="surname">Apellido</label>
            <input type="text" id="surname" name="surname" placeholder="Apellido">
            <div id="surname-error">Por favor introduce tu apellido</div>
        </div>

        <div class="form-group" id="username-group" style="display: none;">
            <label for="dni">DNI</label>
            <input type="text" id="dni" name="dni" placeholder="DNI" minlength="7" maxlength="8">
            <div id="name-error">Por favor introduce un DNI válido</div>
        </div>

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

        <div class="form-group">
            <label for="confirm-password">Confirmar contraseña</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Repite tu contraseña">
            <div id="confirm-password-error">Las contraseñas no coinciden</div>
        </div>

        <div class="form-group">
            <label for="region">Comunidad Autónoma</label>
            <select id="region" name="region">
                <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/app/models/Region.php"; ?>
                <?php foreach (Region::cases() as $comunidad): ?>
                    <option value="<?= $comunidad->name ?>"><?= $comunidad->value ?></option>
                <?php endforeach; ?>
                <!--<option value="" disabled selected>Selecciona tu comunidad</option>
                        <option value="andalucia">Andalucía</option>
                        <option value="aragon">Aragón</option>
                        <option value="asturias">Asturias</option>
                        <option value="baleares">Islas Baleares</option>
                        <option value="canarias">Canarias</option>
                        <option value="cantabria">Cantabria</option>
                        <option value="castilla_leon">Castilla y León</option>
                        <option value="castilla_mancha">Castilla-La Mancha</option>
                        <option value="cataluna">Cataluña</option>
                        <option value="extremadura">Extremadura</option>
                        <option value="galicia">Galicia</option>
                        <option value="madrid">Madrid</option>
                        <option value="murcia">Murcia</option>
                        <option value="navarra">Navarra</option>
                        <option value="pais_vasco">País Vasco</option>
                        <option value="rioja">La Rioja</option>
                        <option value="valencia">Comunidad Valenciana</option>
                        <option value="ceuta">Ceuta</option>
                        <option value="melilla">Melilla</option>-->
            </select>
            <div class="error-message" id="region-error">Por favor, selecciona tu comunidad autónoma</div>
        </div>

        <button type="submit">Crear Cuenta</button>

        <div class="form-footer">
            ¿Ya tienes cuenta? <a href="/ejercicio-users/public/form-login.php" id="go-to-login">Inicia Sesión</a>
        </div>
    </form>
</div>