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
    <div class="container">
        @include("components.header")
        <div class="row">
            <div class="col">
                <h2>Journalists</h2>
                <p class="bg-info">Estos son las y los periodistas de mi BD</p>
                @if (session('deleted'))
                    <div class="alert alert-success" role="alert">
                        {{ session('deleted')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            @foreach ($journalists as $j)
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <p>Nombre: {{ $j->name }}</p>
                            <p>Apellidos: {{ $j->surname }}</p>
                            <p>Email: {{ $j->email }}</p>
                            <p>Contraseña: {{ $j->password }}</p>

                            <div class="mt-auto">
                                <a href={{ route('journalist.edit', $j->id) }} class="btn btn-primary">Editar
                                </a>
                                <form class="d-inline" method="post" action="{{ route('journalist.destroy', $j->id) }}">
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
</body>

</html>