@extends("layouts.app")

@section("content")
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<head>
    <title> chiquita </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>

<body style="background-color: #F0FAFF;">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="highlight">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Hora Inicial</th>
                            <th>Hora Final</th>
                            <th>Manilla</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data["pedidos"] as $pedido)
                        <tr>
                            <td>{{$pedido->fecha}}</td>
                            <td>{{$pedido->hInicial}}</td>
                            <td>{{$pedido->hFinal}}</td>
                            <td>
                                <form method="POST" action="{{route('verManilla')}}">
                                    @csrf
                                    <input type="hidden" id="idManilla" value="{{$pedido->idManilla}}" name="idManilla">
                                    <button type="submit" class="waves-effect waves-light btn-small">
                                        {{ __('Ver manilla') }}
                                    </button>
                                </form>
                            </td>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@endsection