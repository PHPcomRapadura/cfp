<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHPeste | Envio de palestras</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">

    <style>
        html,
        body {
            background-image: url('img/background-slide1.webp'); 
            background-repeat: no-repeat; 
            background-size: 100% 100%;
            background-color: #eabe52;
            color: #5B1E00;
            font-family: 'Lexend', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        a {
            color: #5B1E00;
            font-size: 18px;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-12 col-sm-12 col-md-6 text-center mt-4">
                <img src="https://phpeste.org/images/phpeste_marrom.webp" width="50%" alt="PHPeste" />
            </div>

            <div class="col-12 col-sm-12 col-md-6 text-center mt-5">
                @if (Route::has('login'))
                @if (Auth::check())
                <a href="{{ url('/home') }}"><strong>Início</strong></a>
                @else
                <a href="{{ url('/login') }}" style="margin-right: 10px;"><strong>Login</strong></a>
                <a href="{{ url('/register') }}" style="margin-left: 10px;"><strong>Registre-se</strong></a>
                @endif
                @endif
            </div>

        </div>

        <div class="row">

            <div class="col-12 col-sm-12 col-md-12 text-center mt-4 mb-4">
                @if(isset($events->name))
                <h1>{!! $events->name !!}</h1>
            </div>

            <div class="col-12 col-sm-12 col-md-12 text-center mt-4 mb-4">
                <p style="font-size: 25px;text-align: justify;">{!! $events->detalhes !!}</p>
                <h1><b>Submeta a sua palestra até o dia {!! $events->present()->datafimdocfp !!}</b></h1>
            </div>
            @endif

        </div>

        <div class="row">

            <div class="col-12 col-sm-12 col-md-6 text-center mt-4 mb-4">
                <a href='https://app.umbler.com/u/2j3g7r5k'>
                    <img src='https://static.umbler.com/brand/umbler-badges/umbler-badge-hostedby-dark-bg.png' width='20%' alt='Hosted by Umbler'>
                </a>
            </div>

            <div class="col-12 col-sm-12 col-md-6 text-center mt-4 mb-4">
                <p style="font-size: 12px;">Call For Papers | <a href="http://phpcomrapadura.org" target="_blank">Comunidade PHP com Rapadura</a> | Ceará - Brasil</p>
            </div>

        </div>

    </div>

    </div>
</body>

</html>