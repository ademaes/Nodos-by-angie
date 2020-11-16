@extends("layouts.app")

@section("content")

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<head>
    <title> Mediana </title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body style="background-color: #FFEEEE;">
    <div class="titulo">
    </div>
    <div class="titulo">
        Elige el diseño de tu manilla mediana
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <form class="col s12" method="POST" action="{{route('colorSave')}}">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s6">
                                        <textarea id="textarea1" name="color1" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Color 1</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <textarea id="textarea2" name="color2" class="materialize-textarea"></textarea>
                                        <label for="textarea2">Color 2</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <textarea id="textarea3" name="color3" class="materialize-textarea"></textarea>
                                        <label for="textarea3">Color 3</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea4" name="nota" class="materialize-textarea"></textarea>
                                        <label for="textarea4">Nota</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Agregar') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
@endsection