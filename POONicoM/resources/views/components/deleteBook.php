<div class="form-container">
    <h2>Eliminar un libro por su ISBN</h2>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <div class="form-group">
            <input type="hidden" name="delete-book" >
            <label for="isbn">Selecciona un libro</label>
            <select name="isbn" id="isbn" required>
                <?php
                $books = BookDAO::readAll();
                if (empty($books)) {
                    echo '<option value="">No hay libros para eliminar</option>';
                } else {
                    foreach ($books as $book) {
                        echo "<option value='" . $book->getIsbn() . "'>ISBN: " . $book->getIsbn() . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <button type="submit">Eliminar</button>
    </form>
</div>
