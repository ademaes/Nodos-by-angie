@extends("layouts.app")

@section("content")
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<head>
    <title> Manilla </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
    
</head>
<body style="background-color:#F8D9FC;">
  
    <div class="titulo">
        Tu manilla fue Ordenada exitosamente
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            Tu pedido estara listo en {{$data["fecha"]->fecha}} a las {{$data["fecha"]->hFinal}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col s6 offset-s6">
    <a class="waves-effect waves-light btn-small" href="HomeAde">Volver al Home</a>
    </div>
   
  
   
    
</body>
@endsection