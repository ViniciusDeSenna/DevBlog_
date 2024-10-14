<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{!! env('APP_NAME') !!}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    </head>

        <!-- Quill Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.bubble.css" rel="stylesheet" />

    <body>
        @include('components.navbar')
        <div class="container position-relative">
            <img src="https://avatars.githubusercontent.com/u/110927988?v=4" class="img-fluid w-100 mt-3" alt="Banner" style="object-fit: cover; height: 300px;">
            <img src="https://avatars.githubusercontent.com/u/110927988?v=4" class="img-thumbnail position-absolute" alt="Perfil" style="top: 150px; left: 20px; width: 200px; height: auto;">
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12 col-lg-10">
                    <h3>
                        Vinícius de Senna
                        <small class="text-body-secondary">The Creator</small>
                    </h3>
                </div>
                <div class="col-sm-12 col-lg-2">
                    <button type="button" class="btn btn-outline-secondary w-100">Editar</button>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body"></div>
                <div class="card-footer"></div>
            </div>
            <div id="editor" style="margin: 50px 0;" class="border">
                <p>Hello, <strong>World</strong></p>
            </div>
        </div>
        <!-- Include the Quill library -->
        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script>
            const quill = new Quill('#editor', {
                placeholder: 'Compose an epic...',
                theme: 'bubble',
            });
        </script>
    </body>
</html>
