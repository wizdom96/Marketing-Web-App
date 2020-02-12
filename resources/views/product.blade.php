@extends('layout')
@section('product_id')

@foreach($res->first() as $r) 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">{{$r->title}}
    
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="http://placehold.it/750x500" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Advertise description</h3>
      <p>{{$r->description}}</p>
      <p>CITY: {{$r->city}}</p>
      <p>CONTACT: {{$r->phone}}</p>
      <p>PRICE: {{$r->price}} </p>
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

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->


 
</div>
<!-- /.container -->
<br><br><br>
@endforeach
@endsection