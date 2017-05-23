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

<link href="/css/datepicker.css" rel="stylesheet">

        <style>
            html, body {
                background-color: #bdc3c7;
            }
            #cor-padrao{

                background-color: #2980b9 !important;
                color: #FFF !important;
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
                        @can('users-view')
                            <li><a href=""><strong><i class="fa fa-users" aria-hidden="true"></i>
Usuários</a></strong></li>
                        @endcan
                        @can('users-update')
                            <li><a href="{{ route('user.edit', Auth::user()->id) }}"><strong><i class="fa fa-user" aria-hidden="true"></i>
Perfil</a></strong></li>
                        @endcan
                        @can('events-view')
                            <li><a href="{{ url('/event') }}"><strong><i class="fa fa-calendar" aria-hidden="true"></i>
 Eventos</a></strong></li>
                        @endcan
                        @can('talks-view')
                            <li><a href="{{ url('/talk') }}"><strong><i class="fa fa-microphone" aria-hidden="true"></i>
 Palestras</a></strong></li>
                        @endcan
                        @can('talks-all')
                            <li><a href="{{ url('/talks') }}"><strong><i class="fa fa-microphone" aria-hidden="true"></i>
 Palestras</a></strong></li>
                        @endcan
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}"> LOGIN</a></li>
                            <li><a href="{{ url('/register') }}"> REGISTRE-SE</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><strong>
                                    <i class="fa fa-user" aria-hidden="true"></i>
 {{ Auth::user()->apelido }} </strong><span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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


     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="js/app.js"></script>

     <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>

  
    <script src="/js/datepicker.js"></script>
    <script src="/js/jquery.maskedinput.js"></script>
    
    <script>
    jQuery(function($){
       $("#dtinicial").mask("99/99/9999");
       $("#dtfinal").mask("99/99/9999");
       $("#dtfimcfp").mask("99/99/9999");  
}); 
</script>
<script>
  $(function() {
        $("#dtinicial").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
      });
          
        $("#dtfinal").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
      });
        $("#dtfimcfp").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
      });
  });
</script>    

</body>
</html>
