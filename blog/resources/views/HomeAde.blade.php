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
        Portafolio
    </div>
    <div class="di">
        <a class="waves-effect waves-light btn-large" href="tamano" >Button</a>
        
    </div>
    <img src="{{ asset('img/Portfolio.png') }}" class="portfolio">
   
  
   
    
</body>
@endsection