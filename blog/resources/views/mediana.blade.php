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
    <img src="{{ asset('img/mediana1.png') }}" id="chiquita1">
    <img src="{{ asset('img/mediana2.png') }}" id="chiquita2">
    <img src="{{ asset('img/mediana3.png') }}" id="chiquita3">
   
</body>
@endsection