@extends("layouts.app")

@section("content")
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<head>
    <title> Mediana </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
    
</head>
<body style="background-color: #FFEEEE;">
    
    <div class="titulo">
    Elige el diseño de tu manilla mediana
    </div>
    <a href="medianaEstilo1"><img src="{{ asset('img/mediana1.png') }}" id="chiquita1" title="Opcion 1" alt="Flower"></a>
    <a href="medianaEstilo2"><img src="{{ asset('img/mediana2.png') }}" id="chiquita2" title="Opcion 1" alt="Flower"></a>
    <a href="medianaEstilo3"><img src="{{ asset('img/mediana3.png') }}" id="chiquita3" title="Opcion 1" alt="Flower"></a>
   
</body>
@endsection