
@extends('layouts.app')
@section ('details')
@if ((Auth()->user()->permission) === '0' )
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <br><br><br>
   <div class="row justify-content-center">
                <h1>YOUR ACTIVE ADS</h1>
         </div>
         <br><br><br>
 @foreach ($results as $result)
 <div class="container">
 <div class="row">

          <img  src="../uploads/content/{{$result->image}}" width="300px" height="125px" alt="">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4 >{{ $result->title }} <br>
          <p>{{ $result->price }} €</p>
        @if (($result->approved)==='1')

            <span style="color:green">APPROVED</span>

        @else

        <span style="color:red">NOT APPROVED</span>


            @endif
            <br>
          <a href="{{ url('deletead') }}/{{$result->id}}" class="btn-primary btn-sm" onclick="return confirm('Are you sure you want to delete this ad?');">DELETE</a></h4>
        </div>
        <br>
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
      <td><a href="{{ url('dashboard/allusers/delete')}}/{{$user->id}}" class="btn-primary btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete USER</a></h4></td>
    </tr>
    <tr>
 
    
 


@endforeach
</tbody>
</table>
</div>
<br><br><br><br><br><br>

@endif
@endsection
