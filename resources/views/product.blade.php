@extends('layout')
@section ('product')

 
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

  <button class="btn-primary btn-sm" onclick="plusDivs(-1)">&#10094;</button>
  <button class="btn-primary btn-sm" onclick="plusDivs(1)">&#10095;</button>
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
        
        <li>Transmission: {{$r->transmission}}</li>
        
      </ul>
    </div>
    @endforeach
  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->



</div>
<br><br><br>


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

@endsection
