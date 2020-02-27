@extends('layout')
@section ('index')
    


<div class="row justify-content-center">
  <form action="" class="form-inline row" name="myform" method="GET" >

  {{csrf_field()}}
    <div class="col-xs-8" style="border:1px solid black">
      <input type="search" class="form-control" id="search" placeholder="Search by title">
    </div>
    &nbsp;&nbsp;
    <div class="col-xs-8">
    <select  id="make" name="make" class="form-control" placeholde="Select make">
                                <option value="">-- Select make --</option>
                                @foreach ($make as $key => $value)
                                <option id="{{$key}}" value="{{ $value }}">{{ $value }}</option>
                                
                                    @endforeach
                                    
                                    </select>
    </div>
    &nbsp;&nbsp;
    <div class="col-md-6">
    
    <select  id="model" name="model" class="form-control" placeholder="Select model">
    <option value="">-- Select model --</option></select>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-xs-4">
    <input type="number"  class="form-control" placeholder="Min Price">
    
          <input type="number"  class="form-control" placeholder="Max Price">
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <div class="col-xs-4">
    <input type="number"  class="form-control" placeholder="From year">
    
          <input type="number"  class="form-control" placeholder="To Year">
    </div>
    &nbsp;&nbsp; &nbsp;&nbsp;
    <div class="col-xs-4" class="form-control">

                            <select name="fuel" id="fuel" class="form-control">
                                <option value="0">Fuel Type</option>
                                <option value="petrol">Petrol</option>
                                <option value="diesel">Diesel</option>
                                <option value="electric">Electric</option>
                                <option value="hybrid">Hybrid</option>
                                <option value="lpg">Lpg</option>
                                </select>
                           
                            </div>
                       <br><br><br>
    <div class="col-md-3">
      <button type="button" class="btn btn-primary btn-block">Search</button>
    </div>


  </form>
</div>



<br><br>


<br><br>

 @foreach ($results as $result)

 <div class="container">
 <div class="row">
 <?php foreach (json_decode($result->image) as $picture) {}  ?>

          <img  src="uploads/content/<?php echo $picture ?>" width="300px" height="125px" alt="">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4 >{{ $result->title }} <br>
          <p>{{ $result->price }} €</p>
          <a href="product/{{$result->id}}" class="btn-primary btn-sm" >Find Out More!</a></h4>
        </div>
        <br>
    </div>
  </div>
  <br><br>  
 
 
 
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