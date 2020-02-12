@extends('layout')
@section ('index')
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<form action="{{url('search')}}" method="POST">
<div class="row justify-content-center">

                        <div class="col-12 col-md-10 col-lg-8">                   
                                <div class="card-body row no-gutters align-items-center">
                                
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                                    </div>
                                    &nbsp;
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-primary" type="submit">Search</button>
                                    </div>        
                            </form>
                        </div>
                       
                    </div>


<br><br><br><br><br><br><br>



 @foreach ($results as $result)
 <div class="container">
 <div class="row">

          <img  src="http://placehold.it/300x200"  alt="">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4 >{{ $result->title }}&nbsp&nbsp&nbsp&nbsp{{ $result->price }}$ <br>
          <a href="product/{{$result->id}}" class="btn-primary btn-sm" >Find Out More!</a></h4>
        </div>
        <br>
    </div>
  </div>
 
 
 
  @endforeach
  
@endsection
