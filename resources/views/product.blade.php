@extends('layout')
@section ('product')

 
@foreach($res->first() as $r) 


      <h1 class="my-4">{{$r->title}}  </h1>
          <div class="row">

          <button class="btnnp" onclick="plusDivs(-1)">&#10094;</button>
                    <div class="product-img-container" >
                      
              <?php foreach (json_decode($r->image) as $picture) { ?>
                <img  src="..\uploads\content\<?php echo $picture ?>" class="mySlides" alt="product-image" >
              <?php } ?>

        </div>

                <button type="submit" class="btnnp" onclick="plusDivs(1)">&#10095;</button>
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
