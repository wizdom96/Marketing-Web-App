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
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="{{Request::path() === '/' ? 'nav-item active' : ''}}">
            <a class="nav-link" href="http://localhost/Laravel/public/">Home
              
            </a>
          </li>
         
            <a class="nav-link" href="http://localhost/Laravel/public/about">About
        </a>
          </li>
         
            <a class="nav-link" href="http://localhost/Laravel/public/advertise">
            Advertise</a>
          </li>
        
            <a class="nav-link" href="http://localhost/Laravel/public/contact">Contact
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


@foreach($res->first() as $r) 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">{{$r->title}}
    
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">
<div class="w3-content w3-display-container">
<?php foreach (json_decode($r->image) as $picture) { ?>
  <img class="mySlides" src="..\uploads\content\<?php echo $picture ?>" style="width:700px; height:400px" >
<?php } ?>

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
         
         


  
    <div class="col-md-4">
      <h3 class="my-3">Advertise description</h3>
      <p>{{$r->description}}</p>
      <p>CITY: {{$r->city}}</p>
      <p>CONTACT: {{$r->phone}}</p>
      <p>PRICE: {{$r->price}} € </p>
      <h3 class="my-3">Car details</h3>
      <ul>
      <li>{{$r->make}}, {{$r->model}}</li>
        <li>Year: {{$r->year}}</li>
        <li>Power: {{$r->power}}</li>
        <li>Fuel: {{$r->fuel}}</li>
        <li>Passed: {{$r->km}} km</li>
        <li>Fuel: {{$r->fuel}}</li>
        <li>Transmission: {{$r->transmission}}</li>
        
      </ul>
    </div>
    @endforeach
  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->


  </body>
</div>
<br><br><br>
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; cars.mk <script>
            var CurrentYear = new Date().getFullYear()
            document.write(CurrentYear)
        </script> </p>
    </div>
  </footer>

  <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

