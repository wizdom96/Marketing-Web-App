<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>cars.mk</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{asset ('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    cars.mk
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else


                        <li class="nav-item dropdown">
                                <a id="navbar" class="nav-link" href="http://localhost/Laravel/public/" style="color:#2B4FCA ;">
                                <b> Home page</b><span class="caret"></span>
                                </a>
                                </li>
                        @if ((Auth()->user()->permission) === 1 )
                        <li class="nav-item dropdown">
                                <a id="navbar" class="nav-link" href="{{ url('dashboard/allusers') }}" style="color:#2B4FCA ;" >
                                <b>View all users</b><span class="caret"></span>
                                </a>
                                
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#2B4FCA ;" v-pre>
                                <b> Make </b><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('dashboard/make')}}" >
                                       
                                        New car make
                                    </a>
                                    <a class="dropdown-item" href="{{url('dashboard/makemodel')}}" >
                                       
                                        New car model
                                    </a>
                                   
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbar" class="nav-link " href="{{ url('dashboard/newad') }}"  style="color:#2B4FCA ;" >
                                    <b>Make new ad</b><span class="caret"></span>
                                </a></li>
                                <li class="nav-item dropdown">
                                <a id="navbar" class="nav-link " href="{{ route('account', ['userId' => Auth::id()]) }}" style="color:#2B4FCA ;"  >
                                <b>Active ads</b><span class="caret"></span>
                                </a></li>


                                    @endif
                               
                            
                            
                                    

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#2B4FCA ;" v-pre>
                                <b> {{ Auth::user()->email }} </b><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('dashboard') }}" >
                                       
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('showform', ['userId' => Auth::id()]) }}">
                                       
                                        Change details
                                    </a>
                                    <a class="dropdown-item" href="{{ route('passwordform', ['userId' => Auth::id()]) }}">
                                       
                                        Change password
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            @yield('newad')
            @yield('details')
            @yield('updateform')
            @yield('make')
        </main>
    </div>
</body>
<br><br><br><br>
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; cars.mk <script>
            var CurrentYear = new Date().getFullYear()
            document.write(CurrentYear)
        </script> </p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  
</html>
</html>
