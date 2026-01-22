<!-- Formulario de libro -->
<body>
    <div class="form-container">
        <?= empty($errorDb) ? "" : "<p class='p-error'>$errorDb</p>" ?>
        <h2>Alquila un libro nuevo</h2>
        <form id="bookForm" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <input type="hidden" name="create-book">
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" placeholder="123456789X" value="<?php $isbn ?>" required>
                <?= empty($isbnError) ? "" : "<p class='p-error'>$isbnError</p>" ?>
            </div>

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" id="title" name="title" placeholder="Título" value="<?php $title ?>" required>
                <?= empty($titleError) ? "" : "<p class='p-error'>$titleError</p>" ?>

            </div>

            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" placeholder="Autor" value="<?php $autor ?>" required>
                <?= empty($autorError) ? "" : "<p class='p-error'>$autorError</p>" ?>
            </div>

            <div class="form-group">
                <label for="available">Disponibilidad</label>
                <select id="available" name="available" required>
                    <option value="">Selecciona una opción</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
                <?= empty($availableError) ? "" : "<p class='p-error'>$availableError</p>" ?>
            </div>
            <button type="submit">Crear libro</button>
        </form>
    </div>
</body>