<!-- Formulario de Signup -->
<div class="form-container">
    <h2>Crear Cuenta</h2>
    <?= empty($errorDb) ? "" : "<p class='p-error'>$errorDb</p>" ?>
    <form id="signupForm" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="form-group" id="username-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Nombre" value="<?= $name ?>">
            <?= empty($nameError) ? "" : "<p class='p-error'>$nameError</p>" ?>
        </div>

        <div class="form-group" id="username-group">
            <label for="surname">Apellido</label>
            <input type="text" id="surname" name="surname" placeholder="Apellido" value="<?= $surname ?>" required>
            <?= empty($surnameError) ? "" : "<p class='p-error'>$surnameError</p>" ?>
        </div>

        <div class="form-group" id="username-group">
            <label for="dni">DNI</label>
            <input type="text" id="dni" name="dni" placeholder="DNI" minlength="7" maxlength="9" value="<?= $dni ?>"
                required>
            <?= empty($dniError) ? "" : "<p class='p-error'>$dniError</p>" ?>

        </div>

        <div class="form-group" id="email-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="tu@email.com" value="<?= $email ?>" required>
            <?= empty($emailError) ? "" : "<p class='p-error'>$emailError</p>" ?>
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Tu contraseña">
            <?= empty($passError) ? "" : "<p class='p-error'>$passError</p>" ?>
        </div>

        <div class="form-group">
            <label for="confirm-password">Confirmar contraseña</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Repite tu contraseña">
            <?= empty($passError) ? "" : "<p class='p-error'>$passError</p>" ?>
        </div>


        <button type="submit">Crear Cuenta</button>

        <div class="form-footer">
            ¿Ya tienes cuenta? <a href="/POONicoM/public/form-login.php" id="go-to-login">Inicia Sesión</a>
        </div>
    </form>
</div>