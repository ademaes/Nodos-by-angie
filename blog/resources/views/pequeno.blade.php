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
    <img src="{{ asset('img/chiquita1.png') }}" id="chiquita1">
    <img src="{{ asset('img/chiquita2.png') }}" id="chiquita2">
    <img src="{{ asset('img/chiquita3.png') }}" id="chiquita3">
   
</body>
@endsection