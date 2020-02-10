@extends('layout')
@section ('index')
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<form id="carForm" class="">
<div class="form-group">
  <select name="make" id="make">
    <option value="0">Choose car brand:</option>
    <option value="Audi">Audi</option> <!-- These values are now make names -->
    <option value="BMW">BMW</option>
    <option value="VW">VW</option>
    <option value="Daewoo">Daewoo</option>
    <option value="Peugeot">Peugeot</option>
    
</div>
  </select>
  <select name="model" id="model">
    <option value="0">Select model:</option>
    <option class="318i" value="318i" data-make="BMW">318i</option>
    <option class="X2" value="X2" data-make="BMW">X2</option>
    <option class="lanos" value="Lanos" data-make="Daewoo">Lanos</option>
    <option class="lanos" value="Nexia" data-make="Daewoo">Nexia</option>
    <option class="Audi" value="A3" data-make="Audi">A3</option>
    <option class="Audi" value="A6" data-make="Audi">A6</option>
    <option class="VW" value="GolfV" data-make="VW">GolfV</option>
    <option class="VW" value="Passat" data-make="VW">Passat</option>
    <option class="Peugeot" value="206" data-make="Peugeot">206</option>
    <option class="Peugeot" value="307" data-make="Peugeot">207</option>
  </select>
  <button type="submit">Submit</button>
</form>
<br><br>
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <script src="js/get.js"></script>
@endsection
