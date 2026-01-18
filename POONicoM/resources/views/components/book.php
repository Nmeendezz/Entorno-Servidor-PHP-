<!-- Formulario de libro -->
<div class="form-container">
    <h2>Alquila un libro nuevo</h2>
    <form id="bookForm" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text"
                id="isbn"
                name="isbn"
                placeholder="123456789X" 
                required>
        </div>

        <div class="form-group">
            <label for="title">Título</label>
            <input type="text"
                id="title"
                name="title"
                placeholder="Título"
                required>
        </div>

        <div class="form-group">
            <label for="author">Autor</label>
            <input type="text"
                id="author"
                name="author"
                placeholder="Autor"
                required>
        </div>

        <button type="submit">Crear libro</button>
    </form>
</div>