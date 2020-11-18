@extends("layouts.app")

@section("content")
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<head>
    <title> Home </title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body style="background-color:#F8D9FC;">

    <div class="titulo">
        El dueño de la manilla es:
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <li> Nombre: {{$data["nombre"]}}</li>
                        <li> Correo: {{$data["email"]}}</li>
                        <li> Usuario de Instagram: {{$data["instagram"] ?? 'No tiene'}}</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="waves-effect waves-light btn-small" href="admin">Voler a los pedidos</a>
    <a class="waves-effect waves-light btn-small" href="verManilla">Volver a la manilla</a>




</body>
@endsection