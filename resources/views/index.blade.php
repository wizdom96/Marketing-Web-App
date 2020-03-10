@extends('layout')
@section ('index')



<div  class="row justify-content-center" style="background-color:#ebebe0;padding:35px;border-radius: 25px;" >
  <form action="{{ route('search') }}" class="form-inline" name="myform" method="GET" >


    <div class="col-xs-8" style="padding:40px">
    <label for="make">Search by title</label>
      <input  id="title" value="<?php echo request()->title;?>" class="form-control form-control-sm" name="title" >
    </div>

   
    <div class="col-xs-8" style="padding:40px" >
    <label for="make">Select make:</label>
    <select id="make" name="make" class="form-control form-control-sm">
    <option><?php echo request()->make;?></option>
    <option>------------------</option>
                               
                               
                                @foreach ($make as $key => $value)
                                <option id="{{$key}}" value="{{ $value }}">{{ $value }}</option>        
                                    @endforeach
        </select>
    </div>
   
    <div class="col-xs-8" style="padding:40px">
    <label for="model">Select model:</label>
     <select  id="model" name="model" class="form-control form-control-sm">
    <option value=""><?php echo request()->model;?></option>
    <option>------------------</option>
    </select>
    </div>
    <div class="col-xs-8" style="padding:40px">
    <label for="fuel">Fuel type:</label>
    <select name="fuel" id="fuel" class="form-control form-control-sm"  >
                         
                            <option value=""><?php echo request()->fuel;?></option>
                            <option>----------</option>
                                <option value="petrol">Petrol</option>
                                <option value="diesel">Diesel</option>
                                <option value="electric">Electric</option>
                                <option value="hybrid">Hybrid</option>
                                <option value="lpg">Lpg</option>
    </select>
                           
    </div>
  
    
    
  
    <div class="col-xs-4"  style="padding-right:30px;padding-left:40px;" >
  
    <input type="number"  name="minprice" id="minprice" class="form-control form-control-sm" step="100" placeholder="minprice"   value="<?php echo request()->minprice;?>" >
    </div>
    <div class="col-xs-4" style="padding-right:30px"  >
 
    <input type="number"  name="maxprice" id="maxprice"  class="form-control form-control-sm" step="100" placeholder="maxprice"  value="<?php echo request()->maxprice;?>" >
    </div>
    
    <div name="price" class="col-xs-4" style="padding-right:30px"   >
   
    <input type="number"  min="1900" max="2099" step="1" name="fyear" id="fyear" class="form-control form-control-sm" placeholder="from year" style="width:100px"  value="<?php echo request()->fyear;?>" >
    </div>
    <div class="col-xs-4" style="padding-right:30px"  >
  
    <input type="number" min="1900" max="2099" step="1" name="toyear" id="toyear" class="form-control form-control-sm" placeholder="to year" style="width:100px" value="<?php echo request()->toyear;?>">
    
    </div>
    <div class="col-md-3" style="padding-right:30px" >
      <button  type="submit" class="btn btn-primary btn-block">Search</button>
    </div> 
</div>

</div>
  </form>
</div>
<br><br><br>
</div>

 
 @foreach ($results as $result)

 @if(($result->sponsored) === 3 )

 <div class="container">
    <div class="row1">
                  
              @foreach ($images as $image)
                    @if($image->content_id === $result->id)
                      
                   <div class="img-container">
                        <a class="small-img" href="product/{{$result->id}}"><img  href="about "class="small-img"  src="uploads/content/<?php echo $image->image_name; ?>"  alt="car-image"> </a>
                </div>
                @break
                  @endif
               @endforeach
             
          <h4 class="pad" >{{ $result->title }} 
          <div class="sponsored">Sponsored</div>
          
          <p class="pad">{{ $result->price }} €</p>
          <a href="product/{{$result->id}}" class="btn-primary btn-lg" >Find Out More!</a></h4>         
        </div>
        <br>
        
       
    </div>
  </div>

  @else

 <div class="container">
    <div class="row1">
                  
           @foreach ($images as $image)
                    @if($image->content_id == $result->id)
                      
                <div class="img-container">
                <a class="small-img" href="product/{{$result->id}}"> <img class="small-img"  src="uploads/content/<?php echo $image->image_name; ?>"  alt="car-image"> </a>
                </div>
                @break
                  @endif
               @endforeach
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
