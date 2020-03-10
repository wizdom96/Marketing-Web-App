
@extends('layouts.app')
@section ('details')
@if ((Auth()->user()->permission) === 0 )
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <br><br><br>
   <div class="row justify-content-center">
                <h1>YOUR ACTIVE ADS</h1>
         </div>
         <br><br><br>
 @foreach ($results as $result)
 <div class="container">
            <div class="row1">


                   
              @foreach ($img as $images)
                    @if($images->content_id == $result->id)
                      
                <div class="img-container">
                        <img class="small-img"  src="../uploads/content/<?php echo $images->image_name; ?>"  alt="car-image"> 
                </div>
                @break
                  @endif
               @endforeach
               <h4 class="pad" >{{ $result->title }} <br>
                       
                 <p >{{ $result->price }} €</p>
       
            
                    <a href="{{ url('deletead') }}/{{$result->id}}" class="btn-primary btn-sm" onclick="return confirm('Are you sure you want to delete this ad?');">DELETE</a>

                    @switch($result->sponsored)
                  @case(3)
                    <a href="{{ url('unsponsored') }}/{{$result->id}}" class="btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this ad?');">Unsponsore this!</a>
                    @break
                    @case(1)
                    @if(($result->approved)===1)
                    <a href="{{ url('sponsored') }}/{{$result->id}}" class="btn-warning btn-sm" onclick="return confirm('Are you sure you want to delete this ad?');">Sponsore this!</a>
                    @endif
                    @break
                     @endswitch
                     
                     <br><br>
                @switch($result->sponsored)
                  @case(0)
                     <p style="font-size:14px;">Sponsorship status:<span style="color:blue"> Waiting for admin to approve sponsorship.</span></p>
                     @break
                  @case(1)
                     <p style="font-size:14px;">Sponsorship status:<span style="color:red"> Not sponsored.</span></p>
                 @break
                @case(3)
                     <p style="font-size:14px;">Sponsorship status:<span style="color:green"> Sponsored.</span></p>
                     @break
                
                @endswitch
    </h4>
        </div>
        @if (($result->approved) === 1)
                            <p style="font-size:20px;">Status:<span style="color:green"> APPROVED</span></p>
                    @elseif (($result->approved) === 0)
                    <p style="font-size:20px;">Status:<span style="color:red"> NOT APPROVED</span></p> 
                    @endif
                    
                    
    </div>
  </div>
  <br><br>  
 
 
 
  @endforeach
  @else

  <div class="container">
<br>
<div class="row justify-content-center">
                <h1>ALL USERS</h1>
         </div><br><br>
  <table id="reviewer_table" class="table table-hover table-striped table-condensed tasks-table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)


  
    <tr>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->mobile}}</td>
      <td><a href="{{ url('dashboard/allusers/delete')}}/{{$user->id}}" class="btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete USER</a></h4></td>
    </tr>
    <tr>
 
    
 


@endforeach
</tbody>
</table>
</div>
<br><br><br><br><br><br>

@endif
@endsection
