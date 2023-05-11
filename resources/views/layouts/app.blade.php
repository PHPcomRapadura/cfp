<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<script src="https://use.fontawesome.com/6c531641d9.js"></script>

<link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">

<link href="{{ asset('css/menu.css') }}" rel="stylesheet">

        <style>
            html, body {
                background-color: #bdc3c7;
            }
        </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" id="cor-padrao">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @can('events-view')
                            <li><a href="{{ route('event.index') }}"><strong><i class="fa fa-calendar" aria-hidden="true"></i> Eventos</a></strong></li>
                        @endcan
                        @can('talks-view')
                            <li><a href="{{ route('talk.index') }}"><strong><i class="fa fa-microphone" aria-hidden="true"></i> Controle de palestras</a></strong></li>
                        @endcan
                        @can('talks-all')
                            <li><a href="{{ route('talks.all') }}"><strong><i class="fa fa-microphone" aria-hidden="true"></i> Palestras submetidas</a></strong></li>
                        @endcan
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('login') }}"> LOGIN</a></li>
                            <li><a href="{{ url('register') }}"> REGISTRE-SE</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><strong>
                                    <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->apelido }} </strong><span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    @can('users-update')
                                        <li>
                                            <a href="{{ route('user.edit', Auth::user()->id) }}">
                                                <i class="fa fa-user" aria-hidden="true"></i> Meu perfil
                                            </a>
                                        </li>
                                    @endcan
                                    <li>
                                        <a href="{{ url('logout') }}" class="text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i> Sair
                                        </a>

                                        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

              <script
              src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
              integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
              crossorigin="anonymous"></script>


     <script src="{{ asset('/js/jquery.maskedinput.js') }}"></script>

     <script src="{{ asset('js/datepicker.js') }}"></script>


<script>
  $(function() {
        $("#dtinicial").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
        });

        $("#dtinicial").mask("99/99/9999");

        $("#dtfinal").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
         });

        $("#dtfinal").mask("99/99/9999");

        $("#dtfimcfp").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
        });

         $("#dtfimcfp").mask("99/99/9999");
  });
</script>

</body>
</html>
