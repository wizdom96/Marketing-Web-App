@extends('layouts.app')
@section('content')

@if ((Auth()->user()->permission) === '1' )
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
          <a href="{{ url('approvead') }}/{{$result->id}}" class="btn-primary btn-sm" onclick="return confirm('Are you sure you want to approve this ?');">Approve</a></h4>
        </div>
        <br>
    </div>
  </div>
  <br><br>  
  @endforeach





@endif
@if ((Auth()->user()->permission) === '0' )
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="container">
  <div class="row justify-content-center">
    <h1>Why do we use it?
    <br><br></h1>
    <p>
    
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  
  </div>
</div>




@endif

@endsection

