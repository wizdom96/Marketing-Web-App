<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Cars sell | Best cars dealer website</title>

  <!-- Bootstrap core CSS -->
<link href="{{asset ('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="http://localhost/Laravel/public/">Best car dealership web</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="{{Request::path() === '/' ? 'nav-item active' : ''}}">
            <a class="nav-link" href="http://localhost/Laravel/public/">Home
              
            </a>
          </li>
          <li class="{{Request::path() === 'about' ? 'nav-item active' : ''}}">
            <a class="nav-link" href="about">About
        </a>
          </li>
          @auth  
          <li class="{{Request::path() === 'dashboard' ? 'nav-item active' : ''}}">
            <a class="nav-link" href="dashboard">
            Profile</a>
          </li>
              @else
          <li class="{{Request::path() === 'advertise' ? 'nav-item active' : ''}}">
            <a class="nav-link" href="advertise">
            Advertise</a>
          </li>
          @endauth
          <li class="{{Request::path() === 'contact' ? 'nav-item active' : ''}}">
            <a class="nav-link" href="contact">Contact
        </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Cars sales</h1>
          <p class="lead mb-5 text-white-50">Best site for advertiseing cars for sale.</p>
        </div>
      </div>
    </div>
  </header>
  
<body>

    <div class="container">
    @yield('index')
    @yield ('product')
    @yield('about')
    @yield ('advertise')
    @yield ('addpost')
    @yield ('login')
    @yield ('register')
    @yield ('dashboard')
    @yield ('contact')
</div>
</body>

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
    
