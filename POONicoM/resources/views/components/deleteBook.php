<!-- Formulario de libro -->
<div class="form-container">
    <h2>Elimina un libro por su ISBN</h2>
    <form id="bookForm" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" placeholder="123456789X" value="<?php $isbn ?>" required>
        </div>
        <button type="submit">Eliminar libro</button>
    </form>
</div>