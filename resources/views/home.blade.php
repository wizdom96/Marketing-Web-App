@extends('layouts.app')
@section('content')

@if ((Auth()->user()->permission) === 1 )
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome, {{((Auth()->user()->name))}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You have admin permissions.
                </div>
            </div>
        </div>
    </div>
</div>  
<br><br>



<div class="container">
  <div class="row justify-content-center">
    <h1>UNAPRROPVED ADS</h1>
  </div>
</div>

@if (count($results) == 0)
        <div class="row justify-content-center">
                 <p style="font-size:25px;padding-top:20px;"> There isn't new ads.</p>   
        </div>
        <br><br><br>
       
            @else 
 
 
        @foreach ($results as $result)
            <div class="container">
            <div class="row1">
               @foreach ($img as $images)
                    @if($images->content_id === $result->id)
            
                <div class="img-container">
                        <img class="small-img"  src="./uploads/content/<?php echo $images->image_name; ?>"  alt="car-image"> 
                     </div>
                @break
                  @endif
               @endforeach

                    <h4 class="pad" >{{ $result->title }} <br><br>
                    <p style="font-size:10px">Description:{{ $result->description }} €</p>
                    <p class="padd">{{ $result->price }} €</p>
                    <a href="{{ url('dashboard/approvead') }}/{{$result->id}}" class="btn-success btn-sm" onclick="return confirm('Are you sure you want to approve this ?');">Approve</a>
                    <a href="{{ url('dashboard/deletead') }}/{{$result->id}}" class="btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this ad?');">DELETE</a></h4>
                            </div>
                <br>
            </div>
        </div>
        <br><br>  
  @endforeach
  @endif
  <hr style="border:2px solid black">
  <div class="row justify-content-center">
    <h1>REQUESTING SPONSORING</h1>
  </div>
</div>

<br>
@if (count($resultss) === 0)
<div class="row justify-content-center">
    <p style="font-size:25px;padding-top:20px;"> There isn't sponsorship request.</p>   
     </div>
     @else
 @foreach ($resultss as $res)
        @if (($res->approved) === 1)
            <div class="container">
                <div class="row1">
                @foreach ($img as $images)
                    @if($images->content_id == $res->id)
                            
                        <div class="img-container">
                                <img class="small-img"  src="./uploads/content/<?php echo $images->image_name; ?>"  alt="car-image"> 
                        </div>
                @break
                  @endif
               @endforeach
               
               <h4 class="pad" >{{ $res->title }} <br><br>
                    <p class="padd">{{ $res->price }} €</p>
                    <a href="{{ url('dashboard/approvespon') }}/{{$res->id}}" class="btn-warning btn-sm" onclick="return confirm('Are you sure you want to approve this ?');">Approve sponsorship</a>
                    <a href="{{ url('dashboard/deletespon') }}/{{$res->id}}" class="btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this ad?');">Deny sponsorship</a></h4>
                    </div>
                   
     

    </div>
  </div>
  <br><br>  
            @endif
     @endforeach
    @endif

@endif
@if ((Auth()->user()->permission) === 0 )
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome, {{((Auth()->user()->name))}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You have user permission.
                </div>
            </div>
        </div>
    </div>
</div>  
<br><br>



<div class="container">
  <div class="row justify-content-center">
    <h1>Why do we use it?
    <br><br></h1>
    <p>
    
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  
  </div>
</div>

<br><br><br><br><br>
<br><br><br><br><br>


@endif

@endsection

