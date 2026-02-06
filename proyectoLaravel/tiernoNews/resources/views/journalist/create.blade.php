<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new journalist</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    @include("components.header")
    <!--Formulario de creación de journalist:
        - nombre
        - apellidos
        - email
        - contraseña
        - repite la contraseña
    -->
    <div class="container">
        <div class="row">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-warning alert-dismissible fade show mt-1" role="alert">
                        {{$error}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>

                @endforeach
            @endif
            <div class="col">
                <form action="{{ route('journalist.store') }}" method="post">
                    @csrf
                    <!-- añade un campo hidden con un token imprescindible para que laravel le deje continuar -->
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input name="name" type="text" id="name" placeholder="Enter name"
                            class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name') <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="surname">Apellidos</label>
                        <input name="surname" type="text" class="form-control" id="surname" placeholder="Enter surname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" id="email" placeholder="Enter email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email') <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pass1">Contraseña</label>
                        <input name="password" type="password" id="pass1" placeholder="Password"
                            class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                        @error('password') <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pass2">Repite la contraseña</label>
                        <input name="password_confirmation" type="password" class="form-control" id="pass2" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>


</html>