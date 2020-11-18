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
        Esta manilla tiene:
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <li> Tamano: {{$data["tamano"]}}</li>
                        <li> Estlito: {{$data["estilo"]}}</li>
                        <li> Colores: {{$data["colores"]}}</li>
                        <li>
                            <form method="POST" action="{{route('verCliente')}}">
                                @csrf
                                <input type="hidden" id="idCliente" value="{{$data['idCliente']}}" name="idCliente">
                                <button type="submit">
                                    {{ __('Ver Cliente') }}
                                </button>
                            </form>
                        </li>
                        <a class="waves-effect waves-light btn-small" href="admin">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    





</body>
@endsection