@extends("layouts.app")

@section("content")
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<head>
    <title> Mediana </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
    
</head>
<body style="background-color: #F0FAFF;">
    
    <div class="titulo">
    Elige el diseño de tu manilla grandota
    </div>
    <a href="grandeEstilo1"><img src="{{ asset('img/grande1.png') }}" id="grande1" title="Opcion 1" alt="Flower"></a>
    <a href="grandeEstilo2"><img src="{{ asset('img/grande2.png') }}" id="grande2" title="Opcion 2" alt="Flower"></a>
    <a href="grandeEstilo3"><img src="{{ asset('img/grande3.png') }}" id="grande3" title="Opcion 3" alt="Flower"></a>
   
</body>
@endsection