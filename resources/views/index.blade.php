@extends('layout')
@section ('index')

<div class="row justify-content-center">
  <form action="{{ ('search') }}" class="form-inline row" name="myform" method="POST" >

  {{csrf_field()}}
    <div class="col-xs-8" style="padding:10px">
      <input  id="title" class="form-control" name="title" placeholder="Search by title">
    </div>
   
    <div class="col-xs-8" style="padding:10px">
    <select  id="make" name="make" class="form-control" placeholde="Select make">
                                <option value="">-- Select make --</option>
                                @foreach ($make as $key => $value)
                                <option id="{{$key}}" value="{{ $value }}">{{ $value }}</option>
                                
                                    @endforeach
                                    
                                    </select>
    </div>
   
    <div class="col-md-6" style="padding:10px">
    
     <select  id="model" name="model" class="form-control" placeholder="Select model">
    <option value="">-- Select model --</option></select>
    </div>
    <div class="col-xs-4"  style="padding:10px">
    <input type="number"  name="minprice" id="minprice" class="form-control" step="100" placeholder="min price">
    <input type="number"  name="maxprice" id="maxprice"  class="form-control" step="100" placeholder="max price">
    </div>
  
    <div class="col-xs-4"  style="padding-right:20px">
    <input type="number" min="1900" max="2099" step="1" name="fyear" id="fyear" class="form-control" placeholder="f. year" >
    <input type="number" min="1900" max="2099" step="1" name="toyear" id="toyear" class="form-control" placeholder="t. year">
    </div>
   
    <div class="col-xs-4  style="padding:10px" class="form-control">

                            <select name="fuel" id="fuel" class="form-control">
                                <option value="0">fuel type</option>
                                <option value="petrol">Petrol</option>
                                <option value="diesel">Diesel</option>
                                <option value="electric">Electric</option>
                                <option value="hybrid">Hybrid</option>
                                <option value="lpg">Lpg</option>
                                </select>
                           
                            </div>
                       <br><br><br>
</div>
    <div class="col-md-3">
      <button type="submit" class="btn btn-primary btn-block">Search</button>
    </div>


  </form>
</div>



<br><br>


<br><br>
</div>
@foreach ($results as $result)

@if (($result->sponsored) === 1)
<div class="container">
   <div class="row1">
                 
               <?php 
                       json_decode($result->image);
                       $x = explode('"', $result->image);
               ?>   

               <div class="img-container">
                       <img class="small-img"  src="uploads/content/<?php echo $x[1]; ?>"  alt="car-image"> 
               </div>
         <h4 class="pad" >{{ $result->title }} <br> 
         <p class="pad">{{ $result->price }} €</p>
         <a href="product/{{$result->id}}" class="btn-primary btn-lg" >Find Out More!</a></h4>
         <div class="sponsored" style="background-color:yellow;height:30%;border:1px solid black;border-radius:25px;padding:5px">
         Sponsored
        </div>
       </div>
       <br>
   </div>
 </div>
    @endif
 @endforeach
 @foreach ($results as $result)
 @if (($result->sponsored) === 0)
 <div class="container">
    <div class="row1">
                  
                <?php 
                        json_decode($result->image);
                        $x = explode('"', $result->image);
                ?>   

                <div class="img-container">
                        <img class="small-img"  src="uploads/content/<?php echo $x[1]; ?>"  alt="car-image"> 
                </div>
          <h4 class="pad" >{{ $result->title }} <br> 
          <p class="pad">{{ $result->price }} €</p>
          <a href="product/{{$result->id}}" class="btn-primary btn-lg" >Find Out More!</a></h4>
        </div>
        <br>
    </div>
  </div>
@endif
  @endforeach
  
        <div class="container">
            <div class="row">
             {{ $results->links() }}
        </div>
    </div>
 

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="make"]').on('change', function() {
            var makeID = $(this).find('option:selected').attr('id');
            if(makeID) {
                $.ajax({
                    url: 'ajax/'+makeID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        
                        $('select[name="model"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="model"]').append('<option value="'+ value.car_model +'">'+ value.car_model +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="model"]').empty();
            }
        });
    });
</script>

@endsection
