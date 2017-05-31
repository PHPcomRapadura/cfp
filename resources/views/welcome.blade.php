<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Call For Paper</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ecf0f1;
                color: #636b6f;
                font-family: 'Arial', sans-serif;
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
                font-size: 84px;
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
                color: #fff;
            }

            a {
                color: #fff !important;
            }
        </style>
    </head>
    <body style="background-image: url('img/fundo.png'); background-repeat: no-repeat; background-size: 100% 100%;">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}"><strong>Início</strong></a>
                    @else
                        <a href="{{ url('/login') }}"><strong>Login</strong></a>
                        <a href="{{ url('/register') }}"><strong>Registre-se</strong></a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                @if(isset($events->name))
                    <strong>{!! $events->name !!}</strong>
                </div>
                
                <div class="links">
                  <h2>Submeta a sua palestra até o dia {!! $events->present()->datafimdocfp !!}</h2>
                </div>
                @endif
                

                <div class="col-md-12 text-center">
                  <p class="copyright">Call For Papers | <a id="link-color" href="http://phpcomrapadura.org" target="_blank">Community PHP com Rapadura</a> | Ceará - Brasil</p>
                </div>

            </div>
        </div>
    </body>
</html>
