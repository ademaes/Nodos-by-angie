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
    <img src="{{ asset('img/grande1.png') }}" id="grande1">
    <img src="{{ asset('img/grande2.png') }}" id="grande2">
    <img src="{{ asset('img/grande3.png') }}" id="grande3">
   
</body>
@endsection