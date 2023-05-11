<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Call For Papers</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ecf0f1;
                color: #5B1E00;
                font-family: 'Lexend', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .copyright{
                font-size: 12px;
            }
            #link-color{

                color: #025c98;
            }
            body {
                color: #5B1E00;
            }

            a {
                color: #5B1E00 !important;
            }
        </style>
    </head>
    <body style="background-image: url('img/background-slide1.webp'); background-repeat: no-repeat; background-size: 100% 100%;">
       <div class="container">
       
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}"><strong>Início</strong></a>
                    @else
                        <a style="font-size: 20px;" href="{{ url('/login') }}"><strong>Login</strong></a>
                        <a style="font-size: 20px;" href="{{ url('/register') }}"><strong>Registre-se</strong></a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                @if(isset($events->name))
                    <strong>{!! $events->name !!}</strong>
                </div>
                
                <div class="links">
                  <p style="font-size: 25px;text-align: justify;">{!! $events->detalhes !!}</p>
                  <h1><b>Submeta a sua palestra até o dia {!! $events->present()->datafimdocfp !!}</b></h1>
                </div>
                @endif
                

                <div class="col-md-12 text-center">
                    <br>
                      <p class="copyright">Call For Papers | <a id="link-color" href="http://phpcomrapadura.org" target="_blank">Comunidade PHP com Rapadura</a> | Ceará - Brasil</p>
                    <br>
                </div>
                <div class="col-md-12 text-center">
                    <a href='https://app.umbler.com/u/2j3g7r5k'>
                    <img src='https://static.umbler.com/brand/umbler-badges/umbler-badge-hostedby-dark-bg.png' 
                    width='20%' alt='Hosted by Umbler'>
                </a>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
