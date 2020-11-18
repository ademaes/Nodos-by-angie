@extends("layouts.app")

@section("content")
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<head>
    <title> chiquita </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
    
</head>
<body style="background-color: #F0FAFF;">
    <div class="titulo">
    Elige el diseño de tu manilla chiquita
    </div>
    <a href="chiquitaEstilo1"><img src="{{ asset('img/chiquita1.png') }}" id="chiquita1" title="Opcion 1" alt="Flower"></a>
    <a href="chiquitaEstilo2"><img src="{{ asset('img/chiquita2.png') }}" id="chiquita2" title="Opcion 2" alt="Flower"></a>
    <a href="chiquitaEstilo3"><img src="{{ asset('img/chiquita3.png') }}" id="chiquita3" title="Opcion 3" alt="Flower"></a>
    
   
</body>
@endsection