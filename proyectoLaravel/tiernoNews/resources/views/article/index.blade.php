<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journalists</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    
    @include("components.header")
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Articles</h2>
                <p class="bg-info">Estos son los articulos creados hasta el momento</p>
                @if (session('deleted'))
                    <div class="alert alert-success" role="alert">
                        {{ session('deleted')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            @foreach ($articles as $a)
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <p>Titulo: {{ $a->title }}</p>
                            <p>Contenido: {{ $a->content }}</p>
                            <p>Lectores: {{ $a->readers }}</p>
                            <!-- <p>Contraseña: {{ $j->password }}</p>  -->

                            <div class="mt-auto">
                                <a href={{ route('article.edit', $a->id) }} class="btn btn-primary">Editar
                                </a>
                                <form class="d-inline" method="post" action="{{ route('article.destroy', $a->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>