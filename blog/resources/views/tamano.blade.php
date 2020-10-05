@extends("layouts.app")

@section("content")
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<head>
    <title> Tamaños </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
    
</head>
<body style="background-color: #F0FAFF;">
    
    <div class="titulo">
        Elije el tamaño de tu manilla
    </div>
   
   <div id="subtamaño">
        Cada tamaño tiene diseños distintos
    </div>
    <div id="boxpequeña">
        <a href="pequeno"> CHIQUITA </a>
    </div>
    <div id="boxmediana">
        <a href="mediana"> MEDIANA </a>
    </div>
    <div id="boxgrande">
        <a href="grande"> GRANDE </a>
    </div>
</body>
@endsection