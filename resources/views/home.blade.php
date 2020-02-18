@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="container">
  <div class="row justify-content-center">
    <h1>UNAPRROPVED ADS</h1>
  </div>
</div>

<br><br><br>

 @foreach ($results as $result)
 <div class="container">
 <div class="row">

          <img  src="uploads/content/{{$result->image}}" width="300px" height="125px" alt="">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4><b>{{ $result->title }}<br></b> <br>
          <p>{{ $result->description }} €</p>
          <p>{{ $result->price }} €</p>
          <a href="{{ url('approvead') }}/{{$result->id}}" class="btn-primary btn-sm" >Approve</a></h4>
        </div>
        <br>
    </div>
  </div>
  <br><br>  
 
 
 
  @endforeach
  


@endsection
